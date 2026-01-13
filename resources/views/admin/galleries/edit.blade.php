@extends('admin.layouts.app')

@section('title', 'Edit Galeri')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Edit Galeri</h1>
        <p class="page-subtitle">Edit foto atau video galeri</p>
    </div>
    
    <div class="card">
        <form action="{{ route('admin.galleries.update', $gallery) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
                <div class="form-group">
                    <label class="form-label">Judul *</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $gallery->title) }}" required>
                    @error('title')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">Kategori</label>
                    <input type="text" name="category" class="form-control" value="{{ old('category', $gallery->category) }}" placeholder="Kegiatan, Prestasi, Fasilitas, dll">
                    @error('category')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">Tipe *</label>
                    <select name="type" class="form-control" id="type" required>
                        <option value="image" {{ old('type', $gallery->type) == 'image' ? 'selected' : '' }}>Foto</option>
                        <option value="video" {{ old('type', $gallery->type) == 'video' ? 'selected' : '' }}>Video</option>
                    </select>
                    @error('type')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">Urutan</label>
                    <input type="number" name="order" class="form-control" value="{{ old('order', $gallery->order) }}" min="0">
                    @error('order')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group" id="image-field">
                    <label class="form-label">Gambar</label>
                    @if($gallery->image && $gallery->type == 'image')
                        <div style="margin-bottom: 8px;">
                            <img src="{{ $gallery->image_url }}" alt="{{ $gallery->title }}" style="width: 200px; height: 150px; object-fit: cover; border-radius: 4px;">
                        </div>
                    @endif
                    <input type="file" name="image" class="form-control" accept="image/*" id="image-input">
                    <small style="color: var(--text-secondary); font-size: 12px;">Format: JPG, PNG, GIF (Max: 2MB). Kosongkan jika tidak ingin mengubah.</small>
                    @error('image')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group" id="video-field" style="display: {{ old('type', $gallery->type) == 'video' ? 'block' : 'none' }};">
                    <label class="form-label">URL Video *</label>
                    <input type="url" name="video_url" class="form-control" value="{{ old('video_url', $gallery->video_url) }}" placeholder="https://www.youtube.com/watch?v=...">
                    <small style="color: var(--text-secondary); font-size: 12px;">Link YouTube atau video lainnya</small>
                    @error('video_url')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">Status</label>
                    <div style="display: flex; align-items: center; gap: 8px; margin-top: 8px;">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $gallery->is_active) ? 'checked' : '' }}>
                        <span>Aktif</span>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control" rows="4">{{ old('description', $gallery->description) }}</textarea>
                @error('description')
                    <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                @enderror
            </div>
            
            <div style="display: flex; gap: 12px; margin-top: 24px;">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i>
                    Update Galeri
                </button>
                <a href="{{ route('admin.galleries.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times"></i>
                    Batal
                </a>
            </div>
        </form>
    </div>
    
    <script>
        document.getElementById('type').addEventListener('change', function() {
            const type = this.value;
            const imageField = document.getElementById('image-field');
            const videoField = document.getElementById('video-field');
            const imageInput = document.getElementById('image-input');
            
            if (type === 'video') {
                imageField.style.display = 'none';
                videoField.style.display = 'block';
                imageInput.removeAttribute('required');
            } else {
                imageField.style.display = 'block';
                videoField.style.display = 'none';
                imageInput.setAttribute('required', 'required');
            }
        });
    </script>
@endsection

