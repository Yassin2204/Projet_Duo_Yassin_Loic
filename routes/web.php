<?php

use App\Models\BlogStatic;
use App\Models\ContactStatic;
use App\Models\HomeDataDyna;
use App\Models\HomeStatic;
use App\Models\PortfolioStatic;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $staticData= HomeStatic::all();
    $dynamiqueDataHome = HomeDataDyna::all();
    return view('welcome', compact("staticData", "dynamiqueDataHome"));
});
Route::get('/blog', function () {
    $DataBlogs= BlogStatic::all();
    return view('pages.blog', compact("DataBlogs"));
});
Route::get('/portfolio', function () {
    $DataPortfolio= PortfolioStatic::all();
    return view('pages.portfolio', compact("DataPortfolio"));
});
Route::get('/contact', function () {
    $DataContact= ContactStatic::all();
    return view('pages.contact', compact("DataContact"));
});
