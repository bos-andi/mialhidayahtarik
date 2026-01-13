@extends('admin.layouts.app')

@section('title', 'Tambah Galeri')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Tambah Galeri</h1>
        <p class="page-subtitle">Tambah foto atau video ke galeri</p>
    </div>
    
    <div class="card">
        <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
                <div class="form-group">
                    <label class="form-label">Judul *</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                    @error('title')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">Kategori</label>
                    <input type="text" name="category" class="form-control" value="{{ old('category') }}" placeholder="Kegiatan, Prestasi, Fasilitas, dll">
                    @error('category')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">Tipe *</label>
                    <select name="type" class="form-control" id="type" required>
                        <option value="image" {{ old('type') == 'image' ? 'selected' : '' }}>Foto</option>
                        <option value="video" {{ old('type') == 'video' ? 'selected' : '' }}>Video</option>
                    </select>
                    @error('type')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">Urutan</label>
                    <input type="number" name="order" class="form-control" value="{{ old('order', 0) }}" min="0">
                    @error('order')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group" id="image-field">
                    <label class="form-label">Gambar *</label>
                    <input type="file" name="image" class="form-control" accept="image/*" id="image-input">
                    <small style="color: var(--text-secondary); font-size: 12px;">Format: JPG, PNG, GIF (Max: 2MB)</small>
                    @error('image')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group" id="video-field" style="display: none;">
                    <label class="form-label">URL Video *</label>
                    <input type="url" name="video_url" class="form-control" value="{{ old('video_url') }}" placeholder="https://www.youtube.com/watch?v=...">
                    <small style="color: var(--text-secondary); font-size: 12px;">Link YouTube atau video lainnya</small>
                    @error('video_url')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">Status</label>
                    <div style="display: flex; align-items: center; gap: 8px; margin-top: 8px;">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                        <span>Aktif</span>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                @error('description')
                    <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                @enderror
            </div>
            
            <div style="display: flex; gap: 12px; margin-top: 24px;">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i>
                    Simpan Galeri
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

