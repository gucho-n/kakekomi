<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaincController extends Controller
{
    public function index(Request $request){
        return('main');
    }
}
