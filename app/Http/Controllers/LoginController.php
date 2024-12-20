<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('usercheckpost');
        }
    }

    public function usercheckpost(){
        return redirect()->route('dashboard');
    }
}