<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


use App\Models\post;
use App\Models\Form;

use App\Http\Controllers\UploadController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MailController;


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
    return view('auth.login');
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

Route::middleware(['set_locale']) -> group(function(){
    
Route::get('/post/{id}',function($id){
    $post = post::find($id);
    
    return $post->title;
}); 
Route::get('/post',function(){
    $post = Post::find(1);
    // return $post->title;
    return $post;
});

Route::get('post/{id}',[BlogController::class,'getPost']);

Route::get('/post',[BlogController::class,'index']); 

/////////////////////////////////////////////////////////////////

Route::post('form/upload', [UploadController::class, 'uploadsubmit'])->name('add-form');

Route::get('form/upload', [UploadController::class,'uploadform']);

Route::get('form/index', [UploadController::class, 'index' ]);

Auth::routes();
});

Route::get('/send', [MailController::class, 'send']);

Route::get('/locale/{locale}',[MainController::class,'changeLocale']) -> name('locale'); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');