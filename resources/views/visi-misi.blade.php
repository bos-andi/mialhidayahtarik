@extends('layouts.app')

@section('title', 'Visi & Misi - MI AL-HIDAYAH Tarik')

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
                <h2 class="ca-breadcrumb-title fnw-600">Visi & Misi</h2>
                <div class="it-breadcum-link">
                    <a href="{{ route('home') }}">Beranda</a>
                    <span><i class="fa-solid fa-angle-right"></i></span>
                    <a href="{{ route('profil') }}">Tentang Kami</a>
                    <span><i class="fa-solid fa-angle-right"></i></span>
                    <a class="active" href="#">Visi & Misi</a>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- Visi Section Start -->
    <section class="ca-about-4 pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="ca-service-content-4 text-center mb-60 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="800">
                        <h5 class="ca-section-subtitle subtitle-bg-8 p-relative theme-black-4 br-50">Visi</h5>
                        <h2 class="ca-section-title theme-black-4 fnw-600 pt-16 ca-text-cap">Visi Madrasah</h2>
                        <div class="vision-box">
                            <div class="vision-icon">
                                <i class="fa-solid fa-lightbulb"></i>
                            </div>
                            <h3>
                                Melahirkan manusia Muslim bertaqwa, berakhlak mulia, cakap, percaya terhadap diri sendiri, 
                                serta berilmu, terampil dan mampu mengaktualisasikan diri dalam kehidupan masyarakat
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Visi Section End -->

    <!-- Misi Section Start -->
    <section class="ca-service-4 cream-bg-3 pt-100 pb-70 p-relative z-index-1">
        <div class="ca-servic-4-shape p-absolute"><img src="{{ asset('assets/img/shape/ca-plane-1.1.png') }}" alt="">
        </div>
        <div class="ca-servic-4-shape-2 p-absolute"><img src="{{ asset('assets/img/shape/ca-ft-shape4.1.png') }}"
                alt=""></div>
        <div class="container">
            <div class="ca-service-content-4 text-center mb-60 aos-init aos-animate" data-aos="fade-up"
                data-aos-duration="800">
                <h5 class="ca-section-subtitle subtitle-bg-8 p-relative theme-black-4 br-50">Misi</h5>
                <h2 class="ca-section-title theme-black-4 fnw-600 pt-16 ca-text-cap">Misi Madrasah</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-30">
                    <div class="mission-card mission-card-1">
                        <div class="mission-number">1</div>
                        <div class="mission-content">
                            <h4>Menanamkan Keyakinan Aqidah</h4>
                            <p>Melalui pengamalan Agama Islam berhaluan Ahlus Sunnah wal Jama'ah</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="mission-card mission-card-2">
                        <div class="mission-number">2</div>
                        <div class="mission-content">
                            <h4>Mengoptimalkan Proses Pembelajaran</h4>
                            <p>Dan bimbingan untuk mencapai hasil yang maksimal</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="mission-card mission-card-3">
                        <div class="mission-number">3</div>
                        <div class="mission-content">
                            <h4>Mengembangkan Pengetahuan</h4>
                            <p>Di bidang IPTEK, Bahasa, Olahraga, dan Seni Budaya sesuai dengan bakat, minat dan potensi siswa</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="mission-card mission-card-4">
                        <div class="mission-number">4</div>
                        <div class="mission-content">
                            <h4>Menjalin Kerja Sama</h4>
                            <p>Yang harmonis antara warga sekolah dan lingkungan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Misi Section End -->

    <!-- Tujuan Section Start -->
    <section class="ca-about-4 pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-60">
                    <div class="ca-service-content-4 text-center mb-60 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="800">
                        <h5 class="ca-section-subtitle subtitle-bg-8 p-relative theme-black-4 br-50">Tujuan</h5>
                        <h2 class="ca-section-title theme-black-4 fnw-600 pt-16 ca-text-cap">Tujuan Pendidikan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-30">
                    <div class="goal-card goal-card-1">
                        <div class="goal-icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="goal-content">
                            <h4>Peserta didik mampu melaksanakan ajaran agama Islam</h4>
                            <p>Dalam kehidupan sehari-hari dengan baik dan benar</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="goal-card goal-card-2">
                        <div class="goal-icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="goal-content">
                            <h4>Peserta didik mampu menyerap materi pelajaran</h4>
                            <p>Yang disajikan oleh guru dengan efektif dan optimal</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="goal-card goal-card-3">
                        <div class="goal-icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="goal-content">
                            <h4>Peserta didik lancar berkomunikasi</h4>
                            <p>Menggunakan Bahasa Daerah, Bahasa Arab, Bahasa Indonesia, dan Bahasa Inggris</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="goal-card goal-card-4">
                        <div class="goal-icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="goal-content">
                            <h4>Peserta didik dapat mengembangkan minat, bakat, dan potensinya</h4>
                            <p>Melalui kegiatan Ekstrakurikulum yang beragam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tujuan Section End -->
@endsection

@push('styles')
<style>
    /* Base font size untuk rem calculation */
    :root {
        font-size: 16px;
    }
    
    /* Vision Box */
    .vision-box {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 1.5625rem;
        padding: 3.125rem 2.5rem;
        color: white;
        box-shadow: 0 0.9375rem 3.125rem rgba(102, 126, 234, 0.3);
        position: relative;
        overflow: hidden;
        margin-top: 1.875rem;
    }
    
    .vision-box::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        animation: pulse 8s ease-in-out infinite;
    }
    
    @keyframes pulse {
        0%, 100% { transform: scale(1); opacity: 0.5; }
        50% { transform: scale(1.1); opacity: 0.8; }
    }
    
    .vision-icon {
        text-align: center;
        margin-bottom: 1.5625rem;
    }
    
    .vision-icon i {
        font-size: 3.75rem;
        color: rgba(255, 255, 255, 0.9);
        filter: drop-shadow(0 0.25rem 0.625rem rgba(0,0,0,0.2));
    }
    
    .vision-box h3 {
        font-size: 1.5rem;
        font-weight: 600;
        line-height: 1.8;
        text-align: center;
        position: relative;
        z-index: 1;
        margin: 0;
    }
    
    /* Mission Cards */
    .mission-card {
        background: white;
        border-radius: 1.25rem;
        padding: 2.1875rem;
        box-shadow: 0 0.5rem 1.875rem rgba(0, 0, 0, 0.08);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        height: 100%;
        display: flex;
        align-items: flex-start;
        gap: 1.5625rem;
        position: relative;
        overflow: hidden;
    }
    
    .mission-card::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 0.3125rem;
        transform: scaleX(0);
        transition: transform 0.4s ease;
    }
    
    .mission-card:hover {
        transform: translateY(-0.625rem);
        box-shadow: 0 0.9375rem 2.8125rem rgba(0, 0, 0, 0.15);
    }
    
    .mission-card:hover::after {
        transform: scaleX(1);
    }
    
    .mission-card-1::after {
        background: linear-gradient(90deg, #EC4899 0%, #F472B6 100%);
    }
    .mission-card-1 .mission-number {
        background: linear-gradient(135deg, #EC4899 0%, #F472B6 100%);
    }
    
    .mission-card-2::after {
        background: linear-gradient(90deg, #3B82F6 0%, #60A5FA 100%);
    }
    .mission-card-2 .mission-number {
        background: linear-gradient(135deg, #3B82F6 0%, #60A5FA 100%);
    }
    
    .mission-card-3::after {
        background: linear-gradient(90deg, #10B981 0%, #34D399 100%);
    }
    .mission-card-3 .mission-number {
        background: linear-gradient(135deg, #10B981 0%, #34D399 100%);
    }
    
    .mission-card-4::after {
        background: linear-gradient(90deg, #F59E0B 0%, #FBBF24 100%);
    }
    .mission-card-4 .mission-number {
        background: linear-gradient(135deg, #F59E0B 0%, #FBBF24 100%);
    }
    
    .mission-number {
        width: 3.75rem;
        height: 3.75rem;
        border-radius: 0.9375rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.75rem;
        font-weight: 700;
        color: white;
        flex-shrink: 0;
        box-shadow: 0 0.25rem 0.9375rem rgba(0, 0, 0, 0.2);
    }
    
    .mission-content h4 {
        font-size: 1.25rem;
        font-weight: 700;
        color: #1F2937;
        margin-bottom: 0.75rem;
    }
    
    .mission-content p {
        color: #6B7280;
        font-size: 0.9375rem;
        line-height: 1.7;
        margin: 0;
    }
    
    /* Goal Cards */
    .goal-card {
        background: white;
        border-radius: 1.25rem;
        padding: 1.875rem;
        box-shadow: 0 0.5rem 1.875rem rgba(0, 0, 0, 0.08);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        height: 100%;
        display: flex;
        align-items: flex-start;
        gap: 1.25rem;
        border-top: 0.25rem solid;
        position: relative;
        overflow: hidden;
    }
    
    .goal-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: 0;
    }
    
    .goal-card:hover {
        transform: translateY(-0.5rem);
        box-shadow: 0 0.9375rem 2.5rem rgba(0, 0, 0, 0.12);
    }
    
    .goal-card:hover::before {
        opacity: 0.05;
    }
    
    .goal-card-1 {
        border-top-color: #EC4899;
    }
    .goal-card-1 .goal-icon {
        background: linear-gradient(135deg, #EC4899 0%, #F472B6 100%);
    }
    .goal-card-1::before {
        background: linear-gradient(135deg, #EC4899 0%, #F472B6 100%);
    }
    
    .goal-card-2 {
        border-top-color: #3B82F6;
    }
    .goal-card-2 .goal-icon {
        background: linear-gradient(135deg, #3B82F6 0%, #60A5FA 100%);
    }
    .goal-card-2::before {
        background: linear-gradient(135deg, #3B82F6 0%, #60A5FA 100%);
    }
    
    .goal-card-3 {
        border-top-color: #EF4444;
    }
    .goal-card-3 .goal-icon {
        background: linear-gradient(135deg, #EF4444 0%, #F87171 100%);
    }
    .goal-card-3::before {
        background: linear-gradient(135deg, #EF4444 0%, #F87171 100%);
    }
    
    .goal-card-4 {
        border-top-color: #10B981;
    }
    .goal-card-4 .goal-icon {
        background: linear-gradient(135deg, #10B981 0%, #34D399 100%);
    }
    .goal-card-4::before {
        background: linear-gradient(135deg, #10B981 0%, #34D399 100%);
    }
    
    .goal-icon {
        width: 3.125rem;
        height: 3.125rem;
        border-radius: 0.75rem;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 0.25rem 0.9375rem rgba(0, 0, 0, 0.15);
        position: relative;
        z-index: 1;
    }
    
    .goal-icon i {
        font-size: 1.375rem;
        color: white;
    }
    
    .goal-content {
        position: relative;
        z-index: 1;
    }
    
    .goal-content h4 {
        font-size: 1.125rem;
        font-weight: 700;
        color: #1F2937;
        margin-bottom: 0.625rem;
    }
    
    .goal-content p {
        color: #6B7280;
        font-size: 0.9375rem;
        line-height: 1.6;
        margin: 0;
    }
    
    /* Responsive */
    @media (max-width: 991px) {
        .mission-card,
        .goal-card {
            margin-bottom: 1.25rem;
        }
        
        .vision-box {
            padding: 2.1875rem 1.5625rem;
        }
        
        .vision-box h3 {
            font-size: 1.25rem;
        }
    }
    
    @media (max-width: 767px) {
        .mission-card,
        .goal-card {
            padding: 1.5rem;
        }
        
        .mission-number {
            width: 3rem;
            height: 3rem;
            font-size: 1.5rem;
        }
        
        .goal-icon {
            width: 2.5rem;
            height: 2.5rem;
        }
        
        .vision-icon i {
            font-size: 3rem;
        }
    }
</style>
@endpush

