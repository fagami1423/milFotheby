<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Traits\CrudTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RequestItem;
use App\Item;


class RequestItemController extends Controller
{
    use CrudTrait;

    protected $model;

    protected $views = [];

    public function __construct(RequestItem $model)
    {
        $this->middleware('auth:admin'); 
        $this->model = $model;
        $this->views = [
            'index' => 'admin.RequestItems.index',
            'create' => 'admin.RequestItems.create',
            'edit' => 'admin.RequestItems.edit'
        ];
        $this->redirect = 'requestItem';      
    }

    public function updateApprove(Request $request, $id, Item $item){
        dd($request->all());
        $data = $this->model->find($id);
        $item->admin_id = auth()->user()->id;
        $item->name = $data->name;
        $item->cat_id = $data->cat_id;
        $item->artist = $data->$artist;
        $item->year_produced = $data->year_produced;
        $item->description = $data->description;
        $item->auction_date = $data->auction_date;
        $item->estimated_price = $data->estimated_price;
        $item->property = $data->property;
        $item->art_image = $data->art_image;
        $item->save();

        return view(route("{$redirect}.index"))->with('message','the item has been approved');

    }
   
    
}
