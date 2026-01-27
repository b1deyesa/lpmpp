<?php

namespace Database\Seeders;

use App\Models\Website;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebsiteSeeder extends Seeder
{   
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Website::create([
            'active' => false,
            'jumbotron_title' => 'Lembaga Penjaminan Mutu dan Pengembangan Pembelajaran (LPMPP)',
            'jumbotron_subtitle' => 'Universitas Pattimura',
            'jumbotron_description' => 'Menggerakkan Budaya Mutu Universitas Pattimura Menuju World Class University',
        ]);
    }
}
