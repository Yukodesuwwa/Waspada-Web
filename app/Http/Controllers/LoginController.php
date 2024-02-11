<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $req){
        $val = $req->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);
        if (Auth::attempt($val)) {
            $req->session()->regenerate();
            return redirect()->route('home');
        }
        return back()->with('error','Sepertinya Email atau Password Salah');
    }
}
