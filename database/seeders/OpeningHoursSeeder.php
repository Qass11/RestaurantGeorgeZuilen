<?php

namespace Database\Seeders;

use App\Models\OpeningHours;
use Illuminate\Database\Seeder;

class OpeningHoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OpeningHours::create([
           'day' => 'Monday',
           'begin' => '18:00',
           'end' => '21:00'
        ]);

        OpeningHours::create([
            'day' => 'Tuesday',
            'begin' => '18:00',
            'end' => '21:00'
        ]);

        OpeningHours::create([
            'day' => 'Wednesday',
            'begin' => '18:00',
            'end' => '21:00'
        ]);

        OpeningHours::create([
            'day' => 'Thursday',
            'begin' => '18:00',
            'end' => '21:00'
        ]);

        OpeningHours::create([
            'day' => 'Friday',
            'begin' => '18:00',
            'end' => '21:00'
        ]);
    }
}
