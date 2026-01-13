@extends('admin.layouts.app')

@section('title', 'Berita')

@section('content')
    <div class="page-header" style="display: flex; justify-content: space-between; align-items: center;">
        <div>
            <h1 class="page-title">Berita</h1>
            <p class="page-subtitle">Kelola berita dan pengumuman</p>
        </div>
        <a href="{{ route('admin.news.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Tambah Berita
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
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Penulis</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Dilihat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($news as $item)
                    <tr>
                        <td>
                            <img src="{{ $item->image_url }}" alt="{{ $item->title }}" 
                                 style="width: 80px; height: 60px; object-fit: cover; border-radius: 4px;">
                        </td>
                        <td><strong>{{ $item->title }}</strong></td>
                        <td>{{ $item->category ?? '-' }}</td>
                        <td>{{ $item->author }}</td>
                        <td>{{ $item->published_at ? $item->published_at->format('d/m/Y') : '-' }}</td>
                        <td>
                            @if($item->is_published)
                                <span style="padding: 4px 12px; background: #d1fae5; color: #065f46; border-radius: 20px; font-size: 12px; font-weight: 500;">
                                    Publik
                                </span>
                            @else
                                <span style="padding: 4px 12px; background: #fee2e2; color: #991b1b; border-radius: 20px; font-size: 12px; font-weight: 500;">
                                    Draft
                                </span>
                            @endif
                        </td>
                        <td>{{ $item->views }}</td>
                        <td>
                            <div style="display: flex; gap: 8px;">
                                <a href="{{ route('admin.news.edit', $item) }}" class="btn btn-success" style="padding: 6px 12px; font-size: 12px;">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.news.destroy', $item) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus berita ini?');" style="display: inline;">
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
                        <td colspan="8" style="text-align: center; padding: 40px; color: var(--text-secondary);">
                            Belum ada berita. <a href="{{ route('admin.news.create') }}">Tambah berita pertama</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

