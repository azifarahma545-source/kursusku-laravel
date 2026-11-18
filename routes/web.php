<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// CRUD kursus
Route::resource('courses', CourseController::class);

// Cek ketersediaan kursus
Route::get('/courses/{course}/availability', function (int $course) {
    $availability = [
        1 => [
            'course' => 'Web Dasar',
            'remaining' => 12,
        ],
        2 => [
            'course' => 'PHP Dasar',
            'remaining' => 8,
        ],
        3 => [
            'course' => 'Laravel Dasar',
            'remaining' => 4,
        ],
    ];

    abort_unless(isset($availability[$course]), 404);

    return response()->json($availability[$course]);
})->name('courses.availability');

// Pendaftaran peserta kursus
Route::resource('enrollments', EnrollmentController::class)
    ->only(['index', 'create', 'store']);