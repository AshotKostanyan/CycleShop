<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Cycle;

class IndexController extends Controller
{
    public function index(){

        $cycles = cache()->remember('/', 600, function () {
            return Cycle::all();
        });

        return view('index', compact('cycles'));
    }

}
