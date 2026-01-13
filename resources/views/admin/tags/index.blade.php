@extends('admin.layouts.app')

@section('title', 'Tag Berita')

@php
use Illuminate\Support\Str;
@endphp

@section('content')
    <div class="page-header" style="display: flex; justify-content: space-between; align-items: center;">
        <div>
            <h1 class="page-title">Tag Berita</h1>
            <p class="page-subtitle">Kelola tag berita</p>
        </div>
        <a href="{{ route('admin.tags.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Tambah Tag
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
                        <th>Nama</th>
                        <th>Slug</th>
                        <th>Deskripsi</th>
                        <th>Urutan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($tags as $tag)
                    <tr>
                        <td><strong>{{ $tag->name }}</strong></td>
                        <td><code style="background: #f3f4f6; padding: 2px 6px; border-radius: 4px; font-size: 12px;">{{ $tag->slug }}</code></td>
                        <td>{{ Str::limit($tag->description ?? '-', 50) }}</td>
                        <td>{{ $tag->order }}</td>
                        <td>
                            @if($tag->is_active)
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
                                <a href="{{ route('admin.tags.edit', $tag) }}" class="btn btn-success" style="padding: 6px 12px; font-size: 12px;">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus tag ini?');" style="display: inline;">
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
                        <td colspan="6" style="text-align: center; padding: 40px; color: var(--text-secondary);">
                            Belum ada tag. <a href="{{ route('admin.tags.create') }}">Tambah tag pertama</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

