<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display homepeg
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Display page servicds
     */
    public function services()
    {
        $divisions = [
            [
                'name' => 'Cybersecurity',
                'icon' => '🛡️',
                'description' => 'Spesialisasi dalam penetration testing, network defense, vulnerability assessment, dan implementasi solusi keamanan siber untuk melindungi infrastruktur digital.',
                'focus' => ['Penetration Testing', 'Network Defense', 'Security Audit', 'Incident Response']
            ],
            [
                'name' => 'Big Data',
                'icon' => '📊',
                'description' => 'Fokus pada pengembangan data warehouse, analytics, machine learning, dan pemrosesan data besar untuk menghasilkan insights bisnis yang valuable.',
                'focus' => ['Data Warehouse', 'Analytics', 'Machine Learning', 'Data Processing']
            ],
            [
                'name' => 'Game Technology',
                'icon' => '🎮',
                'description' => 'Mengembangkan teknologi gaming, prototyping game engine, gamification solutions, dan implementasi teknologi AR/VR untuk entertainment dan edukasi.',
                'focus' => ['Game Development', 'AR/VR Technology', 'Gamification', 'Interactive Media']
            ],
            [
                'name' => 'Geographic Information System',
                'icon' => '🗺️',
                'description' => 'Spesialisasi dalam pemetaan digital, analisis spasial, pemrosesan data geografis, dan pengembangan aplikasi berbasis lokasi yang akurat.',
                'focus' => ['Digital Mapping', 'Spatial Analysis', 'Location-based Apps', 'Geospatial Data']
            ]
        ];

        return view('services', compact('divisions'));
    }

    /**
     * Display developer page
     */
    public function developer()
    {
        $developers = [
            [
                'name' => 'Andrian Nugraha',
                'role' => 'Full Stack Developer',
                'skills' => ['Laravel', 'React', 'Vue.js', 'Node.js', 'Python', 'DevOps'],
                'github' => 'https://github.com/andrian-nugraha',
                'description' => 'Senior developer dengan 5+ tahun pengalaman dalam web development dan cloud infrastructure.'
            ],
            [
                'name' => 'Sarah Wijaya',
                'role' => 'Frontend Specialist',
                'skills' => ['TailwindCSS', 'JavaScript', 'TypeScript', 'UI/UX Design'],
                'github' => 'https://github.com/sarah-wijaya',
                'description' => 'UI/UX enthusiast yang fokus pada responsive design dan user experience optimization.'
            ],
            [
                'name' => 'Muhammad Rizky',
                'role' => 'Backend Engineer',
                'skills' => ['PHP', 'Laravel', 'MySQL', 'Redis', 'Docker'],
                'github' => 'https://github.com/muhammad-rizky',
                'description' => 'Backend specialist dengan expertise dalam API development dan database optimization.'
            ]
        ];

        return view('developer', compact('developers'));
    }
}
