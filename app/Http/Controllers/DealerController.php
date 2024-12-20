<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DealerController extends Controller
{
    public function dealerdashboard(){
        return view('dealerdashboard');
    }
}
