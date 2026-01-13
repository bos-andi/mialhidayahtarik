@extends('layouts.app')

@section('title', 'Profil Madrasah - MI AL-HIDAYAH Tarik')

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
                <h2 class="ca-breadcrumb-title fnw-600">Profil Madrasah</h2>
                <div class="it-breadcum-link">
                    <a href="{{ route('home') }}">Beranda</a>
                    <span><i class="fa-solid fa-angle-right"></i></span>
                    <a class="active" href="#">Profil Madrasah</a>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- Informasi Sekolah Section Start -->
    <section class="ca-about-4 pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-50">
                    <div class="ca-service-content-4 text-center mb-60 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="800">
                        <h5 class="ca-section-subtitle subtitle-bg-8 p-relative theme-black-4 br-50">Informasi Madrasah</h5>
                        <h2 class="ca-section-title theme-black-4 fnw-600 pt-16 ca-text-cap">Madrasah Ibtidaiyah Al-Hidayah</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="profil-info-grid">
                        <div class="row">
                            <div class="col-md-6 mb-30">
                                <div class="info-card info-card-1">
                                    <div class="info-icon-wrapper">
                                        <i class="fa-solid fa-school"></i>
                                    </div>
                                    <div class="info-content">
                                        <h4>Nama Madrasah</h4>
                                        <p>Madrasah Ibtidaiyah Al-Hidayah</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="info-card info-card-2">
                                    <div class="info-icon-wrapper">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="info-content">
                                        <h4>Alamat</h4>
                                        <p>Jl. Raya Tarik 16/04<br>Kec. Tarik, Kabupaten Sidoarjo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="info-card info-card-3">
                                    <div class="info-icon-wrapper">
                                        <i class="fa-solid fa-award"></i>
                                    </div>
                                    <div class="info-content">
                                        <h4>Status Akreditasi</h4>
                                        <p>
                                            <span class="accreditation-badge">A (Sangat Baik)</span><br>
                                            <small>No. A/KW.13.4/MI/1997/2006</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="info-card info-card-4">
                                    <div class="info-icon-wrapper">
                                        <i class="fa-solid fa-id-card"></i>
                                    </div>
                                    <div class="info-content">
                                        <h4>NPSN</h4>
                                        <p>20502034<br><small>01 September 2008</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="info-card info-card-5">
                                    <div class="info-icon-wrapper">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="info-content">
                                        <h4>E-mail</h4>
                                        <p>
                                            <a href="mailto:mi_alhidayahtarik@yahoo.co.id">mi_alhidayahtarik@yahoo.co.id</a><br>
                                            <a href="mailto:alhidayahtarik@yahoo.com">alhidayahtarik@yahoo.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="info-card info-card-6">
                                    <div class="info-icon-wrapper">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="info-content">
                                        <h4>Telepon</h4>
                                        <p><a href="tel:0318970363">031-8970363</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Informasi Sekolah Section End -->

    <!-- Sejarah Section Start -->
    <section class="ca-about-4 pb-70 cream-bg-3">
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

    <!-- Counter Section Start -->
    <section class="ca-service-4 cream-bg-3 pt-100 pb-70 p-relative z-index-1">
        <div class="ca-servic-4-shape p-absolute"><img src="{{ asset('assets/img/shape/ca-plane-1.1.png') }}" alt="">
        </div>
        <div class="ca-servic-4-shape-2 p-absolute"><img src="{{ asset('assets/img/shape/ca-ft-shape4.1.png') }}"
                alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="stat-card stat-card-1">
                        <div class="stat-icon">
                            <i class="fa-solid fa-calendar-days"></i>
                        </div>
                        <h3 class="stat-number"><span class="counter">1945</span></h3>
                        <p class="stat-label">Tahun Berdiri</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="stat-card stat-card-2">
                        <div class="stat-icon">
                            <i class="fa-solid fa-trophy"></i>
                        </div>
                        <h3 class="stat-number"><span class="counter">A</span></h3>
                        <p class="stat-label">Status Akreditasi</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="stat-card stat-card-3">
                        <div class="stat-icon">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <h3 class="stat-number"><span class="counter">6</span></h3>
                        <p class="stat-label">Tahun Pendidikan</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="stat-card stat-card-4">
                        <div class="stat-icon">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <h3 class="stat-number"><span class="counter">100</span>+</h3>
                        <p class="stat-label">Siswa Aktif</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->
@endsection

@push('styles')
<style>
    /* Base font size untuk rem calculation */
    :root {
        font-size: 16px;
    }
    
    /* Profil Info Cards dengan Variasi Warna Elegan */
    .profil-info-grid {
        margin-bottom: 3.125rem;
    }
    
    .info-card {
        background: white;
        border-radius: 1.25rem;
        padding: 1.875rem;
        box-shadow: 0 0.5rem 1.875rem rgba(0, 0, 0, 0.08);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        height: 100%;
        display: flex;
        align-items: flex-start;
        gap: 1.25rem;
        border-left: 0.25rem solid;
        position: relative;
        overflow: hidden;
    }
    
    .info-card::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 6.25rem;
        height: 6.25rem;
        border-radius: 50%;
        opacity: 0.1;
        transform: translate(1.875rem, -1.875rem);
        transition: all 0.4s ease;
    }
    
    .info-card:hover {
        transform: translateY(-0.5rem);
        box-shadow: 0 0.9375rem 2.5rem rgba(0, 0, 0, 0.12);
    }
    
    .info-card:hover::before {
        transform: translate(1.25rem, -1.25rem) scale(1.2);
        opacity: 0.15;
    }
    
    /* Variasi Warna untuk Setiap Card */
    .info-card-1 {
        border-left-color: #4F46E5;
    }
    .info-card-1 .info-icon-wrapper {
        background: linear-gradient(135deg, #4F46E5 0%, #7C3AED 100%);
    }
    .info-card-1::before {
        background: #4F46E5;
    }
    
    .info-card-2 {
        border-left-color: #059669;
    }
    .info-card-2 .info-icon-wrapper {
        background: linear-gradient(135deg, #059669 0%, #10B981 100%);
    }
    .info-card-2::before {
        background: #059669;
    }
    
    .info-card-3 {
        border-left-color: #DC2626;
    }
    .info-card-3 .info-icon-wrapper {
        background: linear-gradient(135deg, #DC2626 0%, #EF4444 100%);
    }
    .info-card-3::before {
        background: #DC2626;
    }
    
    .info-card-4 {
        border-left-color: #EA580C;
    }
    .info-card-4 .info-icon-wrapper {
        background: linear-gradient(135deg, #EA580C 0%, #F97316 100%);
    }
    .info-card-4::before {
        background: #EA580C;
    }
    
    .info-card-5 {
        border-left-color: #0891B2;
    }
    .info-card-5 .info-icon-wrapper {
        background: linear-gradient(135deg, #0891B2 0%, #06B6D4 100%);
    }
    .info-card-5::before {
        background: #0891B2;
    }
    
    .info-card-6 {
        border-left-color: #9333EA;
    }
    .info-card-6 .info-icon-wrapper {
        background: linear-gradient(135deg, #9333EA 0%, #A855F7 100%);
    }
    .info-card-6::before {
        background: #9333EA;
    }
    
    .info-icon-wrapper {
        width: 3.75rem;
        height: 3.75rem;
        border-radius: 0.9375rem;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 0.25rem 0.9375rem rgba(0, 0, 0, 0.15);
    }
    
    .info-icon-wrapper i {
        font-size: 1.75rem;
        color: white;
    }
    
    .info-content h4 {
        font-size: 1.125rem;
        font-weight: 700;
        color: #1F2937;
        margin-bottom: 0.625rem;
    }
    
    .info-content p {
        color: #6B7280;
        font-size: 0.9375rem;
        line-height: 1.6;
        margin: 0;
    }
    
    .info-content a {
        color: inherit;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .info-content a:hover {
        color: #4F46E5;
    }
    
    .accreditation-badge {
        display: inline-block;
        background: linear-gradient(135deg, #10B981 0%, #059669 100%);
        color: white;
        padding: 0.375rem 1.125rem;
        border-radius: 1.5625rem;
        font-size: 0.875rem;
        font-weight: 600;
        margin-bottom: 0.3125rem;
        box-shadow: 0 0.125rem 0.625rem rgba(16, 185, 129, 0.3);
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
        background: linear-gradient(90deg, #4F46E5 0%, #7C3AED 100%);
    }
    .mission-card-1 .mission-number {
        background: linear-gradient(135deg, #4F46E5 0%, #7C3AED 100%);
    }
    
    .mission-card-2::after {
        background: linear-gradient(90deg, #059669 0%, #10B981 100%);
    }
    .mission-card-2 .mission-number {
        background: linear-gradient(135deg, #059669 0%, #10B981 100%);
    }
    
    .mission-card-3::after {
        background: linear-gradient(90deg, #EA580C 0%, #F97316 100%);
    }
    .mission-card-3 .mission-number {
        background: linear-gradient(135deg, #EA580C 0%, #F97316 100%);
    }
    
    .mission-card-4::after {
        background: linear-gradient(90deg, #0891B2 0%, #06B6D4 100%);
    }
    .mission-card-4 .mission-number {
        background: linear-gradient(135deg, #0891B2 0%, #06B6D4 100%);
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
    }
    
    .goal-card:hover {
        transform: translateY(-0.5rem);
        box-shadow: 0 0.9375rem 2.5rem rgba(0, 0, 0, 0.12);
    }
    
    .goal-card-1 {
        border-top-color: #10B981;
    }
    .goal-card-1 .goal-icon {
        background: linear-gradient(135deg, #10B981 0%, #059669 100%);
    }
    
    .goal-card-2 {
        border-top-color: #3B82F6;
    }
    .goal-card-2 .goal-icon {
        background: linear-gradient(135deg, #3B82F6 0%, #2563EB 100%);
    }
    
    .goal-card-3 {
        border-top-color: #F59E0B;
    }
    .goal-card-3 .goal-icon {
        background: linear-gradient(135deg, #F59E0B 0%, #D97706 100%);
    }
    
    .goal-card-4 {
        border-top-color: #8B5CF6;
    }
    .goal-card-4 .goal-icon {
        background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 100%);
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
    }
    
    .goal-icon i {
        font-size: 1.375rem;
        color: white;
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
    
    /* Stat Cards */
    .stat-card {
        background: white;
        border-radius: 1.5625rem;
        padding: 2.5rem 1.875rem;
        text-align: center;
        box-shadow: 0 0.625rem 2.1875rem rgba(0, 0, 0, 0.1);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }
    
    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 0.4s ease;
    }
    
    .stat-card:hover {
        transform: translateY(-0.75rem) scale(1.02);
        box-shadow: 0 1.25rem 3.125rem rgba(0, 0, 0, 0.15);
    }
    
    .stat-card:hover::before {
        opacity: 0.05;
    }
    
    .stat-card-1::before {
        background: linear-gradient(135deg, #4F46E5 0%, #7C3AED 100%);
    }
    .stat-card-1 .stat-icon {
        background: linear-gradient(135deg, #4F46E5 0%, #7C3AED 100%);
    }
    .stat-card-1 .stat-number {
        color: #4F46E5;
    }
    
    .stat-card-2::before {
        background: linear-gradient(135deg, #F59E0B 0%, #D97706 100%);
    }
    .stat-card-2 .stat-icon {
        background: linear-gradient(135deg, #F59E0B 0%, #D97706 100%);
    }
    .stat-card-2 .stat-number {
        color: #F59E0B;
    }
    
    .stat-card-3::before {
        background: linear-gradient(135deg, #10B981 0%, #059669 100%);
    }
    .stat-card-3 .stat-icon {
        background: linear-gradient(135deg, #10B981 0%, #059669 100%);
    }
    .stat-card-3 .stat-number {
        color: #10B981;
    }
    
    .stat-card-4::before {
        background: linear-gradient(135deg, #EF4444 0%, #DC2626 100%);
    }
    .stat-card-4 .stat-icon {
        background: linear-gradient(135deg, #EF4444 0%, #DC2626 100%);
    }
    .stat-card-4 .stat-number {
        color: #EF4444;
    }
    
    .stat-icon {
        width: 5rem;
        height: 5rem;
        border-radius: 1.25rem;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5625rem;
        box-shadow: 0 0.5rem 1.5625rem rgba(0, 0, 0, 0.15);
    }
    
    .stat-icon i {
        font-size: 2.25rem;
        color: white;
    }
    
    .stat-number {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 0.625rem;
        transition: transform 0.3s ease;
    }
    
    .stat-card:hover .stat-number {
        transform: scale(1.1);
    }
    
    .stat-label {
        font-size: 1rem;
        color: #6B7280;
        font-weight: 600;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 0.0625rem;
    }
    
    /* Responsive */
    @media (max-width: 991px) {
        .info-card,
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
        .info-card,
        .mission-card,
        .goal-card {
            padding: 1.5rem;
        }
        
        .stat-card {
            padding: 2rem 1.5rem;
        }
        
        .stat-icon {
            width: 4rem;
            height: 4rem;
        }
        
        .stat-icon i {
            font-size: 1.875rem;
        }
        
        .stat-number {
            font-size: 2.5rem;
        }
    }
</style>
@endpush

