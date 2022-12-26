<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = json_decode(file_get_contents(public_path().'/articles.json'), true);
        return view('main', ['articles' => $articles]);
    }

    public function show($full){
        echo $full;
        return view('galery', ['full' => $full]);
    }

    public function get($id){
        $articles = Article::findOrFail($id);

        return view('article', ['articles'=>$articles]);
    }
}
