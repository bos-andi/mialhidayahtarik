@extends('layouts.app')

@section('title', 'Berita - MI AL-HIDAYAH Tarik')

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
                <h2 class="ca-breadcrumb-title fnw-600">Berita & Pengumuman</h2>
                <div class="it-breadcum-link">
                    <a href="{{ route('home') }}">Beranda</a>
                    <span><i class="fa-solid fa-angle-right"></i></span>
                    <a class="active" href="#">Berita</a>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->
    
    <!-- Blog Section Start -->
    <div class="ca-blog-inner pt-100 pb-100">
        <div class="container">
            <div class="row">
                <!-- Main Content Area -->
                <div class="col-lg-8 mb-30">
                    <div class="row">
                        @forelse($news as $item)
                        <!-- single-blog-item -->
                        <div class="col-xl-6 col-md-6 mb-30">
                            <div class="ca-team-box ca-blg-box-3 cream-bg-3 br-7 fix p-relative z-index-1 aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                                <div class="ca-team-img">
                                    <a href="#"><img class="w-100" src="{{ $item->image_url }}" alt="{{ $item->title }}"></a>
                                </div>
                                <div class="ca-blog-box-content ca-blog-box-content-3">
                                    <div class="ca-b-meta">
                                        <a href="#" class="ca-blog-meta ca-blog-meta-3">
                                            <div class="ca-meta-icon">
                                                <span><img src="{{ asset('assets/img/icon/user-1.1.svg') }}" alt=""></span>
                                            </div>
                                            <div class="ca-meta-title">
                                                <span>{{ $item->author }}</span>
                                            </div>
                                        </a>
                                        @if($item->category)
                                        <a href="#" class="ca-blog-meta ca-blog-meta-3">
                                            <div class="ca-meta-icon">
                                                <span><img src="{{ asset('assets/img/icon/tag-1.1.svg') }}" alt=""></span>
                                            </div>
                                            <div class="ca-meta-title">
                                                <span>{{ $item->category }}</span>
                                            </div>
                                        </a>
                                        @endif
                                    </div>
                                    <h4 class="ca-blog-title ca-blog-title-3 fnw-600"><a href="#">{{ $item->title }}</a></h4>
                                    <p class="pt-16 pb-18">{{ $item->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($item->content), 120) }}</p>
                                    <div class="blog-3-rearmore">
                                        <a href="#" class="read-more3">Baca Selengkapnya <span><i class="fa-solid fa-angle-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-12">
                            <div style="text-align: center; padding: 60px 20px; color: #6b7280;">
                                <i class="fa-solid fa-newspaper" style="font-size: 48px; margin-bottom: 20px; opacity: 0.5;"></i>
                                <h4>Belum ada berita</h4>
                                <p>Berita akan muncul di sini setelah ditambahkan oleh admin.</p>
                            </div>
                        </div>
                        @endforelse
                    </div>
                    <!-- pagination -->
                    @if($news->hasPages())
                    <div class="row">
                        <div class="col-12">
                            <div class="theme-pagination text-center">
                                {{ $news->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                
                <!-- Sidebar Area -->
                <div class="col-lg-4 mb-30">
                    <div class="ca-sidebar-area ml-50">
                        <!-- search -->
                        <div class="ca-search ca-padding cream-bg-3 br-7 mb-30">
                            <h4 class="ca-title fnw-600 theme-black-3 pb-16">Cari</h4>
                            <div class="ca-search-box p-relative z-index-1">
                                <input type="text" placeholder="Cari berita...">
                            </div>
                        </div>
                        
                        <!-- Kategori -->
                        @if($categories->count() > 0)
                        <div class="ca-servic-list ca-padding cream-bg-3 br-7 mb-30">
                            <h4 class="ca-title fnw-600 theme-black-3 pb-24">Kategori</h4>
                            @foreach($categories as $category)
                            <h3 class="ca-ser-list-title"><a href="#" class="d-flex justify-content-between align-items-center">{{ $category->name }} <span><i class="fa-solid fa-angle-down"></i></span></a></h3>
                            @endforeach
                        </div>
                        @endif
                        
                        <!-- Recent Blogs -->
                        @if($recentNews->count() > 0)
                        <div class="ca-servic-list ca-padding cream-bg-3 br-7 mb-30">
                            <h4 class="ca-title fnw-600 theme-black-3 pb-24">Berita Terbaru</h4>
                            @foreach($recentNews as $recent)
                            <!-- single post -->
                            <div class="ca-recent-post-section mb-20">
                                <div class="ca-recent-post-thumb">
                                    <img src="{{ $recent->image_url }}" alt="{{ $recent->title }}">
                                </div>
                                <div class="ca-recent-post-cntent">
                                    <div class="ca-rec-post-date">
                                        <a href="#"><span><i class="fa-solid fa-calendar"></i></span>{{ $recent->published_at ? $recent->published_at->format('d/m/Y') : $recent->created_at->format('d/m/Y') }}</a>
                                    </div>
                                    <h4 class="ca-rec-post-title pt-10"><a href="#">{{ Str::limit($recent->title, 40) }}</a></h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif
                        
                        <!-- Popular Tags -->
                        @if($tags->count() > 0)
                        <div class="ca-tags ca-padding cream-bg-3 br-7 mb-30">
                            <h4 class="ca-title fnw-600 theme-black-3 pb-16">Tag Populer</h4>
                            <div class="ca-tags-list">
                                <ul>
                                    @foreach($tags as $tag)
                                    <li><a href="#">{{ $tag->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif
                        
                        <!-- Follow Us -->
                        <div class="ca-search ca-padding cream-bg-3 br-7 mb-30">
                            <h4 class="ca-title fnw-600 theme-black-3 pb-24">Ikuti Kami</h4>
                            <div class="ca-footer-social ca-footer-social-3">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End -->
@endsection

@push('styles')
<style>
    /* Override warna biru dari CSS template menjadi hijau - HARUS LEBIH SPESIFIK */
    /* Override background biru saat hover blog card */
    .ca-blog-inner .ca-blg-box-3:hover .ca-blog-box-content-3 {
        background: white !important;
    }
    
    .ca-blog-inner .ca-blg-box-3:hover .ca-blog-title-3 a {
        color: #1f2937 !important;
    }
    
    .ca-blog-inner .ca-blg-box-3:hover .ca-blog-title-3 a:hover {
        color: #16a34a !important;
    }
    
    .ca-blog-inner .ca-blg-box-3:hover .ca-blog-box-content-3 p {
        color: #6b7280 !important;
        opacity: 1 !important;
    }
    
    .ca-blog-inner .ca-blg-box-3:hover .ca-blog-meta-3 {
        background: #f0fdf4 !important;
        color: #16a34a !important;
    }
    
    .ca-blog-inner .ca-blg-box-3:hover .ca-blog-meta-3 span {
        color: #16a34a !important;
    }
    
    .ca-blog-inner .ca-blg-box-3:hover .ca-meta-icon span img {
        filter: none !important;
    }
    
    .ca-blog-inner .read-more3:hover,
    .ca-blog-inner .ca-blg-box-3:hover .read-more3,
    .ca-blog-inner .blog-3-rearmore .read-more3:hover {
        color: #16a34a !important;
    }
    
    .ca-blog-inner .ca-sidebar-area .ca-footer-social-3 ul li a,
    .ca-blog-inner .ca-footer-social-3 ul li a {
        background: #E7EDF6 !important;
        color: #16a34a !important;
    }
    
    .ca-blog-inner .ca-sidebar-area .ca-footer-social-3 ul li a:hover,
    .ca-blog-inner .ca-footer-social-3 ul li a:hover {
        background: #16a34a !important;
        color: #fff !important;
        border-color: #16a34a !important;
    }
    
    .ca-blog-inner .ca-sidebar-area .ca-ser-list-title a,
    .ca-blog-inner .ca-ser-list-title a {
        background: transparent !important;
        color: #4b5563 !important;
    }
    
    .ca-blog-inner .ca-sidebar-area .ca-ser-list-title a:hover,
    .ca-blog-inner .ca-sidebar-area .ca-ser-list-title:hover a,
    .ca-blog-inner .ca-ser-list-title a:hover,
    .ca-blog-inner .ca-ser-list-title:hover a {
        background: transparent !important;
        color: #16a34a !important;
    }
    
    .ca-blog-inner .ca-sidebar-area .ca-ser-list-title a:hover span,
    .ca-blog-inner .ca-sidebar-area .ca-ser-list-title:hover a span,
    .ca-blog-inner .ca-ser-list-title a:hover span,
    .ca-blog-inner .ca-ser-list-title:hover a span {
        background: transparent !important;
        color: #16a34a !important;
    }
    
    /* Blog Page Styling - Professional & Modern dengan Warna Hijau Dominan */
    .ca-blog-inner {
        background: linear-gradient(180deg, #f0fdf4 0%, #ffffff 20%);
    }
    
    .ca-sidebar-area {
        position: sticky;
        top: 7.5rem;
    }
    
    /* Blog Card Styling - Enhanced */
    .ca-blg-box-3 {
        background: white;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 0.0625rem solid #e5e7eb;
        position: relative;
    }
    
    .ca-blg-box-3::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 0.25rem;
        background: linear-gradient(90deg, #16a34a 0%, #22c55e 50%, #16a34a 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .ca-blg-box-3:hover {
        transform: translateY(-0.625rem);
        box-shadow: 0 1.25rem 3rem rgba(22, 163, 74, 0.15);
        border-color: #dcfce7;
    }
    
    .ca-blg-box-3:hover::before {
        opacity: 1;
    }
    
    .ca-team-img {
        position: relative;
        overflow: hidden;
        height: 15.625rem;
    }
    
    .ca-team-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .ca-blg-box-3:hover .ca-team-img img {
        transform: scale(1.1);
    }
    
    .ca-blog-box-content-3 {
        padding: 2rem;
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    
    .ca-b-meta {
        display: flex;
        gap: 0.75rem;
        margin-bottom: 1.25rem;
        flex-wrap: wrap;
    }
    
    .ca-blog-meta-3 {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.375rem 0.75rem;
        background: #f0fdf4;
        border-radius: 1.5625rem;
        transition: all 0.3s ease;
        font-size: 0.875rem;
        color: #16a34a;
    }
    
    .ca-blog-meta-3:hover {
        background: #dcfce7;
        color: #15803d;
        transform: translateY(-0.0625rem);
    }
    
    .ca-meta-icon {
        width: 1.25rem;
        height: 1.25rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .ca-meta-icon img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    
    .ca-blog-title-3 {
        font-size: 1.25rem;
        line-height: 1.6;
        margin-bottom: 1rem;
        min-height: auto;
    }
    
    .ca-blog-title-3 a {
        color: #1f2937;
        transition: all 0.3s ease;
        display: block;
        font-weight: 700;
    }
    
    .ca-blog-title-3 a:hover {
        color: #16a34a;
        text-decoration: none;
    }
    
    .ca-blog-box-content-3 p {
        color: #6b7280;
        line-height: 1.8;
        flex: 1;
        margin-bottom: 1.75rem;
        font-size: 0.9375rem;
    }
    
    .read-more3 {
        color: #16a34a;
        font-weight: 600;
        font-size: 0.9375rem;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        background: #f0fdf4;
        border-radius: 1.5625rem;
        transition: all 0.3s ease;
        border: 0.0625rem solid transparent;
    }
    
    .read-more3:hover {
        color: white;
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
        gap: 0.75rem;
        border-color: #16a34a;
        box-shadow: 0 0.25rem 0.9375rem rgba(22, 163, 74, 0.3);
        transform: translateY(-0.0625rem);
    }
    
    .read-more3 span {
        transition: transform 0.3s ease;
    }
    
    .read-more3:hover span {
        transform: translateX(0.375rem);
    }
    
    /* Sidebar Styling - Enhanced */
    .ca-padding {
        padding: 2rem;
        background: white;
        border-radius: 1.25rem;
        box-shadow: 0 0.125rem 0.625rem rgba(0, 0, 0, 0.05);
        border: 0.0625rem solid #e5e7eb;
        transition: all 0.3s ease;
    }
    
    .ca-padding:hover {
        box-shadow: 0 0.25rem 1rem rgba(22, 163, 74, 0.1);
        border-color: #dcfce7;
    }
    
    .ca-search-box {
        position: relative;
    }
    
    .ca-search-box input {
        width: 100%;
        padding: 0.875rem 3rem 0.875rem 1.25rem;
        border: 0.125rem solid #e5e7eb;
        border-radius: 0.9375rem;
        font-size: 0.9375rem;
        transition: all 0.3s ease;
        background: white;
    }
    
    .ca-search-box input:focus {
        outline: none;
        border-color: #16a34a;
        box-shadow: 0 0 0 0.25rem rgba(22, 163, 74, 0.15);
        background: #f0fdf4;
    }
    
    .ca-ser-list-title {
        font-size: 0.9375rem;
        font-weight: 500;
        padding: 0.875rem 1rem;
        border-bottom: 0.0625rem solid #e5e7eb;
        margin-bottom: 0;
        border-radius: 0.5rem;
        transition: all 0.3s ease;
    }
    
    .ca-ser-list-title:last-child {
        border-bottom: none;
    }
    
    .ca-ser-list-title:hover {
        background: #f0fdf4;
        padding-left: 1.25rem;
    }
    
    .ca-ser-list-title a {
        color: #4b5563;
        transition: all 0.3s ease;
        font-weight: 500;
    }
    
    .ca-ser-list-title a:hover {
        color: #16a34a;
    }
    
    .ca-ser-list-title a i {
        color: #9ca3af;
        transition: all 0.3s ease;
        font-size: 0.875rem;
    }
    
    .ca-ser-list-title:hover a i {
        color: #16a34a;
        transform: translateY(0.125rem) rotate(180deg);
    }
    
    /* Recent Post Styling - Enhanced */
    .ca-recent-post-section {
        display: flex;
        gap: 1rem;
        padding: 1rem;
        border-bottom: 0.0625rem solid #e5e7eb;
        border-radius: 0.625rem;
        transition: all 0.3s ease;
        margin-bottom: 0.75rem;
    }
    
    .ca-recent-post-section:last-child {
        border-bottom: none;
        margin-bottom: 0;
    }
    
    .ca-recent-post-section:hover {
        background: #f0fdf4;
        border-color: #dcfce7;
        transform: translateX(0.25rem);
    }
    
    .ca-recent-post-thumb {
        width: 5.5rem;
        height: 5.5rem;
        flex-shrink: 0;
        border-radius: 0.625rem;
        overflow: hidden;
        border: 0.125rem solid #e5e7eb;
        transition: all 0.3s ease;
        position: relative;
    }
    
    .ca-recent-post-thumb::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(22, 163, 74, 0.1) 0%, rgba(22, 163, 74, 0) 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .ca-recent-post-section:hover .ca-recent-post-thumb {
        border-color: #16a34a;
        box-shadow: 0 0.25rem 0.9375rem rgba(22, 163, 74, 0.2);
    }
    
    .ca-recent-post-section:hover .ca-recent-post-thumb::after {
        opacity: 1;
    }
    
    .ca-recent-post-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    
    .ca-recent-post-section:hover .ca-recent-post-thumb img {
        transform: scale(1.15);
    }
    
    .ca-recent-post-cntent {
        flex: 1;
        min-width: 0;
    }
    
    .ca-rec-post-date {
        font-size: 0.8125rem;
        color: #16a34a;
        margin-bottom: 0.5rem;
        font-weight: 500;
    }
    
    .ca-rec-post-date a {
        color: #16a34a;
        display: inline-flex;
        align-items: center;
        gap: 0.375rem;
        padding: 0.25rem 0.625rem;
        background: #f0fdf4;
        border-radius: 0.75rem;
        transition: all 0.3s ease;
    }
    
    .ca-rec-post-date a:hover {
        background: #dcfce7;
        color: #15803d;
    }
    
    .ca-rec-post-date i {
        font-size: 0.75rem;
    }
    
    .ca-rec-post-title {
        font-size: 0.9375rem;
        line-height: 1.6;
        font-weight: 600;
        margin: 0;
    }
    
    .ca-rec-post-title a {
        color: #1f2937;
        transition: color 0.3s ease;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .ca-rec-post-title a:hover {
        color: #16a34a;
    }
    
    /* Contact Section - Enhanced */
    .ca-ph-content {
        display: flex;
        align-items: center;
        gap: 1.25rem;
        padding: 1.5rem;
        background: linear-gradient(135deg, #f0fdf4 0%, #ffffff 100%);
        border-radius: 0.9375rem;
        border: 0.125rem solid #dcfce7;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .ca-ph-content::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 0.25rem;
        background: linear-gradient(90deg, #16a34a 0%, #22c55e 100%);
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }
    
    .ca-ph-content:hover {
        border-color: #16a34a;
        box-shadow: 0 0.5rem 1.5rem rgba(22, 163, 74, 0.2);
        transform: translateY(-0.125rem);
    }
    
    .ca-ph-content:hover::before {
        transform: scaleX(1);
    }
    
    .ca-ph-ic {
        width: 3.5rem;
        height: 3.5rem;
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 0.25rem 0.9375rem rgba(22, 163, 74, 0.3);
        transition: all 0.3s ease;
    }
    
    .ca-ph-content:hover .ca-ph-ic {
        transform: scale(1.1) rotate(5deg);
        box-shadow: 0 0.375rem 1.25rem rgba(22, 163, 74, 0.4);
    }
    
    .ca-ph-ic i {
        color: white;
        font-size: 1.25rem;
    }
    
    .ph-title {
        font-size: 1.25rem;
        font-weight: 700;
        margin: 0;
    }
    
    .ph-title a {
        color: #1f2937;
        transition: color 0.3s ease;
    }
    
    .ca-ph-content:hover .ph-title a {
        color: #16a34a;
    }
    
    /* Tags Styling */
    .ca-tags-list ul {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .ca-tags-list ul li a {
        display: inline-block;
        padding: 0.5rem 1rem;
        background: white;
        border: 0.0625rem solid #e5e7eb;
        border-radius: 1.5625rem;
        color: #6b7280;
        font-size: 0.875rem;
        transition: all 0.3s ease;
    }
    
    .ca-tags-list ul li a:hover {
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
        color: white;
        border-color: #16a34a;
        transform: translateY(-0.125rem);
        box-shadow: 0 0.25rem 0.9375rem rgba(22, 163, 74, 0.3);
    }
    
    /* Social Media */
    .ca-footer-social-3 ul {
        display: flex;
        gap: 0.75rem;
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .ca-footer-social-3 ul li a {
        width: 2.75rem;
        height: 2.75rem;
        display: flex;
        align-items: center;
        justify-content: center;
        background: white;
        border: 0.125rem solid #e5e7eb;
        border-radius: 50%;
        color: #6b7280;
        transition: all 0.3s ease;
        font-size: 1.125rem;
    }
    
    .ca-footer-social-3 ul li a:hover {
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
        color: white;
        border-color: #16a34a;
        transform: translateY(-0.25rem) scale(1.1);
        box-shadow: 0 0.375rem 1.25rem rgba(22, 163, 74, 0.4);
    }
    
    .ca-footer-social-3 ul li:nth-child(1) a:hover {
        background: linear-gradient(135deg, #E4405F 0%, #C13584 100%);
        border-color: #E4405F;
    }
    
    .ca-footer-social-3 ul li:nth-child(2) a:hover {
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
        border-color: #16a34a;
    }
    
    .ca-footer-social-3 ul li:nth-child(3) a:hover {
        background: linear-gradient(135deg, #FF0000 0%, #CC0000 100%);
        border-color: #FF0000;
    }
    
    .ca-footer-social-3 ul li:nth-child(4) a:hover {
        background: linear-gradient(135deg, #000000 0%, #1a1a1a 100%);
        border-color: #000000;
    }
    
    /* Pagination Styling */
    .theme-pagination {
        margin-top: 3rem;
    }
    
    .theme-pagination .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0.5rem;
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .theme-pagination .pagination .page-item {
        margin: 0;
    }
    
    .theme-pagination .pagination .page-link {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 2.5rem;
        height: 2.5rem;
        padding: 0 0.75rem;
        border-radius: 0.5rem;
        color: #6b7280;
        background: white;
        border: 0.0625rem solid #e5e7eb;
        transition: all 0.3s ease;
        font-weight: 500;
        text-decoration: none;
    }
    
    .theme-pagination .pagination .page-link:hover,
    .theme-pagination .pagination .page-item.active .page-link {
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
        color: white;
        border-color: #16a34a;
        transform: translateY(-0.125rem);
        box-shadow: 0 0.25rem 0.9375rem rgba(22, 163, 74, 0.3);
    }
    
    .theme-pagination .pagination .page-item.disabled .page-link {
        background: #f3f4f6;
        color: #9ca3af;
        cursor: not-allowed;
        opacity: 0.6;
    }
    
    .theme-pagination .pagination .page-link span {
        display: inline-block;
    }
    
    /* Responsive */
    @media (max-width: 1199px) {
        .ca-sidebar-area {
            margin-left: 0;
        }
    }
    
    @media (max-width: 991px) {
        .ca-sidebar-area {
            position: static;
            margin-top: 3rem;
        }
        
        .ca-blog-title-3 {
            font-size: 1rem;
            min-height: auto;
        }
        
        .ca-team-img {
            height: 12.5rem;
        }
    }
    
    @media (max-width: 767px) {
        .ca-blog-box-content-3 {
            padding: 1.5rem;
        }
        
        .ca-b-meta {
            gap: 0.5rem;
        }
        
        .ca-blog-meta-3 {
            font-size: 0.8125rem;
            padding: 0.25rem 0.625rem;
        }
        
        .ca-padding {
            padding: 1.5rem;
        }
    }
</style>
@endpush
