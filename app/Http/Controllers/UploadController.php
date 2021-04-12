<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class UploadController extends Controller
{
    public function index() {
        $form = Form::all();

        return view('form.index')->with(['forms' => $form]);
    }

    public function uploadform() {
        return view('form.upload');
    }
    public function uploadsubmit(Request $request) {

        // $test = $request->file('photos')->getError();
        // dd($test);
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'photos' => 'required|mimes:jpg,png,jpeg,gif|max:5048'
        ]);

         $newImageName = time() . '-' . $request->name . '.' . $request->photos->extension();

        $request->photos->move(public_path('uploads'), $newImageName);


        // dd($test);

        Form::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'filename' => $newImageName
        ]);

        return redirect('/form/upload');
    }
}