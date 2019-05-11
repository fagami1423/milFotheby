<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Traits\CrudTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ClientController extends Controller
{
    use CrudTrait;

    protected $model;

    protected $views = [];

    public function __construct(User $model)
    {
        $this->model = $model;
        $this->views = [
            'index' => 'admin.clients.clients',

        ];
        $this->redirect = 'client';     
        $this->middleware('auth:admin'); 
    }

    public function updateApprove(Request $request,$id)
    {
        $redirect = isset($this->redirect) ? $this->redirect : $this->view;
        $data = $request->except('_token');
        $model = $this->model->find($id);
        $model->approved='Yes';
        $model->update();
        return redirect()->back()->with('message', 'The user has been Approved');
    }

}
