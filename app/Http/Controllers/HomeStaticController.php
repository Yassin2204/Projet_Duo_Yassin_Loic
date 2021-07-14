<?php

namespace App\Http\Controllers;

use App\Models\HomeStatic;
use Illuminate\Http\Request;

class HomeStaticController extends Controller
{
    public function store(Request $request){
        $store = new HomeStatic ;
        $store -> titre=$request;
        $store -> p1=$request;
        $store -> p2=$request;
        $store -> sous_titre=$request;
        $store -> p3=$request;
        $store -> href=$request;
        $store -> sous_titre2=$request;
        $store -> p4=$request;
        $store -> save();
        return redirect('/');
    }
}
