@extends('layouts.app')

@section('title', 'Beranda - KursusKu')

@section('content')
<section class="hero-card mt-3">
    <div class="row align-items-center g-4">
        <div class="col-lg-7">
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
        </div>

        <div class="col-lg-5">
            <img src="{{ asset('images/hero-kursus.jpg') }}"
                 alt="Ilustrasi kelas KursusKu"
                 class="img-fluid rounded-4">
        </div>
    </div>
</section>

<section class="py-5" id="keunggulan">
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
                    Pelajari Web Dasar, PHP Dasar, Laravel, UI/UX Design,
                    dan MySQL Dasar untuk membangun keterampilanmu.
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

<section class="py-5" id="kursus">
    <h2 class="h3 fw-bold text-center mb-4">Kursus Pilihan</h2>
    <div class="row g-4">
        @foreach ($featured as $course)
        <div class="col-md-4">
            <article class="card h-100 shadow-sm border-0">
                <div class="card-body p-4">
                    <small class="text-secondary">{{ $course['code'] }}</small>
                    <h3 class="h5 fw-bold">{{ $course['name'] }}</h3>
                    <p class="mb-0 text-secondary">{{ $course['description'] }}</p>
                </div>
            </article>
        </div>
        @endforeach
    </div>
</section>

<section class="py-5" id="cara-daftar">
    <div class="text-center mb-4">
        <span class="pink-label">CARA DAFTAR</span>
        <h2 class="fw-bold mt-3">Daftar dalam 3 langkah</h2>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon">1️⃣</div>
                <h3>Pilih Kursus</h3>
                <p>Buka halaman Pendaftaran, lalu pilih kursus yang kamu minati.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon">2️⃣</div>
                <h3>Cek Kursi</h3>
                <p>Sisa kursi tampil otomatis tanpa reload halaman.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon">3️⃣</div>
                <h3>Isi Formulir</h3>
                <p>Isi nama dan email, lalu klik Kirim Pendaftaran.</p>
            </div>
        </div>
    </div>
</section>
@endsection