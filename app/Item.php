<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    protected $fillable = [
        'admin_id','cat_id','name','artist','year_produced',
        'subject','description',
        'auction_date','estimated_price',
        'property','art_image'];

    public function admin(){
        return $this->belongsTo('App\Admin');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
    
    
    
    
}
