<?php

namespace App\Http\Controllers\Admin;

use App\Attendee;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AttendeesController extends Controller
{
    //
    public function showAttendees($date)
    {
        $data['records'] = Attendee::where("date",$date)->get();


        $data['date'] =$date;

        return view("admin.attendance.attendees",$data);
    }


    public function showTakeAttendance()
    {
        $data['records'] = User::all();
        return view("admin.attendance.attendance",$data);
    }


    public function attendee_web(Request $request)
    {



        //http://stackoverflow.com/questions/15485354/angular-http-post-to-php-and-undefined
        $username = $request->username;

        /* dd($_POST['username']);*/
        if (!empty($username)) {

            if ($username != "") {



                $user = User::find($username);
                $date_form = Carbon::now()->format('Y-m-d');

                $check = Attendee::where('user_id', $username)
                    ->where('date', $date_form)
                    ->first();



                if (empty($user)) {

                    dd("empty user");
                    $message['status'] = 0;
                    $message['message'] = "User not found";


                    $datar =  array(
                        "status"=>false,
                        "message"=>"User not found"

                    );

                    return $datar;
                    header('Content-Type', 'application/json');
                    /*return response($message, 200)
                        ->*/
                    exit;

                }





                if (count($check) > 0) {
                    // dd("I got here again 3");
                    $message['status'] = 0;
                    $message['message'] = "Attendace already taken";


                    $datar =  array(
                        "status"=>false,
                        "message"=>"Attendace already taken"

                    );


                    return $datar;
                    header('Content-Type', 'application/json');
                    exit;

                } else {




                    $attendee = new Attendee();

                    $attendee->user_id = $username;
                    $attendee->cell = $user->cell;
                    $attendee->fellowship = $user->fellowship;
                    $attendee->group = $user->group;
                    $attendee->date = Carbon::now()->format('Y-m-d');
                    $attendee->time = time();

                    $attendee->save();


                    $user = User::find($username);
                    $message['username'] = ucfirst(strtolower($user->firstname)) . " " . ucfirst(strtolower($user->lastname));
                    $message['status'] = 1;
                    $message['message'] = "Attendance successfull";


                    //echo ucfirst(strtolower($user->firstname)) . " " . ucfirst(strtolower($user->lastname));

                    $datar =  array(
                        "status"=>true,
                        "message"=>"Attendace successfull"

                    );
                    return $datar;
                    header('Content-Type', 'application/json');



                }
                //echo "Server returns: " . $username;
            }

            else {
                echo "Empty username parameter!";
            }
        }
        else {
            echo "Not called properly with username parameter!";
        }




        //********************************************************************************************************




        /*$result = [];
        $rawPost = file_get_contents('php://input');
        mb_parse_str($rawPost, $result);
        var_dump($result);*/




    }
}
