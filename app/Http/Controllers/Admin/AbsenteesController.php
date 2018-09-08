<?php

namespace App\Http\Controllers\Admin;

use App\Absentee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AbsenteesController extends Controller
{
    //

    //
    public function showAbsentees($date)
    {
        $data['records'] = Absentee::where("date",$date)->get();
        $data['date'] =$date;

        return view("admin.attendance.absentees",$data);
    }
}
