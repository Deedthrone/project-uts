<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function LoginAction(Request $request)
    {
        $validData = [
            'username' => 'admin',
            'password' => Hash::make('123')
        ]; // untuk login, data login harus spt diatas.
        
        if($request->username == $validData['username'] && Hash::check($request->password, $validData['password'])){
            Session::put('userdata', $validData);

            return redirect('/home');
        } else {
            return back()->with('error', 'Username / Password salah');
        }
    }

    
    public function Logout()
    {
        request()->session()->forget('userdata');
        return redirect('/')->with('success', 'Logout Successfully');
    }
}
