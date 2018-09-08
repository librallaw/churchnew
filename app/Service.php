<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //

    public function getDateFormat()
    {
        return "Y-m-d H:i:s.u";
    }
}
