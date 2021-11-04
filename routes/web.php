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
| Login Dan Home - Dikerjakan Oleh Sofyan Fanani
|--------------------------------------------------------------------------
|
| Nama : Mochammad Sofyan Fanani
| NIM : 18410100231
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

/*
|--------------------------------------------------------------------------
| Kontak - Dikerjakan Oleh
|--------------------------------------------------------------------------
|
| Nama : Sigit Aditya Nurbiyantoro
| NIM : 18410100156
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
| Checkout - Dikerjakan Oleh
|--------------------------------------------------------------------------
|
| Nama : Gading Sukma Prasetio
| NIM : 18410100260
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


Route::get('/checkouts',[KatalogController::class, 'checkout']);
Route::post('/hitung', [KatalogController::class, 'hitung']);

// Route::get('/checkout',[KatalogController::class, 'hitung']);

// Route::get('/checkout',[KatalogController::class, 'checkout']);