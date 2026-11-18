@extends('layouts.app')

@section('title', 'Tambah Kursus')

@section('content')
<div class="container py-4" style="max-width: 760px">
    <h1 class="h3 mb-3">Tambah Kursus</h1>

    <form method="POST" action="{{ route('courses.store') }}" class="card card-body shadow-sm">
        @csrf

        <div class="mb-3">
            <label for="code" class="form-label">Kode Kursus</label>
            <input type="text" name="code" id="code"
                class="form-control @error('code') is-invalid @enderror"
                value="{{ old('code') }}">
            @error('code')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Nama Kursus</label>
            <input type="text" name="name" id="name"
                class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="fee" class="form-label">Biaya</label>
            <input type="number" name="fee" id="fee" class="form-control"
                value="{{ old('fee', 0) }}">
        </div>

        <div class="mb-3">
            <label for="quota" class="form-label">Kuota</label>
            <input type="number" name="quota" id="quota" class="form-control"
                value="{{ old('quota', 20) }}">
        </div>

        <div class="mb-3">
            <label for="start_date" class="form-label">Tanggal Mulai</label>
            <input type="date" name="start_date" id="start_date"
                class="form-control" value="{{ old('start_date') }}">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
                <option value="draft">Draft</option>
                <option value="open">Open</option>
                <option value="closed">Closed</option>
            </select>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Simpan Kursus</button>
            <a href="{{ route('courses.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>
@endsection