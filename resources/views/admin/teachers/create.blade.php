@extends('admin.layouts.app')

@section('title', 'Tambah Data Guru')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Tambah Data Guru</h1>
        <p class="page-subtitle">Tambah data guru baru ke sistem</p>
    </div>
    
    <div class="card">
        <form action="{{ route('admin.teachers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
                <div class="form-group">
                    <label class="form-label">Nama Lengkap *</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                    @error('name')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">Jabatan *</label>
                    <select name="position" class="form-control" required>
                        <option value="">Pilih Jabatan</option>
                        <option value="Kepala Madrasah" {{ old('position') == 'Kepala Madrasah' ? 'selected' : '' }}>Kepala Madrasah</option>
                        <option value="Wakil Kepala" {{ old('position') == 'Wakil Kepala' ? 'selected' : '' }}>Wakil Kepala</option>
                        <option value="Guru" {{ old('position') == 'Guru' ? 'selected' : '' }}>Guru</option>
                        <option value="Staff" {{ old('position') == 'Staff' ? 'selected' : '' }}>Staff</option>
                    </select>
                    @error('position')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">NIP</label>
                    <input type="text" name="nip" class="form-control" value="{{ old('nip') }}">
                    @error('nip')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">No. Telepon</label>
                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                    @error('phone')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">Foto *</label>
                    <input type="file" name="photo" class="form-control" accept="image/*" required>
                    <small style="color: var(--text-secondary); font-size: 12px;">Format: JPG, PNG, GIF (Max: 2MB)</small>
                    @error('photo')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="form-group">
                <label class="form-label">Bio</label>
                <textarea name="bio" class="form-control" rows="4">{{ old('bio') }}</textarea>
                @error('bio')
                    <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                @enderror
            </div>
            
            <div style="display: flex; gap: 12px; margin-top: 24px;">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i>
                    Simpan Data
                </button>
                <a href="{{ route('admin.teachers.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times"></i>
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection

