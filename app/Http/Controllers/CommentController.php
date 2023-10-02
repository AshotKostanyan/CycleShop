<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    private $user_id = '';
    public function store(){
        if(auth()->user() == null){
            return view('register.create');
        }
        $user_id = auth()->user()->id;

        $attributes = request()->validate([
            'subject'=>['required', 'max:255', 'min:2'],
            'content'=>['required', 'min:5'],
        ]);

        $attributes['user_id'] = $user_id;
        Comments::create($attributes);

        return redirect('/');
    }
}
