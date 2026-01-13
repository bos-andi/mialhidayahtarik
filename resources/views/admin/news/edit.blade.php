@extends('admin.layouts.app')

@section('title', 'Edit Berita')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Edit Berita</h1>
        <p class="page-subtitle">Edit berita atau pengumuman</p>
    </div>
    
    <div class="card">
        <form action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
                <div class="form-group">
                    <label class="form-label">Judul *</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $news->title) }}" required>
                    @error('title')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">Kategori</label>
                    <select name="category" class="form-control">
                        <option value="">Pilih Kategori</option>
                        @foreach($categories as $cat)
                        <option value="{{ $cat->name }}" {{ old('category', $news->category) == $cat->name ? 'selected' : '' }}>{{ $cat->name }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">Penulis</label>
                    <input type="text" name="author" class="form-control" value="{{ old('author', $news->author) }}">
                    @error('author')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">Tanggal Publikasi</label>
                    <input type="date" name="published_at" class="form-control" value="{{ old('published_at', $news->published_at ? $news->published_at->format('Y-m-d') : '') }}">
                    @error('published_at')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">Gambar Thumbnail</label>
                    @if($news->image)
                        <div style="margin-bottom: 8px;">
                            <img src="{{ $news->image_url }}" alt="{{ $news->title }}" id="current-thumbnail" style="width: 200px; height: 150px; object-fit: cover; border-radius: 4px;">
                        </div>
                    @endif
                    <input type="file" name="image" class="form-control" accept="image/*" id="thumbnail-upload">
                    <small style="color: var(--text-secondary); font-size: 12px;">Format: JPG, PNG, GIF (Max: 500KB) - Akan digunakan sebagai thumbnail saat share di sosial media. Kosongkan jika tidak ingin mengubah.</small>
                    <div id="thumbnail-preview" style="margin-top: 10px; display: none;">
                        <img id="thumbnail-img" src="" alt="Preview" style="max-width: 300px; max-height: 200px; border-radius: 4px; border: 1px solid #ddd;">
                    </div>
                    @error('image')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">Status</label>
                    <div style="display: flex; align-items: center; gap: 8px; margin-top: 8px;">
                        <input type="checkbox" name="is_published" value="1" {{ old('is_published', $news->is_published) ? 'checked' : '' }}>
                        <span>Publikasikan</span>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="form-label">Ringkasan (Excerpt)</label>
                <textarea name="excerpt" class="form-control" rows="3" maxlength="500">{{ old('excerpt', $news->excerpt) }}</textarea>
                <small style="color: var(--text-secondary); font-size: 12px;">Maksimal 500 karakter</small>
                @error('excerpt')
                    <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label class="form-label">Konten *</label>
                <textarea name="content" id="content-editor" class="form-control" rows="10" required>{{ old('content', $news->content) }}</textarea>
                @error('content')
                    <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                @enderror
            </div>
            
            <div style="display: flex; gap: 12px; margin-top: 24px;">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i>
                    Update Berita
                </button>
                <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times"></i>
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/tinymce@6/tinymce.min.css" rel="stylesheet">
<style>
    .tox-tinymce {
        border-radius: 8px;
    }
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/tinymce@6/tinymce.min.js"></script>
<script>
    // Thumbnail preview
    document.getElementById('thumbnail-upload').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            // Check file size (500KB = 512000 bytes)
            if (file.size > 512000) {
                alert('Ukuran file maksimal 500KB!');
                e.target.value = '';
                return;
            }
            
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('thumbnail-img').src = e.target.result;
                document.getElementById('thumbnail-preview').style.display = 'block';
                if (document.getElementById('current-thumbnail')) {
                    document.getElementById('current-thumbnail').style.display = 'none';
                }
            }
            reader.readAsDataURL(file);
        }
    });

    // Initialize TinyMCE
    tinymce.init({
        selector: '#content-editor',
        height: 500,
        menubar: true,
        plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
            'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
            'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
        ],
        toolbar: 'undo redo | blocks | ' +
            'bold italic forecolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | link image media | code fullscreen',
        content_style: 'body { font-family: Arial, sans-serif; font-size: 14px; }',
        language: 'id',
        images_upload_url: '{{ route("admin.news.upload-image") }}',
        images_upload_handler: function (blobInfo, progress) {
            return new Promise(function (resolve, reject) {
                var xhr = new XMLHttpRequest();
                xhr.withCredentials = false;
                xhr.open('POST', '{{ route("admin.news.upload-image") }}');
                
                var token = document.querySelector('meta[name="csrf-token"]');
                if (token) {
                    xhr.setRequestHeader('X-CSRF-TOKEN', token.getAttribute('content'));
                }
                
                xhr.upload.onprogress = function (e) {
                    progress(e.loaded / e.total * 100);
                };
                
                xhr.onload = function () {
                    if (xhr.status === 403) {
                        reject({ message: 'HTTP Error: ' + xhr.status, remove: true });
                        return;
                    }
                    
                    if (xhr.status < 200 || xhr.status >= 300) {
                        var errorMsg = 'HTTP Error: ' + xhr.status;
                        try {
                            var errorJson = JSON.parse(xhr.responseText);
                            if (errorJson.error) {
                                errorMsg = errorJson.error;
                            }
                        } catch (e) {
                            errorMsg = xhr.responseText || errorMsg;
                        }
                        reject(errorMsg);
                        return;
                    }
                    
                    try {
                        var json = JSON.parse(xhr.responseText);
                        
                        if (!json || typeof json.location != 'string') {
                            reject('Invalid JSON: ' + xhr.responseText);
                            return;
                        }
                        
                        resolve(json.location);
                    } catch (e) {
                        reject('Invalid response: ' + xhr.responseText);
                    }
                };
                
                xhr.onerror = function () {
                    reject('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
                };
                
                var formData = new FormData();
                formData.append('file', blobInfo.blob(), blobInfo.filename());
                
                xhr.send(formData);
            });
        },
        file_picker_types: 'image',
        automatic_uploads: true,
        branding: false,
        promotion: false
    });
</script>
@endpush

