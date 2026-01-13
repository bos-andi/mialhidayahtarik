@extends('admin.layouts.app')

@section('title', 'Pengaturan Website')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Pengaturan Website</h1>
        <p class="page-subtitle">Kelola identitas dan pengaturan website</p>
    </div>
    
    @if(session('success'))
        <div style="background: #d1fae5; color: #065f46; padding: 12px 16px; border-radius: 8px; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif
    
    @if(session('error'))
        <div style="background: #fee2e2; color: #991b1b; padding: 12px 16px; border-radius: 8px; margin-bottom: 20px;">
            {{ session('error') }}
        </div>
    @endif
    
    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <!-- Logo Section -->
        <div class="card" style="margin-bottom: 20px;">
            <div class="card-header" style="padding: 20px; border-bottom: 1px solid #e5e7eb;">
                <h3 style="margin: 0; font-size: 18px; font-weight: 600; color: #1f2937;">
                    <i class="fas fa-image" style="margin-right: 8px; color: #16a34a;"></i>
                    Logo Website
                </h3>
            </div>
            <div style="padding: 20px;">
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
                    <!-- Logo Utama -->
                    <div class="form-group">
                        <label class="form-label">Logo Utama *</label>
                        <div style="margin-bottom: 12px;">
                            @php
                                $logoMain = $settings['logo_main']->value ?? null;
                                $logoMainUrl = $logoMain ? (filter_var($logoMain, FILTER_VALIDATE_URL) ? $logoMain : asset('storage/' . $logoMain)) : asset('assets/img/logo/logo-mialhidayah.png');
                            @endphp
                            <img id="logo-main-preview" src="{{ $logoMainUrl }}" alt="Logo Utama" 
                                 style="max-width: 200px; max-height: 100px; object-fit: contain; border: 1px solid #e5e7eb; border-radius: 8px; padding: 8px; background: white; display: block; margin-bottom: 8px;">
                        </div>
                        <input type="file" name="logo_main" id="logo-main-input" class="form-control" accept="image/*" onchange="previewImage(this, 'logo-main-preview')">
                        <small style="color: var(--text-secondary); font-size: 12px; display: block; margin-top: 4px;">
                            Format: JPG, PNG, GIF, SVG (Max: 2MB). Kosongkan jika tidak ingin mengubah.
                        </small>
                        @error('logo_main')
                            <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Logo Navbar -->
                    <div class="form-group">
                        <label class="form-label">Logo Navbar *</label>
                        <div style="margin-bottom: 12px;">
                            @php
                                $logoNavbar = isset($settings['logo_navbar']) ? $settings['logo_navbar']->value : null;
                                $logoNavbarUrl = $logoNavbar ? (filter_var($logoNavbar, FILTER_VALIDATE_URL) ? $logoNavbar : asset('storage/' . $logoNavbar)) : asset('assets/img/logo/logo-navbar.png');
                            @endphp
                            <img id="logo-navbar-preview" src="{{ $logoNavbarUrl }}" alt="Logo Navbar" 
                                 style="max-width: 200px; max-height: 80px; object-fit: contain; border: 1px solid #e5e7eb; border-radius: 8px; padding: 8px; background: white; display: block; margin-bottom: 8px;">
                        </div>
                        <input type="file" name="logo_navbar" id="logo-navbar-input" class="form-control" accept="image/*" onchange="previewImage(this, 'logo-navbar-preview')">
                        <small style="color: var(--text-secondary); font-size: 12px; display: block; margin-top: 4px;">
                            Format: JPG, PNG, GIF, SVG (Max: 2MB). Kosongkan jika tidak ingin mengubah.
                        </small>
                        @error('logo_navbar')
                            <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Hero Section -->
        <div class="card" style="margin-bottom: 20px;">
            <div class="card-header" style="padding: 20px; border-bottom: 1px solid #e5e7eb;">
                <h3 style="margin: 0; font-size: 18px; font-weight: 600; color: #1f2937;">
                    <i class="fas fa-image" style="margin-right: 8px; color: #16a34a;"></i>
                    Hero Section
                </h3>
            </div>
            <div style="padding: 20px;">
                <!-- Hero Background -->
                <div class="form-group" style="margin-bottom: 20px;">
                    <label class="form-label">Background Hero</label>
                    <div style="margin-bottom: 12px;">
                            @php
                            $heroBg = isset($settings['hero_background']) ? $settings['hero_background']->value : null;
                            $heroBgUrl = $heroBg ? (filter_var($heroBg, FILTER_VALIDATE_URL) ? $heroBg : asset('storage/' . $heroBg)) : asset('assets/img/slider/slider-bg-1.png');
                        @endphp
                        <img id="hero-bg-preview" src="{{ $heroBgUrl }}" alt="Hero Background" 
                             style="max-width: 100%; max-height: 300px; object-fit: cover; border: 1px solid #e5e7eb; border-radius: 8px; display: block; margin-bottom: 8px;">
                    </div>
                    <input type="file" name="hero_background" id="hero-bg-input" class="form-control" accept="image/*" onchange="previewImage(this, 'hero-bg-preview')">
                    <small style="color: var(--text-secondary); font-size: 12px; display: block; margin-top: 4px;">
                        Format: JPG, PNG, GIF (Max: 5MB). Kosongkan jika tidak ingin mengubah.
                    </small>
                    @error('hero_background')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
                    <!-- Hero Title -->
                    <div class="form-group">
                        <label class="form-label">Judul Hero</label>
                        <input type="text" name="hero_title" class="form-control" 
                               value="{{ old('hero_title', isset($settings['hero_title']) ? $settings['hero_title']->value : 'Selamat Datang di MI AL-HIDAYAH Tarik') }}" 
                               placeholder="Masukkan judul hero">
                        @error('hero_title')
                            <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Hero Subtitle -->
                    <div class="form-group">
                        <label class="form-label">Subtitle Hero</label>
                        <input type="text" name="hero_subtitle" class="form-control" 
                               value="{{ old('hero_subtitle', isset($settings['hero_subtitle']) ? $settings['hero_subtitle']->value : 'Membangun Generasi Berkarakter, Berprestasi, dan Berakhlak Mulia') }}" 
                               placeholder="Masukkan subtitle hero">
                        @error('hero_subtitle')
                            <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- CTA Text -->
                    <div class="form-group">
                        <label class="form-label">Teks Tombol CTA</label>
                        <input type="text" name="hero_cta_text" class="form-control" 
                               value="{{ old('hero_cta_text', isset($settings['hero_cta_text']) ? $settings['hero_cta_text']->value : 'Daftar Sekarang') }}" 
                               placeholder="Masukkan teks tombol">
                        @error('hero_cta_text')
                            <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- CTA Link -->
                    <div class="form-group">
                        <label class="form-label">Link Tombol CTA</label>
                        <input type="url" name="hero_cta_link" class="form-control" 
                               value="{{ old('hero_cta_link', isset($settings['hero_cta_link']) ? $settings['hero_cta_link']->value : '#contact') }}" 
                               placeholder="https://example.com atau #contact">
                        @error('hero_cta_link')
                            <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Favicon Section -->
        <div class="card" style="margin-bottom: 20px;">
            <div class="card-header" style="padding: 20px; border-bottom: 1px solid #e5e7eb;">
                <h3 style="margin: 0; font-size: 18px; font-weight: 600; color: #1f2937;">
                    <i class="fas fa-star" style="margin-right: 8px; color: #16a34a;"></i>
                    Favicon
                </h3>
            </div>
            <div style="padding: 20px;">
                <div class="form-group">
                    <label class="form-label">Favicon</label>
                    <div style="margin-bottom: 12px;">
                        @php
                            $favicon = isset($settings['favicon']) ? $settings['favicon']->value : null;
                            $faviconUrl = null;
                            if ($favicon) {
                                if (filter_var($favicon, FILTER_VALIDATE_URL)) {
                                    $faviconUrl = $favicon;
                                } else {
                                    $faviconPath = storage_path('app/public/' . $favicon);
                                    if (file_exists($faviconPath)) {
                                        $faviconUrl = asset('storage/' . $favicon);
                                    }
                                }
                            }
                            if (!$faviconUrl) {
                                $faviconUrl = asset('assets/img/icon/ca-fac4.svg');
                            }
                        @endphp
                        <img id="favicon-preview" src="{{ $faviconUrl }}" alt="Favicon" 
                             style="width: 64px; height: 64px; object-fit: contain; border: 1px solid #e5e7eb; border-radius: 8px; padding: 8px; background: white; display: block; margin-bottom: 8px;">
                        @if($favicon && !file_exists(storage_path('app/public/' . $favicon)))
                            <div style="color: #dc2626; font-size: 11px; margin-top: 4px; padding: 8px; background: #fee2e2; border-radius: 4px;">
                                <i class="fas fa-exclamation-triangle"></i> <strong>File tidak ditemukan!</strong> Silakan upload ulang favicon.
                            </div>
                        @endif
                    </div>
                    <input type="file" name="favicon" id="favicon-input" class="form-control" accept=".ico,.png,.jpg,.jpeg,.gif,.svg" onchange="previewImage(this, 'favicon-preview')">
                    <small style="color: var(--text-secondary); font-size: 12px; display: block; margin-top: 4px;">
                        Format: ICO, PNG, JPG, GIF, SVG (Max: 1MB). Kosongkan jika tidak ingin mengubah.
                        <br><strong>Tips:</strong> Setelah upload, refresh halaman dengan Ctrl+F5 (Windows) atau Cmd+Shift+R (Mac) untuk melihat favicon baru.
                    </small>
                    @error('favicon')
                        <div style="color: var(--danger); font-size: 12px; margin-top: 4px;">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        
        <!-- Submit Button -->
        <div style="display: flex; gap: 12px; margin-top: 24px;">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i>
                Simpan Pengaturan
            </button>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                <i class="fas fa-times"></i>
                Batal
            </a>
        </div>
    </form>
    
    <script>
        function previewImage(input, previewId) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById(previewId).src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    
    <div style="background: #fef3c7; border-left: 4px solid #f59e0b; padding: 12px 16px; border-radius: 4px; margin-top: 20px;">
        <p style="margin: 0; color: #92400e; font-size: 13px;">
            <strong><i class="fas fa-info-circle"></i> Catatan Penting:</strong><br>
            • Jika favicon tidak muncul setelah upload, silakan <strong>refresh halaman dengan Ctrl+F5</strong> (Windows) atau <strong>Cmd+Shift+R</strong> (Mac) untuk menghapus cache browser.<br>
            • Browser biasanya menyimpan cache favicon yang lama, jadi perlu hard refresh untuk melihat perubahan.<br>
            • Pastikan file favicon yang diupload berformat ICO, PNG, atau SVG untuk kompatibilitas terbaik.
        </p>
    </div>
@endsection

