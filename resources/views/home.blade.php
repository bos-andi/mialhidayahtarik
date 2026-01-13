@extends('layouts.app')

@section('title', 'Beranda - Website Sekolah')

@section('content')
    <!-- slider section start -->
    <div class="ca-hero-4 hero-fullscreen p-relative z-index-1">
        <!-- Background Image -->
        <div class="hero-background-img"></div>
        
        <!-- Gradient Overlay -->
        <div class="hero-overlay"></div>
        
        <!-- Content -->
        <div class="container h-100">
            <div class="row h-100 align-items-start">
                <div class="col-lg-8 col-xl-7">
                    <div class="ca-hero-4-content hero-content-position wow tpFadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <h5 class="ca-section-subtitle subtitle-bg-8 p-relative theme-black-4 br-50">Selamat Datang</h5>
                        <h1 class="ca-slider-heading text-white pt-20 pb-20 ca-text-cap">{{ $heroTitle }}</h1>
                        <p class="pb-32 text-white">{{ $heroSubtitle }}</p>
                        <!-- btn -->
                        <div class="ca-hero-4-btn">
                            <a href="{{ $heroCtaLink }}" class="ca-btn-primary ca-btn-primary-4 theme-bg-4 text-white br-50">{{ $heroCtaText }}<span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider section end -->
    <!-- circle text -->
    <div class="ca-circle-text text-center">
        <img class="circle-text-animation" src="{{ $logoMain ? (filter_var($logoMain, FILTER_VALIDATE_URL) ? $logoMain : asset('storage/' . $logoMain)) : asset('assets/img/logo/logo-mialhidayah.png') }}" alt="MI AL-HIDAYAH Logo">
    </div>

    <!-- about section start -->
    <section class="ca-about-4 pb-70" id="about">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-xl-6 mb-30">
                    <div class="ca-ab-4-img p-relative z-index-1">
                        <div class="ca-ab-counter-4">
                            <h3 class="ca-counter-title fnw-700"><span class="counter">25</span>+</h3>
                            <p>Tahun Pengalaman</p>
                        </div>
                        <img class="w-100 ca-ab-sm-img" src="{{ asset('assets/img/about/ca-ch-2.png') }}" alt="">
                        <img class="w-100 ca-ab-lng-img" src="{{ asset('assets/img/about/ca-about-4.1.png') }}" alt="">
                    </div>
                </div>


                <div class="col-xl-6 mb-30">
                    <div class="ca-about-content-4">
                        <h5 class="ca-section-subtitle subtitle-bg-8 p-relative theme-black-4 br-50">Tentang Kami</h5>
                        <h2 class="ca-section-title theme-black-4 fnw-600 pt-16">Bagaimana Kami Memberikan Keunggulan</h2>
                        <p class="pt-16 pb-24">Kami memanfaatkan teknologi terkini & jaringan global untuk memastikan <br>
                            pembelajaran yang mulus, sementara tim berpengalaman kami memberikan <br> dukungan personal dan
                            bimbingan ahli di setiap langkah perjalanan pendidikan.</p>
                    </div>
                    <div class="ca-service-4-list">
                        <ul>
                            <li><span><i class="fa-solid fa-check"></i></span>Kurikulum Terintegrasi dan Berkarakter</li>
                            <li><span><i class="fa-solid fa-check"></i></span>Fasilitas Pendidikan Lengkap dan Modern</li>
                            <li><span><i class="fa-solid fa-check"></i></span>Program Pengembangan Potensi Siswa</li>
                        </ul>
                    </div>
                    <div class="ca-counter-servic-4 br-7 pt-24">
                        <!-- single counter area -->
                        <div class="ca-counter-area-4 mb-30">
                            <h3 class="ca-counter-title fnw-700 pb-16"><span class="counter">215</span>+</h3>
                            <p>Siswa Aktif</p>
                        </div>
                        <!-- single counter area -->
                        <div class="ca-counter-area-4 mb-30">
                            <h3 class="ca-counter-title fnw-700 pb-16"><span class="counter">735</span>+</h3>
                            <p>Alumni Berprestasi</p>
                        </div>
                    </div>
                    <div class="ca-about-4-btn">
                        <a href="{{ route('profil') }}" class="ca-btn-primary ca-btn-primary-4 theme-bg-4 text-white br-50">Pelajari Lebih Lanjut
                            <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about section end -->
    <!-- service section start -->
    <section class="ca-service-4 cream-bg-3 pt-100 pb-70 p-relative z-index-1" id="program">
        <div class="container">
            <div class="ca-service-content-4 text-center mb-60 aos-init aos-animate" data-aos="fade-up"
                data-aos-duration="800">
                <h5 class="ca-section-subtitle subtitle-bg-8 p-relative theme-black-4 br-50">Program Kami</h5>
                <h2 class="ca-section-title theme-black-4 fnw-600 pt-16 ca-text-cap">Program Pendidikan Unggulan</h2>
                <p class="pt-16">Dari program akademik hingga ekstrakurikuler, kami menyediakan <br> berbagai program
                    pendidikan yang memastikan pengembangan holistik siswa.</p>
            </div>
            <div class="row">
                <div class="ca-services-4">
                    <!-- single servic-item -->
                    <div class="ca-service-4-item br-7 fix p-relative z-index-1 mb-30">
                        <img class="w-100" src="{{ asset('assets/img/service/ca-service-4.1.png') }}" alt="">
                        <div class="ca-servic-4-ic-box p-absolute">
                            <div class="ca-service-4-icon">
                                <span><img src="{{ asset('assets/img/icon/ca-service-ic-4.1.svg') }}" alt=""></span>
                            </div>
                            <div class="ca-service-4-content">
                                <h3 class="ca-ser-4-title"><a href="#">Program Akademik</a></h3>
                                <p>Kurikulum terintegrasi yang dirancang untuk mengembangkan kemampuan akademik siswa dengan
                                    pendekatan pembelajaran yang inovatif dan menyenangkan.</p>
                                <a href="#" class="read-mor4">Baca Selengkapnya <span><i class="fa-solid fa-angle-right"></i></span></a>
                            </div>
                        </div>
                        <div class="ca-ser-overlay p-absolute">
                            <img class="w-100" src="{{ asset('assets/img/service/ca-overlay-servic-4.png') }}" alt="">
                        </div>
                    </div>
                    <!-- single servic-item -->
                    <div class="ca-service-4-item br-7 fix p-relative z-index-1 mb-30">
                        <img class="w-100" src="{{ asset('assets/img/service/ca-service-4.3.png') }}" alt="">
                        <div class="ca-servic-4-ic-box p-absolute">
                            <div class="ca-service-4-icon">
                                <span><img src="{{ asset('assets/img/icon/ca-service-ic-4.3.svg') }}" alt=""></span>
                            </div>
                            <div class="ca-service-4-content">
                                <h3 class="ca-ser-4-title"><a href="#">Ekstrakurikuler</a></h3>
                                <p>Berbagai kegiatan ekstrakurikuler yang mengembangkan bakat, minat, dan karakter siswa di
                                    bidang olahraga, seni, dan organisasi.</p>
                                <a href="#" class="read-mor4">Baca Selengkapnya <span><i class="fa-solid fa-angle-right"></i></span></a>
                            </div>
                        </div>
                        <div class="ca-ser-overlay p-absolute">
                            <img class="w-100" src="{{ asset('assets/img/service/ca-overlay-servic-4.png') }}" alt="">
                        </div>
                    </div>
                    <!-- single servic-item -->
                    <div class="ca-service-4-item br-7 fix p-relative z-index-1 mb-30">
                        <img class="w-100" src="{{ asset('assets/img/service/ca-service-4.1.png') }}" alt="">
                        <div class="ca-servic-4-ic-box p-absolute">
                            <div class="ca-service-4-icon">
                                <span><img src="{{ asset('assets/img/icon/ca-service-ic-4.1.svg') }}" alt=""></span>
                            </div>
                            <div class="ca-service-4-content">
                                <h3 class="ca-ser-4-title"><a href="#">Program Karakter</a></h3>
                                <p>Program pembentukan karakter yang mengintegrasikan nilai-nilai moral, etika, dan
                                    kepemimpinan dalam setiap aktivitas pembelajaran.</p>
                                <a href="#" class="read-mor4">Baca Selengkapnya <span><i class="fa-solid fa-angle-right"></i></span></a>
                            </div>
                        </div>
                        <div class="ca-ser-overlay p-absolute">
                            <img class="w-100" src="{{ asset('assets/img/service/ca-overlay-servic-4.png') }}" alt="">
                        </div>
                    </div>
                    <!-- single servic-item -->
                    <div class="ca-service-4-item br-7 fix p-relative z-index-1 mb-30">
                        <img class="w-100" src="{{ asset('assets/img/service/ca-service-4.1.png') }}" alt="">
                        <div class="ca-servic-4-ic-box p-absolute">
                            <div class="ca-service-4-icon">
                                <span><img src="{{ asset('assets/img/icon/ca-service-ic-4.2.svg') }}" alt=""></span>
                            </div>
                            <div class="ca-service-4-content">
                                <h3 class="ca-ser-4-title"><a href="#">Program Beasiswa</a></h3>
                                <p>Program beasiswa untuk siswa berprestasi dan siswa kurang mampu, memberikan kesempatan
                                    pendidikan yang sama bagi semua.</p>
                                <a href="#" class="read-mor4">Baca Selengkapnya <span><i class="fa-solid fa-angle-right"></i></span></a>
                            </div>
                        </div>
                        <div class="ca-ser-overlay p-absolute">
                            <img class="w-100" src="{{ asset('assets/img/service/ca-overlay-servic-4.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section end -->
    
    <!-- pricing plan start -->
    <section class="ca-pricing-plan pt-100 pb-70">
        <div class="container">
            <div class="ca-pricing-content-4 text-center mb-60 aos-init aos-animate" data-aos="fade-up"
                data-aos-duration="800">
                <h5 class="ca-section-subtitle subtitle-bg-8 p-relative theme-black-4 br-50">Program Unggulan</h5>
                <h2 class="ca-section-title theme-black-4 fnw-600 pt-16 ca-text-cap">Program Pendidikan Terpilih</h2>
                <p class="pt-16">Kami menawarkan berbagai program pendidikan yang dirancang khusus <br> untuk mengembangkan potensi dan bakat siswa secara optimal.</p>
            </div>
            <div class="row">
                <!-- single pricing-box -->
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="ca-pricing-box br-7 aos-init aos-animate" data-aos="fade-right" data-aos-duration="800">
                        <div class="ca-pring-box-content">
                            <h2 class="ca-pricing-box-title fnw-600">Kelas Tahfidz</h2>
                            <p class="pt-16 pb-32">Program menghafal Al-Qur'an yang dirancang khusus untuk mengembangkan kemampuan menghafal dan memahami Al-Qur'an dengan metode yang efektif.</p>
                        </div>
                        <div class="ca-price-list p-relative">
                            <div class="ca-price-btn p-absolute">
                                <a href="{{ route('kelas-tahfidz') }}" class="ca-btn-primary ca-pricebtn ca-btn-primary-4 theme-bg-4 text-white br-50">
                                    Pelajari Lebih Lanjut <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                            <ul>
                                <li><span><i class="fa-solid fa-check"></i></span>Metode Hafalan Sistematis</li>
                                <li><span><i class="fa-solid fa-check"></i></span>Pembimbing Berpengalaman</li>
                                <li><span><i class="fa-solid fa-check"></i></span>Program Berkelanjutan</li>
                                <li><span><i class="fa-solid fa-check"></i></span>Evaluasi Berkala</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- single pricing-box -->
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="ca-pricing-box active br-7 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                        <div class="ca-pring-box-content">
                            <h2 class="ca-pricing-box-title fnw-600">Ekstrakurikuler</h2>
                            <p class="pt-16 pb-32">Berbagai kegiatan ekstrakurikuler yang mengembangkan <br> bakat, minat, dan karakter siswa di berbagai bidang.</p>
                        </div>
                        <div class="ca-price-list p-relative">
                            <div class="ca-price-btn p-absolute">
                                <a href="{{ route('ekstrakurikuler') }}" class="ca-btn-primary ca-pricebtn ca-btn-primary-4 theme-bg-4 text-white br-50">
                                    Pelajari Lebih Lanjut <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                            <ul>
                                <li><span><i class="fa-solid fa-check"></i></span>Pramuka</li>
                                <li><span><i class="fa-solid fa-check"></i></span>Seni Baca Al-Qur'an</li>
                                <li><span><i class="fa-solid fa-check"></i></span>Drumband</li>
                                <li><span><i class="fa-solid fa-check"></i></span>Sholawat Al-Banjari</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- single pricing-box -->
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="ca-pricing-box br-7 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200">
                        <div class="ca-pring-box-content">
                            <h2 class="ca-pricing-box-title fnw-600">Madrasah Diniyah</h2>
                            <p class="pt-16 pb-32">Program pendidikan agama Islam yang komprehensif <br> untuk memperdalam pemahaman agama dan mengembangkan karakter Islami.</p>
                        </div>
                        <div class="ca-price-list p-relative">
                            <div class="ca-price-btn p-absolute">
                                <a href="{{ route('madrasah-diniyah') }}" class="ca-btn-primary ca-pricebtn ca-btn-primary-4 theme-bg-4 text-white br-50">
                                    Pelajari Lebih Lanjut <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                            <ul>
                                <li><span><i class="fa-solid fa-check"></i></span>Pembelajaran Al-Qur'an</li>
                                <li><span><i class="fa-solid fa-check"></i></span>Fiqh & Akidah</li>
                                <li><span><i class="fa-solid fa-check"></i></span>Akhlak & Adab</li>
                                <li><span><i class="fa-solid fa-check"></i></span>Kurikulum Terpadu</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing plan end -->
    
    <!-- testimonial section start -->
    <section class="ca-testimonial-4 theme-black-bg-4 pt-100 pb-70 p-relative z-index-1">
        <div class="ca-shape ca-test-shape p-absolute"><img src="{{ asset('assets/img/shape/shape-1.1.png') }}" alt="">
        </div>
        <div class="ca-service-shape p-absolute"><img src="{{ asset('assets/img/shape/ca-footer-shape3.1.png') }}"
                alt=""></div>
        <div class="container">
            <div class="ca-blog-content-4 text-center mb-60 aos-init aos-animate" data-aos="fade-up"
                data-aos-duration="800">
                <h5 class="ca-section-subtitle subtitle-bg-9 text-white p-relative br-50">Testimoni</h5>
                <h2 class="ca-section-title text-white fnw-600 pt-16 ca-text-cap">Kata Mereka Tentang Kami</h2>
            </div>
            <div class="row">
                <div class="ca-testimonials">
                    <div class="ca-testimonials-4">
                        <!-- single testimonial item -->
                        <div class="ca-testimonial-card-3 ca-testimonial-card-4 br-7">
                            <div class="ca-quote-4">
                                <img src="{{ asset('assets/img/icon/ca-testimonialquote4.1.svg') }}" alt="">
                            </div>
                            <div class="ca-test-4-rating">
                                <div class="ca-ratings-4">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                            </div>
                            <div class="ca-test-4-content">
                                <p>"Sekolah yang sangat baik dengan pendidik yang berdedikasi. Anak saya berkembang dengan baik baik secara akademik maupun karakter."</p>
                            </div>
                            <div class="ca-test-3-user mt-24">
                                <div class="ca-test-3-user-img">
                                    <span><img src="{{ asset('assets/img/testimonial/ca-testimonial4.1.png') }}"
                                            alt=""></span>
                                </div>
                                <div class="ca-test-4-user-name">
                                    <h4 class="test-3-title"><a href="#">Orang Tua Siswa</a></h4>
                                    <span>Wali Murid</span>
                                </div>
                            </div>
                        </div>
                        <!-- single testimonial item -->
                        <div class="ca-testimonial-card-3 ca-testimonial-card-4 br-7">
                            <div class="ca-quote-4">
                                <img src="{{ asset('assets/img/icon/ca-testimonialquote4.1.svg') }}" alt="">
                            </div>
                            <div class="ca-test-4-rating">
                                <div class="ca-ratings-4">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                            </div>
                            <div class="ca-test-4-content">
                                <p>"Program ekstrakurikuler yang sangat beragam membantu anak saya menemukan bakatnya. Terima kasih MI AL-HIDAYAH Tarik."</p>
                            </div>
                            <div class="ca-test-3-user mt-24">
                                <div class="ca-test-3-user-img">
                                    <span><img src="{{ asset('assets/img/testimonial/ca-testimonial4.2.png') }}"
                                            alt=""></span>
                                </div>
                                <div class="ca-test-4-user-name">
                                    <h4 class="test-3-title"><a href="#">Orang Tua Siswa</a></h4>
                                    <span>Wali Murid</span>
                                </div>
                            </div>
                        </div>
                        <!-- single testimonial item -->
                        <div class="ca-testimonial-card-3 ca-testimonial-card-4 br-7">
                            <div class="ca-quote-4">
                                <img src="{{ asset('assets/img/icon/ca-testimonialquote4.1.svg') }}" alt="">
                            </div>
                            <div class="ca-test-4-rating">
                                <div class="ca-ratings-4">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                            </div>
                            <div class="ca-test-4-content">
                                <p>"Pendidikan karakter yang sangat baik. Anak saya tidak hanya pintar secara akademik tapi juga berakhlak mulia."</p>
                            </div>
                            <div class="ca-test-3-user mt-24">
                                <div class="ca-test-3-user-img">
                                    <span><img src="{{ asset('assets/img/testimonial/ca-testimonial4.1.png') }}"
                                            alt=""></span>
                                </div>
                                <div class="ca-test-4-user-name">
                                    <h4 class="test-3-title"><a href="#">Orang Tua Siswa</a></h4>
                                    <span>Wali Murid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial section end -->
    
    <!-- sponsor section start -->
    <section class="ca-sponsor-area pt-100 pb-70">
        <div class="container">
            <div class="ca-sponsor-content-4 text-center mb-60 aos-init aos-animate" data-aos="fade-up"
                data-aos-duration="800">
                <h5 class="ca-section-subtitle subtitle-bg-8 p-relative theme-black-4 br-50">Mitra & Partner</h5>
                <h2 class="ca-section-title theme-black-4 fnw-600 pt-16 ca-text-cap">Dipercaya Oleh Banyak Pihak</h2>
            </div>
        </div>
        <!-- brand logo 1 -->
        <div class="ca-brand-slides mb-24">
            <div class="ca-brand-item">
                <img src="{{ asset('assets/img/brand/brand-1.png') }}" alt="">
            </div>
            <div class="ca-brand-item">
                <img src="{{ asset('assets/img/brand/brand-2.png') }}" alt="">
            </div>
            <div class="ca-brand-item">
                <img src="{{ asset('assets/img/brand/brand-3.png') }}" alt="">
            </div>
            <div class="ca-brand-item">
                <img src="{{ asset('assets/img/brand/brand-4.png') }}" alt="">
            </div>
            <div class="ca-brand-item">
                <img src="{{ asset('assets/img/brand/brand-5.png') }}" alt="">
            </div>
            <div class="ca-brand-item">
                <img src="{{ asset('assets/img/brand/brand-6.png') }}" alt="">
            </div>
            <div class="ca-brand-item">
                <img src="{{ asset('assets/img/brand/brand-3.png') }}" alt="">
            </div>
        </div>
        <!-- brand logo 2 -->
        <div class="ca-brand-slides-2" dir="rtl">
            <div class="ca-brand-item">
                <img src="{{ asset('assets/img/brand/brand-1.1.png') }}" alt="">
            </div>
            <div class="ca-brand-item">
                <img src="{{ asset('assets/img/brand/brand-1.2.png') }}" alt="">
            </div>
            <div class="ca-brand-item">
                <img src="{{ asset('assets/img/brand/brand-1.3.png') }}" alt="">
            </div>
            <div class="ca-brand-item">
                <img src="{{ asset('assets/img/brand/brand-1.4.png') }}" alt="">
            </div>
            <div class="ca-brand-item">
                <img src="{{ asset('assets/img/brand/brand-1.5.png') }}" alt="">
            </div>
            <div class="ca-brand-item">
                <img src="{{ asset('assets/img/brand/brand-1.6.png') }}" alt="">
            </div>
            <div class="ca-brand-item">
                <img src="{{ asset('assets/img/brand/brand-1.4.png') }}" alt="">
            </div>
            <div class="ca-brand-item">
                <img src="{{ asset('assets/img/brand/brand-1.3.png') }}" alt="">
            </div>
            <div class="ca-brand-item">
                <img src="{{ asset('assets/img/brand/brand-1.2.png') }}" alt="">
            </div>
        </div>
    </section>
    <!-- sponsor section end -->
    
    <!-- contact-section start -->
    <section class="contact-3-area cream-bg-3 pt-100 pb-70" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-30">
                    <div class="ca-contact-us-4 mr-50">
                        <div class="ca-blog-content-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <h5 class="ca-section-subtitle subtitle-bg-8 p-relative theme-black-4 br-50">Kontak Kami</h5>
                            <h2 class="ca-section-title theme-black-4 fnw-600 pt-16 ca-text-cap">Kami Siap Melayani Anda</h2>
                            <p class="pt-16">Kami berkomitmen untuk memberikan pelayanan terbaik <br>dan informasi lengkap tentang program pendidikan kami.</p>
                        </div>
                        <div class="ca-working-hour mt-28 aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                            <h3 class="ca-blo-4-title theme-black-4 fnw-600 pb-16">Jam Operasional</h3>
                            <div class="ca-working-time">
                                <!-- single box -->
                                <div class="ca-work-time-box mr-46">
                                    <div class="ca-work-ic">
                                        <span><img src="{{ asset('assets/img/icon/ca-time4.1.svg') }}" alt=""></span>
                                    </div>
                                    <div class="ca-work-content">
                                        <span>Senin - Jumat</span>
                                    </div>
                                </div>
                                <!-- single box -->
                                <div class="ca-work-time-box">
                                    <div class="ca-work-ic">
                                        <span><img src="{{ asset('assets/img/icon/ca-time4.1.svg') }}" alt=""></span>
                                    </div>
                                    <div class="ca-work-content">
                                        <span>07:00 - 14:00 WIB</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ca-con-icon-box-4 aos-init aos-animate" data-aos="fade-right" data-aos-duration="800">
                            <!-- single-icon-box -->
                            <div class="ca-contact-ic-box-4 mb-30">
                                <div class="ca-contact-4-icon">
                                    <span><img src="{{ asset('assets/img/icon/ca-map4.1.svg') }}" alt=""></span>
                                </div>
                                <div class="ca-contact-4-content">
                                    <h3 class="ca-blo-4-title theme-black-4 fnw-600 pb-12">Alamat Sekolah</h3>
                                    <p>Jl. Pendidikan No. 123, Tarik, Sidoarjo, Jawa Timur</p>
                                </div>
                            </div>
                            <!-- single-icon-box -->
                            <div class="ca-contact-ic-box-4 mb-30">
                                <div class="ca-contact-4-icon">
                                    <span><img src="{{ asset('assets/img/icon/ca-mail-4.3.svg') }}" alt=""></span>
                                </div>
                                <div class="ca-contact-4-content">
                                    <h3 class="ca-blo-4-title theme-black-4 fnw-600 pb-12">Email</h3>
                                    <p>info@mialhidayahtarik.sch.id</p>
                                </div>
                            </div>
                            <!-- single-icon-box -->
                            <div class="ca-contact-ic-box-4 mb-30">
                                <div class="ca-contact-4-icon">
                                    <span><img src="{{ asset('assets/img/icon/ca-phone-4.2.svg') }}" alt=""></span>
                                </div>
                                <div class="ca-contact-4-content">
                                    <h3 class="ca-blo-4-title theme-black-4 fnw-600 pb-12">Nomor Telepon</h3>
                                    <p>+62 21 2345 6789</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="ca-contact-from w-bg ca-contact-from-3 mr-60 aos-init aos-animate" data-aos="zoom-out-down"
                        data-aos-duration="800">
                        <div class="ca-contact-content-4">
                            <h4 class="ca-contact-title-2 theme-black-2 fnw-600">Kirim Pesan</h4>
                            <p class="pt-16 pb-24">Silakan hubungi kami untuk informasi lebih lanjut tentang program pendidikan dan pendaftaran siswa baru.</p>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6 mb-20">
                                    <input type="text" placeholder="Nama Depan">
                                </div>
                                <div class="col-md-6 mb-20">
                                    <input type="text" placeholder="Nama Belakang">
                                </div>
                                <div class="col-md-6 mb-20">
                                    <input type="tel" placeholder="Nomor Telepon">
                                </div>
                                <div class="col-md-6 mb-20">
                                    <input type="email" placeholder="Alamat Email">
                                </div>
                                <div class="col-md-12 mb-20">
                                    <select class="nice-select wide ca-select">
                                        <option data-display="Jenis Pertanyaan">Pilih Jenis Pertanyaan</option>
                                        <option value="1">Informasi Pendaftaran</option>
                                        <option value="2">Program Akademik</option>
                                        <option value="3">Ekstrakurikuler</option>
                                        <option value="4">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mb-20">
                                    <textarea name="message" id="message" placeholder="Pesan"></textarea>
                                </div>
                                <div class="submit-btn">
                                    <button class="ca-btn-primary ca-btn-primary-4 theme-bg-4 text-white br-50" type="submit"
                                        value="submit"> Kirim Pesan<span><i class="fa-solid fa-arrow-right"></i></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->
    
    <!-- blog section start -->
    <section class="ca-blog pt-100 pb-70">
        <div class="container">
            <div class="ca-blog-content-4 text-center mb-60 aos-init aos-animate" data-aos="fade-up"
                data-aos-duration="800">
                <h5 class="ca-section-subtitle subtitle-bg-8 p-relative theme-black-4 br-50">Berita & Artikel</h5>
                <h2 class="ca-section-title theme-black-4 fnw-600 pt-16 ca-text-cap">Berita Terbaru</h2>
                <p class="pt-16">Ikuti berita dan artikel terbaru tentang kegiatan sekolah, prestasi siswa, <br>dan informasi penting lainnya.</p>
            </div>
            <div class="row">
                <!-- single-blog-item -->
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="ca-team-box ca-blog-box-4 br-7 aos-init aos-animate" data-aos="fade-right"
                        data-aos-duration="1000">
                        <div class="ca-team-img ca-blog-4-img">
                            <a href="{{ route('berita') }}"> <img class="w-100"
                                    src="{{ asset('assets/img/blog/ca-blog-4.1.png') }}" alt=""></a>
                        </div>
                        <div class="ca-blog-box-content w-bg ca-blog-box-content-4">
                            <div class="ca-b-meta">
                                <!-- blog meta box -->
                                <a href="#" class="ca-blog-meta ca-blog-meta-3">
                                    <div class="ca-meta-icon">
                                        <span><img src="{{ asset('assets/img/icon/user-1.1.svg') }}" alt=""></span>
                                    </div>
                                    <div class="ca-meta-title">
                                        <span>Admin Sekolah</span>
                                    </div>
                                </a>
                                <!-- blog meta box -->
                                <a href="#" class="ca-blog-meta ca-blog-meta-3">
                                    <div class="ca-meta-icon">
                                        <span><img src="{{ asset('assets/img/icon/tag-1.1.svg') }}" alt=""></span>
                                    </div>
                                    <div class="ca-meta-title">
                                        <span>Pendidikan</span>
                                    </div>
                                </a>
                            </div>
                            <h4 class="ca-blog-title ca-blog-title-3 fnw-600"><a href="{{ route('berita') }}">Kegiatan Pembelajaran Inovatif di MI AL-HIDAYAH</a></h4>
                            <p class="pt-16 pb-18">Pelajari metode pembelajaran terbaru yang diterapkan <br>untuk meningkatkan kualitas pendidikan siswa.</p>
                            <div class="blog-4-readmore">
                                <a href="{{ route('berita') }}" class="read-more3">Baca Selengkapnya <span><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-blog-item -->
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="ca-team-box ca-blog-box-4 br-7 aos-init aos-animate" data-aos="fade-left"
                        data-aos-duration="1200">
                        <div class="ca-team-img ca-blog-4-img">
                            <a href="{{ route('berita') }}"><img class="w-100"
                                    src="{{ asset('assets/img/blog/ca-blog-4.2.png') }}" alt=""></a>
                        </div>
                        <div class="ca-blog-box-content w-bg ca-blog-box-content-4">
                            <div class="ca-b-meta">
                                <!-- blog meta box -->
                                <a href="#" class="ca-blog-meta ca-blog-meta-3">
                                    <div class="ca-meta-icon">
                                        <span><img src="{{ asset('assets/img/icon/user-1.1.svg') }}" alt=""></span>
                                    </div>
                                    <div class="ca-meta-title">
                                        <span>Admin Sekolah</span>
                                    </div>
                                </a>
                                <!-- blog meta box -->
                                <a href="#" class="ca-blog-meta ca-blog-meta-3">
                                    <div class="ca-meta-icon">
                                        <span><img src="{{ asset('assets/img/icon/tag-1.1.svg') }}" alt=""></span>
                                    </div>
                                    <div class="ca-meta-title">
                                        <span>Prestasi</span>
                                    </div>
                                </a>
                            </div>
                            <h4 class="ca-blog-title ca-blog-title-3 fnw-600"><a href="{{ route('berita') }}">Prestasi Siswa di Berbagai Kompetisi</a></h4>
                            <p class="pt-16 pb-18">Lihat berbagai prestasi yang telah diraih oleh siswa <br>kami di berbagai kompetisi tingkat daerah dan nasional.</p>
                            <div class="blog-4-readmore">
                                <a href="{{ route('berita') }}" class="read-more3">Baca Selengkapnya <span><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end -->

    <!-- cta section -->
    <div class="ca-cta-section-4 pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="ca-cta-content-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="ca-section-title cta-title-1 fnw-700 ca-text-cap">
                            Bergabunglah Bersama Kami<br>
                            <span>Untuk Masa Depan yang Lebih Baik</span>
                        </h2>
                        <p class="mb-4" style="font-size: 1.125rem; line-height: 1.8; color: #6b7280;">
                            Daftarkan putra putri Anda di MI AL-HIDAYAH Tarik untuk mendapatkan pendidikan terbaik yang mengembangkan potensi akademik, karakter, dan kreativitas.
                        </p>
                        <div class="ca-btn-cta-4">
                            <a href="{{ route('home') }}#contact" class="ca-btn-primary ca-btn-primary-4 br-50">Daftar Sekarang
                                <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="ca-cta-map-4 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.1234567890!2d112.6789!3d-7.4567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMjcnMjQuMSJTIDExMsKwNDAnNDQuMCJF!5e0!3m2!1sid!2sid!4v1234567890123!5m2!1sid!2sid"
                            allowfullscreen="" class="ca-map-4"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
<style>
    /* Palet Warna: Hijau, Kuning, Putih */
    :root {
        --color-green: #16a34a;
        --color-green-dark: #15803d;
        --color-green-light: #22c55e;
        --color-yellow: #FCD34D;
        --color-yellow-dark: #FBBF24;
        --color-white: #ffffff;
        --color-gray-light: #f9fafb;
    }
    
    /* Hero Section - Kuning untuk CTA */
    .ca-hero-4-btn .ca-btn-primary-4 {
        background: linear-gradient(135deg, #FCD34D 0%, #FBBF24 100%) !important;
        color: #1F2937 !important;
        box-shadow: 0 0.25rem 1.25rem rgba(251, 191, 36, 0.5);
    }
    
    .ca-hero-4-btn .ca-btn-primary-4:hover {
        background: linear-gradient(135deg, #FBBF24 0%, #F59E0B 100%) !important;
        box-shadow: 0 0.375rem 1.5625rem rgba(251, 191, 36, 0.7);
    }
    
    /* About Section - Hijau */
    .ca-about-4 .ca-section-subtitle.subtitle-bg-8 {
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%) !important;
    }
    
    .ca-about-4 .ca-about-4-btn .ca-btn-primary-4 {
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%) !important;
        box-shadow: 0 0.25rem 1.25rem rgba(22, 163, 74, 0.4);
    }
    
    .ca-about-4 .ca-about-4-btn .ca-btn-primary-4:hover {
        background: linear-gradient(135deg, #15803d 0%, #166534 100%) !important;
        box-shadow: 0 0.375rem 1.5625rem rgba(22, 163, 74, 0.6);
    }
    
    .ca-about-4 .ca-service-4-list ul li span i {
        color: #16a34a;
    }
    
    .ca-about-4 .ca-ab-counter-4 {
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
        color: white;
    }
    
    /* Service Section - Hijau dengan variasi */
    .ca-service-4 .ca-section-subtitle.subtitle-bg-8 {
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%) !important;
    }
    
    .ca-service-4 .ca-service-4-icon span {
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
    }
    
    .ca-service-4 .read-mor4 {
        color: #16a34a;
    }
    
    .ca-service-4 .read-mor4:hover {
        color: #15803d;
    }
    
    /* Service Cards - Hijau dengan variasi tone */
    .ca-service-4 .ca-service-4-item:nth-child(1) .ca-service-4-icon span {
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
    }
    
    .ca-service-4 .ca-service-4-item:nth-child(2) .ca-service-4-icon span {
        background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
    }
    
    .ca-service-4 .ca-service-4-item:nth-child(3) .ca-service-4-icon span {
        background: linear-gradient(135deg, #15803d 0%, #166534 100%);
    }
    
    .ca-service-4 .ca-service-4-item:nth-child(4) .ca-service-4-icon span {
        background: linear-gradient(135deg, #16a34a 0%, #22c55e 100%);
    }
    
    .ca-service-4 .ca-service-4-item:nth-child(1) .read-mor4 {
        color: #16a34a;
    }
    
    .ca-service-4 .ca-service-4-item:nth-child(2) .read-mor4 {
        color: #22c55e;
    }
    
    .ca-service-4 .ca-service-4-item:nth-child(3) .read-mor4 {
        color: #15803d;
    }
    
    .ca-service-4 .ca-service-4-item:nth-child(4) .read-mor4 {
        color: #16a34a;
    }
    
    /* Pricing Plan Section - Hijau dengan accent kuning */
    .ca-pricing-plan .ca-section-subtitle.subtitle-bg-8 {
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%) !important;
    }
    
    /* Card 1 - Hijau */
    .ca-pricing-plan .row > div:nth-child(1) .ca-pricing-box {
        border-top: 0.25rem solid #16a34a;
    }
    
    .ca-pricing-plan .row > div:nth-child(1) .ca-pricing-box:hover {
        border-color: #15803d;
        box-shadow: 0 0.9375rem 2.5rem rgba(22, 163, 74, 0.3);
    }
    
    .ca-pricing-plan .row > div:nth-child(1) .ca-btn-primary-4 {
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%) !important;
        box-shadow: 0 0.25rem 1.25rem rgba(22, 163, 74, 0.4);
    }
    
    .ca-pricing-plan .row > div:nth-child(1) .ca-btn-primary-4:hover {
        background: linear-gradient(135deg, #15803d 0%, #166534 100%) !important;
    }
    
    .ca-pricing-plan .row > div:nth-child(1) .ca-price-list ul li span i {
        color: #16a34a;
    }
    
    /* Card 2 - Kuning (Active) */
    .ca-pricing-plan .row > div:nth-child(2) .ca-pricing-box {
        border-top: 0.25rem solid #FCD34D;
    }
    
    .ca-pricing-plan .row > div:nth-child(2) .ca-pricing-box:hover {
        border-color: #FBBF24;
        box-shadow: 0 0.9375rem 2.5rem rgba(252, 211, 77, 0.3);
    }
    
    .ca-pricing-plan .row > div:nth-child(2) .ca-btn-primary-4 {
        background: linear-gradient(135deg, #FCD34D 0%, #FBBF24 100%) !important;
        color: #1F2937 !important;
        box-shadow: 0 0.25rem 1.25rem rgba(252, 211, 77, 0.4);
    }
    
    .ca-pricing-plan .row > div:nth-child(2) .ca-btn-primary-4:hover {
        background: linear-gradient(135deg, #FBBF24 0%, #F59E0B 100%) !important;
    }
    
    .ca-pricing-plan .row > div:nth-child(2) .ca-price-list ul li span i {
        color: #FCD34D;
    }
    
    /* Card 3 - Hijau muda */
    .ca-pricing-plan .row > div:nth-child(3) .ca-pricing-box {
        border-top: 0.25rem solid #22c55e;
    }
    
    .ca-pricing-plan .row > div:nth-child(3) .ca-pricing-box:hover {
        border-color: #16a34a;
        box-shadow: 0 0.9375rem 2.5rem rgba(34, 197, 94, 0.3);
    }
    
    .ca-pricing-plan .row > div:nth-child(3) .ca-btn-primary-4 {
        background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%) !important;
        box-shadow: 0 0.25rem 1.25rem rgba(34, 197, 94, 0.4);
    }
    
    .ca-pricing-plan .row > div:nth-child(3) .ca-btn-primary-4:hover {
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%) !important;
    }
    
    .ca-pricing-plan .row > div:nth-child(3) .ca-price-list ul li span i {
        color: #22c55e;
    }
    
    /* Testimonial Section - Background gelap dengan accent kuning */
    .ca-testimonial-4 {
        background: linear-gradient(135deg, #1F2937 0%, #111827 100%) !important;
    }
    
    .ca-test-4-rating .ca-ratings-4 span {
        color: #FCD34D;
    }
    
    /* Contact Section - Hijau */
    .contact-3-area .ca-section-subtitle.subtitle-bg-8 {
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%) !important;
    }
    
    .contact-3-area .ca-contact-from-3 input:focus,
    .contact-3-area .ca-contact-from-3 textarea:focus,
    .contact-3-area .ca-contact-from-3 select:focus {
        border-color: #16a34a;
        box-shadow: 0 0 0 0.1875rem rgba(22, 163, 74, 0.1);
    }
    
    .contact-3-area .ca-btn-primary-4 {
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%) !important;
        box-shadow: 0 0.25rem 1.25rem rgba(22, 163, 74, 0.4);
    }
    
    .contact-3-area .ca-btn-primary-4:hover {
        background: linear-gradient(135deg, #15803d 0%, #166534 100%) !important;
        box-shadow: 0 0.375rem 1.5625rem rgba(22, 163, 74, 0.6);
    }
    
    /* Blog Section - Hijau */
    .ca-blog .ca-section-subtitle.subtitle-bg-8 {
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%) !important;
    }
    
    .ca-blog .read-more3 {
        color: #16a34a;
    }
    
    .ca-blog .read-more3:hover {
        color: #15803d;
    }
    
    /* Sponsor Section - Hijau */
    .ca-sponsor-area .ca-section-subtitle.subtitle-bg-8 {
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%) !important;
    }
    
    /* CTA Section - Professional Design dengan Hijau */
    .ca-cta-section-4 {
        background: linear-gradient(135deg, #f0fdf4 0%, #ffffff 50%, #f0fdf4 100%);
        position: relative;
        overflow: hidden;
    }
    
    .ca-cta-section-4::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 0.3125rem;
        background: linear-gradient(90deg, #16a34a 0%, #22c55e 50%, #16a34a 100%);
    }
    
    .ca-cta-section-4 .container {
        background: white !important;
        border: 0.0625rem solid #e5e7eb;
        box-shadow: 0 0.25rem 1.875rem rgba(0, 0, 0, 0.08);
        border-radius: 1.5625rem;
        padding: 4rem 3rem;
        position: relative;
    }
    
    .ca-cta-section-4 .container::before {
        content: '';
        position: absolute;
        top: -0.0625rem;
        left: 0;
        right: 0;
        height: 0.375rem;
        background: linear-gradient(90deg, #16a34a 0%, #22c55e 100%);
        border-radius: 1.5625rem 1.5625rem 0 0;
    }
    
    .ca-cta-content-4 h2 {
        color: #1f2937 !important;
        font-size: 2.75rem;
        line-height: 1.2;
        font-weight: 700;
        margin-bottom: 2rem;
    }
    
    .ca-cta-content-4 h2 span {
        color: #16a34a;
    }
    
    .ca-cta-section-4 .ca-btn-primary-4 {
        background: linear-gradient(135deg, #16a34a 0%, #15803d 100%) !important;
        color: white !important;
        box-shadow: 0 0.25rem 1.25rem rgba(22, 163, 74, 0.3);
        padding: 1rem 2.5rem;
        font-size: 1.0625rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .ca-cta-section-4 .ca-btn-primary-4:hover {
        background: linear-gradient(135deg, #15803d 0%, #166534 100%) !important;
        box-shadow: 0 0.5rem 2rem rgba(22, 163, 74, 0.4);
        transform: translateY(-0.125rem);
    }
    
    .ca-cta-map-4 {
        border-radius: 1.25rem;
        overflow: hidden;
        box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
        border: 0.0625rem solid #e5e7eb;
        height: 100%;
        min-height: 20rem;
    }
    
    .ca-map-4 {
        border-radius: 1.25rem;
        filter: grayscale(10%);
        transition: filter 0.3s ease;
    }
    
    .ca-cta-map-4:hover .ca-map-4 {
        filter: grayscale(0%);
    }
    
    /* Hero Full Width & Full Height */
    .hero-fullscreen {
        width: 100vw;
        height: 100vh;
        min-height: 100vh;
        overflow: hidden;
        position: relative;
        display: flex;
        align-items: center;
        margin: 0;
        padding: 0;
    }
    
    /* Background Image */
    .hero-background-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('{{ $heroBackground ? (filter_var($heroBackground, FILTER_VALIDATE_URL) ? $heroBackground : asset("storage/" . $heroBackground)) : asset("assets/img/slider/banner-sekolah.jpg") }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        
        /* Color Grading - Professional Look - Lebih Terang */
        filter: brightness(1.05) contrast(1.1) saturate(1.15);
        
        /* Smooth Zoom Effect */
        transform: scale(1.05);
        transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .hero-fullscreen:hover .hero-background-img {
        transform: scale(1.08);
    }
    
    /* Gradient Overlay - Lebih Terang untuk tidak terlalu redup */
    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(
            135deg,
            rgba(0, 0, 0, 0.35) 0%,
            rgba(0, 0, 0, 0.25) 50%,
            rgba(0, 0, 0, 0.2) 100%
        );
        z-index: 2;
        pointer-events: none;
    }
    
    /* Additional gradient untuk depth */
    .hero-overlay::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(
            to bottom,
            rgba(22, 163, 74, 0.15) 0%,
            transparent 40%
        );
        pointer-events: none;
    }
    
    /* Content Positioning */
    .hero-fullscreen .container {
        position: relative;
        z-index: 3;
        height: 100%;
        display: flex;
        align-items: flex-start;
        padding-top: 8.75rem;
    }
    
    .hero-fullscreen .row {
        height: auto;
        width: 100%;
        margin: 0;
    }
    
    /* Content Styling - Positioned at top */
    .hero-content-position {
        position: relative;
        z-index: 4;
        padding-top: 2.5rem;
        transform: translateY(-1.25rem);
        text-align: left;
        max-width: 100%;
    }
    
    /* Text Shadow untuk readability */
    .ca-hero-4-content h1,
    .ca-hero-4-content h5,
    .ca-hero-4-content p {
        text-shadow: 0 0.125rem 0.9375rem rgba(0, 0, 0, 0.5);
    }
    
    /* Button enhancement untuk kontras */
    .ca-hero-4-btn .ca-btn-primary-4 {
        box-shadow: 0 0.25rem 1.25rem rgba(22, 163, 74, 0.5);
        transition: all 0.3s ease;
    }
    
    .ca-hero-4-btn .ca-btn-primary-4:hover {
        box-shadow: 0 0.375rem 1.5625rem rgba(22, 163, 74, 0.7);
        transform: translateY(-0.125rem);
    }
    
    /* Ensure navbar glassmorphism stays above hero */
    .header-area-3.header-area-4.stiky {
        z-index: 9999 !important;
    }
    
    /* Responsive adjustments */
    @media (max-width: 991px) {
        .hero-fullscreen {
            height: 100vh;
            min-height: 100vh;
        }
        
        .hero-fullscreen .container {
            padding-top: 7.5rem;
        }
        
        .hero-content-position {
            padding-top: 1.25rem;
            transform: translateY(-0.625rem);
            text-align: left;
        }
        
        .hero-background-img {
            background-attachment: scroll;
            filter: brightness(1.0) contrast(1.15) saturate(1.2);
        }
        
        .hero-overlay {
            background: linear-gradient(
                135deg,
                rgba(0, 0, 0, 0.4) 0%,
                rgba(0, 0, 0, 0.3) 50%,
                rgba(0, 0, 0, 0.25) 100%
            );
        }
    }
    
    @media (max-width: 767px) {
        .hero-fullscreen {
            height: 100vh;
            min-height: 100vh;
        }
        
        .hero-fullscreen .container {
            padding-top: 6.25rem;
        }
        
        .hero-content-position {
            padding-top: 0.9375rem;
            transform: translateY(-0.3125rem);
            text-align: left;
        }
        
        .hero-background-img {
            transform: scale(1.03);
        }
        
        .hero-content-position h1 {
            font-size: 2rem;
        }
        
        .hero-content-position p {
            font-size: 0.95rem;
        }
    }
    
    /* Smooth scroll behavior */
    html {
        scroll-behavior: smooth;
    }
    
    /* Override any default padding/margin */
    .hero-fullscreen.ca-hero-4 {
        padding-top: 0 !important;
        margin-top: 0 !important;
    }
    
    /* Ensure main content starts after hero */
    main {
        position: relative;
    }
    
    /* Pricing Plan Section */
    .ca-pricing-box {
        background: white;
        border-radius: 1.25rem;
        padding: 2.5rem 1.875rem;
        box-shadow: 0 0.5rem 1.875rem rgba(0, 0, 0, 0.08);
        transition: all 0.4s ease;
        height: 100%;
        position: relative;
        border: 0.125rem solid transparent;
    }
    
    .ca-pricing-box:hover {
        transform: translateY(-0.625rem);
        box-shadow: 0 0.9375rem 2.5rem rgba(0, 0, 0, 0.15);
        border-color: rgba(1, 113, 93, 0.3);
    }
    
    .ca-pricing-box.active {
        border-color: rgba(1, 113, 93, 0.5);
        box-shadow: 0 0.75rem 2rem rgba(1, 113, 93, 0.2);
    }
    
    .ca-pricing-box-title {
        font-size: 1.5rem;
        color: #1F2937;
        margin-bottom: 1rem;
    }
    
    .ca-price-list {
        margin-top: 1.875rem;
        padding-top: 1.875rem;
        border-top: 0.0625rem solid #E5E7EB;
    }
    
    .ca-price-list ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .ca-price-list ul li {
        padding: 0.625rem 0;
        color: #6B7280;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    .ca-price-list ul li span i {
        color: #16a34a;
        font-size: 0.875rem;
    }
    
    .ca-price-btn {
        bottom: -1.25rem;
        left: 50%;
        transform: translateX(-50%);
        width: calc(100% - 3.75rem);
    }
    
    /* Testimonial Section */
    .ca-testimonial-card-4 {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(0.625rem);
        padding: 2.5rem;
        margin: 0 0.9375rem;
    }
    
    .ca-test-4-rating {
        margin: 1.25rem 0;
    }
    
    .ca-ratings-4 span {
        color: #FCD34D;
        font-size: 1.125rem;
        margin-right: 0.25rem;
    }
    
    .ca-test-4-content p {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1rem;
        line-height: 1.8;
        font-style: italic;
    }
    
    .ca-test-4-user-name h4 a {
        color: white;
    }
    
    .ca-test-4-user-name span {
        color: rgba(255, 255, 255, 0.7);
        font-size: 0.875rem;
    }
    
    /* Brand/Sponsor Section */
    .ca-brand-item {
        padding: 1.25rem;
        text-align: center;
    }
    
    .ca-brand-item img {
        max-width: 100%;
        height: auto;
        opacity: 0.6;
        transition: opacity 0.3s ease;
        filter: grayscale(100%);
    }
    
    .ca-brand-item:hover img {
        opacity: 1;
        filter: grayscale(0%);
    }
    
    /* Contact Section */
    .ca-contact-from-3 {
        border-radius: 1.25rem;
        padding: 2.5rem;
        box-shadow: 0 0.5rem 1.875rem rgba(0, 0, 0, 0.08);
    }
    
    .ca-contact-from-3 input,
    .ca-contact-from-3 textarea,
    .ca-contact-from-3 select {
        width: 100%;
        padding: 0.875rem 1.25rem;
        border: 0.0625rem solid #E5E7EB;
        border-radius: 0.625rem;
        font-size: 0.9375rem;
        transition: all 0.3s ease;
    }
    
    .ca-contact-from-3 input:focus,
    .ca-contact-from-3 textarea:focus,
    .ca-contact-from-3 select:focus {
        outline: none;
        border-color: #16a34a;
        box-shadow: 0 0 0 0.1875rem rgba(22, 163, 74, 0.1);
    }
    
    .ca-contact-from-3 textarea {
        min-height: 7.5rem;
        resize: vertical;
    }
    
    
    /* Blog Section */
    .ca-blog-box-4 {
        overflow: hidden;
        transition: all 0.4s ease;
    }
    
    .ca-blog-box-4:hover {
        transform: translateY(-0.5rem);
        box-shadow: 0 0.9375rem 2.5rem rgba(0, 0, 0, 0.12);
    }
    
    .ca-blog-4-img {
        overflow: hidden;
    }
    
    .ca-blog-4-img img {
        transition: transform 0.4s ease;
    }
    
    .ca-blog-box-4:hover .ca-blog-4-img img {
        transform: scale(1.1);
    }
    
    /* Responsive */
    @media (max-width: 991px) {
        .cta-title-1 {
            font-size: 2rem;
        }
        
        .ca-cta-section-4 .container {
            padding: 2.5rem 1.875rem;
        }
    }
    
    @media (max-width: 767px) {
        .ca-pricing-box {
            padding: 2rem 1.5rem;
        }
        
        .ca-testimonial-card-4 {
            padding: 1.875rem;
            margin: 0 0.625rem;
        }
        
        .ca-contact-from-3 {
            padding: 1.875rem;
        }
        
        .ca-cta-content-4 h2 {
            font-size: 1.875rem;
        }
        
        .ca-cta-section-4 .container {
            padding: 2.5rem 1.5rem;
        }
        
        .ca-cta-map-4 {
            min-height: 18.75rem;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    $(document).ready(function() {
        // Testimonial Slider
        if ($('.ca-testimonials-4').length) {
            $('.ca-testimonials-4').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
                dots: true,
                responsive: [
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        }
        
        // Brand Slider 1
        if ($('.ca-brand-slides').length) {
            $('.ca-brand-slides').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                dots: false,
                infinite: true,
                speed: 1000,
                cssEase: 'linear',
                responsive: [
                    {
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 4
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 2
                        }
                    }
                ]
            });
        }
        
        // Brand Slider 2 (RTL)
        if ($('.ca-brand-slides-2').length) {
            $('.ca-brand-slides-2').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2500,
                arrows: false,
                dots: false,
                infinite: true,
                speed: 1000,
                cssEase: 'linear',
                rtl: true,
                responsive: [
                    {
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 4
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 2
                        }
                    }
                ]
            });
        }
    });
</script>
@endpush

