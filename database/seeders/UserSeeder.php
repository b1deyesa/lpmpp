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
            'role_id' => 1,
            'name' => 'Imagodeo Bideyesa Laimeheriwa',
            'email' => 'bideyesa@gmail.com',
            'password' => 'magox1905'
        ],
        [
            'role_id' => 2,
            'name' => 'James Abrahamsz',
            'email' => 'james.abrahamsz@gmail.com',
            'password' => 'lpmpp-user#2026'
        ],
        [
            'role_id' => 2,
            'name' => 'Raysdjuf',
            'email' => 'raysdjuf@gmail.com',
            'password' => 'lpmpp-user#2026'
        ],
        [
            'role_id' => 1,
            'name' => 'Bruri Melky Laimeheriwa',
            'email' => 'bruripenabur@gmail.com',
            'password' => 'lpmpp-user#2026'
        ],
        [
            'role_id' => 2,
            'name' => 'Indah Sangadji',
            'email' => 'sangadjiindah8@gmail.com',
            'password' => 'lpmpp-user#2026'
        ]
    ];
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->users as $user) {
            User::create([
                'role_id' => $user['role_id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password'])
            ]);
        }
    }
}
