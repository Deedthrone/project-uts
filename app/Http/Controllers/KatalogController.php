<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katalog;

class KatalogController extends Controller
{
    
    public function index()
    {
        return view('posts', [
            "title" => "Posts",
            //"posts" => Post::all(),
            "posts" => Post::latest()->get()
        ]);
    }
    
    public static function all()
    {
        return collect(self::$katalog);
    }
}
