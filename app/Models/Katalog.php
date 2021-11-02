<?php

namespace App\Models;


class Katalog
{

    private static $full_katalog = [
        [
            "id" => 1,
            "nama" => "Sepatu Hiking",
            "category" => "Outfit",
            "harga" => 275000,
            "gambar" => "sepatu.jpg"
        ],

        [
            "id" => 2,
            "nama" => "Tas Gunung",
            "category" => "Outfit",
            "harga" => 580000,
            "gambar" => "tas.jpg"
        ],

        [
            "id" => 3,
            "nama" => "Korek Api Gunung",
            "category" => "Peralatan",
            "harga" => 35000,
            "gambar" => "korek.jpg"
        ],

        [
            "id" => 4,
            "nama" => "Sleeping Bag",
            "category" => "Peralatan",
            "harga" => 153200,
            "gambar" => "sleepbag.jpg"
        ],

        [
            "id" => 5,
            "nama" => "Tenda",
            "category" => "Peralatan",
            "harga" => 1250000,
            "gambar" => "tenda.jpg"
        ],

        [
            "id" => 6,
            "nama" => "Pisau",
            "category" => "Peralatan",
            "harga" => 36200,
            "gambar" => "pisau.jpg"
        ],

    ];

    public static function all()
    {
        return collect(self::$full_katalog);
    }

    public static function find($id)
    {
        $katalogs = static::all();
        
        // $katalog = [];
        // foreach($katalogs as $k) {
        //     if( $k["id"] == $id ) 
        //     {
        //         $katalog = $k;
        //     }
        // }

        return $katalogs->firstWhere("id", $id);
    }
}
