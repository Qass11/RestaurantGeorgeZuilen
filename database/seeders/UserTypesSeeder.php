<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Seeder;

class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserType::create([
            'name' => 'Klant',
            'description' => 'Een bezoeker van het restaurant'
        ]);

        UserType::create([
            'name' => 'Student',
            'description' => 'Student van het MBO Utrecht'
        ]);

        UserType::create([
            'name' => 'Docent',
            'description' => 'Medewerker van het MBO Utrecht'
        ]);

        UserType::create([
            'name' => 'Begeleider',
            'description' => 'Medewerker van George'
        ]);

        UserType::create([
            'name' => 'Eigenaar',
            'description' => 'Eigenaar van George'
        ]);
    }
}
