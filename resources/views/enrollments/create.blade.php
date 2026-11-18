@extends('layouts.app')

@section('title', 'Pendaftaran Kursus')

@section('content')
<div class="container py-4" style="max-width: 760px">

    <h1 class="h3 mb-2">Pendaftaran Kursus</h1>

    <p class="text-muted mb-4">
        Silakan pilih peserta dan kursus yang ingin didaftarkan.
    </p>

    <form method="POST" action="{{ route('enrollments.store') }}"
        class="card card-body shadow-sm">
        @csrf

        <div class="mb-3">
            <label for="participant_id" class="form-label">
                Nama Peserta
            </label>

            <select name="participant_id" id="participant_id"
                class="form-select @error('participant_id') is-invalid @enderror">

                <option value="">-- Pilih Peserta --</option>

                @foreach ($participants as $participant)
                    <option value="{{ $participant->id }}"
                        @selected(old('participant_id') == $participant->id)>
                        {{ $participant->name }} ({{ $participant->email }})
                    </option>
                @endforeach

            </select>

            @error('participant_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="course_id" class="form-label">
                Pilih Kursus
            </label>

            <select name="course_id" id="course_id"
                class="form-select @error('course_id') is-invalid @enderror">

                <option value="">-- Pilih Kursus --</option>

                @foreach ($courses as $course)
                    <option value="{{ $course->id }}"
                        @selected(old('course_id') == $course->id)>
                        {{ $course->name }} - {{ $course->code }}
                    </option>
                @endforeach

            </select>

            @error('course_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">
                Daftarkan Peserta
            </button>

            <a href="{{ route('enrollments.index') }}"
                class="btn btn-secondary">
                Lihat Pendaftaran
            </a>
        </div>

    </form>
</div>
@endsection