@extends('layouts.app')

@section('title', 'Galeri - MI AL-HIDAYAH Tarik')

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
                <h2 class="ca-breadcrumb-title fnw-600">Galeri</h2>
                <div class="it-breadcum-link">
                    <a href="{{ route('home') }}">Beranda</a>
                    <span><i class="fa-solid fa-angle-right"></i></span>
                    <a class="active" href="#">Galeri</a>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- Gallery Section Start -->
    <section class="ca-about-4 pt-100 pb-70">
        <div class="container">
            <div class="ca-service-content-4 text-center mb-60 aos-init aos-animate" data-aos="fade-up"
                data-aos-duration="800">
                <h5 class="ca-section-subtitle subtitle-bg-8 p-relative theme-black-4 br-50">Galeri</h5>
                <h2 class="ca-section-title theme-black-4 fnw-600 pt-16 ca-text-cap">Galeri Foto & Video</h2>
                <p class="pt-16">Kumpulan dokumentasi kegiatan dan prestasi MI AL-HIDAYAH Tarik</p>
            </div>
            
            <!-- Filter Tabs -->
            <div class="gallery-filter text-center mb-60">
                <button class="filter-btn active" data-filter="all">
                    <i class="fa-solid fa-th"></i> Semua
                </button>
                <button class="filter-btn" data-filter="image">
                    <i class="fa-solid fa-image"></i> Foto
                </button>
                <button class="filter-btn" data-filter="video">
                    <i class="fa-solid fa-video"></i> Video
                </button>
                @foreach($categories as $category)
                <button class="filter-btn" data-filter="{{ Str::slug($category) }}">
                    <i class="fa-solid fa-tag"></i> {{ $category }}
                </button>
                @endforeach
            </div>

            <!-- Gallery Grid -->
            <div class="row gallery-grid">
                @forelse($galleries as $gallery)
                <div class="col-lg-4 col-md-6 mb-30 gallery-item" data-category="{{ $gallery->type }}" data-cat="{{ $gallery->category ? \Illuminate\Support\Str::slug($gallery->category) : '' }}">
                    <div class="gallery-box">
                        <div class="gallery-img">
                            <img src="{{ $gallery->image_url }}" alt="{{ $gallery->title }}">
                            <div class="gallery-overlay {{ $gallery->type == 'video' ? 'video-overlay' : '' }}">
                                <div class="gallery-overlay-content">
                                    @if($gallery->type == 'video')
                                        <div class="play-button">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <span>Putar Video</span>
                                    @else
                                        <i class="fa-solid fa-expand"></i>
                                        <span>Lihat Detail</span>
                                    @endif
                                </div>
                            </div>
                            @if($gallery->type == 'video' && $gallery->video_url)
                            <a href="{{ $gallery->video_url }}" target="_blank" class="gallery-link" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: 10;"></a>
                            @endif
                        </div>
                        <div class="gallery-content">
                            <h4>{{ $gallery->title }}</h4>
                            <p>{{ $gallery->description ?? ($gallery->category ?? 'Galeri') }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <div style="text-align: center; padding: 60px 20px; color: #6b7280;">
                        <i class="fa-solid fa-images" style="font-size: 48px; margin-bottom: 20px; opacity: 0.5;"></i>
                        <h4>Belum ada galeri</h4>
                        <p>Foto dan video akan muncul di sini setelah ditambahkan oleh admin.</p>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- Gallery Section End -->
@endsection

@push('styles')
<style>
    /* Gallery Filter Buttons */
    .gallery-filter {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 15px;
        margin-bottom: 60px;
    }
    
    .filter-btn {
        padding: 0.75rem 1.875rem;
        border-radius: 3.125rem;
        border: 0.125rem solid #16a34a;
        background: white;
        color: #16a34a;
        font-weight: 600;
        font-size: 0.9375rem;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        position: relative;
        overflow: hidden;
    }
    
    .filter-btn i {
        font-size: 1rem;
    }
    
    .filter-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
        transition: left 0.3s ease;
        z-index: -1;
    }
    
    .filter-btn:hover::before,
    .filter-btn.active::before {
        left: 0;
    }
    
    .filter-btn:hover,
    .filter-btn.active {
        color: white;
        border-color: #16a34a;
        transform: translateY(-0.125rem);
        box-shadow: 0 0.25rem 0.9375rem rgba(22, 163, 74, 0.3);
    }
    
    /* Gallery Box */
    .gallery-box {
        background: white;
        border-radius: 0.9375rem;
        overflow: hidden;
        box-shadow: 0 0.3125rem 1.5625rem rgba(0, 0, 0, 0.08);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .gallery-box:hover {
        transform: translateY(-0.625rem);
        box-shadow: 0 0.9375rem 2.5rem rgba(0, 0, 0, 0.15);
    }
    
    /* Gallery Image */
    .gallery-img {
        position: relative;
        overflow: hidden;
        min-height: 17.5rem;
        max-height: 20rem;
        background: #f5f5f5;
    }
    
    .gallery-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .gallery-box:hover .gallery-img img {
        transform: scale(1.1);
    }
    
    /* Gallery Overlay */
    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(22, 163, 74, 0.9) 0%, rgba(21, 128, 61, 0.9) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .gallery-box:hover .gallery-overlay {
        opacity: 1;
    }
    
    .gallery-overlay-content {
        text-align: center;
        color: white;
        transform: translateY(1.25rem);
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .gallery-box:hover .gallery-overlay-content {
        transform: translateY(0);
    }
    
    .gallery-overlay-content i {
        font-size: 2.5rem;
        margin-bottom: 0.625rem;
        display: block;
    }
    
    .gallery-overlay-content span {
        font-size: 0.875rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.0625rem;
    }
    
    /* Play Button for Video */
    .play-button {
        width: 5rem;
        height: 5rem;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(0.625rem);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 0.9375rem;
        border: 0.1875rem solid white;
        transition: all 0.3s ease;
    }
    
    .gallery-box:hover .play-button {
        transform: scale(1.1);
        background: rgba(255, 255, 255, 0.3);
    }
    
    .play-button i {
        font-size: 2rem;
        margin-left: 0.25rem;
        color: white;
    }
    
    /* Gallery Content */
    .gallery-content {
        padding: 1.5625rem;
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    
    .gallery-content h4 {
        font-size: 1.125rem;
        font-weight: 700;
        color: #021013;
        margin-bottom: 0.5rem;
        transition: color 0.3s ease;
    }
    
    .gallery-box:hover .gallery-content h4 {
        color: #16a34a;
    }
    
    .gallery-content p {
        color: #666;
        font-size: 0.875rem;
        margin: 0;
        line-height: 1.6;
    }
    
    /* Gallery Item Animation */
    .gallery-item {
        opacity: 1;
        transition: opacity 0.4s ease, transform 0.4s ease;
    }
    
    .gallery-item.hidden {
        opacity: 0;
        transform: scale(0.8);
        pointer-events: none;
    }
    
    /* Responsive */
    @media (max-width: 991px) {
        .gallery-img {
            min-height: 15.625rem;
            max-height: 18rem;
        }
        
        .filter-btn {
            padding: 0.625rem 1.25rem;
            font-size: 0.875rem;
        }
    }
    
    @media (max-width: 767px) {
        .gallery-img {
            min-height: 13.75rem;
            max-height: 16rem;
        }
        
        .gallery-content {
            padding: 1.25rem;
        }
        
        .gallery-content h4 {
            font-size: 1rem;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    // Gallery Filter
    $(document).ready(function() {
        $('.filter-btn').on('click', function() {
            var filter = $(this).data('filter');
            
            // Update active button
            $('.filter-btn').removeClass('active');
            $(this).addClass('active');
            
            // Filter items with animation
            $('.gallery-item').each(function() {
                var $item = $(this);
                var itemCategory = $item.data('category');
                var itemCat = $item.data('cat');
                
                if (filter === 'all' || itemCategory === filter || itemCat === filter) {
                    $item.removeClass('hidden').css({
                        'display': 'block',
                        'animation': 'fadeInUp 0.5s ease'
                    });
                } else {
                    $item.addClass('hidden');
                    setTimeout(function() {
                        $item.css('display', 'none');
                    }, 400);
                }
            });
        });
        
        // Smooth scroll to gallery on filter click
        $('.filter-btn').on('click', function() {
            $('html, body').animate({
                scrollTop: $('.gallery-grid').offset().top - 6.25rem
            }, 500);
        });
    });
    
    // CSS Animation
    var style = document.createElement('style');
    style.textContent = `
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(1.875rem);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    `;
    document.head.appendChild(style);
</script>
@endpush

