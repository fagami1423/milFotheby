<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\Traits\CrudTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RequestItem;

class AuctionController extends Controller
{
    use CrudTrait;

    protected $model;

    protected $views = [];

    public function __construct(RequestItem $model)
    {
        $this->middleware('auth');
        $this->model = $model;
        $this->views = [
            'create'=> 'frontend.myauction.create',
            'index' => 'frontend.myauction.index',
            'edit' => 'frontend.myauction.edit',
            'show'=>'frontend.myauction.show'
        ];
        $this->redirect = 'auction';      
    }
}
