@extends('layouts.app')

@section('title', 'Fasilitas - MI AL-HIDAYAH Tarik')

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
                <h2 class="ca-breadcrumb-title fnw-600">Fasilitas</h2>
                <div class="it-breadcum-link">
                    <a href="{{ route('home') }}">Beranda</a>
                    <span><i class="fa-solid fa-angle-right"></i></span>
                    <a class="active" href="#">Fasilitas</a>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- Fasilitas Section Start -->
    <section class="ca-about-4 pt-100 pb-70">
        <div class="container">
            <div class="ca-service-content-4 text-center mb-60 aos-init aos-animate" data-aos="fade-up"
                data-aos-duration="800">
                <h5 class="ca-section-subtitle subtitle-bg-8 p-relative theme-black-4 br-50">Fasilitas</h5>
                <h2 class="ca-section-title theme-black-4 fnw-600 pt-16 ca-text-cap">Fasilitas Sekolah</h2>
                <p class="pt-16">Fasilitas lengkap dan modern untuk mendukung proses pembelajaran <br>
                    dan pengembangan potensi siswa secara optimal.</p>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="program-content">
                        <p>MI AL-HIDAYAH Tarik dilengkapi dengan berbagai fasilitas modern dan lengkap untuk mendukung proses pembelajaran dan pengembangan potensi siswa. Fasilitas-fasilitas ini dirancang untuk menciptakan lingkungan belajar yang nyaman dan kondusif.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fasilitas Section End -->
@endsection

