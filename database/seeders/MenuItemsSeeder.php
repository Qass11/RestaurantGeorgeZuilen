<?php

namespace Database\Seeders;

use App\Models\MenuItems;
use Illuminate\Database\Seeder;

class MenuItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuItems::create([
           'name' => 'A "George"-ous test menu item',
           'description' =>  'Menu item for categorie 1',
           'price' => '0,00',
           'menu_categories_id' => '1'
        ]);

        MenuItems::create([
            'name' => 'A "George"-ous test menu item',
            'description' =>  'Menu item for categorie 2',
            'price' => '0,00',
            'menu_categories_id' => '2'
        ]);

        MenuItems::create([
            'name' => 'A "George"-ous test menu item',
            'description' =>  'Menu item for categorie 3',
            'price' => '0,00',
            'menu_categories_id' => '3'
        ]);

        MenuItems::create([
            'name' => 'A "George"-ous test menu item',
            'description' =>  'Menu item for categorie 4',
            'price' => '0,00',
            'menu_categories_id' => '4'
        ]);

        MenuItems::create([
            'name' => 'A "George"-ous test menu item',
            'description' =>  'Menu item for categorie 1',
            'price' => '0,00',
            'menu_categories_id' => '1'
        ]);

        MenuItems::create([
            'name' => 'A "George"-ous test menu item',
            'description' =>  'Menu item for categorie 2',
            'price' => '0,00',
            'menu_categories_id' => '2'
        ]);

        MenuItems::create([
            'name' => 'A "George"-ous test menu item',
            'description' =>  'Menu item for categorie 3',
            'price' => '0,00',
            'menu_categories_id' => '3'
        ]);

        MenuItems::create([
            'name' => 'A "George"-ous test menu item',
            'description' =>  'Menu item for categorie 4',
            'price' => '0,00',
            'menu_categories_id' => '4'
        ]);
    }
}
