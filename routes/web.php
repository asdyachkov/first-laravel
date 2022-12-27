<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;
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
Route::get('/registration', [AuthController::class, 'create']);
Route::post('/signin', [AuthController::class, 'registration']);
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

Route::get('/articles', [\App\Http\Controllers\MainController::class, 'index']);
Route::get('/articles/{id}', [\App\Http\Controllers\MainController::class, 'get']);
