<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

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

Route::get('/',[\App\Http\Controllers\PostController::class, 'index'])->name('accueil');
Route::get('/article/{id}', [\App\Http\Controllers\PostController::class, 'show'])->whereNumber('id');
Route::get('/contact', [\App\Http\Controllers\PostController::class, 'contact'])->name('contact');

/*
Route::get('/post', function () {
    return 'Jordan is the boss';
});

Route::get('/json', function(){
    return response()->json([
       'nom'=>'rema',
        'prenom'=>"jordan"
    ]);
});

Route::get('/articles', function(){
    return view('article');
});
*/
