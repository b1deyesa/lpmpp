<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public $roles = [
        [
            'display_name' => 'Super Admin',
            'slug' => 'superadmin'
        ],
        [
            'display_name' => 'Admin',
            'slug' => 'admin'
        ],
        [
            'display_name' => 'Supervisor',
            'slug' => 'supervisor'
        ]
    ];
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->roles as $role) {
            Role::create([
                'display_name' => $role['display_name'],
                'slug' => $role['slug']
            ]);
        }
    }
}
