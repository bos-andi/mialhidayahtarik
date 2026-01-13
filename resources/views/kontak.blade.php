@extends('layouts.app')

@section('title', 'Kontak - MI AL-HIDAYAH Tarik')

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
                <h2 class="ca-breadcrumb-title fnw-600">Hubungi Kami</h2>
                <div class="it-breadcum-link">
                    <a href="{{ route('home') }}">Beranda</a>
                    <span><i class="fa-solid fa-angle-right"></i></span>
                    <a class="active" href="#">Kontak</a>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->
    
    <!-- Contact Info Section -->
    <section class="ca-contact-inner pt-100 pb-70">
        <div class="container">
            <div class="row">
                <!-- Alamat -->
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="ca-location-3 contact-card">
                        <div class="ca-location-icbox">
                            <div class="ca-location-icbox-img">
                                <span><i class="fa-solid fa-location-dot"></i></span>
                            </div>
                            <div class="ca-location-icbox-text">
                                <h4 class="ca-title fnw-600 theme-black-3 pb-16">Alamat Sekolah</h4>
                                <p>Jl. Pendidikan No. 123<br>
                                   Tarik, Sidoarjo<br>
                                   Jawa Timur, Indonesia
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Telepon -->
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="ca-location-3 contact-card">
                        <div class="ca-location-icbox">
                            <div class="ca-location-icbox-img">
                                <span><i class="fa-solid fa-phone"></i></span>
                            </div>
                            <div class="ca-location-icbox-text">
                                <h4 class="ca-title fnw-600 theme-black-3 pb-16">Hubungi Kami</h4>
                                <a href="tel:+622123456789">+62 21 2345 6789</a> <br>
                                <a href="https://wa.me/622123456789" target="_blank" class="whatsapp-link">
                                    <i class="fa-brands fa-whatsapp"></i> WhatsApp: +62 21 2345 6789
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Email -->
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="ca-location-3 contact-card">
                        <div class="ca-location-icbox">
                            <div class="ca-location-icbox-img">
                                <span><i class="fa-solid fa-envelope"></i></span>
                            </div>
                            <div class="ca-location-icbox-text">
                                <h4 class="ca-title fnw-600 theme-black-3 pb-16">Email Kami</h4>
                                <a href="mailto:info@mialhidayahtarik.sch.id">info@mialhidayahtarik.sch.id</a>
                                <br>
                                <a href="mailto:admin@mialhidayahtarik.sch.id">admin@mialhidayahtarik.sch.id</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Google Maps -->
    <div class="ca-maps-wrapper">
        <div class="ca-maps">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.0610516228794!2d112.51174477574607!3d-7.458498473514975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780c0d12789a4f%3A0xcea5568adc7946d0!2sMI%20AL-HIDAYAH%20TARIK!5e0!3m2!1sen!2sid!4v1768281149845!5m2!1sen!2sid"
                class="contact-page__google-map" 
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
    
    <!-- Contact Form Section -->
    <section class="ca-conatct-form1 pb-100 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="ca-contact-form-content text-center mb-60">
                        <h5 class="ca-section-subtitle subtitle-bg-8 p-relative theme-black-4 br-50 d-inline-block">Kontak</h5>
                        <h2 class="ca-section-title theme-black-4 fnw-600 pt-20 pb-16 ca-text-cap">Kirim Pesan kepada Kami</h2>
                        <p class="pt-16">Silakan isi form di bawah ini untuk menghubungi kami. Kami akan merespons pesan Anda secepat mungkin.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="ca-contact-from w-bg ca-contact-from-3">
                        <form action="#" method="POST" id="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-20">
                                    <div class="ca-contact-input">
                                        <input type="text" name="name" placeholder="Nama Lengkap *" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <div class="ca-contact-input">
                                        <input type="email" name="email" placeholder="Alamat Email *" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <div class="ca-contact-input">
                                        <input type="tel" name="phone" placeholder="Nomor Telepon">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <div class="ca-contact-input">
                                        <input type="text" name="subject" placeholder="Subjek *" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-20">
                                    <div class="ca-contact-input">
                                        <textarea name="message" placeholder="Pesan Anda *" rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="ca-contact-btn">
                                        <button type="submit" class="ca-btn-primary ca-btn-primary-4 theme-bg-4 text-white br-50">
                                            Kirim Pesan <span><i class="fa-solid fa-arrow-right"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* Contact Info Cards - Elegant & Professional */
    .ca-contact-inner {
        background: linear-gradient(135deg, #f0fdf4 0%, #ffffff 50%, #f0fdf4 100%);
        position: relative;
        overflow: hidden;
    }
    
    .ca-contact-inner::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="%2316a34a" fill-opacity="0.03"><circle cx="30" cy="30" r="2"/></g></svg>');
        opacity: 0.5;
        pointer-events: none;
    }
    
    .contact-card {
        background: white;
        border-radius: 1.5rem;
        padding: 2.5rem;
        box-shadow: 0 0.25rem 1.5rem rgba(0, 0, 0, 0.08);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        height: 100%;
        border: 0.0625rem solid rgba(22, 163, 74, 0.1);
        position: relative;
        overflow: hidden;
    }
    
    .contact-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 0.25rem;
        background: linear-gradient(90deg, #16a34a 0%, #22c55e 50%, #16a34a 100%);
        transform: scaleX(0);
        transition: transform 0.4s ease;
    }
    
    .contact-card:hover {
        transform: translateY(-0.75rem);
        box-shadow: 0 0.75rem 2.5rem rgba(22, 163, 74, 0.2);
        border-color: rgba(22, 163, 74, 0.3);
    }
    
    .contact-card:hover::before {
        transform: scaleX(1);
    }
    
    .ca-location-icbox {
        display: flex;
        align-items: flex-start;
        gap: 1.5rem;
    }
    
    .ca-location-icbox-img {
        flex-shrink: 0;
        width: 4.5rem;
        height: 4.5rem;
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
        border-radius: 1.25rem;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 0.5rem 1.5rem rgba(22, 163, 74, 0.3);
        position: relative;
        overflow: hidden;
    }
    
    .ca-location-icbox-img::after {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transform: rotate(45deg);
        transition: all 0.6s;
    }
    
    .contact-card:hover .ca-location-icbox-img::after {
        animation: shine 0.6s;
    }
    
    @keyframes shine {
        0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
        100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
    }
    
    .ca-location-icbox-img i {
        font-size: 1.75rem;
        color: white;
        z-index: 1;
        position: relative;
    }
    
    .ca-location-icbox-text h4 {
        color: #1f2937;
        font-size: 1.375rem;
        margin-bottom: 1rem;
        font-weight: 600;
    }
    
    .ca-location-icbox-text p {
        color: #6b7280;
        line-height: 1.8;
        margin: 0;
        font-size: 0.9375rem;
    }
    
    .ca-location-icbox-text a {
        color: #16a34a;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
        font-weight: 500;
        margin-top: 0.5rem;
    }
    
    .ca-location-icbox-text a:hover {
        color: #15803d;
        transform: translateX(0.375rem);
    }
    
    .whatsapp-link {
        color: #25D366 !important;
    }
    
    .whatsapp-link:hover {
        color: #128C7E !important;
    }
    
    /* Google Maps - Elegant Design */
    .ca-maps-wrapper {
        position: relative;
        padding: 0;
        margin: 0;
        background: #f9fafb;
    }
    
    .ca-maps {
        width: 100%;
        height: 37.5rem;
        position: relative;
        overflow: hidden;
        border-radius: 0;
        box-shadow: 0 0.5rem 2rem rgba(0, 0, 0, 0.1);
    }
    
    .contact-page__google-map {
        width: 100%;
        height: 100%;
        border: none;
        filter: grayscale(20%) brightness(1.05);
        transition: filter 0.3s ease;
    }
    
    .ca-maps:hover .contact-page__google-map {
        filter: grayscale(0%) brightness(1);
    }
    
    /* Contact Form - Professional Design */
    .ca-conatct-form1 {
        background: linear-gradient(180deg, #ffffff 0%, #f9fafb 100%);
        position: relative;
    }
    
    .ca-conatct-form1::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 0.25rem;
        background: linear-gradient(90deg, #16a34a 0%, #22c55e 50%, #16a34a 100%);
    }
    
    .ca-contact-form-content h5 {
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%) !important;
        color: white;
        padding: 0.625rem 1.5rem;
        font-size: 0.875rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        box-shadow: 0 0.25rem 1rem rgba(22, 163, 74, 0.3);
    }
    
    .ca-contact-form-content h2 {
        color: #1f2937;
        font-size: 2.75rem;
        font-weight: 700;
        line-height: 1.2;
    }
    
    .ca-contact-form-content p {
        color: #6b7280;
        font-size: 1.0625rem;
        line-height: 1.8;
        max-width: 37.5rem;
        margin: 0 auto;
    }
    
    .ca-contact-from-3 {
        border-radius: 1.5rem;
        padding: 3rem;
        box-shadow: 0 0.75rem 2.5rem rgba(0, 0, 0, 0.1);
        background: white;
        border: 0.0625rem solid rgba(22, 163, 74, 0.1);
        position: relative;
        overflow: hidden;
    }
    
    .ca-contact-from-3::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 0.25rem;
        background: linear-gradient(90deg, #16a34a 0%, #22c55e 50%, #16a34a 100%);
    }
    
    .ca-contact-input {
        position: relative;
    }
    
    .ca-contact-input input,
    .ca-contact-input textarea {
        width: 100%;
        padding: 1rem 1.5rem;
        border: 0.125rem solid #e5e7eb;
        border-radius: 0.75rem;
        font-size: 0.9375rem;
        font-family: inherit;
        transition: all 0.3s ease;
        background: #f9fafb;
        color: #1f2937;
    }
    
    .ca-contact-input input::placeholder,
    .ca-contact-input textarea::placeholder {
        color: #9ca3af;
    }
    
    .ca-contact-input input:focus,
    .ca-contact-input textarea:focus {
        outline: none;
        border-color: #16a34a;
        background: white;
        box-shadow: 0 0 0 0.25rem rgba(22, 163, 74, 0.1);
        transform: translateY(-0.0625rem);
    }
    
    .ca-contact-input textarea {
        min-height: 10rem;
        resize: vertical;
    }
    
    .ca-contact-btn {
        text-align: center;
        margin-top: 1.5rem;
    }
    
    .ca-contact-btn .ca-btn-primary-4 {
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%) !important;
        box-shadow: 0 0.5rem 1.5rem rgba(22, 163, 74, 0.4);
        padding: 1rem 3rem;
        font-size: 1rem;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
        position: relative;
        overflow: hidden;
    }
    
    .ca-contact-btn .ca-btn-primary-4::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.5s;
    }
    
    .ca-contact-btn .ca-btn-primary-4:hover::before {
        left: 100%;
    }
    
    .ca-contact-btn .ca-btn-primary-4:hover {
        background: linear-gradient(135deg, #15803d 0%, #166534 100%) !important;
        box-shadow: 0 0.75rem 2rem rgba(22, 163, 74, 0.5);
        transform: translateY(-0.125rem);
    }
    
    .ca-contact-btn .ca-btn-primary-4:active {
        transform: translateY(0);
    }
    
    /* Responsive Design */
    @media (max-width: 992px) {
        .ca-contact-form-content h2 {
            font-size: 2.25rem;
        }
        
        .ca-contact-from-3 {
            padding: 2rem;
        }
    }
    
    @media (max-width: 768px) {
        .ca-contact-form-content h2 {
            font-size: 1.875rem;
        }
        
        .ca-contact-from-3 {
            padding: 1.875rem;
        }
        
        .contact-card {
            padding: 2rem;
        }
        
        .ca-maps {
            height: 25rem;
        }
        
        .ca-location-icbox-img {
            width: 4rem;
            height: 4rem;
        }
        
        .ca-location-icbox-img i {
            font-size: 1.5rem;
        }
    }
    
    @media (max-width: 576px) {
        .ca-contact-form-content h2 {
            font-size: 1.625rem;
        }
        
        .ca-contact-from-3 {
            padding: 1.5rem;
        }
        
        .contact-card {
            padding: 1.5rem;
        }
        
        .ca-location-icbox {
            flex-direction: column;
            text-align: center;
        }
        
        .ca-location-icbox-img {
            margin: 0 auto;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.getElementById('contact-form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(this);
        
        // Show loading state
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Mengirim...';
        submitBtn.disabled = true;
        
        // Simulate form submission (you can replace this with actual AJAX call)
        setTimeout(() => {
            alert('Terima kasih! Pesan Anda telah terkirim. Kami akan menghubungi Anda segera.');
            this.reset();
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        }, 1500);
    });
</script>
@endpush
