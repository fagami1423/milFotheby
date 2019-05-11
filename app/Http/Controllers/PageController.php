<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('categories')->join('items','categories.id','=','items.cat_id')->
                orderBy('items.created_at','asc')->take(10)->get();
        return view('frontend.pages.home')->with(['items'=>$items]);
    }


    
    public function showPaintings(){
        $items = DB::table('categories')->join('items','categories.id','=','items.cat_id')
                ->where('items.cat_id',2)
                ->orderBy('items.created_at','asc')->get();
        return view('frontend.categories.paintings')->with(['items'=>$items]);
    }

    public function showDrawings(){
        $items = DB::table('categories')->join('items','categories.id','=','items.cat_id')
                ->where('items.cat_id',1)
                ->orderBy('items.created_at','asc')->get();
        return view('frontend.categories.drawings')->with(['items'=>$items]);
    }

    public function showPhotographs(){
        $items = DB::table('categories')->join('items','categories.id','=','items.cat_id')
        ->where('items.cat_id',3)
        ->orderBy('items.created_at','asc')->get();
        return view('frontend.categories.photographs')->with(['items'=>$items]);  
    }

    public function showSculptures(){
        $items = DB::table('categories')->join('items','categories.id','=','items.cat_id')
        ->where('items.cat_id',4)
        ->orderBy('items.created_at','asc')->get();
        return view('frontend.categories.sculptures')->with(['items'=>$items]);
    }

    public function showCarvings(){
        $items = DB::table('categories')->join('items','categories.id','=','items.cat_id')
        ->where('items.cat_id',5)
        ->orderBy('items.created_at','asc')->get();
        return view('frontend.categories.carvings')->with(['items'=>$items]);
    }
}
