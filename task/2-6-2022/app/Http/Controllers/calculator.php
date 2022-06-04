<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class calculator extends Controller
{
    public function mathOperation(Request $req)
    {
        $num1 =  $req->first_number;
        $num2 =  $req->second_number;
        $ops = $req->ops;

        $result = 0 ; 

        switch ($ops) {
            case 'add':
                $result=$num1+$num2;
                return view('calculator' , ['result'=>$result]);
            case 'substract':
                $result=$num1-$num2;
                return view('calculator' , ['result'=>$result]);
            case 'multiply':
                $result=$num1*$num2;
                return view('calculator' , ['result'=>$result]);
            case 'divide':
                $result=$num1/$num2;
                return view('calculator' , ['result'=>$result]);
            
            default:
                $result = 0;
                break;
        }

        return view('calculator' , ['result'=>$result]);
    }
}
