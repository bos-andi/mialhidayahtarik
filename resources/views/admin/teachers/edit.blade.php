@extends('admin.layouts.app')

@section('title', 'Edit Data Guru')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Edit Data Guru</h1>
        <p class="page-subtitle">Edit data {{ $teacher->name }}</p>
    </div>
    
    <div class="card">
        <form action="{{ route('admin.teachers.update', $teacher) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
                <div class="form-group">
                    <label class="form-label">Nama Lengkap *</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $teacher->name) }}" required>
                    @error('name')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">Jabatan *</label>
                    <select name="position" class="form-control" required>
                        <option value="">Pilih Jabatan</option>
                        <option value="Kepala Madrasah" {{ old('position', $teacher->position) == 'Kepala Madrasah' ? 'selected' : '' }}>Kepala Madrasah</option>
                        <option value="Wakil Kepala" {{ old('position', $teacher->position) == 'Wakil Kepala' ? 'selected' : '' }}>Wakil Kepala</option>
                        <option value="Guru" {{ old('position', $teacher->position) == 'Guru' ? 'selected' : '' }}>Guru</option>
                        <option value="Staff" {{ old('position', $teacher->position) == 'Staff' ? 'selected' : '' }}>Staff</option>
                    </select>
                    @error('position')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">NIP</label>
                    <input type="text" name="nip" class="form-control" value="{{ old('nip', $teacher->nip) }}">
                    @error('nip')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $teacher->email) }}">
                    @error('email')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">No. Telepon</label>
                    <input type="text" name="phone" class="form-control" value="{{ old('phone', $teacher->phone) }}">
                    @error('phone')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">Foto</label>
                    @if($teacher->photo)
                        <div style="margin-bottom: 12px;">
                            <img src="{{ $teacher->photo_url }}" alt="{{ $teacher->name }}" 
                                 style="width: 100px; height: 100px; border-radius: 8px; object-fit: cover; border: 2px solid var(--border);">
                        </div>
                    @endif
                    <input type="file" name="photo" class="form-control" accept="image/*">
                    <small style="color: var(--text-secondary); font-size: 12px;">Kosongkan jika tidak ingin mengubah foto</small>
                    @error('photo')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="form-group">
                <label class="form-label">Bio</label>
                <textarea name="bio" class="form-control" rows="4">{{ old('bio', $teacher->bio) }}</textarea>
                @error('bio')
                    <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                @enderror
            </div>
            
            <div style="display: flex; gap: 12px; margin-top: 24px;">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i>
                    Update Data
                </button>
                <a href="{{ route('admin.teachers.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times"></i>
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection

