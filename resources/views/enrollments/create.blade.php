@extends('layouts.app')

@section('title', 'Pendaftaran Kursus - KursusKu')

@section('content')
<div class="row justify-content-center mt-3">
    <div class="col-lg-8 col-xl-7">

        <div class="text-center mb-4">
            <span class="pink-label">🌷 AYO MULAI BELAJAR</span>
            <h1 class="page-heading mt-3">
                Formulir <span class="pink-text">Pendaftaran</span>
            </h1>
            <p class="text-secondary">
                Lengkapi data berikut untuk memilih kursus favoritmu.
            </p>
        </div>

        <div class="form-card">
            <div class="form-card-header">
                <h2 class="h4 fw-bold mb-2">💗 Data Pendaftaran</h2>
                <p class="mb-0 text-secondary">
                    Isi semua kolom dengan data yang benar, ya!
                </p>
            </div>

            <div class="form-card-body">
                <form method="POST"
                      action="{{ route('enrollments.preview') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="form-label">
                            Nama Lengkap
                        </label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            class="form-control"
                            placeholder="Masukkan nama lengkap"
                            required
                        >
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label">
                            Alamat Email
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="form-control"
                            placeholder="contoh@email.com"
                            required
                        >
                    </div>

                    <div class="mb-4">
                        <label for="course_id" class="form-label">
                            Pilih Kursus
                        </label>
                        <select
                            id="course_id"
                            name="course_id"
                            class="form-select"
                            required
                        >
                            <option value="">-- Pilih kursus --</option>

                            @foreach ($courses as $id => $course)
                                <option
                                    value="{{ $id }}"
                                    @selected(old('course_id') == $id)
                                >
                                    {{ $course['name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div id="availability" class="alert mb-4" role="status">
                        🌸 Pilih kursus untuk melihat sisa kursi.
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger mb-4">
                            <strong>Periksa kembali datamu:</strong>
                            <ul class="mb-0 mt-2">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <button type="submit" class="btn btn-pink w-100">
                        Kirim Pendaftaran &nbsp; ♡
                    </button>

                    <a href="{{ route('home') }}"
                       class="btn btn-light border w-100 mt-3"
                       style="border-radius: 12px; padding: 12px;">
                        ← Kembali ke Beranda
                    </a>
                </form>
            </div>
        </div>

        <p class="text-center text-secondary small mt-4">
            🌸 Terima kasih sudah memilih KursusKu untuk perjalanan belajarmu.
        </p>
    </div>
</div>
@endsection

