@extends('layouts.app')

@section('title', 'Program Akademik - MI AL-HIDAYAH Tarik')

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
                <h2 class="ca-breadcrumb-title fnw-600">Program Akademik</h2>
                <div class="it-breadcum-link">
                    <a href="{{ route('home') }}">Beranda</a>
                    <span><i class="fa-solid fa-angle-right"></i></span>
                    <a href="#program">Program</a>
                    <span><i class="fa-solid fa-angle-right"></i></span>
                    <a class="active" href="#">Program Akademik</a>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- Program Akademik Section Start -->
    <section class="ca-service-4 cream-bg-3 pt-100 pb-70 p-relative z-index-1" id="program">
        <div class="ca-servic-4-shape p-absolute"><img src="{{ asset('assets/img/shape/ca-plane-1.1.png') }}" alt="">
        </div>
        <div class="ca-servic-4-shape-2 p-absolute"><img src="{{ asset('assets/img/shape/ca-ft-shape4.1.png') }}"
                alt=""></div>
        <div class="container">
            <div class="ca-service-content-4 text-center mb-60 aos-init aos-animate" data-aos="fade-up"
                data-aos-duration="800">
                <h5 class="ca-section-subtitle subtitle-bg-8 p-relative theme-black-4 br-50">Program</h5>
                <h2 class="ca-section-title theme-black-4 fnw-600 pt-16 ca-text-cap">Program Akademik</h2>
                <p class="pt-16">Kurikulum terintegrasi yang dirancang untuk mengembangkan kemampuan akademik siswa dengan
                    pendekatan pembelajaran yang inovatif dan menyenangkan.</p>
            </div>
            <div class="row">
                <div class="ca-services-4">
                    <!-- Kurikulum Merdeka -->
                    <div class="ca-service-4-item br-7 fix p-relative z-index-1 mb-30">
                        <img class="w-100" src="{{ asset('assets/img/service/ca-service-4.1.png') }}" alt="">
                        <div class="ca-servic-4-ic-box p-absolute">
                            <div class="ca-service-4-icon">
                                <span><img src="{{ asset('assets/img/icon/ca-service-ic-4.1.svg') }}" alt=""></span>
                            </div>
                            <div class="ca-service-4-content">
                                <h3 class="ca-ser-4-title"><a href="#">Kurikulum Merdeka</a></h3>
                                <p>MI AL-HIDAYAH mulai merintis Kurikulum Merdeka pada Kelas 1 dan Kelas 4 untuk mengasah potensi siswa ke arah yang lebih baik dalam pembelajaran maupun pengembangan bakat dan minatnya.</p>
                                <a href="#" class="read-mor4">Pelajari Lebih Lanjut <span><i class="fa-solid fa-angle-right"></i></span></a>
                            </div>
                        </div>
                        <div class="ca-ser-overlay p-absolute">
                            <img class="w-100" src="{{ asset('assets/img/service/ca-overlay-servic-4.png') }}" alt="">
                        </div>
                    </div>
                    <!-- Pembelajaran Mendalam -->
                    <div class="ca-service-4-item br-7 fix p-relative z-index-1 mb-30">
                        <img class="w-100" src="{{ asset('assets/img/service/ca-service-4.3.png') }}" alt="">
                        <div class="ca-servic-4-ic-box p-absolute">
                            <div class="ca-service-4-icon">
                                <span><img src="{{ asset('assets/img/icon/ca-service-ic-4.3.svg') }}" alt=""></span>
                            </div>
                            <div class="ca-service-4-content">
                                <h3 class="ca-ser-4-title"><a href="#">Pembelajaran Mendalam (Deep Learning)</a></h3>
                                <p>Mengasah kemampuan berpikir kritis, kreatif, dan menumbuhkan kemandirian belajar siswa. Guru sebagai fasilitator yang membimbing siswa menemukan makna dari setiap proses belajar.</p>
                                <a href="#" class="read-mor4">Pelajari Lebih Lanjut <span><i class="fa-solid fa-angle-right"></i></span></a>
                            </div>
                        </div>
                        <div class="ca-ser-overlay p-absolute">
                            <img class="w-100" src="{{ asset('assets/img/service/ca-overlay-servic-4.png') }}" alt="">
                        </div>
                    </div>
                    <!-- Pendidikan Agama -->
                    <div class="ca-service-4-item br-7 fix p-relative z-index-1 mb-30">
                        <img class="w-100" src="{{ asset('assets/img/service/ca-service-4.1.png') }}" alt="">
                        <div class="ca-servic-4-ic-box p-absolute">
                            <div class="ca-service-4-icon">
                                <span><img src="{{ asset('assets/img/icon/ca-service-ic-4.2.svg') }}" alt=""></span>
                            </div>
                            <div class="ca-service-4-content">
                                <h3 class="ca-ser-4-title"><a href="#">Pendidikan Agama Islam</a></h3>
                                <p>Menanamkan keyakinan Aqidah melalui pengamalan Agama Islam berhaluan Ahlus Sunnah wal Jama'ah dalam kehidupan sehari-hari.</p>
                                <a href="#" class="read-mor4">Pelajari Lebih Lanjut <span><i class="fa-solid fa-angle-right"></i></span></a>
                            </div>
                        </div>
                        <div class="ca-ser-overlay p-absolute">
                            <img class="w-100" src="{{ asset('assets/img/service/ca-overlay-servic-4.png') }}" alt="">
                        </div>
                    </div>
                    <!-- Bahasa -->
                    <div class="ca-service-4-item br-7 fix p-relative z-index-1 mb-30">
                        <img class="w-100" src="{{ asset('assets/img/service/ca-service-4.1.png') }}" alt="">
                        <div class="ca-servic-4-ic-box p-absolute">
                            <div class="ca-service-4-icon">
                                <span><img src="{{ asset('assets/img/icon/ca-service-ic-4.1.svg') }}" alt=""></span>
                            </div>
                            <div class="ca-service-4-content">
                                <h3 class="ca-ser-4-title"><a href="#">Pengembangan Bahasa</a></h3>
                                <p>Mengembangkan kemampuan berkomunikasi menggunakan Bahasa Daerah, Bahasa Arab, Bahasa Indonesia, dan Bahasa Inggris.</p>
                                <a href="#" class="read-mor4">Pelajari Lebih Lanjut <span><i class="fa-solid fa-angle-right"></i></span></a>
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
    <!-- Program Akademik Section End -->
@endsection

