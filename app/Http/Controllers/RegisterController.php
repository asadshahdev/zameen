<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request){
        
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',
            'phone'=>'required',
        ]);

        $user = User::create($data);
        if($user){
            return redirect()->route('login');
        }
    }
}
