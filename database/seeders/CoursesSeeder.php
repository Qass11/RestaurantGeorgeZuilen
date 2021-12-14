<?php

namespace Database\Seeders;

use App\Models\Courses;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Courses::create([
            'name'                  => 'General',
            'description'           => 'Course to study to become a General-employee',
            'lessons_chef'          => '5',
            'lessons_bartender'     => '5',
            'lessons_waiter'        => '5',
        ]);

        Courses::create([
            'name'                  => 'Bartender',
            'description'           => 'Course to study to become a Bartender',
            'lessons_chef'          => '3',
            'lessons_bartender'     => '9',
            'lessons_waiter'        => '3',
        ]);

        Courses::create([
            'name'                  => 'Waiter',
            'description'           => 'Course to study to become a Waiter',
            'lessons_chef'          => '3',
            'lessons_bartender'     => '2',
            'lessons_waiter'        => '10',
        ]);

        Courses::create([
            'name'                  => 'Chef',
            'description'           => 'Course to study to become a Chef',
            'lessons_chef'          => '10',
            'lessons_bartender'     => '2',
            'lessons_waiter'        => '3',
        ]);
    }
}
