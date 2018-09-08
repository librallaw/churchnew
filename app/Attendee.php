<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    //
    protected $table = "attendance";
    

    public function user(){
        return $this->belongsTo('App\User');
    }
}
