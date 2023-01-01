<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;

Route::get('/', [ArticleController::class, 'index']);

//Route::get('/list', function () {
//    $list = json_decode(file_get_contents(public_path().'/articles.json'), true);
//    return view('list', ['list'=>$list]);
//});
//
Route::get('/about', function () {
    return view('about');
});

Route::get('/galery/{full}', [MainController::class, 'show']);
//
//Route::get('/post/{id}', function ($id) {
//    $list = json_decode(file_get_contents(public_path().'/articles.json'), true);
//    return view('post', ['list'=>$list, 'id'=>$id]);
//});

Route::get('/contacts', function () {
    $contacts = $contact = [
        'name' => 'Политех',
        'adres' => 'Пряники',
        'phone' => '8(495)423-2323',
        'email' => '@mospolytech.ru',
    ];
    return view('/contacts', ['contacts' => $contacts]);
});

//Auth
Route::get('/auth/registr', [AuthController::class, 'create']);
Route::post('/auth/registr', [AuthController::class, 'store']);
Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/login', [AuthController::class, 'customLogin']);
Route::get('/auth/logout', [AuthController::class, 'logout']);


//Article
Route::group(['prefix'=>'/article', 'middleware'=>'auth:sanctum'], function(){
    Route::get('/create', [ArticleController::class, 'create']);
    Route::post('/store', [ArticleController::class, 'store']);
    Route::get('/show/{id}', [ArticleController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [ArticleController::class, 'edit']);
    Route::put('/{id}', [ArticleController::class, 'update']);
    Route::get('/{id}/delete', [ArticleController::class, 'destroy']);
});


//Comment
Route::resource('comment', CommentController::class);
Route::get('/comment/{comment}/accept', [CommentController::class, 'accept']);
Route::get('/comment/{comment}/reject', [CommentController::class, 'reject']);
