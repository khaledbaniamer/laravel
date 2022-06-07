<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request )
    {
        $form_input = $request->input();
        $request->validate([
            'age'=>'required',
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',

        ]);
        $request->session()->put('name' , $form_input['name']);
        return redirect('home');
    }
}
