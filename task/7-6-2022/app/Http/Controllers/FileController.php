<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function upload_file(Request $request)
    {
        $file = $request->file('file')->storeAs('file_upload' , $request->file->getClientOriginalName());

        if(true)
        {
            $file_table = new File();
            $file_table->file_name = $request->file->getClientOriginalName();
            $file_table->save();
            return redirect('upload')->with('success' , 'file has been upload successfully');
        }else
        {
            return redirect('upload')->with('failed' , 'file upload fail');

        }
        

       
    }
}
