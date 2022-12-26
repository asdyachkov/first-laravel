<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(public_path('/articles.json'));
        $articles = json_decode($json, true);

        foreach ($articles as $article){
            $newArticle = new Article();
            $newArticle->fill($article);

            $newArticle->save();
        }
    }
}
