<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    public $fields = [
        [
            'display_name' => 'Short Text',
            'type' => 'text'
        ],
        [
            'display_name' => 'Long Text',
            'type' => 'textarea'
        ],
        [
            'display_name' => 'Text Editor',
            'type' => 'editor'
        ],
        [
            'display_name' => 'Number',
            'type' => 'number'
        ],
        [
            'display_name' => 'email',
            'type' => 'email'
        ],
        [
            'display_name' => 'Choose One',
            'type' => 'radio'
        ],
        [
            'display_name' => 'Choose Many',
            'type' => 'checkbox'
        ],
        [
            'display_name' => 'Date',
            'type' => 'date'
        ]
    ];
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->fields as $field) {
            Field::create([
                'display_name' => $field['display_name'],
                'type' => $field['type']
            ]);
        }
    }
}
