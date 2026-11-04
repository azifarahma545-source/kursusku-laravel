@extends('layouts.app')

@section('title', 'Katalog Kursus - KursusKu')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">Katalog Kursus 🌸</h2>
            <p class="text-muted mb-0">
                Daftar kursus yang tersedia di KursusKu.
            </p>
        </div>

        <a href="{{ route('courses.create') }}" class="btn btn-primary">
            + Tambah Kursus
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Kode</th>
                        <th>Nama Kursus</th>
                        <th>Biaya</th>
                        <th>Kuota</th>
                        <th>Tanggal Mulai</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($courses as $course)
                        <tr>
                            <td>{{ $course->code }}</td>
                            <td>{{ $course->name }}</td>
                            <td>Rp{{ number_format($course->fee, 0, ',', '.') }}</td>
                            <td>{{ $course->quota }}</td>
                            <td>{{ $course->start_date->format('d/m/Y') }}</td>
                            <td>
                                <span class="badge bg-{{ $course->status === 'open' ? 'success' : ($course->status === 'closed' ? 'danger' : 'secondary') }}">
                                    {{ ucfirst($course->status) }}
                                </span>
                            </td>

                            <td>
                                <div class="d-flex gap-1">
                                    <a href="{{ route('courses.show', $course) }}"
                                       class="btn btn-sm btn-outline-primary">
                                        Detail
                                    </a>

                                    <a href="{{ route('courses.edit', $course) }}"
                                       class="btn btn-sm btn-outline-warning">
                                        Edit
                                    </a>

                                    <form method="POST"
                                          action="{{ route('courses.destroy', $course) }}"
                                          onsubmit="return confirm('Apakah kamu yakin ingin menghapus kursus ini?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-sm btn-outline-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-4 text-muted">
                                Belum ada data kursus. Klik Tambah Kursus untuk memulai.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection