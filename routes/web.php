<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


use App\Models\post;

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
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
})-> name('main');

Route::get('/skills', function () {
    return view('skills');
}) -> name('skills');

Route::get('/services', function () {
    return view('services');
}) ->name('services');

Route::get('/contacts', function () {
    return view('contacts');
}) -> name('contacts');

Route::get('/blog/index', function () {
    return view('posts');
}) -> name('blog');

Route::get('/post/create',function(){
    DB::table('post')->insert([
        'title' => 'Php + MySQL',
        'body' => 'Connecting phpMyAdmin to database'
    ]);
});


Route::get('/post/{id}',function($id){
    $post = post::find($id);
    
    return $post->title;
}); 