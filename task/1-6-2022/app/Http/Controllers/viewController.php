<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\View;

class viewController extends Controller
{
    public function showName(){

        $data = View::all();
        
        return view('view' , ["keyName"=>$data ]);
    }
    public function singleName($id){
        $data = View::find($id);
        return view('single', ["keySingleName"=>$data]);
    }



}
