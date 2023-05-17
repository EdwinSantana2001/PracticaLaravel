<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         //Llama al UserSeeder
        $this->call(UserSeeder::class);

        //Categories
        Category::factory()->count(8)->create();
        Article::factory()->count(20)->create();
        Comment::factory()->count(20)->create();

    }
}
