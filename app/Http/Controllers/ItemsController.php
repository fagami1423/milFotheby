<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('categories')->join('items','categories.id','=','items.cat_id')
                ->orderBy('items.created_at','asc')->get();
        return view('frontend.pages.items')->with(['items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datas = DB::table('categories')->join('items','categories.id','=','items.cat_id')
                ->where('items.id',$id)
                ->orderBy('items.created_at','asc')->get();
        foreach($datas as $data){
            $items = $data;
        }
        $bids = DB::table('users')->join('bids','users.id','=','bids.user_id')
                ->where('bids.item_id',$id)->orderBy('bids.created_at','asc')->get();
                
        $number=count($bids);
        return view('frontend.pages.itemshow')->with(['items'=>$items,'bids'=>$bids,'number'=>$number]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
