<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::create([
            'description' => '"George"-ous Marina',
            'imageUrl' => 'https://i.imgur.com/0J5J4G2.jpg'
        ]);

        Gallery::create([
            'description' => '"George"-ous Marina',
            'imageUrl' => 'https://i.imgur.com/0J5J4G2.jpg'
        ]);

        Gallery::create([
            'description' => '"George"-ous Marina',
            'imageUrl' => 'https://i.imgur.com/0J5J4G2.jpg'
        ]);
    }
}
