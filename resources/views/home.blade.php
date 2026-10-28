@extends('layouts.app')

@section('title', 'Beranda - KursusKu')

@section('content')
<section class="hero-card mt-3">
    <div class="hero-content">
        <span class="pink-label">
            🌸 KURSUS TEKNOLOGI UNTUK MASA DEPAN
        </span>

        <h1 class="hero-title">
            Belajar lebih seru,<br>
            raih masa depan <span class="pink-text">cemerlang!</span>
        </h1>

        <p class="hero-description">
            Selamat datang di KursusKu. Temukan kursus teknologi
            yang sesuai dengan minatmu, periksa ketersediaan kursi,
            dan daftarkan dirimu dengan mudah.
        </p>

        <a href="{{ route('enrollments.create') }}"
           class="btn btn-pink mt-3">
            Mulai Pendaftaran &nbsp; →
        </a>

        <div class="mt-4 text-secondary">
            💗 Belajar &nbsp; • &nbsp; 🌷 Berkembang
            &nbsp; • &nbsp; ✨ Berprestasi
        </div>
    </div>
</section>

<section class="py-5">
    <div class="text-center mb-4">
        <span class="pink-label">KENAPA KURSUSKU?</span>
        <h2 class="fw-bold mt-3">Belajar jadi lebih mudah</h2>
        <p class="text-secondary">
            Semua yang kamu butuhkan untuk memulai perjalanan belajarmu.
        </p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon">💻</div>
                <h3>Kursus Teknologi</h3>
                <p>
                    Pelajari Web Dasar, PHP Dasar, dan Laravel Dasar
                    untuk membangun keterampilanmu.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon">📝</div>
                <h3>Pendaftaran Mudah</h3>
                <p>
                    Isi nama, email, dan pilih kursus yang ingin
                    kamu pelajari melalui formulir sederhana.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon">🌸</div>
                <h3>Cek Kursi Kursus</h3>
                <p>
                    Lihat informasi ketersediaan kursi setelah
                    memilih kursus yang kamu inginkan.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection