<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all()->toArray();

        return view('articles', ['articles'=>$articles]);
    }

    public function get($id){
        $articles = Article::findOrFail($id);

        return view('article', ['articles'=>$articles]);
    }
}
