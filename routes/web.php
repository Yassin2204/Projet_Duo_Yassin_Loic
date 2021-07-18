<?php

use App\Http\Controllers\BlogDataDynaController;
use App\Http\Controllers\HomeDataDynaController;
use App\Http\Controllers\PortfolioDataDynaController;
use App\Models\BlogDataDyna;
use App\Models\BlogStatic;
use App\Models\ContactStatic;
use App\Models\HomeDataDyna;
use App\Models\HomeStatic;
use App\Models\portfolioDataDyna;
use App\Models\PortfolioStatic;
use Illuminate\Support\Facades\DB;
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
    return view('welcome', compact("staticData", 'dynamiqueDataHome'));
});
Route::get('/blog', function () {
    $DataBlogs= BlogStatic::all();
    $dynamiqueDataBlog= BlogDataDyna::all();
    return view('pages.blog', compact("DataBlogs", 'dynamiqueDataBlog'));
});
Route::get('/portfolio', function () {
    $DataPortfolio= PortfolioStatic::all();
    $dynamiqueDataPortfolio = portfolioDataDyna::all();
    return view('pages.portfolio', compact("DataPortfolio", 'dynamiqueDataPortfolio'));
});
Route::get('/contact', function () {
    $DataContact= ContactStatic::all();
    return view('pages.contact', compact("DataContact"));
});

// HOME

Route::get('/login', function () {
    $ServicesHome = DB::select('SELECT * FROM home_data_dynas');
    return view("pages.BackOffice.Homeback", compact('ServicesHome'));
});
Route::post('/formHome', [HomeDataDynaController::class, 'store']);
Route::get('/contenuHomeShow/{id}', [HomeDataDynaController::class, 'show']);
Route::get('/contenuHomeEdit/{id}', [HomeDataDynaController::class, 'edit']);
Route::put('/contenuHomeUpdate/{id}', [HomeDataDynaController::class, 'update']);
Route::delete('/contenuHomeDelete/{id}', [HomeDataDynaController::class, 'destroy']);

//BLOG
Route::get('/BlogbackOffice', function () {
    $ServicesBlog = DB::select('SELECT * FROM blog_data_dynas');
    return view("pages.BackOffice.Blogback", compact('ServicesBlog'));
});
Route::post('/formBlog', [BlogDataDynaController::class, 'store']);
Route::get('/contenuBlogShow/{id}', [BlogDataDynaController::class, 'show']);
Route::get('/contenuBlogEdit/{id}', [BlogDataDynaController::class, 'edit']);
Route::put('/contenuBlogUpdate/{id}', [BlogDataDynaController::class, 'update']);
Route::delete('/contenuBlogDelete/{id}', [BlogDataDynaController::class, 'destroy']);


// PORTFOLIO
Route::get('/PortfoliobackOffice', function () {
    $ServicesPortfolio = DB::select('SELECT * FROM portfolio_data_dynas');
    return view("pages.BackOffice.Portfolioback", compact('ServicesPortfolio'));
});
Route::post('/formPortfolio', [PortfolioDataDynaController::class, 'store']);
Route::get('/contenuPortfolioShow/{id}', [PortfolioDataDynaController::class, 'show']);
Route::get('/contenuPortfolioEdit/{id}', [PortfolioDataDynaController::class, 'edit']);
Route::put('/contenuPortfolioUpdate/{id}', [PortfolioDataDynaController::class, 'update']);
Route::delete('/contenuPortfolioDelete/{id}', [PortfolioDataDynaController::class, 'destroy']);