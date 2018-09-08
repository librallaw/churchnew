<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //

    public function showUserProfile($id)
    {


        $data['user'] = User::where('id',$id)->first();
        return view("admin.user.profile",$data);
    }


    public function DoEditProfile(Request $request)
    {
        $validate  = $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',

        ]);

        //store nee user into the database
        $user = User::where("id",$request->post("id"))->first();
        $user->firstname = $request->post("first_name");
        $user->lastname = $request->post("last_name");
        $user->email = $request->post("email");
        $user->phone = $request->post("phone");
        $user->address = $request->post("address");
        $user->fellowship = $request->post("fellowship");
        $user->activity_department = $request->post("activity_department");
        $user->pastorate_deaconry = $request->post("pastorate_deaconry");
        $user->partner = $request->post("partner");
        $user->designation = $request->post("designation");
        $user->church = $request->post("church");
        $user->birthday = $request->post("birthday");
        $user->save();


        return redirect()->back()->with("message","Profile edited successfully")->with("type",'success');


    }



}
