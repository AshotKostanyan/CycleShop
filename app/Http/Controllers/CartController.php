<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function store(Request $request)
    {
        if (auth()->user() != null) {
            $cycle_id = trim($request->getPathInfo(), '/addtocart/');
            Cart::create([
                'user_id' => auth()->user()->id,
                'cycle_id' => $cycle_id,
            ]);
            return redirect('getcart');
        }else{
            return view('register.create');
        }
    }

    public function getcart(){
        if (auth()->user() != null) {

            $cart =  Cart::all()->where('user_id', auth()->user()->id);
            $dataSet = array();
            foreach($cart as $el){
                array_push($dataSet, Cycle::all()->where('id',$el->cycle_id));
            }
            if($dataSet == null){
                $dataSet['message'] = 'Cart items not found';
                dd($dataSet);
            }
            return view('cart', compact('dataSet'));
        }else{
            return view('register.create');
        }
    }
}
