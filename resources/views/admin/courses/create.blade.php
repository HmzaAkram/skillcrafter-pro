@extends('admin.layout')

@section('content')
<div class="card shadow-sm">
  <div class="card-header bg-white"><strong>New Course</strong></div>
  <div class="card-body">
    <form method="POST" action="{{ route('admin.courses.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" rows="5" class="form-control" required>{{ old('description') }}</textarea>
        @error('description') <div class="text-danger small">{{ $message }}</div> @enderror
      </div>

      <div class="mb-3">
        <label for="video" class="form-label">Upload Course Video</label>
        <input type="file" name="video" id="video" class="form-control" accept="video/*">
        <div class="form-text">
          <small class="text-muted">
            Maximum file size: {{ isset($maxUploadSize) ? number_format($maxUploadSize / (1024 * 1024), 0) : '50' }}MB. 
            Accepted formats: MP4, MOV, AVI, WEBM
          </small>
        </div>
        <div id="file-info" class="mt-2 small text-info" style="display: none;"></div>
        @error('video') <div class="text-danger small">{{ $message }}</div> @enderror
      </div>

      <button type="submit" class="btn btn-primary" id="submit-btn">Create</button>
      <a href="{{ route('admin.courses.index') }}" class="btn btn-outline-secondary">Cancel</a>
    </form>
  </div>
</div>

<script>
document.getElementById('video').addEventListener('change', function(e) {
    const file = e.target.files[0];
    const fileInfo = document.getElementById('file-info');
    const submitBtn = document.getElementById('submit-btn');
    
    if (file) {
        const fileSizeInMB = (file.size / (1024 * 1024)).toFixed(2);
        const maxSizeInMB = {{ isset($maxUploadSize) ? floor($maxUploadSize / (1024 * 1024)) : 50 }};
        
        fileInfo.innerHTML = `Selected: ${file.name} (${fileSizeInMB} MB)`;
        fileInfo.style.display = 'block';
        
        if (parseFloat(fileSizeInMB) > maxSizeInMB) {
            fileInfo.innerHTML += `<br><span class="text-danger">⚠️ File too large! Maximum size is ${maxSizeInMB}MB</span>`;
            submitBtn.disabled = true;
            submitBtn.innerHTML = 'File Too Large';
        } else {
            fileInfo.innerHTML += `<br><span class="text-success">✅ File size OK</span>`;
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Create';
        }
    } else {
        fileInfo.style.display = 'none';
        submitBtn.disabled = false;
        submitBtn.innerHTML = 'Create';
    }
});
</script>
@endsection