<?php

namespace Database\Seeders;

use App\Models\Survey;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SurveySeeder extends Seeder
{
    public $surveys = [
        [
            'title' => 'Kepuasan Fakultas/Pascasarjana',
            'slug' => 'kepuasan-fakultas-pascasarjana'
        ],
        [
            'title' => 'Kepuasan Unit Kerja Lainnya',
            'slug' => 'kepuasan-unit-kerja-lainnya'
        ],
        [
            'title' => 'Pemahaman Visi Misi',
            'slug' => 'pemahaman-visi-misi'
        ]
    ];
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->surveys as $survey) {
            Survey::create([
                'title' => $survey['title'],
                'slug' => $survey['slug']
            ]);
        }
    }
}
