<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::latest()->paginate(5);
        return view('articles/index', ['articles' => $articles]);
    }

    public function create(){
        return view('articles/create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'annotation' =>'required|min:10',
        ]);
        $article = new Article();
        $article->name = request('name');
        $article->date = request('date');
        $article->shortDesc = request('annotation');
        $article->desc = request('description');
        $article->save();
        return redirect('/');
    }

    public function show($id){
        $article = Article::FindOrFail($id);
        $comments=Comment::where('article_id', $id)->get();
        return view('articles.show', ['article' => $article, 'comments'=>$comments]);
    }

    public function edit($id){
        $article=Article::FindOrFail($id);
        return view('articles.edit', ['article'=>$article]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'annotation' =>'required|min:10',
        ]);
        $article=Article::FindOrFail($id);
        $article->name = request('name');
        $article->date = request('date');
        $article->shortDesc = request('annotation');
        $article->desc = request('description');
        $article->save();
        return redirect()->route('show', ['id'=>$article->id]);
    }

    public function destroy($id){
        $article=Article::FindOrFail($id);
        $article->delete();
        return redirect('/');
    }
}
