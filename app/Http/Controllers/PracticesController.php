<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticesController extends Controller
{
    public function practice(){
        return view('practices.practices');
    }
}
