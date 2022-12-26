<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $list = [
        ['title'=>'Name 1', 'body'=>'Content 1'],
        ['title'=>'Name 2', 'body'=>'Content 2']
    ];

    return view('main',['list' => $list]);
});

Route::get('/list', function () {
    $list = json_decode(file_get_contents(public_path().'/articles.json'), true);
    return view('list', ['list'=>$list]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/post/{id}', function ($id) {
    $list = json_decode(file_get_contents(public_path().'/articles.json'), true);
    return view('post', ['list'=>$list, 'id'=>$id]);
});

Route::get('/contacts', function () {
    $contacts = $contact = [
        'name' => 'Политех',
        'adres' => 'Пряники',
        'phone' => '8(495)423-2323',
        'email' => '@mospolytech.ru',
    ];
    return view('/contacts', ['contacts' => $contacts]);
});

Route::get('/articles', [\App\Http\Controllers\ArticleController::class, 'index']);
Route::get('/articles/{id}', [\App\Http\Controllers\ArticleController::class, 'get']);
