@extends('layouts.app')

@section('title', 'Sejarah - MI AL-HIDAYAH Tarik')

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
                <h2 class="ca-breadcrumb-title fnw-600">Sejarah</h2>
                <div class="it-breadcum-link">
                    <a href="{{ route('home') }}">Beranda</a>
                    <span><i class="fa-solid fa-angle-right"></i></span>
                    <a href="{{ route('profil') }}">Tentang Kami</a>
                    <span><i class="fa-solid fa-angle-right"></i></span>
                    <a class="active" href="#">Sejarah</a>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- Sejarah Section Start -->
    <section class="ca-about-4 pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-30">
                    <div class="ca-ab-4-img p-relative z-index-1">
                        <div class="ca-ab-counter-4">
                            <h3 class="ca-counter-title fnw-700"><span class="counter">1945</span></h3>
                            <p>Tahun Berdiri</p>
                        </div>
                        <img class="w-100 ca-ab-sm-img" src="{{ asset('assets/img/about/ca-ch-2.png') }}" alt="">
                        <img class="w-100 ca-ab-lng-img" src="{{ asset('assets/img/about/ca-about-4.1.png') }}" alt="">
                    </div>
                </div>

                <div class="col-xl-6 mb-30">
                    <div class="ca-about-content-4">
                        <h5 class="ca-section-subtitle subtitle-bg-8 p-relative theme-black-4 br-50">Sejarah</h5>
                        <h2 class="ca-section-title theme-black-4 fnw-600 pt-16">Madrasah Tertua di Kecamatan Tarik</h2>
                        <p class="pt-16 pb-24">
                            <strong>MI AL-HIDAYAH Tarik</strong> adalah Madrasah Ibtidaiyah yang <strong>tertua di wilayah Kecamatan Tarik Sidoarjo</strong> 
                            yang didirikan oleh para Kyai dan Tokoh masyarakat di kecamatan Tarik sejak <strong>tahun 1945</strong> dengan piagam wajib belajar 
                            nomor : <strong>1.C/15/C XIII/8052</strong>.
                        </p>
                        <p class="pb-24">
                            Pada <strong>tahun 2006</strong> telah terakreditasi <strong>"A"</strong> dengan nomor : 
                            <strong>A/KW.13.4/MI/1997/2006</strong> serta telah mendapat sertifikat nomor pokok sekolah nasional dari 
                            Departemen Pendidikan Nasional nomor : <strong>20502034</strong> pada tanggal <strong>01 September 2008</strong>.
                        </p>
                    </div>
                    <div class="ca-service-4-list">
                        <ul>
                            <li><span><i class="fa-solid fa-check"></i></span>Didirikan tahun 1945 oleh Kyai dan Tokoh Masyarakat</li>
                            <li><span><i class="fa-solid fa-check"></i></span>Madrasah Tertua di Kecamatan Tarik</li>
                            <li><span><i class="fa-solid fa-check"></i></span>Terakreditasi A sejak tahun 2006</li>
                            <li><span><i class="fa-solid fa-check"></i></span>Memiliki NPSN resmi dari Depdiknas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sejarah Section End -->

    <!-- Timeline Section Start -->
    <section class="ca-service-4 cream-bg-3 pt-100 pb-70 p-relative z-index-1">
        <div class="ca-servic-4-shape p-absolute"><img src="{{ asset('assets/img/shape/ca-plane-1.1.png') }}" alt="">
        </div>
        <div class="container">
            <div class="ca-service-content-4 text-center mb-60 aos-init aos-animate" data-aos="fade-up"
                data-aos-duration="800">
                <h5 class="ca-section-subtitle subtitle-bg-8 p-relative theme-black-4 br-50">Timeline</h5>
                <h2 class="ca-section-title theme-black-4 fnw-600 pt-16 ca-text-cap">Perjalanan Sejarah</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="timeline-wrapper">
                        <div class="timeline-item mb-40" style="display: flex; align-items: start; gap: 30px;">
                            <div class="timeline-year br-7 p-20 text-center" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; min-width: 120px; box-shadow: 0 5px 20px rgba(0,0,0,0.2);">
                                <h3 class="fnw-700" style="font-size: 32px; margin: 0;">1945</h3>
                                <p style="margin: 5px 0 0 0; font-size: 14px;">Tahun Berdiri</p>
                            </div>
                            <div class="timeline-content br-7 p-30" style="background: white; box-shadow: 0 5px 20px rgba(0,0,0,0.1); flex: 1;">
                                <h4 class="fnw-600 mb-15">Pendirian MI AL-HIDAYAH Tarik</h4>
                                <p>Didirikan oleh para Kyai dan Tokoh masyarakat di kecamatan Tarik dengan piagam wajib belajar nomor: 1.C/15/C XIII/8052</p>
                            </div>
                        </div>
                        <div class="timeline-item mb-40" style="display: flex; align-items: start; gap: 30px;">
                            <div class="timeline-year br-7 p-20 text-center" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white; min-width: 120px; box-shadow: 0 5px 20px rgba(0,0,0,0.2);">
                                <h3 class="fnw-700" style="font-size: 32px; margin: 0;">2006</h3>
                                <p style="margin: 5px 0 0 0; font-size: 14px;">Akreditasi A</p>
                            </div>
                            <div class="timeline-content br-7 p-30" style="background: white; box-shadow: 0 5px 20px rgba(0,0,0,0.1); flex: 1;">
                                <h4 class="fnw-600 mb-15">Terakreditasi A</h4>
                                <p>MI AL-HIDAYAH Tarik berhasil meraih akreditasi "A" dengan nomor: A/KW.13.4/MI/1997/2006</p>
                            </div>
                        </div>
                        <div class="timeline-item mb-40" style="display: flex; align-items: start; gap: 30px;">
                            <div class="timeline-year br-7 p-20 text-center" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white; min-width: 120px; box-shadow: 0 5px 20px rgba(0,0,0,0.2);">
                                <h3 class="fnw-700" style="font-size: 32px; margin: 0;">2008</h3>
                                <p style="margin: 5px 0 0 0; font-size: 14px;">NPSN</p>
                            </div>
                            <div class="timeline-content br-7 p-30" style="background: white; box-shadow: 0 5px 20px rgba(0,0,0,0.1); flex: 1;">
                                <h4 class="fnw-600 mb-15">Mendapat Sertifikat NPSN</h4>
                                <p>Mendapat sertifikat nomor pokok sekolah nasional dari Departemen Pendidikan Nasional nomor: 20502034 pada tanggal 01 September 2008</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Timeline Section End -->
@endsection

