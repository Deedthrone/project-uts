<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katalog;

class KatalogController extends Controller
{

    public function index()
    {
        return view('page/katalogs', [
            "title" => "Katalogs",
            "sidebars" => "partials.sidebar",
            "katalogs" => Katalog::all()
        ]);
    }

    public function show($id)
    {
        return view('page/katalog', [
            "title" => "Detail",
            "sidebars" => "partials.sidebarback",
            "katalog" => Katalog::find($id)
        ]);
    }

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
