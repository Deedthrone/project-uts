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
            "katalogs" => Katalog::all()
        ]);
    }

    public function show($id)
    {
        return view('page/katalog', [
            "title" => "Detail",
            "katalog" => Katalog::find($id)
        ]);
    }
}
