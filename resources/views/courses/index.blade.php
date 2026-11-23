@extends('layouts.app')

@section('title', 'Daftar Kursus')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-1">Daftar Kursus</h1>
            <p class="text-muted mb-0">Kelola data kursus KursusKu.</p>
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

    {{-- Form Search dan Filter --}}
    <form method="GET" action="{{ route('courses.index') }}" class="row g-2 mb-3">
        <div class="col-md-6">
            <input
                type="search"
                name="q"
                value="{{ $search }}"
                class="form-control"
                placeholder="Cari kode atau nama kursus"
            >
        </div>

        <div class="col-md-3">
            <select name="status" class="form-select">
                <option value="">Semua status</option>
                <option value="open" @selected($status === 'open')>Open</option>
                <option value="closed" @selected($status === 'closed')>Closed</option>
                <option value="draft" @selected($status === 'draft')>Draft</option>
            </select>
        </div>

        <div class="col-md-3 d-flex gap-2">
            <button type="submit" class="btn btn-primary">Cari</button>
            <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary">
                Reset
            </a>
        </div>
    </form>

    {{-- Tabel Course --}}
    <div class="card shadow-sm">
        <div class="table-responsive">
            <table class="table table-striped table-hover mb-0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode</th>
                        <th>Nama Kursus</th>
                        <th>Biaya</th>
                        <th>Kuota</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($courses as $course)
                        <tr>
                            <td>{{ $courses->firstItem() + $loop->index }}</td>
                            <td>{{ $course->code }}</td>
                            <td>{{ $course->name }}</td>
                            <td>Rp{{ number_format($course->fee, 0, ',', '.') }}</td>
                            <td>{{ $course->quota }}</td>
                            <td>{{ $course->status }}</td>
                            <td>
                                <a href="{{ route('courses.show', $course) }}"
                                   class="btn btn-sm btn-info">
                                    Detail
                                </a>

                                <a href="{{ route('courses.edit', $course) }}"
                                   class="btn btn-sm btn-warning">
                                    Edit
                                </a>

                                <form action="{{ route('courses.destroy', $course) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus kursus ini?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-danger">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted py-4">
                                Tidak ada kursus yang sesuai pencarian/filter.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Pagination --}}
    <div class="mt-3">
        {{ $courses->links() }}
    </div>
</div>
@endsection