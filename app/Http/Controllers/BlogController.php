<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class BlogController extends Controller
{
    public function index(){
        $Post = Form::all();

        return view('blog.index')->with(['Post' => $Post]);
    }
    public function store(Request $request){
        Form::create([
            'title' =>$request->title,
            'body' =>$request->body 
        ]);

        return back();
    }
    public function getPost($id){
        $post =  Form::find($id);

        if($post == null){
            return response(['message' => 'post not found with this ID'],404);
        }
        return view('blog.detail')->with(['post' => $post]);
    }

}


