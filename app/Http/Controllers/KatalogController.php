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
            "sidebar" => "partials.sidebar",
            "katalogs" => Katalog::all()
        ]);
    }

    public function show($id)
    {
        return view('page/katalog', [
            "title" => "Detail",
            "sidebar" => "partials.sidebarback",
            "katalog" => Katalog::find($id)
        ]);
    }
}
