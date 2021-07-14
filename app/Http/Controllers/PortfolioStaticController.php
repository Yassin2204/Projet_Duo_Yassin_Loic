<?php

namespace App\Http\Controllers;

use App\Models\PortfolioStatic;
use Illuminate\Http\Request;

class PortfolioStaticController extends Controller
{
    public function store(Request $request){
        $store = new PortfolioStatic() ;
        $store -> h1=$request;
        $store -> p1=$request;
        $store -> btn1=$request;
        $store -> save();
        return redirect('/portfolio');
}
}