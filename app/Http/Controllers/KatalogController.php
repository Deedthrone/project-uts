<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katalog;
use App\Models\Product;

class KatalogController extends Controller
{
/*
|--------------------------------------------------------------------------
| Katalog - Dikerjakan Oleh
|--------------------------------------------------------------------------
|
| Nama : Yosua Christopher Septianus
| NIM : 18410100233
|
*/



// public function index()
// {
//     $x = 1;
//     return view('page/inboxs', [
//         "title" => "inbox",
//         "inboxs" => Inbox::all(),
//         "types" => Type::all()
//     ]);
// }

// public function test(Inbox $inbox)
// {
//     return view('/page/inboxs', [
//         "title" => "Single Post",
//         "test" => $inbox,
//         "inboxs" => Inbox::all(),
//         "types" => Type::all()
//     ]);
// }



// ------------------------------------------------------







    // public function index()
    // {
    //     return view('page/katalogs', [
    //         "title" => "Katalogs",
    //         "sidebars" => "partials.sidebar",
    //         "katalogs" => Katalog::all()
    //     ]);
    // }

    public function index()
    {
        return view('page/products', [
            "title" => "Katalogs",
            "sidebars" => "partials.sidebar",
            "products" => Product::all()
        ]);
    }

    // public function show($id)
    // {
    //     return view('page/katalog', [
    //         "title" => "Detail",
    //         "sidebars" => "partials.sidebarback",
    //         "katalog" => Katalog::find($id)
    //     ]);
    // }

    public function show($id)
    {
        return view('page/katalog', [
            "title" => "Detail",
            "sidebars" => "partials.sidebarback",
            "katalog" => Katalog::find($id)
        ]);
    }

    // public function sewa($id)
    // {
    //     return view('page/sewa', [
    //         "title" => "Checkout",
    //         "subtotal" => 0,
    //         "total" => 0,
    //         "katalog" => Katalog::find($id)
    //     ]);
    // }

    public function sewa($id)
    {
        return view('page/sewa', [
            "title" => "Checkout",
            "subtotal" => 0,
            "total" => 0,
            "product" => Product::find($id)
        ]);
    }

    public function sewahitung(Request $xx, $id)
    {
        $price=$xx->input('price');
        $durasi=$xx->input('durasi');
    	$quantity=$xx->input('quantity');
        $charge=$xx->input('charge');
        
        $datatotal = new Katalog();
        $printtotal = $datatotal->sewasubtotal($price, $quantity, $durasi, $charge);
        
        return view('page/sewa', [
            "title" => "Detail",
            "katalog" => Katalog::find($id),
            "subtotal" => 0,
            "total" => $printtotal
        ]);
    }



    /*
|--------------------------------------------------------------------------
| Checkout - Dikerjakan Oleh
|--------------------------------------------------------------------------
|
| Nama : Gading Sukma Prasetio
| NIM : 18410100260
|
*/

    public function checkout()
    {
        return view('page/checkouts', [
            "title" => "Checkout",
            "subtotal" => 0,
            "total" => 0,
            "katalogs" => Katalog::all()
        ]);
    }

    public function hitung(Request $xx) {
        $price=$xx->input('price');
    	$quantity=$xx->input('quantity');
    	// $c=$xx->input('diskon');
        $datasubtotal = new Katalog();
        $printsubtotal = $datasubtotal->subtotal($price, $quantity);

        return view('page/checkouts', [
            "title" => "Checkout",
            "subtotal" => $printsubtotal,
            "katalogs" => Katalog::all()
        ]);
    }
}
