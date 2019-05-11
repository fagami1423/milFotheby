<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = [
        'admin_id','item_id','location','event_date',
        'start_time','end_time'
    ];

    public function admin(){
        return $this->belongsTo('App\Admin');
    }


}
