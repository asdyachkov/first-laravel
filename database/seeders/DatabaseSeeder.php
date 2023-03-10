<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Database\Seeders\ArticleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\RoleSeeder;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Article::factory(10)->has(Comment::factory(3))->create();
//        Comment::factory(3)->create();
//        \App\Models\User::factory(10)->create();
        $this->call([
            ArticleSeeder::class,
            UserSeeder::class,
            RoleSeeder::class,
        ]);
    }
}
