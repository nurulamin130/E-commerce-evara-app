<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class EvaraController extends Controller
{
    public function index(){

        return view('website.home.index',[
            'products'=>Product::where('status',1)
                ->orderBy('id','desc')
                ->take(8)
                ->get(['id','name','category_id','regular_price','selling_price','image']),
        ]);
    }

    public function category($id){

        return view('website.category.index',[
            'products'=>Product::where('category_id',$id)
                ->orderBy('id','desc')
                ->get(['id','name','regular_price','selling_price','image']),

        ]);
    }
    public function product($id){
        return view('website.product.index',[
            'product'=>Product::find($id),

        ]);
    }
}
