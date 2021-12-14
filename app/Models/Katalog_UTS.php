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
            "gambar" => "sepatu.jpg",
            "penjelasan" => "Sepatu trekking adalah barang wajib untuk melakukan kegiatan alam seperti mendaki gunung atau trekking. Beberapa produsen seperti Eiger, Karrimor, Consina, dan Keen sudah banyak memasarkan sepatu trekking untuk pria dan wanita. Bahan, desain, dan harganya pun beragam sehingga bisa membuat Anda bingung saat memilih."
        ],

        [
            "id" => 2,
            "nama" => "Tas Gunung",
            "category" => "Outfit",
            "harga" => 580000,
            "gambar" => "tas.jpg",
            "penjelasan" => "Tas gunung secara sederhana dapat diartikan sebagai tas yang digunakan untuk aktivitas mendaki gunung. Tas ini memiliki fungsi utama untuk dapat menampung dan membawa semua perlengkapan mendaki gunung secara nyaman, aman dan juga accessible atau mudah dijangkau."
        ],

        [
            "id" => 3,
            "nama" => "Korek Api Gunung",
            "category" => "Peralatan",
            "harga" => 35000,
            "gambar" => "korek.jpg",
            "penjelasan" => "Korek api (kadang disebut juga geretan, pematik, macis, atau mancis) adalah sebuah alat untuk menyalakan api secara terkendali. Korek api dijual bebas di toko-toko dalam bentuk paket sekotak korek api. ... Jenis korek api yang menggunakan cairan, seperti naphtha atau butana, disebut korek api gas."
        ],

        [
            "id" => 4,
            "nama" => "Sleeping Bag",
            "category" => "Peralatan",
            "harga" => 153200,
            "gambar" => "sleepbag.jpg",
            "penjelasan" => "Sleeping bag merupakan salah satu pelengkapan tidur portable yang wajib dibawa saat camping dan mendaki gunung. Selain difungsikan sebagai alas tidur, sleepig bag ini umumnya juga dapat dijadikan sebagai sarana pelindung tubuh agar tidak merasa kedinginan ketika terkena hembusan angin yang menembus tenda."
        ],

        [
            "id" => 5,
            "nama" => "Tenda",
            "category" => "Peralatan",
            "harga" => 1250000,
            "gambar" => "tenda.jpg",
            "penjelasan" => "Tenda adalah tempat pelindung yang terdiri dari lembaran kain atau bahan lainnya menutupi yang melekat pada kerangka tiang atau menempel pada tali pendukung. Beberapa tenda tidak perlu berdiri diatas tanah karena hadir beberapa model tenda yang menggantung di pohon."
        ],

        [
            "id" => 6,
            "nama" => "Pisau",
            "category" => "Peralatan",
            "harga" => 36200,
            "gambar" => "pisau.jpg",
            "penjelasan" => "Pisau ialah alat yang digunakan untuk memotong sebuah benda. Pisau terdiri dari dua bagian utama, yaitu bilah pisau dan gagang atau pegangan pisau. Bilah pisau terbuat dari logam pipih yang tepinya dibuat tajam; tepi yang tajam ini disebut mata pisau."
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

    public static function subtotal($price, $quantity)
    {
        return($price*$quantity); 
    }

    public static function sewasubtotal($price, $quantity, $durasi, $charge)
    {
        if ( $durasi == 0  ) {
            $charge = 0;
            return($price*$quantity); 
        }

        elseif ( $durasi == 1 ) {
            $charge = 0.05;
            return($price*$quantity*$charge); 
        } 

        elseif ( $durasi == 2 ) {
            $charge = 0.10;
            return($price*$quantity*$charge); 
        } 

        elseif ( $durasi == 3 ) {
            $charge = 0.15;
            return($price*$quantity*$charge); 
        } 
        
        else {
        }
    }
}
