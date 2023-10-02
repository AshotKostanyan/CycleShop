<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\CycleCategory;
use DB;
use Illuminate\Http\Request;
use App\Models\Cycle;
use App\Models\News;

class IndexController extends Controller
{
    public function index()
    {

        // $cycle01 = DB::table('cycles')
        //     ->latest()->where('category_id', '1')
        //     ->first();
        // $cycle02 = DB::table('cycles')
        //     ->latest()->where('category_id', '2')
        //     ->first();
        // $cycle03 = DB::table('cycles')
        //     ->latest()->where('category_id', '3')
        //     ->first();



        // Cycle::whereHas('category', function ($q) {
        //     $q->where('size', '01');
        // });
        // dd(Cycle::with('category')->find(2));
        $categories = CycleCategory::all();

        $dataSet = [
            'NewModelCycles' => [],
            'Comments' => Comments::whereHas('user')->get(),
            'news' => News::all()
        ];
        foreach($categories as $category){
            $dataSet['NewModelCycles']['cycle'.$category->size] = Cycle::whereRelation('category', 'size', $category->size)->latest()->first();
        }
        return view('index', compact('dataSet'));
    }

}
