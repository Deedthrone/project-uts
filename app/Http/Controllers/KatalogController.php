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
        return view('page/checkout', [
            "title" => "Checkout",
            "katalogs" => Katalog::all()
        ]);
    }
}
