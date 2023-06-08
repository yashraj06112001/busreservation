<?php

namespace App\Http\Controllers;
use App\Models\bus;
use Illuminate\Http\Request;

class bussearch extends Controller
{
    public function sendData(Request $request)
    {
       $name= $request->name;
       $email=$request->email;
       $station=$request->station;
       $buses=new bus();
       $buses->name=$name;
       $buses->email=$email;
       $buses->station=$station;
       $value=$buses->save();
        if($value){
            return response()->json(["success"=>true]);
        }
        else{
            return response()->json(["success"=>false]);
        }
    }
}
