<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
       
        return view('admin.partial.index');
    }
    
    public function showSearch(){
        return view('admin.search.search');
    }

    public function searchItems(Request $request){
        $items = $request->all();
        
        
        $con=[];
        
        foreach ($items as $keyy => $par) {
            if ($par != '') {
                $con[$keyy] = $par;
            }
        }    
        
       if(count($con)>0)
        {
            $data = DB::table('categories')->join('items','categories.id','=','items.cat_id')
                ->where('items.cat_id',$request->cat_id)
                ->orWhere('items.name',$request->name)->get();
            return view('admin.search.search')->with(['data'=>$data]);
        }
        else{
            return view('admin.search.search');
        }
    }
        
        
        
}
    
   

       

