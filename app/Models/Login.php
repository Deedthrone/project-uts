<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;

    public function Login($data)
    {
        $data = [
            'username' => 'admin',
            'password' => '123'
        ]; // untuk login, data login harus spt diatas.
        return $data;
    }   
}
