<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurCyclesController extends Controller
{
    public function index(){
        return view('cycle');
    }
}
