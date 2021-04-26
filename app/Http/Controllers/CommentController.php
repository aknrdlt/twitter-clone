<?php

namespace App\Http\Controllers;

use App\Models\Adds;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function adds(Request $request) {
        $request->validate([
            'comment' => 'required',
        ]);
    
        Adds::create([
            'id' => $request->id,
            'is_like' => $request->like,
            'comment' => $request -> comment,
            'email' => auth()->user()->email,
        ]);

        return redirect('/adds');
    }
}
