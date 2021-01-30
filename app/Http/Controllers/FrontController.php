<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\head;

class FrontController extends Controller
{
    //
     public function loadview()
    {   
         $data1 = head::where('emp_id', '=', 1)->get();
         $data2 = head::where('emp_id', '=', 2)->get();
         $data3 = head::where('emp_id', '=', 3)->get();
         $data = head::all();
        return view('index', ['heads'=>$data , 'data1'=>$data1 , 'data2'=>$data2 , 'data3'=>$data3 ] );

    }
}
