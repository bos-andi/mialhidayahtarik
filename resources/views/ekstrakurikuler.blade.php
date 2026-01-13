@extends('layouts.app')

@section('title', 'Ekstrakurikuler - MI AL-HIDAYAH Tarik')

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
                <h2 class="ca-breadcrumb-title fnw-600">Ekstrakurikuler</h2>
                <div class="it-breadcum-link">
                    <a href="{{ route('home') }}">Beranda</a>
                    <span><i class="fa-solid fa-angle-right"></i></span>
                    <a href="#program">Program</a>
                    <span><i class="fa-solid fa-angle-right"></i></span>
                    <a class="active" href="#">Ekstrakurikuler</a>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- Ekstrakurikuler Section Start -->
    <section class="ca-service-4 cream-bg-3 pt-100 pb-70 p-relative z-index-1">
        <div class="ca-servic-4-shape p-absolute"><img src="{{ asset('assets/img/shape/ca-plane-1.1.png') }}" alt="">
        </div>
        <div class="container">
            <div class="ca-service-content-4 text-center mb-60 aos-init aos-animate" data-aos="fade-up"
                data-aos-duration="800">
                <h5 class="ca-section-subtitle subtitle-bg-8 p-relative theme-black-4 br-50">Ekstrakurikuler</h5>
                <h2 class="ca-section-title theme-black-4 fnw-600 pt-16 ca-text-cap">Program Ekstrakurikuler</h2>
                <p class="pt-16">Berbagai kegiatan ekstrakurikuler yang mengembangkan bakat, minat, dan potensi siswa di
                    bidang olahraga, seni, dan organisasi.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="ca-service-4-item br-7 fix p-relative z-index-1" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 300px; display: flex; align-items: center; justify-content: center; flex-direction: column; padding: 40px; color: white;">
                        <div class="mb-30">
                            <i class="fa-solid fa-flag" style="font-size: 64px;"></i>
                        </div>
                        <h3 class="ca-ser-4-title mb-20" style="color: white;"><a href="#" style="color: white;">Pramuka</a></h3>
                        <p style="color: rgba(255,255,255,0.9); text-align: center;">Mengembangkan karakter kepemimpinan, kedisiplinan, dan jiwa sosial melalui kegiatan kepramukaan.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="ca-service-4-item br-7 fix p-relative z-index-1" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); min-height: 300px; display: flex; align-items: center; justify-content: center; flex-direction: column; padding: 40px; color: white;">
                        <div class="mb-30">
                            <i class="fa-solid fa-swimming-pool" style="font-size: 64px;"></i>
                        </div>
                        <h3 class="ca-ser-4-title mb-20" style="color: white;"><a href="#" style="color: white;">Renang</a></h3>
                        <p style="color: rgba(255,255,255,0.9); text-align: center;">Mengembangkan kemampuan renang dan prestasi di berbagai kompetisi renang tingkat daerah.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="ca-service-4-item br-7 fix p-relative z-index-1" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); min-height: 300px; display: flex; align-items: center; justify-content: center; flex-direction: column; padding: 40px; color: white;">
                        <div class="mb-30">
                            <i class="fa-solid fa-music" style="font-size: 64px;"></i>
                        </div>
                        <h3 class="ca-ser-4-title mb-20" style="color: white;"><a href="#" style="color: white;">Qasidah & Sholawat</a></h3>
                        <p style="color: rgba(255,255,255,0.9); text-align: center;">Mengembangkan bakat seni musik Islami melalui qasidah dan sholawat banjari.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="ca-service-4-item br-7 fix p-relative z-index-1" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); min-height: 300px; display: flex; align-items: center; justify-content: center; flex-direction: column; padding: 40px; color: white;">
                        <div class="mb-30">
                            <i class="fa-solid fa-drum" style="font-size: 64px;"></i>
                        </div>
                        <h3 class="ca-ser-4-title mb-20" style="color: white;"><a href="#" style="color: white;">Marching Band</a></h3>
                        <p style="color: rgba(255,255,255,0.9); text-align: center;">Mengembangkan kemampuan musik dan koordinasi melalui marching band.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="ca-service-4-item br-7 fix p-relative z-index-1" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); min-height: 300px; display: flex; align-items: center; justify-content: center; flex-direction: column; padding: 40px; color: white;">
                        <div class="mb-30">
                            <i class="fa-solid fa-palette" style="font-size: 64px;"></i>
                        </div>
                        <h3 class="ca-ser-4-title mb-20" style="color: white;"><a href="#" style="color: white;">Seni & Budaya</a></h3>
                        <p style="color: rgba(255,255,255,0.9); text-align: center;">Mengembangkan kreativitas seni dan budaya melalui berbagai kegiatan kesenian.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="ca-service-4-item br-7 fix p-relative z-index-1" style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%); min-height: 300px; display: flex; align-items: center; justify-content: center; flex-direction: column; padding: 40px; color: white;">
                        <div class="mb-30">
                            <i class="fa-solid fa-futbol" style="font-size: 64px;"></i>
                        </div>
                        <h3 class="ca-ser-4-title mb-20" style="color: white;"><a href="#" style="color: white;">Olahraga</a></h3>
                        <p style="color: rgba(255,255,255,0.9); text-align: center;">Mengembangkan kemampuan fisik dan prestasi di berbagai cabang olahraga.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ekstrakurikuler Section End -->
@endsection

