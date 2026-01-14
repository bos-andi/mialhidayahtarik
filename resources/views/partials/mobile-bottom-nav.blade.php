{{-- Mobile Bottom Navigation - Hanya tampil di mobile --}}
<style>
    /* Elegant Bottom Navigation Bar untuk Mobile dengan Glassmorphism */
    .navfloat {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        z-index: 9998;
        display: none; /* Hidden by default (desktop) */
        padding: 0.75rem 1rem;
        background: rgba(2, 16, 19, 0.35) !important; /* Semi transparan - tidak menutupi konten hero */
        backdrop-filter: blur(1.5rem) saturate(180%);
        -webkit-backdrop-filter: blur(1.5rem) saturate(180%);
        border-radius: 2rem 2rem 0 0;
        border-top: 0.125rem solid rgba(255, 255, 255, 0.15);
        box-shadow: 0 -0.5rem 2rem rgba(0, 0, 0, 0.25);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    /* Pastikan icon dan tombol tetap jelas terlihat */
    .navfloat .navfloat-link {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(0.5rem);
        -webkit-backdrop-filter: blur(0.5rem);
    }
    
    .navfloat .navfloat-link:hover,
    .navfloat .navfloat-link:focus {
        background: rgba(22, 163, 74, 0.2);
        backdrop-filter: blur(0.75rem);
        -webkit-backdrop-filter: blur(0.75rem);
    }
    
    /* Hanya tampil di mobile (max-width: 991px) */
    @media (max-width: 991px) {
        .navfloat {
            display: flex !important;
        }
        
        body {
            padding-bottom: 4.5rem;
        }
    }
    
    /* Desktop: Pastikan tidak tampil */
    @media (min-width: 992px) {
        .navfloat {
            display: none !important;
        }
        
        body {
            padding-bottom: 0 !important;
        }
    }
    
    .navfloat-item {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .navfloat-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 3rem;
        height: 3rem;
        border: none;
        background: rgba(255, 255, 255, 0.05) !important; /* Glassmorphism untuk tombol */
        backdrop-filter: blur(0.5rem);
        -webkit-backdrop-filter: blur(0.5rem);
        color: #ffffff !important;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border-radius: 0.75rem;
        position: relative;
        padding: 0;
        text-decoration: none;
        border: 0.0625rem solid rgba(255, 255, 255, 0.1);
    }
    
    .navfloat-link:hover,
    .navfloat-link:focus,
    .navfloat-link.active {
        color: #16a34a !important;
        background: rgba(22, 163, 74, 0.2) !important;
        backdrop-filter: blur(0.75rem);
        -webkit-backdrop-filter: blur(0.75rem);
        border-color: rgba(22, 163, 74, 0.3);
        transform: translateY(-0.25rem);
    }
    
    .navfloat-link.i-main {
        width: 3.5rem;
        height: 3.5rem;
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%) !important;
        color: #ffffff !important;
        box-shadow: 0 0.25rem 1rem rgba(22, 163, 74, 0.6);
    }
    
    .navfloat-link.i-main:hover {
        background: linear-gradient(135deg, #15803d 0%, #166534 100%) !important;
        box-shadow: 0 0.5rem 1.5rem rgba(22, 163, 74, 0.8);
        transform: translateY(-0.375rem) scale(1.05);
        color: #ffffff !important;
    }
    
    /* SVG Icon Styling - Force White Color dengan selector yang lebih kuat */
    .navfloat-link .svg-icon {
        width: 1.5rem !important;
        height: 1.5rem !important;
        display: block !important;
        transition: all 0.3s ease;
        opacity: 1 !important;
        visibility: visible !important;
        color: #ffffff !important;
    }
    
    .navfloat-link.i-main .svg-icon {
        width: 1.75rem !important;
        height: 1.75rem !important;
    }
    
    /* Force all SVG paths to be white - dengan selector yang sangat spesifik */
    .navfloat .navfloat-link .svg-icon path,
    .navfloat-link .svg-icon path,
    #navfloat .navfloat-link .svg-icon path,
    .navfloat-link .svg-icon circle,
    .navfloat-link .svg-icon rect {
        fill: #ffffff !important;
        stroke: #ffffff !important;
        stroke-width: 2 !important;
        color: #ffffff !important;
    }
    
    /* Override fill="currentColor" dari HTML */
    .navfloat-link .svg-icon path[fill="currentColor"],
    .navfloat-link .svg-icon path[fill*="current"] {
        fill: #ffffff !important;
    }
    
    /* Hover state - green for non-main buttons */
    .navfloat-link:not(.i-main):hover .svg-icon path,
    .navfloat-link:not(.i-main):focus .svg-icon path,
    .navfloat-link:not(.i-main):hover .svg-icon circle,
    .navfloat-link:not(.i-main):focus .svg-icon circle {
        fill: #16a34a !important;
        stroke: #16a34a !important;
    }
    
    /* Main button (WhatsApp) always white - dengan selector yang lebih kuat */
    .navfloat-link.i-main .svg-icon path,
    .navfloat-link.i-main:hover .svg-icon path,
    .navfloat-link.i-main:focus .svg-icon path,
    .navfloat-link.i-main .svg-icon path[fill="currentColor"],
    #navfloat .navfloat-link.i-main .svg-icon path {
        fill: #ffffff !important;
        stroke: none !important;
    }
    
    /* Ensure SVG container is visible */
    .navfloat-link .svg-icon {
        opacity: 1 !important;
        visibility: visible !important;
        display: block !important;
        width: 1.5rem !important;
        height: 1.5rem !important;
    }
    
    .navfloat-link.i-main .svg-icon {
        width: 1.75rem !important;
        height: 1.75rem !important;
    }
    
    /* Pastikan semua elemen SVG terlihat dan putih */
    .navfloat-link svg,
    .navfloat-link svg * {
        display: block !important;
        visibility: visible !important;
        opacity: 1 !important;
    }
    
    /* Fallback: gunakan filter untuk memastikan icon putih terlihat jika fill tidak bekerja */
    .navfloat-link:not(.i-main) .svg-icon {
        filter: brightness(0) invert(1) !important;
    }
    
    /* Main button tidak perlu filter karena background hijau dan sudah putih */
    .navfloat-link.i-main .svg-icon {
        filter: none !important;
    }
</style>

<!-- Elegant Mobile Bottom Navigation -->
<nav class="navfloat position-fixed d-flex fs-3 bg-body" id="navfloat">
    <div class="navfloat-item">
        <a href="{{ route('home') }}" aria-label="Beranda" class="navfloat-link i-home text-hov-primary">
            <svg class="svg-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" style="fill: #ffffff;">
                <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" fill="#ffffff"></path>
            </svg>
        </a>
    </div>
    <div class="navfloat-item">
        <button aria-controls="navbar-section" aria-expanded="false" aria-label="Toggle navigation" class="navfloat-link i-menu text-hov-primary" type="button" id="navMenuToggle">
            <svg class="svg-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" style="fill: #ffffff;">
                <path d="M2.5 7C2.5 9.48528 4.51472 11.5 7 11.5C9.48528 11.5 11.5 9.48528 11.5 7C11.5 4.51472 9.48528 2.5 7 2.5C4.51472 2.5 2.5 4.51472 2.5 7ZM2.5 17C2.5 19.4853 4.51472 21.5 7 21.5C9.48528 21.5 11.5 19.4853 11.5 17C11.5 14.5147 9.48528 12.5 7 12.5C4.51472 12.5 2.5 14.5147 2.5 17ZM12.5 17C12.5 19.4853 14.5147 21.5 17 21.5C19.4853 21.5 21.5 19.4853 21.5 17C21.5 14.5147 19.4853 12.5 17 12.5C14.5147 12.5 12.5 14.5147 12.5 17Z"></path>
            </svg>
        </button>
    </div>
    <div class="navfloat-item">
        <button aria-label="WhatsApp" class="navfloat-link i-whatsapp i-main" type="button" onclick="window.open('https://wa.me/622123456789', '_blank')">
            <svg class="svg-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" style="fill: #ffffff;">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.372a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" fill="#ffffff"></path>
            </svg>
        </button>
    </div>
    <div class="navfloat-item">
        <a href="{{ route('berita') }}" aria-label="Berita" class="navfloat-link i-news text-hov-primary">
            <svg class="svg-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" style="fill: #ffffff;">
                <path d="M19 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3ZM19 19H5V5H19V19ZM7 7H17V9H7V7ZM7 11H17V13H7V11ZM7 15H13V17H7V15Z" fill="#ffffff"></path>
            </svg>
        </a>
    </div>
    <div class="navfloat-item">
        <button aria-label="Go to top" class="navfloat-link i-top text-hov-primary" type="button" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
            <svg class="svg-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" style="fill: #ffffff;">
                <path d="M13.0001 7.82843V20H11.0001V7.82843L5.63614 13.1924L4.22192 11.7782L12.0001 4L19.7783 11.7782L18.3641 13.1924L13.0001 7.82843Z" fill="#ffffff"></path>
            </svg>
        </button>
    </div>
</nav>

<script>
    // JavaScript untuk mobile bottom navigation
    $(document).ready(function() {
        // Toggle dari bottom nav menu button
        $(document).off('click', '#navMenuToggle').on('click', '#navMenuToggle', function(e) {
            e.preventDefault();
            e.stopPropagation();
            if ($(".ca-offcanvas").hasClass("ca-offcanvas-open")) {
                closeOffcanvas();
            } else {
                openOffcanvas();
            }
        });
        
        // Smooth scroll to top - show/hide button
        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $('.navfloat-link.i-top').fadeIn();
            } else {
                $('.navfloat-link.i-top').fadeOut();
            }
        });
    });
</script>

