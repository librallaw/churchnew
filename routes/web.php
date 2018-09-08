<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', 'Admin\HomeController@loadDashboard')->name("loadDashboard");
Route::get('/dashboard', 'Admin\HomeController@loadDashboard')->name("loadDashboard");
Route::get('/generate/all/absentees', 'Admin\HomeController@genrerateAllAbsentees')->name("genrerateAllAbsentees");

Route::get('/generate/single/absentees/{date}', 'Admin\HomeController@genrerateSingleAbsentees')->name("genrerateSingleAbsentees");

Route::get('/attendees/view/{date}', 'Admin\AttendeesController@showAttendees')->name("showAttendees");
Route::get('/attendance/capture/', 'Admin\AttendeesController@showTakeAttendance')->name("showTakeAttendance");

Route::get('/absentees/view/{date}', 'Admin\AbsenteesController@showAbsentees')->name("showAbsentees");

Route::get('/members/view/', 'Admin\HomeController@showMembers')->name("showMembers");

Route::post('/attendee_web',['uses'=>'Admin\AttendeesController@attendee_web','as'=>'attendee_web']);



Route::get('/member/view/{id}/{name}', 'Admin\UserController@showUserProfile')->name("showUserProfile");
Route::post('/member/edit/', 'Admin\UserController@DoEditProfile')->name("doEditProfile");




