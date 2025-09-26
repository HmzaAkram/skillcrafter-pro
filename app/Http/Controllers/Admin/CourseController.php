<?php

namespace App\Http\Controllers;

use App\Events\CourseCreated;
use App\Models\Certification;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Progress;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->only(['adminIndex', 'create', 'store', 'edit', 'update', 'destroy']);
    }

    // Admin Routes
    public function adminIndex(Request $request)
    {
        $query = Course::query();
        
        // Search functionality for admin
        if ($request->has('search') && !empty($request->search)) {
            $searchTerm = $request->search;
            $query->where('name', 'LIKE', '%' . $searchTerm . '%')
                  ->orWhere('description', 'LIKE', '%' . $searchTerm . '%');
        }
        
        $courses = $query->latest()->paginate(10);
        return view('admin.courses.index', compact('courses'));
    }

    public function create()
    {
        // Get max upload size info for user
        $maxUploadSize = $this->getMaxUploadSize();
        return view('admin.courses.create', compact('maxUploadSize'));
    }

    public function store(Request $request)
    {
        // Check if request size exceeds limits
        $maxPostSize = $this->convertToBytes(ini_get('post_max_size'));
        $contentLength = $request->server('CONTENT_LENGTH');
        
        if ($contentLength > $maxPostSize) {
            return back()->withErrors([
                'video' => 'File too large. Maximum upload size is ' . $this->formatBytes($maxPostSize) . '. Please compress your video or increase server limits.'
            ])->withInput();
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'video' => 'nullable|file|mimes:mp4,mov,avi,webm|max:51200', // 50MB limit
        ], [
            'video.max' => 'Video file must be less than 50MB. Please compress your video.',
            'video.mimes' => 'Video must be in MP4, MOV, AVI, or WEBM format.',
        ]);

        try {
            if ($request->hasFile('video')) {
                // Check file size manually as additional validation
                $videoFile = $request->file('video');
                $fileSizeInMB = $videoFile->getSize() / 1024 / 1024;
                
                if ($fileSizeInMB > 50) {
                    return back()->withErrors([
                        'video' => 'Video file is too large (' . round($fileSizeInMB, 2) . 'MB). Maximum allowed size is 50MB.'
                    ])->withInput();
                }
                
                $validated['video'] = $videoFile->store('videos', 'public');
            }

            $course = Course::create($validated);
            event(new CourseCreated($course));

            return redirect()->route('admin.courses.index')->with('success', 'Course created successfully.');
            
        } catch (\Exception $e) {
            return back()->withErrors([
                'video' => 'Error uploading video: ' . $e->getMessage()
            ])->withInput();
        }
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $maxUploadSize = $this->getMaxUploadSize();
        return view('admin.courses.edit', compact('course', 'maxUploadSize'));
    }

    public function update(Request $request, $id)
    {
        // Check if request size exceeds limits
        $maxPostSize = $this->convertToBytes(ini_get('post_max_size'));
        $contentLength = $request->server('CONTENT_LENGTH');
        
        if ($contentLength > $maxPostSize) {
            return back()->withErrors([
                'video' => 'File too large. Maximum upload size is ' . $this->formatBytes($maxPostSize) . '. Please compress your video or increase server limits.'
            ])->withInput();
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'video' => 'nullable|file|mimes:mp4,mov,avi,webm|max:51200',
        ], [
            'video.max' => 'Video file must be less than 50MB. Please compress your video.',
            'video.mimes' => 'Video must be in MP4, MOV, AVI, or WEBM format.',
        ]);

        $course = Course::findOrFail($id);

        try {
            if ($request->hasFile('video')) {
                // Check file size manually
                $videoFile = $request->file('video');
                $fileSizeInMB = $videoFile->getSize() / 1024 / 1024;
                
                if ($fileSizeInMB > 50) {
                    return back()->withErrors([
                        'video' => 'Video file is too large (' . round($fileSizeInMB, 2) . 'MB). Maximum allowed size is 50MB.'
                    ])->withInput();
                }

                // Delete old video if exists
                if ($course->video) {
                    Storage::disk('public')->delete($course->video);
                }
                $validated['video'] = $videoFile->store('videos', 'public');
            }

            $course->update($validated);

            return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully.');
            
        } catch (\Exception $e) {
            return back()->withErrors([
                'video' => 'Error uploading video: ' . $e->getMessage()
            ])->withInput();
        }
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        
        // Delete video file if exists
        if ($course->video) {
            Storage::disk('public')->delete($course->video);
        }
        
        $course->delete();

        return redirect()->route('admin.courses.index')->with('success', 'Course deleted successfully.');
    }

    // User Routes with Search
    public function index(Request $request)
    {
        $query = Course::query();
        
        // Search functionality for users
        if ($request->has('search') && !empty($request->search)) {
            $searchTerm = $request->search;
            $query->where('name', 'LIKE', '%' . $searchTerm . '%')
                  ->orWhere('description', 'LIKE', '%' . $searchTerm . '%');
        }
        
        $courses = $query->latest()->paginate(10);
        return view('courses.index', compact('courses'));
    }

    public function show($id)
    {
        $course = Course::with('lessons')->findOrFail($id);
        $enrolled = Auth::user()->courses->contains($id);
        $userProgress = Progress::where('user_id', Auth::id())->where('course_id', $id)->get();
        $progressPercentage = $course->lessons->count() > 0 ? ($userProgress->where('status', 'completed')->count() / $course->lessons->count() * 100) : 0;

        return view('courses.show', compact('course', 'enrolled', 'progressPercentage', 'userProgress'));
    }

    public function enroll($id)
    {
        $user = Auth::user();
        $course = Course::with('lessons')->findOrFail($id);
        
        // Check if already enrolled
        if ($user->courses->contains($id)) {
            return redirect()->route('courses.show', $id)->with('info', 'You are already enrolled in this course.');
        }
        
        $user->courses()->attach($id);

        foreach ($course->lessons as $lesson) {
            Progress::create([
                'user_id' => $user->id,
                'course_id' => $id,
                'lesson_id' => $lesson->id,
                'status' => 'started',
            ]);
        }

        return redirect()->route('courses.show', $id)->with('success', 'Enrolled successfully.');
    }

    public function completeLesson(Request $request, $courseId, $lessonId)
    {
        $progress = Progress::where('user_id', Auth::id())
            ->where('course_id', $courseId)
            ->where('lesson_id', $lessonId)
            ->firstOrFail();
        $progress->status = 'completed';
        $progress->save();

        // Check if course is complete
        $course = Course::with('lessons')->findOrFail($courseId);
        $completedCount = Progress::where('user_id', Auth::id())
            ->where('course_id', $courseId)
            ->where('status', 'completed')
            ->count();
            
        if ($completedCount === $course->lessons->count()) {
            // Generate PDF certificate
            $pdf = Pdf::loadView('certificates.template', ['user' => Auth::user(), 'course' => $course]);
            $fileName = 'certificates/' . Auth::id() . '_' . $courseId . '.pdf';
            Storage::put($fileName, $pdf->output());

            Certification::create([
                'user_id' => Auth::id(),
                'course_id' => $courseId,
                'certificate_url' => $fileName,
            ]);
        }

        return redirect()->route('courses.show', $courseId)->with('success', 'Lesson completed.');
    }

    /**
     * Helper methods for file size handling
     */
    private function getMaxUploadSize()
    {
        $uploadMax = $this->convertToBytes(ini_get('upload_max_filesize'));
        $postMax = $this->convertToBytes(ini_get('post_max_size'));
        return min($uploadMax, $postMax);
    }

    private function convertToBytes($size)
    {
        $size = trim($size);
        $last = strtolower($size[strlen($size)-1]);
        $size = (int) $size;
        switch($last) {
            case 'g': $size *= 1024;
            case 'm': $size *= 1024;
            case 'k': $size *= 1024;
        }
        return $size;
    }

    private function formatBytes($size, $precision = 2)
    {
        $units = array('B', 'KB', 'MB', 'GB', 'TB');
        for ($i = 0; $size > 1024 && $i < count($units) - 1; $i++) {
            $size /= 1024;
        }
        return round($size, $precision) . ' ' . $units[$i];
    }
}