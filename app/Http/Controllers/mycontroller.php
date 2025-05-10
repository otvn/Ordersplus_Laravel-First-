<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
class mycontroller extends Controller
{
    //
    function insert(Request $req){
       $name= $req->get('pname');
       $price= $req->get('pprice');
       $pimage= $req->file('image')->getClientOriginalName();
       //move uploaded file
       $req->image->move(public_path('images'), $pimage);
       $prod =new product();
       $prod->PName = $name;
       $prod->PPrice = $price;
       $prod->PImage = $pimage;
       $prod->save();
       return redirect('index');
    }
    //
}
