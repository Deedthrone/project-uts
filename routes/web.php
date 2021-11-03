<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Models\Katalog;
use App\Models\Login;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\LoginController;

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
    return view('page/login');
});

Route::post('/login_action', [LoginController::class, 'LoginAction'])->name('login.post');

Route::get('/home', function () {
    return view('page/home', [
        "title" => "Home",
        "sidebars" => "partials.sidebar"
    ]);
});


// Route::get('/katalogs', [KatalogController::class, 'index']);

// Route::get('/katalogs/{katalog:id}', [KatalogController::class, 'show']);





/*
|--------------------------------------------------------------------------
| Katalog - Dikerjakan Oleh
|--------------------------------------------------------------------------
|
| Nama : Yosua Christopher Septianus
| NIM : 18410100233
|
*/

// Route::get('/katalogs', function () {
//     return view('page/katalogs', [
//         "title" => "Katalogs",
//         "katalogs" => Katalog::all()
//     ]);
// });

// Route::get('/katalogs/{id}', function ($id) {
//     return view('page/katalog', [
//         "title" => "Detail",
//         "katalog" => Katalog::find($id)
//     ]);
// });


Route::get('/katalogs', [KatalogController::class, 'index']);

Route::get('/katalogs/{id}', [KatalogController::class, 'show']);


// Route::get('/checkout/{id}', [KatalogController::class, 'show']);

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

Route::get('/kontak', function () {
    return view('page/kontak', [
        "title" => "Kontak",
        "sidebars" => "partials.sidebar"
    ]);
});

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

Route::get('/checkout', function () {
    return view('page/checkout', [
        "title" => "Checkout",
        "sidebars" => "partials.sidebar"
    ]);
});

// Route::get('/checkout', function () {
//     return view('page/checkout');
// });

// gading

Route::get('/checkout',[CheckoutController::class, 'index']);

