<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    
   public function changeLocale($locale){
        session(['locale' => $locale]);
        
        App::setLocale($locale);


        return redirect()->back();
   }
}
