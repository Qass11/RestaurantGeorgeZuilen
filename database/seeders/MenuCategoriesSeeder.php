<?php

namespace Database\Seeders;

use App\Models\MenuCategorie;
use Illuminate\Database\Seeder;

class MenuCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuCategorie::create([
           'name' => 'Lunch',
           'description' => 'Everything for a "George"-ous lunch'
        ]);

        MenuCategorie::create([
            'name' => 'Dinner',
            'description' => 'Everything for a "George"-ous dinner'
        ]);

        MenuCategorie::create([
            'name' => 'Snacks',
            'description' => 'Everything for a "George"-ous snack'
        ]);

        MenuCategorie::create([
            'name' => 'Drinks',
            'description' => 'Everything for a "George"-ous drink'
        ]);
    }
}
