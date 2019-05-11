<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestItem extends Model
{
    protected $table = 'request_items';

    protected $fillable = [
        'user_id','name','artist','year_produced',
        'subject','description',
        'auction_date','estimated_price',
        'property','art_image'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    
}
