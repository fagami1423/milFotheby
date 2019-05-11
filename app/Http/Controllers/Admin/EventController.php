<?php

namespace App\Http\Controllers\ADmin;

use App\Http\Controllers\Admin\Traits\CrudTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;

class EventController extends Controller
{
    use CrudTrait;

    protected $model;

    protected $views = [];

    public function __construct(Event $model)
    {
        $this->middleware('auth:admin'); 
        $this->model = $model;
        $this->views = [
            'index' => 'admin.events.index',
            'create' => 'admin.events.create',
            'edit' => 'admin.events.edit'
        ];
        $this->redirect = 'event';      
    }

}
