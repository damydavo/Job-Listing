<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        Listing::factory(6)->create();

        // Listing::create([
        //    'title' => 'Laravel Senior Developer',
        //    'tags' => 'Laravel, Javascript',
        //    'company' => 'omega HD',
        //    'location' => 'Island Estate',
        //    'email' => 'damydavo2015@gmail.com',
        //    'website'=> 'damilola.herokuapp.com',
        //    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        //    Corporis modi enim ducimus quos. Repudiandae, 
        //    natus vero hic inventore tempore modi nobis molestias tenetur officiis 
        //    quas nesciunt fugit dicta vitae illum.
        //    '
        // ]);

        // Listing::create([
        //     'title' => 'Mobile App Developer',
        //    'tags' => 'React Native, Javascript',
        //    'company' => 'omega HD',
        //    'location' => 'Island Estate',
        //    'email' => 'damydavo2015@gmail.com',
        //    'website'=> 'damilola.herokuapp.com',
        //    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        //    Corporis modi enim ducimus quos. Repudiandae, 
        //    natus vero hic inventore tempore modi nobis molestias tenetur officiis 
        //    quas nesciunt fugit dicta vitae illum.
        //    '
        // ]);
    }
}
