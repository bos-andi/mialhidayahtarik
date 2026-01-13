@extends('admin.layouts.app')

@section('title', 'Data Guru')

@section('content')
    <div class="page-header" style="display: flex; justify-content: space-between; align-items: center;">
        <div>
            <h1 class="page-title">Data Guru</h1>
            <p class="page-subtitle">Kelola data guru dan staff</p>
        </div>
        <a href="{{ route('admin.teachers.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Tambah Guru
        </a>
    </div>
    
    <div class="card">
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>NIP</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($teachers as $teacher)
                    <tr>
                        <td>
                            <img src="{{ $teacher->photo_url }}" alt="{{ $teacher->name }}" 
                                 style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                        </td>
                        <td><strong>{{ $teacher->name }}</strong></td>
                        <td>{{ $teacher->position }}</td>
                        <td>{{ $teacher->nip ?? '-' }}</td>
                        <td>{{ $teacher->email ?? '-' }}</td>
                        <td>
                            @if($teacher->is_active)
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
                                <a href="{{ route('admin.teachers.edit', $teacher) }}" class="btn btn-success" style="padding: 6px 12px; font-size: 12px;">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.teachers.destroy', $teacher) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');" style="display: inline;">
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
                            <i class="fas fa-inbox" style="font-size: 48px; margin-bottom: 16px; display: block; opacity: 0.5;"></i>
                            Belum ada data guru
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

