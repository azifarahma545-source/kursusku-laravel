<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Participant;

class HomeController extends Controller
{
    public function index()
    {
        $siteName = 'KursusKu';

        $totalCourses = Course::count();
        $openCourses = Course::where('status', 'open')->count();
        $totalParticipants = Participant::count();
        $totalEnrollments = Enrollment::count();

        $featured = [
            [
                'code' => 'WEB-01',
                'name' => 'Web Dasar',
                'description' => 'Belajar struktur HTML dan CSS dasar.',
            ],
            [
                'code' => 'PHP-01',
                'name' => 'PHP Dasar',
                'description' => 'Belajar variabel, function, form, dan logika PHP.',
            ],
            [
                'code' => 'LAR-01',
                'name' => 'Laravel Fundamental',
                'description' => 'Belajar route, controller, Blade, dan MVC.',
            ],
            [
                'code' => 'UI-01',
                'name' => 'UI/UX Design',
                'description' => 'Belajar prinsip desain tampilan dan pengalaman pengguna.',
            ],
            [
                'code' => 'SQL-01',
                'name' => 'MySQL Dasar',
                'description' => 'Belajar dasar database, tabel, dan query MySQL.',
            ],
        ];

        return view('home', compact(
            'siteName',
            'featured',
            'totalCourses',
            'openCourses',
            'totalParticipants',
            'totalEnrollments'
        ));
    }
}