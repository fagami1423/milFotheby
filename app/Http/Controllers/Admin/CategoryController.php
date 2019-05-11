<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Traits\CrudTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    use CrudTrait;

    protected $model;

    protected $views = [];

    public function __construct(Category $model)
    {
        $this->middleware('auth:admin'); 
        $this->model = $model;
        $this->views = [
            'index' => 'admin.categories.index',
            'edit' => 'admin.categories.edit'
        ];
        $this->redirect = 'category';      
    }
   
}
