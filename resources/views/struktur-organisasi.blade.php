@extends('layouts.app')

@section('title', 'Struktur Organisasi - MI AL-HIDAYAH Tarik')

@section('content')
    <!-- breadcrumb area start -->
    <section class="ca-breadcrumb-area cream-bg-3 p-relative z-index-1 fix">
        <div class="ca-breadcrumb-shape p-absolute bre-sh-1">
            <img src="{{ asset('assets/img/shape/breadcrumn-shape.png') }}" alt="">
        </div>
        <div class="ca-breadcrumb-shape p-absolute bre-sh-2">
            <img src="{{ asset('assets/img/shape/ca-line-shape.png') }}" alt="">
        </div>
        <div class="container">
            <div class="ca-breadcrumb-content text-center">
                <h2 class="ca-breadcrumb-title fnw-600">Struktur Organisasi</h2>
                <div class="it-breadcum-link">
                    <a href="{{ route('home') }}">Beranda</a>
                    <span><i class="fa-solid fa-angle-right"></i></span>
                    <a href="{{ route('profil') }}">Tentang Kami</a>
                    <span><i class="fa-solid fa-angle-right"></i></span>
                    <a class="active" href="#">Struktur Organisasi</a>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- Struktur Organisasi Section Start -->
    <section class="team-section pt-100 pb-70">
        <div class="container">
            <div class="ca-service-content-4 text-center mb-60 aos-init aos-animate" data-aos="fade-up"
                data-aos-duration="800">
                <h5 class="ca-section-subtitle subtitle-bg-8 p-relative theme-black-4 br-50">Organisasi</h5>
                <h2 class="ca-section-title theme-black-4 fnw-600 pt-16 ca-text-cap">Struktur Organisasi MI AL-HIDAYAH Tarik</h2>
                <p class="team-description">Tim profesional yang berdedikasi untuk memberikan pendidikan terbaik</p>
            </div>
            
            <!-- Kepala Madrasah -->
            @if($kepalaMadrasah)
            <div class="team-category mb-80">
                <h3 class="category-title">Kepala Madrasah</h3>
                <div class="team-grid">
                    <div class="team-card-wrapper">
                        <div class="team-card">
                            <div class="team-image-wrapper">
                                <img src="{{ $kepalaMadrasah->photo_url }}" 
                                     alt="{{ $kepalaMadrasah->name }}" 
                                     class="team-image"
                                     onerror="this.onerror=null; this.src='{{ asset('assets/img/team/ca-team-1.1.png') }}';">
                                <div class="team-overlay">
                                    <div class="team-social">
                                        <a href="#" class="social-link" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#" class="social-link" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                                        <a href="#" class="social-link" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="#" class="social-link" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4 class="team-name">{{ $kepalaMadrasah->name }}</h4>
                                <p class="team-position">{{ $kepalaMadrasah->position }}</p>
                                @if($kepalaMadrasah->nip)
                                    <p class="team-nip">NIP: {{ $kepalaMadrasah->nip }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- Wakil Kepala -->
            @if($wakilKepala && $wakilKepala->count() > 0)
            <div class="team-category mb-80">
                <h3 class="category-title">Wakil Kepala</h3>
                <div class="team-grid">
                    @foreach($wakilKepala as $wakil)
                    <div class="team-card-wrapper">
                        <div class="team-card">
                            <div class="team-image-wrapper">
                                <img src="{{ $wakil->photo_url }}" 
                                     alt="{{ $wakil->name }}" 
                                     class="team-image"
                                     onerror="this.onerror=null; this.src='{{ asset('assets/img/team/ca-team-1.1.png') }}';">
                                <div class="team-overlay">
                                    <div class="team-social">
                                        <a href="#" class="social-link" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#" class="social-link" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                                        <a href="#" class="social-link" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="#" class="social-link" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4 class="team-name">{{ $wakil->name }}</h4>
                                <p class="team-position">{{ $wakil->position }}</p>
                                @if($wakil->nip)
                                    <p class="team-nip">NIP: {{ $wakil->nip }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
                        
            <!-- Dewan Guru -->
            @if($guru && $guru->count() > 0)
            <div class="team-category mb-80">
                <h3 class="category-title">Dewan Guru</h3>
                <div class="team-grid">
                    @foreach($guru as $teacher)
                    <div class="team-card-wrapper">
                        <div class="team-card">
                            <div class="team-image-wrapper">
                                <img src="{{ $teacher->photo_url }}" 
                                     alt="{{ $teacher->name }}" 
                                     class="team-image"
                                     onerror="this.onerror=null; this.src='{{ asset('assets/img/team/ca-team-1.1.png') }}';">
                                <div class="team-overlay">
                                    <div class="team-social">
                                        <a href="#" class="social-link" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#" class="social-link" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                                        <a href="#" class="social-link" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="#" class="social-link" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4 class="team-name">{{ $teacher->name }}</h4>
                                <p class="team-position">{{ $teacher->position }}</p>
                                @if($teacher->nip)
                                    <p class="team-nip">NIP: {{ $teacher->nip }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
                        
            <!-- Staff & Karyawan -->
            @if($staff && $staff->count() > 0)
            <div class="team-category mb-80">
                <h3 class="category-title">Staff & Karyawan</h3>
                <div class="team-grid">
                    @foreach($staff as $staf)
                    <div class="team-card-wrapper">
                        <div class="team-card">
                            <div class="team-image-wrapper">
                                <img src="{{ $staf->photo_url }}" 
                                     alt="{{ $staf->name }}" 
                                     class="team-image"
                                     onerror="this.onerror=null; this.src='{{ asset('assets/img/team/ca-team-1.1.png') }}';">
                                <div class="team-overlay">
                                    <div class="team-social">
                                        <a href="#" class="social-link" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#" class="social-link" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                                        <a href="#" class="social-link" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="#" class="social-link" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4 class="team-name">{{ $staf->name }}</h4>
                                <p class="team-position">{{ $staf->position }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- Placeholder jika belum ada data -->
            @if(!$kepalaMadrasah && (!$wakilKepala || $wakilKepala->count() == 0) && (!$guru || $guru->count() == 0) && (!$staff || $staff->count() == 0))
            <div class="row">
                <div class="col-12 text-center">
                    <p class="no-data-message">Belum ada data struktur organisasi.</p>
                </div>
            </div>
            @endif
        </div>
    </section>
    <!-- Struktur Organisasi Section End -->
@endsection

@push('styles')
<style>
    /* Base font size untuk rem calculation */
    :root {
        font-size: 16px;
    }
    
    /* Team Section */
    .team-section {
        background: #f8f9fa;
    }
    
    .team-description {
        font-size: 1.125rem;
        color: #6B7280;
        margin-top: 1rem;
        max-width: 37.5rem;
        margin-left: auto;
        margin-right: auto;
    }
    
    /* Team Category */
    .team-category {
        margin-bottom: 5rem;
    }
    
    .category-title {
        font-size: 2rem;
        font-weight: 700;
        color: #1F2937;
        text-align: center;
        margin-bottom: 3rem;
        position: relative;
        padding-bottom: 1rem;
    }
    
    .category-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 4rem;
        height: 0.25rem;
        background: linear-gradient(90deg, #16a34a 0%, #22c55e 100%);
        border-radius: 0.125rem;
    }
    
    /* Team Grid */
    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(18.75rem, 1fr));
        gap: 2rem;
        padding: 0 1rem;
    }
    
    /* Team Card */
    .team-card-wrapper {
        width: 100%;
    }
    
    .team-card {
        background: white;
        border-radius: 1.25rem;
        overflow: hidden;
        box-shadow: 0 0.25rem 1.25rem rgba(0, 0, 0, 0.08);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .team-card:hover {
        transform: translateY(-0.625rem);
        box-shadow: 0 0.75rem 2.5rem rgba(0, 0, 0, 0.15);
    }
    
    /* Team Image */
    .team-image-wrapper {
        position: relative;
        width: 100%;
        padding-top: 100%;
        overflow: hidden;
        background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);
    }
    
    .team-image-wrapper::before {
        content: '\f007';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 3rem;
        color: #cbd5e1;
        z-index: 0;
    }
    
    .team-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
        background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);
        z-index: 1;
    }
    
    .team-image[src=""],
    .team-image:not([src]),
    .team-image[src*="ca-team-1.1.png"] {
        opacity: 0.3;
    }
    
    .team-card:hover .team-image {
        transform: scale(1.1);
    }
    
    /* Team Overlay */
    .team-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(22, 163, 74, 0.9) 0%, rgba(34, 197, 94, 0.9) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.4s ease;
    }
    
    .team-card:hover .team-overlay {
        opacity: 1;
    }
    
    /* Team Social */
    .team-social {
        display: flex;
        gap: 1rem;
    }
    
    .social-link {
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(0.625rem);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1rem;
        transition: all 0.3s ease;
        text-decoration: none;
    }
    
    .social-link:hover {
        background: white;
        color: #16a34a;
        transform: translateY(-0.25rem);
    }
    
    /* Team Info */
    .team-info {
        padding: 1.875rem 1.5rem;
        text-align: center;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    
    .team-name {
        font-size: 1.25rem;
        font-weight: 700;
        color: #1F2937;
        margin-bottom: 0.5rem;
        line-height: 1.4;
    }
    
    .team-position {
        font-size: 0.9375rem;
        color: #16a34a;
        font-weight: 600;
        margin-bottom: 0.375rem;
    }
    
    .team-nip {
        font-size: 0.8125rem;
        color: #6B7280;
        margin-top: 0.5rem;
    }
    
    /* No Data Message */
    .no-data-message {
        color: #6B7280;
        font-size: 1.125rem;
        padding: 3rem 0;
    }
    
    /* Responsive */
    @media (max-width: 991px) {
        .team-grid {
            grid-template-columns: repeat(auto-fill, minmax(15rem, 1fr));
            gap: 1.5rem;
        }
        
        .category-title {
            font-size: 1.75rem;
            margin-bottom: 2.5rem;
        }
        
        .team-category {
            margin-bottom: 4rem;
        }
    }
    
    @media (max-width: 767px) {
        .team-grid {
            grid-template-columns: repeat(auto-fill, minmax(12.5rem, 1fr));
            gap: 1.25rem;
            padding: 0 0.5rem;
        }
        
        .category-title {
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .team-info {
            padding: 1.5rem 1.25rem;
        }
        
        .team-name {
            font-size: 1.125rem;
        }
        
        .team-position {
            font-size: 0.875rem;
        }
        
        .social-link {
            width: 2.25rem;
            height: 2.25rem;
            font-size: 0.875rem;
        }
    }
    
    @media (max-width: 575px) {
        .team-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }
        
        .team-description {
            font-size: 1rem;
            padding: 0 1rem;
        }
    }
</style>
@endpush
