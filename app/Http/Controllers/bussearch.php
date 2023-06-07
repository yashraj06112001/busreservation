<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bussearch extends Controller
{
    public function sendData(Request $request)
    {
       $name= $request->name;
       $email=$request->email;
       $station=$request->stat;
       
    }
}
