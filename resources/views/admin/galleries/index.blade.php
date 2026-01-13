@extends('admin.layouts.app')

@section('title', 'Galeri')

@section('content')
    <div class="page-header" style="display: flex; justify-content: space-between; align-items: center;">
        <div>
            <h1 class="page-title">Galeri</h1>
            <p class="page-subtitle">Kelola galeri foto dan video</p>
        </div>
        <a href="{{ route('admin.galleries.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Tambah Galeri
        </a>
    </div>
    
    @if(session('success'))
        <div style="background: #d1fae5; color: #065f46; padding: 12px 16px; border-radius: 8px; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="card">
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Gambar/Video</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Tipe</th>
                        <th>Urutan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($galleries as $gallery)
                    <tr>
                        <td>
                            @if($gallery->type == 'video')
                                <div style="width: 80px; height: 60px; background: #e5e7eb; border-radius: 4px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-video" style="font-size: 24px; color: #6b7280;"></i>
                                </div>
                            @else
                                <img src="{{ $gallery->image_url }}" alt="{{ $gallery->title }}" 
                                     style="width: 80px; height: 60px; object-fit: cover; border-radius: 4px;">
                            @endif
                        </td>
                        <td><strong>{{ $gallery->title }}</strong></td>
                        <td>{{ $gallery->category ?? '-' }}</td>
                        <td>
                            @if($gallery->type == 'video')
                                <span style="padding: 4px 12px; background: #dbeafe; color: #1e40af; border-radius: 20px; font-size: 12px; font-weight: 500;">
                                    Video
                                </span>
                            @else
                                <span style="padding: 4px 12px; background: #f0fdf4; color: #065f46; border-radius: 20px; font-size: 12px; font-weight: 500;">
                                    Foto
                                </span>
                            @endif
                        </td>
                        <td>{{ $gallery->order }}</td>
                        <td>
                            @if($gallery->is_active)
                                <span style="padding: 4px 12px; background: #d1fae5; color: #065f46; border-radius: 20px; font-size: 12px; font-weight: 500;">
                                    Aktif
                                </span>
                            @else
                                <span style="padding: 4px 12px; background: #fee2e2; color: #991b1b; border-radius: 20px; font-size: 12px; font-weight: 500;">
                                    Nonaktif
                                </span>
                            @endif
                        </td>
                        <td>
                            <div style="display: flex; gap: 8px;">
                                <a href="{{ route('admin.galleries.edit', $gallery) }}" class="btn btn-success" style="padding: 6px 12px; font-size: 12px;">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.galleries.destroy', $gallery) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus galeri ini?');" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="padding: 6px 12px; font-size: 12px;">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" style="text-align: center; padding: 40px; color: var(--text-secondary);">
                            Belum ada galeri. <a href="{{ route('admin.galleries.create') }}">Tambah galeri pertama</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

