<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Sekolah')</title>
    <!-- fav icon -->
    @php
        $faviconUrl = null;
        if ($favicon) {
            if (filter_var($favicon, FILTER_VALIDATE_URL)) {
                $faviconUrl = $favicon;
            } else {
                // Check if file exists
                $faviconPath = storage_path('app/public/' . $favicon);
                if (file_exists($faviconPath)) {
                    $faviconUrl = asset('storage/' . $favicon);
                }
            }
        }
        
        // Fallback to default if no valid favicon
        if (!$faviconUrl) {
            $faviconUrl = asset('assets/img/icon/ca-fac4.svg');
        }
        
        // Add cache busting with timestamp
        $faviconUrlWithCache = $faviconUrl . '?v=' . (isset($favicon) && $favicon ? md5($favicon . time()) : time());
    @endphp
    <link rel="icon" type="image/x-icon" href="{{ $faviconUrlWithCache }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ $faviconUrlWithCache }}">
    <link rel="apple-touch-icon" href="{{ $faviconUrlWithCache }}">
    <meta name="msapplication-TileImage" content="{{ $faviconUrlWithCache }}">

    <!-- Open Graph / Social Media Meta Tags -->
    @php
        $isNewsModel = isset($news) && !method_exists($news, 'getItems') && isset($news->image) && $news->image;
    @endphp
    @if($isNewsModel)
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $news->title }}">
    <meta property="og:description" content="{{ $news->excerpt ?? Str::limit(strip_tags($news->content), 160) }}">
    <meta property="og:image" content="{{ $news->image_url }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $news->title }}">
    <meta name="twitter:description" content="{{ $news->excerpt ?? Str::limit(strip_tags($news->content), 160) }}">
    <meta name="twitter:image" content="{{ $news->image_url }}">
    @else
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Website Sekolah')">
    <meta property="og:description" content="Website Resmi MI Al-Hidayah Tarik">
    @if(isset($logoMain) && $logoMain)
    <meta property="og:image" content="{{ asset('storage/' . $logoMain) }}">
    @endif
    <meta property="og:url" content="{{ url()->current() }}">
    @endif

    <!-- css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    
    @stack('styles')
    
    <style>
        /* Warna dominan hijau cerah untuk elemen penting */
        :root {
            --primary-color: #16a34a;
            --primary-hover: #15803d;
        }
        
        /* Link hover dengan warna dominan */
        a:hover {
            color: #16a34a !important;
        }
        
        /* Button hover */
        .ca-btn-primary-4:hover {
            background: #15803d !important;
        }
        
        /* Icon dan accent color */
        .theme-color-4,
        .subtitle-bg-8 {
            background: #16a34a !important;
        }
        
        /* Border dan underline dengan warna dominan */
        .ca-section-subtitle.subtitle-bg-8::before {
            background: #16a34a !important;
        }
        
        /* Preloader Custom Styling */
        .loader-logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            width: 5rem;
            height: 5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            border-radius: 50%;
            padding: 0.625rem;
            box-shadow: 0 0.25rem 1.25rem rgba(0, 0, 0, 0.15);
        }
        
        .loader-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            border-radius: 50%;
        }
        
        .animation-preloader .spinner {
            position: relative;
        }
        
        .txt-loading {
            font-size: 2.5rem !important;
            letter-spacing: 0.125rem;
        }
        
        .txt-loading .letters-loading {
            font-size: 2.5rem !important;
        }
        
        @media (max-width: 767px) {
            .loader-logo {
                width: 4rem;
                height: 4rem;
                padding: 0.5rem;
            }
            
            .txt-loading {
                font-size: 1.875rem !important;
            }
            
            .txt-loading .letters-loading {
                font-size: 1.875rem !important;
            }
        }
        
        /* Hapus elemen dekoratif garis (|) sebelum judul section - Global */
        .ca-section-subtitle::after,
        .ca-section-subtitle:after,
        .subtitle-bg-1::after,
        .subtitle-bg-1:after,
        .subtitle-bg-2::after,
        .subtitle-bg-2:after,
        .subtitle-bg-3::after,
        .subtitle-bg-3:after,
        .subtitle-bg-4::after,
        .subtitle-bg-4:after,
        .subtitle-bg-5::after,
        .subtitle-bg-5:after,
        .subtitle-bg-6::after,
        .subtitle-bg-6:after,
        .subtitle-bg-7::after,
        .subtitle-bg-7:after,
        .subtitle-bg-8::after,
        .subtitle-bg-8:after,
        .subtitle-bg-9::after,
        .subtitle-bg-9:after,
        .subtitle-bg-10::after,
        .subtitle-bg-10:after {
            display: none !important;
            content: none !important;
            width: 0 !important;
            height: 0 !important;
        }
        
    </style>
    <style>
        /* Base font size untuk rem calculation */
        :root {
            font-size: 16px;
        }
        
        /* Navbar Glassmorphism Modern untuk SEMUA Halaman - Dekat dengan Content dan Rounded Lebih */
        .header-area-3.header-area-4.stiky {
            position: fixed !important;
            top: 1.25rem !important;
            left: 1.25rem !important;
            right: 1.25rem !important;
            width: calc(100% - 2.5rem) !important;
            max-width: 100% !important;
            transform: none !important;
            z-index: 9999;
            background: rgba(2, 16, 19, 0.4) !important;
            backdrop-filter: blur(1.25rem) saturate(180%);
            -webkit-backdrop-filter: blur(1.25rem) saturate(180%);
            border-radius: 1.5625rem;
            border: 0.0625rem solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0.5rem 2rem 0 rgba(0, 0, 0, 0.37);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .header-area-3.header-area-4.stiky .header-4 {
            background: transparent !important;
            border-radius: 1.5625rem;
            padding: 0.9375rem 1.875rem;
            top: 0 !important;
            box-shadow: none;
            position: relative;
            left: 0;
            right: 0;
            max-width: 100%;
        }
        
        /* Navbar saat scroll - lebih solid dengan warna hijau #01715d */
        .header-area-3.header-area-4.stiky.scroll-header {
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            width: 100% !important;
            max-width: 100% !important;
            border-radius: 0 !important;
            background: rgba(1, 113, 93, 0.95) !important;
            backdrop-filter: blur(1.875rem) saturate(180%);
            -webkit-backdrop-filter: blur(1.875rem) saturate(180%);
            border: none;
            border-bottom: 0.0625rem solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 0.25rem 1.25rem 0 rgba(1, 113, 93, 0.5);
        }
        
        .header-area-3.header-area-4.stiky.scroll-header .header-4 {
            border-radius: 0 !important;
            padding: 0.75rem 1.875rem;
        }
        
        /* Menu items styling untuk glassmorphism */
        .ca-main-menu-4 ul li a {
            color: rgba(255, 255, 255, 0.95) !important;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 0.5rem 0.9375rem;
            border-radius: 0.625rem;
        }
        
        .ca-main-menu-4 ul li a:hover {
            color: #16a34a !important;
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-0.125rem);
        }
        
        /* Dropdown menu dengan glassmorphism */
        .ca-main-menu-4 ul li .sub-menu {
            background: rgba(1, 113, 93, 0.95) !important;
            backdrop-filter: blur(1.25rem) saturate(180%);
            -webkit-backdrop-filter: blur(1.25rem) saturate(180%);
            border: 0.0625rem solid rgba(255, 255, 255, 0.1);
            border-radius: 0.9375rem;
            box-shadow: 0 0.5rem 2rem 0 rgba(0, 0, 0, 0.5);
            padding: 0.625rem 0;
            margin-top: 0.625rem;
        }
        
        .ca-main-menu-4 ul li .sub-menu li a {
            color: rgba(255, 255, 255, 0.9) !important;
            padding: 0.625rem 1.25rem;
            border-radius: 0.5rem;
        }
        
        .ca-main-menu-4 ul li .sub-menu li a:hover {
            background: rgba(22, 163, 74, 0.2);
            color: #16a34a !important;
        }
        
        /* Submenu Level 2 (Nested) */
        .ca-main-menu-4 ul li .sub-menu li.menu-item-has-children {
            position: relative;
        }
        
        .ca-main-menu-4 ul li .sub-menu li.menu-item-has-children > a {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .ca-main-menu-4 ul li .sub-menu li.menu-item-has-children > a span {
            margin-left: auto;
            padding-left: 0.625rem;
        }
        
        .ca-main-menu-4 ul li .sub-menu li.menu-item-has-children .sub-menu {
            position: absolute;
            left: 100%;
            top: 0;
            margin-top: 0;
            margin-left: 0.3125rem;
            min-width: 12.5rem;
            opacity: 0;
            visibility: hidden;
            transform: translateX(-0.625rem);
            transition: all 0.3s ease;
        }
        
        .ca-main-menu-4 ul li .sub-menu li.menu-item-has-children:hover .sub-menu {
            opacity: 1;
            visibility: visible;
            transform: translateX(0);
        }
        
        .ca-main-menu-4 ul li .sub-menu li.menu-item-has-children .sub-menu li a {
            padding: 0.5rem 1.25rem;
            font-size: 0.875rem;
        }
        
        /* Button CTA dengan glassmorphism effect */
        .ca-btn-primary-4 {
            background: linear-gradient(135deg, #16a34a 0%, #15803d 100%) !important;
            border: 0.0625rem solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 0.25rem 0.9375rem rgba(22, 163, 74, 0.4);
            transition: all 0.3s ease;
        }
        
        .ca-btn-primary-4:hover {
            background: linear-gradient(135deg, #15803d 0%, #166534 100%) !important;
            box-shadow: 0 0.375rem 1.25rem rgba(22, 163, 74, 0.6);
            transform: translateY(-0.125rem);
        }
        
        /* Button PPDB Online dengan warna kuning seperti logo */
        .ppdb-yellow-btn,
        .ca-btn-header .ca-btn-primary-4,
        .ca-offcanvas-contact .ca-btn-primary-4 {
            background: linear-gradient(135deg, #FCD34D 0%, #FBBF24 100%) !important;
            color: #1F2937 !important;
            box-shadow: 0 0.25rem 0.9375rem rgba(251, 191, 36, 0.4);
            border: 0.0625rem solid rgba(251, 191, 36, 0.3);
        }
        
        .ppdb-yellow-btn:hover,
        .ca-btn-header .ca-btn-primary-4:hover,
        .ca-offcanvas-contact .ca-btn-primary-4:hover {
            background: linear-gradient(135deg, #FBBF24 0%, #F59E0B 100%) !important;
            box-shadow: 0 0.375rem 1.25rem rgba(251, 191, 36, 0.6);
            color: #1F2937 !important;
            transform: translateY(-0.125rem);
        }
        
        /* Logo styling */
        .ca-logo img {
            filter: brightness(1.1);
            transition: all 0.3s ease;
            max-height: 3.75rem;
            width: auto;
            object-fit: contain;
        }
        
        .ca-logo:hover img {
            transform: scale(1.05);
        }
        
        /* Logo di offcanvas */
        .ca-offcanvas-logo img {
            max-height: 3.125rem;
            width: auto;
            object-fit: contain;
        }
        
        /* Logo di footer */
        .ca-ft-logo img {
            max-height: 4rem;
            max-width: 12rem;
            width: auto;
            height: auto;
            object-fit: contain;
        }
        
        /* Mobile menu button */
        .ca-offcanvas-toogle {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(0.625rem);
            border: 0.0625rem solid rgba(255, 255, 255, 0.2);
            border-radius: 0.625rem;
            color: rgba(255, 255, 255, 0.95);
            transition: all 0.3s ease;
        }
        
        .ca-offcanvas-toogle:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: scale(1.05);
        }
        
        /* Bottom Navigation Bar untuk Mobile */
        .mobile-bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            background: rgba(2, 16, 19, 0.98);
            backdrop-filter: blur(1.25rem) saturate(180%);
            -webkit-backdrop-filter: blur(1.25rem) saturate(180%);
            border-top: 0.0625rem solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 -0.25rem 1.25rem rgba(0, 0, 0, 0.3);
            z-index: 9998;
            display: none;
            padding: 0.5rem 0;
        }
        
        @media (max-width: 991px) {
            .mobile-bottom-nav {
                display: block;
            }
        }
        
        .mobile-bottom-nav-list {
            display: flex;
            justify-content: space-around;
            align-items: center;
            list-style: none;
            padding: 0;
            margin: 0;
            min-height: 3.75rem;
            max-height: 4.5rem;
        }
        
        .mobile-bottom-nav-list li {
            flex: 1;
            text-align: center;
        }
        
        .mobile-bottom-nav-list li a {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 0.25rem;
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
            border-radius: 0.625rem;
            position: relative;
        }
        
        .mobile-bottom-nav-list li a i {
            font-size: 1.25rem;
            margin-bottom: 0.25rem;
            transition: all 0.3s ease;
        }
        
        .mobile-bottom-nav-list li a span {
            font-size: 0.6875rem;
            font-weight: 500;
        }
        
        .mobile-bottom-nav-list li a:hover,
        .mobile-bottom-nav-list li a.active {
            color: #16a34a;
            background: rgba(22, 163, 74, 0.15);
        }
        
        .mobile-bottom-nav-list li a:hover i,
        .mobile-bottom-nav-list li a.active i {
            transform: translateY(-0.125rem);
            color: #16a34a;
        }
        
        /* Padding untuk konten agar tidak tertutup bottom nav */
        @media (max-width: 991px) {
            body {
                padding-bottom: 4.375rem;
            }
        }
        
        /* Padding untuk konten agar tidak tertutup navbar */
        .ca-breadcrumb-area {
            padding-top: 7.5rem;
        }
        
        .ca-hero-4 {
            padding-top: 0;
        }
        
        main {
            position: relative;
        }
        
        /* Responsive untuk tablet dan mobile */
        @media (max-width: 1199px) {
            .header-area-3.header-area-4.stiky {
                left: 0.625rem !important;
                right: 0.625rem !important;
                width: calc(100% - 1.25rem) !important;
                top: 0.625rem !important;
                border-radius: 1.25rem;
            }
            
            .header-area-3.header-area-4.stiky .header-4 {
                padding: 0.75rem 1.25rem;
                border-radius: 1.25rem;
            }
        }
        
        @media (max-width: 991px) {
            .header-area-3.header-area-4.stiky {
                width: 100% !important;
                top: 0 !important;
                border-radius: 0 !important;
                background: rgba(1, 113, 93, 0.95) !important;
            }
            
            .header-area-3.header-area-4.stiky .header-4 {
                border-radius: 0 !important;
                padding: 0.75rem 0.9375rem;
            }
            
            .ca-breadcrumb-area {
                padding-top: 5rem;
            }
            
            /* Submenu Level 2 untuk mobile - horizontal scroll atau stack */
            .ca-main-menu-4 ul li .sub-menu li.menu-item-has-children .sub-menu {
                position: static;
                opacity: 1;
                visibility: visible;
                transform: none;
                margin-left: 1.25rem;
                margin-top: 0.3125rem;
                border-left: 0.125rem solid rgba(255, 255, 255, 0.1);
                padding-left: 0.625rem;
            }
        }
        
        /* Animasi smooth untuk navbar */
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-1.25rem);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .header-area-3.header-area-4.stiky:not(.scroll-header) {
            animation: slideDown 0.5s ease-out;
        }
        
        /* Developer Credit Styling */
        .footer-copyright {
            text-align: center;
        }
        
        .footer-copyright .copry-right-text-4 {
            margin-bottom: 0.5rem;
        }
        
        .developer-credit {
            margin-top: 0.5rem;
            font-size: 0.875rem;
            color: #6B7280;
        }
        
        .developer-credit a {
            color: #16a34a;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .developer-credit a:hover {
            color: #15803d;
            text-decoration: underline;
        }
    </style>
</head>

<body class="@yield('body-class', '')">

    <!-- Preloader -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner">
                    <div class="loader-logo">
                        <img src="{{ asset('assets/img/logo/logo-mialhidayah.png') }}" alt="MI AL-HIDAYAH Logo">
                    </div>
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="A" class="letters-loading">A</span>
                    <span data-text-preloader="L" class="letters-loading">L</span>
                    <span data-text-preloader="-" class="letters-loading">-</span>
                    <span data-text-preloader="H" class="letters-loading">H</span>
                    <span data-text-preloader="I" class="letters-loading">I</span>
                    <span data-text-preloader="D" class="letters-loading">D</span>
                    <span data-text-preloader="A" class="letters-loading">A</span>
                    <span data-text-preloader="Y" class="letters-loading">Y</span>
                    <span data-text-preloader="A" class="letters-loading">A</span>
                    <span data-text-preloader="H" class="letters-loading">H</span>
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="header-area-3 header-area-4 stiky">
        <div class="container header-4">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg col-md-6 col-6">
                    <!-- ca-logo -->
                    <div class="ca-logo">
                        <a href="{{ route('home') }}"><img src="{{ $logoNavbar ? (filter_var($logoNavbar, FILTER_VALIDATE_URL) ? $logoNavbar : asset('storage/' . $logoNavbar)) : asset('assets/img/logo/logo-navbar.png') }}" alt="MI AL-HIDAYAH Tarik - Sidoarjo"></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 d-none d-lg-block">
                    <!-- ca-main-menu -->
                    <div class="ca-main-menu-4">
                        <nav class="ca-mobile-menu-active-4">
                            <ul>
                                <li><a href="{{ route('home') }}">Beranda</a></li>
                                <li>
                                    <a href="{{ route('profil') }}">Tentang Kami <span><i class="fa-solid fa-angle-down"></i></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('profil') }}">Profil Madrasah</a></li>
                                        <li><a href="{{ route('visi-misi') }}">Visi & Misi</a></li>
                                        <li><a href="{{ route('sejarah') }}">Sejarah</a></li>
                                        <li><a href="{{ route('struktur-organisasi') }}">Struktur Organisasi</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('program-akademik') }}">Program <span><i class="fa-solid fa-angle-down"></i></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('program-akademik') }}">Program Akademik</a></li>
                                        <li><a href="{{ route('ekstrakurikuler') }}">Ekstrakurikuler</a></li>
                                        <li><a href="{{ route('program-akademik') }}">Program Non-Akademik</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Program Unggulan <span><i class="fa-solid fa-angle-right"></i></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('kelas-tahfidz') }}">Kelas Tahfidz</a></li>
                                                <li><a href="{{ route('extra-beragam') }}">Extra Beragam</a></li>
                                                <li><a href="{{ route('madrasah-diniyah') }}">Madrasah Diniyah</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('fasilitas') }}">Fasilitas</a>
                                </li>
                                <li>
                                    <a href="{{ route('berita') }}">Berita</a>
                                </li>
                                <li><a href="{{ route('gallery') }}">Galeri</a></li>
                                <li><a href="{{ route('kontak') }}">Kontak</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg col-md-6 col-6">
                    <!-- ca-btn -->
                    <div class="ca-btn-header d-none d-lg-block text-end">
                        <a href="{{ route('home') }}#contact" class="ca-btn-primary ca-btn-primary-4 ppdb-yellow-btn text-dark br-50">PPDB Online
                            <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                    <div class="ca-header-action-item d-lg-none text-end">
                        <button type="button" class="ca-offcanvas-toogle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                                <rect x="10" width="20" height="2" fill="currentColor"></rect>
                                <rect x="5" y="7" width="25" height="2" fill="currentColor"></rect>
                                <rect x="10" y="14" width="20" height="2" fill="currentColor"></rect>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Offcanvas -->
    <div class="ca-offcanvas w-bg">
        <div class="ca-offcanvas-wrapper">
            <div class="ca-offcanvas-header d-flex justify-content-between align-items-center mb-40">
                <div class="ca-offcanvas-logo">
                    <a href="{{ route('home') }}"><img src="{{ $logoNavbar ? (filter_var($logoNavbar, FILTER_VALIDATE_URL) ? $logoNavbar : asset('storage/' . $logoNavbar)) : asset('assets/img/logo/logo-navbar.png') }}" alt="MI AL-HIDAYAH Tarik - Sidoarjo"></a>
                </div>
                <div class="ca-offcanvas-close">
                    <button class="ca-offcanvas-close-toggle"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="ca-offcanvas-menu-3 mb-40">
                <nav>
                    <ul>
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li><a href="{{ route('profil') }}">Profil Madrasah</a></li>
                        <li>
                            <a href="{{ route('program-akademik') }}">Program <span><i class="fa-solid fa-angle-down"></i></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('program-akademik') }}">Program Akademik</a></li>
                                <li><a href="{{ route('ekstrakurikuler') }}">Ekstrakurikuler</a></li>
                                <li><a href="{{ route('program-akademik') }}">Program Non-Akademik</a></li>
                                <li>
                                    <a href="#">Program Unggulan <span><i class="fa-solid fa-angle-down"></i></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('kelas-tahfidz') }}">Kelas Tahfidz</a></li>
                                        <li><a href="{{ route('extra-beragam') }}">Extra Beragam</a></li>
                                        <li><a href="{{ route('madrasah-diniyah') }}">Madrasah Diniyah</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('fasilitas') }}">Fasilitas</a></li>
                        <li><a href="{{ route('berita') }}">Berita</a></li>
                        <li><a href="{{ route('gallery') }}">Galeri</a></li>
                        <li><a href="{{ route('home') }}#contact">Kontak</a></li>
                    </ul>
                </nav>
            </div>
            <div class="ca-offcanvas-contact mb-40">
                <a href="{{ route('home') }}#contact" class="ca-btn-primary-4 ppdb-yellow-btn text-dark br-50">PPDB Online <span><i class="fa-solid fa-angle-right"></i></span></a>
            </div>
            <div class="ca-offcanvas-contact-info mb-40">
                <h3 class="ca-offcanvas-sm-title">Informasi Kontak</h3>
                <!-- single item -->
                <div class="ca-sm-single-item-4 ca-sm-single-item-1 mb-20">
                    <div class="icon">
                        <span>
                            <i class="fa-solid fa-location-dot"></i>
                        </span>
                    </div>
                    <div class="ca-sm-single-item-4-content">
                        <p><a href="#">Jl. Pendidikan No. 123, Jakarta</a></p>
                    </div>
                </div>

                <!-- single item -->
                <div class="ca-sm-single-item-4 ca-sm-single-item-1 mb-20">
                    <div class="icon">
                        <span>
                            <i class="fa-solid fa-phone"></i>
                        </span>
                    </div>
                    <div class="ca-sm-single-item-4-content">
                        <p><a href="tel:+62212345678">+62 21 2345 6789</a></p>
                    </div>
                </div>

                <!-- single item -->
                <div class="ca-sm-single-item-4 ca-sm-single-item-1 mb-20">
                    <div class="icon">
                        <span>
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                    </div>
                    <div class="ca-sm-single-item-4-content">
                        <p><a href="mailto:info@sekolah.sch.id">info@sekolah.sch.id</a></p>
                    </div>
                </div>
            </div>
            <div class="ca-offcanvas-social mb-40">
                <h3 class="ca-offcanvas-sm-title">Ikuti Kami</h3>
                <div class="ca-footer-social ca-footer-social-4">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="ca-offcanvas-overlay"></div>

    <main>
        @yield('content')
    </main>

    <footer class="cream-bg-3 p-relative pt-100 pb-30">
        <div class="ca-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="ca-footer-4 widget-1">
                            <div class="ca-ft-logo">
                                <a href="{{ route('home') }}"><img src="{{ $logoMain ? (filter_var($logoMain, FILTER_VALIDATE_URL) ? $logoMain : asset('storage/' . $logoMain)) : asset('assets/img/logo/logo-mialhidayah.png') }}" alt="MI AL-HIDAYAH Tarik - Sidoarjo"></a>
                            </div>
                            <div class="ca-ft-content ca-ft-content-3 mb-24">
                                <p class="pt-16">Membangun generasi yang berkarakter, <br> berprestasi, dan berakhlak mulia <br>untuk masa depan yang lebih baik.
                                </p>
                            </div>
                            <div class="ca-footer-social ca-footer-social-4">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl col-md-6 mb-30">
                        <div class="ca-footer widget-2">
                            <h4 class="ca-title fnw-700 theme-black-1 pb-24">Tautan Cepat</h4>
                            <div class="ca-footer-menu ca-footer-menu-4">
                                <ul>
                                    <li><a href="{{ route('home') }}">Beranda</a></li>
                                    <li><a href="{{ route('program-akademik') }}">Program</a></li>
                                    <li><a href="{{ route('fasilitas') }}">Fasilitas</a></li>
                                    <li><a href="{{ route('profil') }}">Tentang Kami</a></li>
                                    <li><a href="{{ route('berita') }}">Berita Terbaru</a></li>
                                    <li><a href="{{ route('kontak') }}">Kontak</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl col-md-6 mb-30">
                        <div class="ca-footer widget-3">
                            <h4 class="ca-title fnw-700 theme-black-1 pb-24">Tautan Lainnya</h4>
                            <div class="ca-footer-menu ca-footer-menu-4">
                                <ul>
                                    <li><a href="#">PPDB Online</a></li>
                                    <li><a href="#">Guru & Staff</a></li>
                                    <li><a href="#">Prestasi & Penghargaan</a></li>
                                    <li><a href="#">Fasilitas</a></li>
                                    <li><a href="#">Akreditasi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="ca-footer widget-4">
                            <h4 class="ca-title fnw-700 theme-black-1 pb-24">Newsletter</h4>
                            <div class="ca-ft-content-4">
                                <p class="pb-32">Berlangganan untuk menerima <br> berita & artikel terbaru</p>
                            </div>
                            <div class="ca-footer-email-sub ca-footer-email-sub-3">
                                <form action="#">
                                    <input type="email" placeholder="Alamat Email..">
                                </form>
                                <button class="ca-btn-primary ca-btn-primary-4 theme-bg-4 text-white br-50" type="submit"
                                    value="submit">Berlangganan <span><i class="fa-solid fa-arrow-right"></i></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copy-right-border border-1"></div>
                    </div>
                    <div class="col-lg-12">
                        <div class="footer-copyright text-center pt-24">
                            <p class="copry-right-text-4 mb-2">Copyright &COPY;{{ date('Y') }} MI Al-Hidayah Tarik. All Rights Reserved</p>
                            <p class="developer-credit">
                                Developed by <a href="https://andidev.id" target="_blank" rel="noopener noreferrer">Bos Andi</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <button id="topBtn4"><i class="fa-solid fa-arrow-up"></i></button>

    <!-- Mobile Bottom Navigation -->
    <nav class="mobile-bottom-nav d-lg-none">
        <ul class="mobile-bottom-nav-list">
            <li>
                <a href="{{ route('home') }}" class="bottom-nav-link">
                    <i class="fa-solid fa-home"></i>
                    <span>Beranda</span>
                </a>
            </li>
            <li>
                <a href="{{ route('profil') }}" class="bottom-nav-link">
                    <i class="fa-solid fa-info-circle"></i>
                    <span>Tentang</span>
                </a>
            </li>
            <li>
                <a href="{{ route('program-akademik') }}" class="bottom-nav-link">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <span>Program</span>
                </a>
            </li>
            <li>
                <a href="{{ route('berita') }}" class="bottom-nav-link">
                    <i class="fa-solid fa-newspaper"></i>
                    <span>Berita</span>
                </a>
            </li>
            <li>
                <a href="{{ route('gallery') }}" class="bottom-nav-link">
                    <i class="fa-solid fa-images"></i>
                    <span>Galeri</span>
                </a>
            </li>
            <li>
                <a href="{{ route('fasilitas') }}" class="bottom-nav-link">
                    <i class="fa-solid fa-building"></i>
                    <span>Fasilitas</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- js file -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
    <script>
        // Navbar transparan di atas, gelap saat scroll
        $(window).on('scroll', function() {
            var scroll = $(window).scrollTop();
            if (scroll < 1) {
                $(".stiky").removeClass("scroll-header");
            } else {
                $(".stiky").addClass("scroll-header");
            }
        });
        
        // Trigger saat page load untuk memastikan state benar
        $(document).ready(function() {
            var scroll = $(window).scrollTop();
            if (scroll < 1) {
                $(".stiky").removeClass("scroll-header");
            } else {
                $(".stiky").addClass("scroll-header");
            }
            
            // Update active link on bottom nav
            function updateActiveNav() {
                var currentPath = window.location.pathname;
                $('.bottom-nav-link').removeClass('active');
                $('.bottom-nav-link').each(function() {
                    var linkPath = $(this).attr('href');
                    if (currentPath === linkPath || (currentPath === '/' && linkPath.includes('home'))) {
                        $(this).addClass('active');
                    }
                });
            }
            
            updateActiveNav();
        });
    </script>

    @stack('scripts')
</body>

</html>

