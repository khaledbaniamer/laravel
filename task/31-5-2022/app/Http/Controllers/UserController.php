<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function add_user(Request $req)
    {
        $user = new User();
        $req->validate([
            'username'=>'required', 
            'email'=>'required|email|unique:users', 
            'password'=>'required',
            'confirm_password'=>'required' 
        ]);
        $password = $req->password;
        $confirm = $req->confirm_password;
        if($password === $confirm)
        {
            $user->user_name = $req->username;
            $user->email = $req->email;
            $user->password = $req->password;
            $user->save();

            return redirect('/register')->with('success' , 'User has been added successfully');
        }else{
            return redirect('/register')->with('fail' , 'Password must be match');
        }
        
    }

    public function show_data()
    {
        $all_user = User::all();
        return view('show' , ['users'=>$all_user]);
    }

    public function show_single_product($id)
    {
        $single_product = User::find($id);
        return view("single" , ['single_product'=>$single_product]);
    }

    public function edit_user(Request $req)
    {
        $id = $req->id ;
        $single_data = User::find($id);
        $req->validate([
            'username'=>'required', 
            'email'=>'required|email', 
            'password'=>'required',
            'confirm_password'=>'required' 
        ]);
        $password = $req->password;
        $confirm = $req->confirm_password;
        if($password === $confirm)
        {
            $single_data->user_name = $req->username;
            $single_data->email = $req->email;
            $single_data->password = $req->password;
            $single_data->save();

            return redirect("user/$id")->with('success' , 'User has been updated successfully');
        }else{
            return redirect("user/$id")->with('fail' , 'Password must be match');
        }
    }

    public function delete_user($id)
    {
        $user = User::find($id);
        $delete = $user->delete();
        
        return redirect('show')->with('success' , 'User has been deleted successfully');
    }
}
