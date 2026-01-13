@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Dashboard</h1>
        <p class="page-subtitle">Selamat datang di Admin Panel MI AL-HIDAYAH Tarik</p>
    </div>
    
    <!-- Stats Cards -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-title">Total Guru</div>
                <div class="stat-icon primary">
                    <i class="fas fa-users"></i>
                </div>
            </div>
            <div class="stat-value">{{ $stats['total_teachers'] }}</div>
            <div class="stat-change positive">
                <i class="fas fa-arrow-up"></i>
                <span>{{ $stats['active_teachers'] }} Aktif</span>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-title">Guru Aktif</div>
                <div class="stat-icon success">
                    <i class="fas fa-user-check"></i>
                </div>
            </div>
            <div class="stat-value">{{ $stats['active_teachers'] }}</div>
            <div class="stat-change positive">
                <i class="fas fa-check-circle"></i>
                <span>Aktif</span>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-title">Kepala Madrasah</div>
                <div class="stat-icon info">
                    <i class="fas fa-user-tie"></i>
                </div>
            </div>
            <div class="stat-value">{{ $stats['kepala_madrasah'] }}</div>
            <div class="stat-change">
                <i class="fas fa-info-circle"></i>
                <span>Data</span>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-title">Total Users</div>
                <div class="stat-icon warning">
                    <i class="fas fa-users-cog"></i>
                </div>
            </div>
            <div class="stat-value">{{ $stats['total_users'] }}</div>
            <div class="stat-change">
                <i class="fas fa-users"></i>
                <span>Pengguna</span>
            </div>
        </div>
    </div>
    
    <!-- Quick Actions -->
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Quick Actions</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px;">
            <a href="{{ route('admin.teachers.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i>
                Tambah Guru
            </a>
            <a href="{{ route('admin.teachers.index') }}" class="btn btn-success">
                <i class="fas fa-list"></i>
                Lihat Data Guru
            </a>
            <a href="{{ route('struktur-organisasi') }}" class="btn btn-info" target="_blank">
                <i class="fas fa-eye"></i>
                Preview Struktur
            </a>
            <a href="{{ route('home') }}" class="btn btn-secondary" target="_blank">
                <i class="fas fa-globe"></i>
                Lihat Website
            </a>
        </div>
    </div>
    
    <!-- Recent Activity -->
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Informasi Sistem</h2>
        </div>
        <div style="color: var(--text-secondary);">
            <p><strong>Role Anda:</strong> {{ ucfirst(auth()->user()->role) }}</p>
            <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
            <p><strong>Login Terakhir:</strong> {{ now()->format('d M Y, H:i') }}</p>
        </div>
    </div>
@endsection

