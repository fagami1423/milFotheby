<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'admin_id', 'cat_name'
    ];


    public function admin(){
        return $this->belongsTo('App\Admin');
    }
    public function item(){
        return $this->hasMany('App\Item');
    }

   
}
