<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{

    public function search(Request $request){
        $items = DB::table('categories')->join('items','categories.id','=','items.cat_id')
        ->where('items.cat_id',$request->cat_id)
        ->where('items.name','LIKE','%'.$request->name.'%')
        ->orderBy('items.created_at','asc')->get();
        return view('frontend.pages.search')->with(['items'=>$items]);

    }
   
    public function searchPrice(Request $request){
        $items = DB::table('categories')->join('items','categories.id','=','items.cat_id')
        ->whereIn('items.estimated_price',array($request->min_price,$request->max_price))
        ->orWhere('items.estimated_price','LIKE','%'.$request->min_price.'%')
        ->orWhere('items.estimated_price','LIKE','%'.$request->max_price.'%')
        ->orderBy('items.estimated_price',$request->order)->get();
        return view('frontend.pages.search')->with(['items'=>$items]);
    }

    public function searchArtist(Request $request){
        $items = DB::table('categories')->join('items','categories.id','=','items.cat_id')
        ->where('items.artist','LIKE','%'.$request->artist.'%')
        ->orderBy('items.created_at','asc')->get();
        return view('frontend.pages.search')->with(['items'=>$items]);
    }

   
}
