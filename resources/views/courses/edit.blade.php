@extends('layouts.app')

@section('title', 'Edit Kursus - KursusKu')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="mb-4">
                <span class="pink-label">🌸 KELOLA KURSUS</span>
                <h1 class="page-heading mt-2">Edit Kursus</h1>
                <p class="text-muted">
                    Perbarui informasi kursus sesuai kebutuhan.
                </p>
            </div>

            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">

                    <form method="POST" action="{{ route('courses.update', $course) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="code" class="form-label">Kode Kursus</label>
                            <input
                                type="text"
                                name="code"
                                id="code"
                                class="form-control @error('code') is-invalid @enderror"
                                value="{{ old('code', $course->code) }}"
                            >
                            @error('code')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Kursus</label>
                            <input
                                type="text"
                                name="name"
                                id="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name', $course->name) }}"
                            >
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea
                                name="description"
                                id="description"
                                rows="4"
                                class="form-control @error('description') is-invalid @enderror"
                            >{{ old('description', $course->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="fee" class="form-label">Biaya Kursus</label>
                            <input
                                type="number"
                                name="fee"
                                id="fee"
                                class="form-control @error('fee') is-invalid @enderror"
                                value="{{ old('fee', $course->fee) }}"
                            >
                            @error('fee')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="quota" class="form-label">Kuota Peserta</label>
                            <input
                                type="number"
                                name="quota"
                                id="quota"
                                class="form-control @error('quota') is-invalid @enderror"
                                value="{{ old('quota', $course->quota) }}"
                            >
                            @error('quota')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="start_date" class="form-label">Tanggal Mulai</label>
                            <input
                                type="date"
                                name="start_date"
                                id="start_date"
                                class="form-control @error('start_date') is-invalid @enderror"
                                value="{{ old('start_date', $course->start_date?->format('Y-m-d')) }}"
                            >
                            @error('start_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="status" class="form-label">Status Kursus</label>
                            <select
                                name="status"
                                id="status"
                                class="form-select @error('status') is-invalid @enderror"
                            >
                                <option value="draft" {{ old('status', $course->status) == 'draft' ? 'selected' : '' }}>
                                    Draft
                                </option>
                                <option value="open" {{ old('status', $course->status) == 'open' ? 'selected' : '' }}>
                                    Open
                                </option>
                                <option value="closed" {{ old('status', $course->status) == 'closed' ? 'selected' : '' }}>
                                    Closed
                                </option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                Simpan Perubahan
                            </button>

                            <a href="{{ route('courses.show', $course) }}"
                               class="btn btn-outline-secondary">
                                Batal
                            </a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
