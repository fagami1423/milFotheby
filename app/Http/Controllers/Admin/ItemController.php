<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Traits\CrudTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;

class ItemController extends Controller
{
    use CrudTrait;

    protected $model;

    protected $views = [];

    public function __construct(Item $model)
    {
        $this->middleware('auth:admin'); 
        $this->model = $model;
        $this->views = [
            'index' => 'admin.items.index',
            'create' => 'admin.items.create',
            'edit' => 'admin.items.edit',
            'show' => 'admin.items.show'
        ];
        $this->redirect = 'item';      
    }

}
