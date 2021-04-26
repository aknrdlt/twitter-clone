<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Form;

use App\Http\Controllers\UploadController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

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

    Auth::routes();

    Route::post('/upload', [UploadController::class, 'uploadsubmit'])->name('add-form');

    Route::get('/upload', [UploadController::class,'uploadform']);

    Route::get('/index', [UploadController::class, 'index' ]);

    Route::get('/news', [UploadController::class, 'others' ]);

    Route::get('/adds', [CommentController::class, 'adds' ]) -> name('send-comment');
        
    Route::get('/send', [MailController::class, 'send']);

    Route::get('/{lang}',function($lang){
        App::setlocale($lang);  
        return view('form.main');
    });

