<?php

namespace App\Http\Controllers\Admin;

use App\Absentee;
use App\Attendee;
use App\Service;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //

    public function loadDashboard()
    {








        $allservice = count(Service::all());
        $second2dlast = Service::all()[($allservice - 2)]->date;
        $third2dlast = Service::all()[$allservice - 3]->date;
        $lastservice = Service::all()->last()->date;

        $data['members'] = User::all();
        $data['groups'] = User::distinct()->get(['group']);
        $data['cells'] = User::distinct()->get(['cell']);
        $service = Attendee::distinct()->get(['date'])->last();

        $data['lastservice'] = Attendee::where("date",$service->date)->get();
        $data['last2service'] = Attendee::where("date",$second2dlast)->get();
        $data['last3service'] = Attendee::where("date",$third2dlast)->get();

        $data['february'] = Attendee::where("date","like","%2018-02%")->get();
        $data['march'] = Attendee::where(DB::raw('MONTH(created_at)'), '=', 3 )->get();

        $data['april'] = Attendee::where(DB::raw('MONTH(created_at)'), '=', 4 )->get();
        $data['may'] = Attendee::where(DB::raw('MONTH(created_at)'), '=', 5 )->get();
        $data['june'] = Attendee::where(DB::raw('MONTH(created_at)'), '=', 6 )->get();

        $data['july'] = Attendee::where(DB::raw('MONTH(created_at)'), '=', 7 )->get();
        $data['august'] = Attendee::where(DB::raw('MONTH(created_at)'), '=', 8 )->get();
        $data['users'] = User::orderBy('id','desc')->offset(0)->limit(6)->get();

        $data['services'] = Service::select("date")->orderBy('id','desc')->offset(0)->limit(6)->get();
        $data['absentees'] = Absentee::orderBy('id','desc')->offset(0)->limit(6)->get();

       // dd($data['services']);

        $dlastservice = Attendee::where("date",$service->date)->get();
        $dlast2service = Attendee::where("date",$second2dlast)->get();

            $data['percentage'] = (count($dlastservice ) - count($dlast2service))/ count($dlastservice) * 100;
            dd($data['percentage']);




        /*$data['september'] = Attendee::where(DB::raw('MONTH(created_at)'), '=', 9 )->get();
        $data['october'] = Attendee::where(DB::raw('MONTH(created_at)'), '=', 10 )->get();
        $data['november'] = Attendee::where(DB::raw('MONTH(created_at)'), '=', 11 )->get();
        $data['december'] = Attendee::whereRaw('YEAR(created_at) = 2017')->whereRaw('MONTH(created_at) = 3')->get();*/





      //  dd($data['july']);



//    $data['last3service'] =  array_slice(Service::all(), -3, 3, true);






        return view("admin.home.dashboard",$data);
    }

    public function showMembers()
    {
        $data['members'] = User::all();
        return view("admin.members",$data);
    }


    public function returnAttendeeCount($serviceId)
    {

        $attendance = Attendee::where("date",$serviceId)->get();
        if(count($attendance) > 0)
            return count($attendance);
        else
            return 0;
    }



    public function returnAbsenteeCount($serviceId)
    {

        $attendance = Absentee::where("date",$serviceId)->get();
        if(count($attendance) > 0)
            return count($attendance);
        else
            return 0;
    }

    public function genrerateAllAbsentees()
    {
        ini_set('max_execution_time', 300);

        $services = Service::all();






        foreach ($services as $service){
            $atten =  DB::table("attendance")->select('user_id')->where("date",$service->date)->get();
            $use = array();

            foreach ($atten as $item) {
                $use[] = $item->user_id;
            }

            $reals = User::whereNotIn('id',$use)->get();
            $seeparated_date = explode("-", $service->date);

            foreach ($reals as $real){

                $absentee = new Absentee();
                $absentee->user_id =  $real->id;
                $absentee->cell =  $real->cell;
                $absentee->fellowship =  $real->fellowship;
                $absentee->group =  $real->group;
                $absentee->date = $service->date;
                $absentee->year = $seeparated_date[0];
                $absentee->month =$seeparated_date[1];
                $absentee->day = $seeparated_date[2];

                $absentee->save();

            }

            unset($use);

        }
    }


    public function genrerateSingleAbsentees($date)
    {
        ini_set('max_execution_time', 300);

            $services = Service::where("date",$date)->first();
            
            if(count($services) < 0){
                
                return redirect()->route("loadDashboard")->with("message","No service found on this day")->with("type","danger");
                exit;
            }
        
     
            //fetch attendees for a certain date
            $atten =  DB::table("attendance")->select('user_id')->where("date",$date)->get();
            
            $use = array();

            //fetch user_id from object and store as a single array
            foreach ($atten as $item) {
                $use[] = $item->user_id;
            }

            //Fetch users from users table excluding attendees
            $reals = User::whereNotIn('id',$use)->get();
            
            //Seperate date so that month day and year can be stored in different columsn
            $seeparated_date = explode("-", $date);

            
            //store absentees in absentess table.
            foreach ($reals as $real){

                $absentee = new Absentee();
                $absentee->user_id =  $real->id;
                $absentee->cell =  $real->cell;
                $absentee->fellowship =  $real->fellowship;
                $absentee->group =  $real->group;
                $absentee->date = $date;
                $absentee->year = $seeparated_date[0];
                $absentee->month =$seeparated_date[1];
                $absentee->day = $seeparated_date[2];

                $absentee->save();

            }

            unset($use);

            echo "total of".count($reals)."absentees found";




        
    }
    


    public function genrerateAllAbsenteesold()
    {


        $users = User::all();
        $services = Service::all();






            foreach ($services as $service){
                $atten =  DB::table("attendance")->select('user_id')->where("date",$service->date)->get();
                $use = array();

                foreach ($atten as $item) {
                    $use[] = $item->user_id;
                }

                $reals = User::whereNotIn('id',$use)->get();

                $seeparated_date = explode("-", $service->date);

                foreach ($reals as $real){

                    $absentee = new Absentee();
                    $absentee->user_id =  $real->id;
                    $absentee->cell =  $real->cell;
                    $absentee->fellowship =  $real->fellowship;
                    $absentee->group =  $real->group;
                    $absentee->date = $service->date;
                    $absentee->year = $seeparated_date[0];
                    $absentee->month =$seeparated_date[1];
                    $absentee->day = $seeparated_date[2];

                    $absentee->save();

                }

                unset($use);

        }




        dd(count($real));
    }



}
