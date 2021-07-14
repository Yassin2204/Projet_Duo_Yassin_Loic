<?php

namespace App\Http\Controllers;

use App\Models\BlogStatic;
use Illuminate\Http\Request;

class BlogStaticController extends Controller
{
    public function store(Request $request){
        $store = new BlogStatic() ;
        $store -> titre=$request;
        $store -> save();
        return redirect('/blog');

    }
}