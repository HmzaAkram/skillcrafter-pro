<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show', 'download']);
    }

    // ✅ Show all notes with search functionality (students + admin dono ke liye)
 // NoteController.php
public function index(Request $request)
{
    $query = Note::query();
    
    // Search functionality
    if ($request->has('search') && !empty($request->search)) {
        $searchTerm = $request->search;
        $query->where('title', 'LIKE', '%' . $searchTerm . '%');
    }
    
    // Paginate the results (12 per page)
    $notes = $query->latest()->paginate(12);  // This will give you pagination
    
    return view('notes.index', compact('notes'));
}


    // ✅ Sirf admin ko note create page dikhana
    public function create()
    {
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        return view('notes.create');
    }

    // ✅ Sirf admin hi note save kar sake
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
        ]);

        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('notes', 'public');
        }

        Note::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'file_path' => $filePath,
        ]);

        return redirect()->route('admin.notes.index')
            ->with('success', 'Note created successfully.');
    }

    // ✅ Student aur admin dono download kar saken
    public function download(Note $note)
    {
        if ($note->file_path) {
            return response()->download(storage_path('app/public/' . $note->file_path));
        }

        // Fallback for text content
        $filename = $note->title . '.txt';
        return response($note->content)
            ->header('Content-Type', 'text/plain')
            ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
    }
    
    // ✅ Show individual note
    public function show(Note $note)
    {
        return view('notes.show', compact('note'));
    }
}