@extends('layouts.app')

@section('title', 'Detail Kursus - KursusKu')

@section('content')
<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <span class="pink-label">🌸 INFORMASI KURSUS</span>
            <h1 class="page-heading mt-2">Detail Kursus</h1>
            <p class="text-muted">Informasi lengkap mengenai kursus yang dipilih.</p>
        </div>

        <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary">
            ← Kembali
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body p-4">

            <h3 class="mb-4">{{ $course->name }}</h3>

            <table class="table">
                <tr>
                    <th width="30%">Kode Kursus</th>
                    <td>{{ $course->code }}</td>
                </tr>
                <tr>
                    <th>Nama Kursus</th>
                    <td>{{ $course->name }}</td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <td>{{ $course->description ?: '-' }}</td>
                </tr>
                <tr>
                    <th>Biaya</th>
                    <td>Rp {{ number_format($course->fee, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <th>Kuota</th>
                    <td>{{ $course->quota }} peserta</td>
                </tr>
                <tr>
                    <th>Tanggal Mulai</th>
                    <td>{{ $course->start_date?->format('d-m-Y') }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ ucfirst($course->status) }}</td>
                </tr>
            </table>

            <a href="{{ route('courses.edit', $course) }}"
               class="btn btn-warning mt-3">
                Edit Kursus
            </a>

        </div>
    </div>

</div>
@endsection