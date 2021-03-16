<?php

namespace App\Http\Controllers;
use App\Models\Client;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index(){

        $blog = Blog::all();
    }
}
