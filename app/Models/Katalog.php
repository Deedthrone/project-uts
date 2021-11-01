<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    use HasFactory;

    private static $katalog = [
        [
            "id" => 1,
            "nama" => "Sepatu Hiking",
            "category" => "Outfit",
            "harga" => 275000,
            "kuantitas" => 1,
            "gambar" => "sepatu.jpg"
        ],

        [
            "id" => 2,
            "nama" => "Tas Gunung",
            "category" => "Outfit",
            "harga" => 580000,
            "kuantitas" => "Lusmodeus",
            "gambar" => "gambar.jpg"
        ],

        [
            "id" => 3,
            "nama" => "Korek Api Gunung",
            "category" => "Peralatan",
            "harga" => 35000,
            "kuantitas" => 1,
            "gambar" => "korek.jpg"
        ],

        [
            "id" => 4,
            "nama" => "Sleeping Bag",
            "category" => "Peralatan",
            "harga" => 153200,
            "kuantitas" => 1,
            "gambar" => "sleepbag.jpg"
        ],

        [
            "id" => 5,
            "nama" => "Tenda",
            "category" => "Peralatan",
            "harga" => 1250000,
            "kuantitas" => 1,
            "gambar" => "tenda.jpg"
        ],

        [
            "id" => 6,
            "nama" => "Pisau",
            "category" => "Peralatan",
            "harga" => 36200,
            "kuantitas" => 1,
            "gambar" => "pisau.jpg"
        ],

    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($id)
    {
        $katalog = static::all();
        return $katalog->firstWhere('id', $id);
    }
}
