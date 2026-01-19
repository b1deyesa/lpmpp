<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public $users = [
        [
            'name' => 'Imagodeo Bideyesa Laimeheriwa',
            'email' => 'bideyesa@gmail.com'
        ],
        [
            'name' => 'James Abrahamsz',
            'email' => 'james.abrahamsz@gmail.com'
        ],
        [
            'name' => 'Raysdjuf',
            'email' => 'raysdjuf@gmail.com'
        ],
        [
            'name' => 'Bruri Melky Laimeheriwa',
            'email' => 'bruripenabur@gmail.com'
        ],
        [
            'name' => 'Indah Sangadji',
            'email' => 'sangadjiindah8@gmail.com'
        ],
    ];
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make('lpmpp-user#2026'),
            ]);
        }
    }
}
