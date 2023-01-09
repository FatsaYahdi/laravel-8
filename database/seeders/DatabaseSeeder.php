<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Landersaki',
            'username' => 'landersaki',
            'email' => 'landersaki@gmail.com',
            'password' => bcrypt('landersaki')
        ]);

        // User::create([
        //     'name' => 'Landersamoo',
        //     'email' => 'cow2@gmail.com',
        //     'password' => bcrypt('paswot')
        // ]);

        User::factory(3)->create();
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, maiores?',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, sed voluptates? Illum, itaque ad. Molestias autem provident modi architecto iste.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, maiores?',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, sed voluptates? Illum, itaque ad. Molestias autem provident modi architecto iste.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, maiores?',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, sed voluptates? Illum, itaque ad. Molestias autem provident modi architecto iste.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, maiores?',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, sed voluptates? Illum, itaque ad. Molestias autem provident modi architecto iste.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        
    }
}
