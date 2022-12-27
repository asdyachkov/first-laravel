<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Database\Seeders\ArticleSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Article::factory(10)->create();
//        \App\Models\User::factory(10)->create();
//        $this->call([
//            ArticleSeeder::class,
//        ]);
    }
}
