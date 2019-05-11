<?php

namespace App\Http\Controllers\website;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\myWorks;
use App\siteSetting;
use App\services;
use App\testmonials;
//use DB;

class websiteController extends Controller
{
    public function allFunction(){
        $all_users = User::where('status' , 1)->paginate(4);
        $all_settings = siteSetting::all();
        $my_works = myWorks::where('status' , 1)->get();
        $my_works_slider = myWorks::where('status' , 0)->get();
        $all_services = services::all();
        $all_testmonials = testmonials::all();
        return view('website/welcome' , compact('all_users' , 'my_works_slider', 'all_testmonials' ,'all_settings' , 'my_works' , 'all_services'));
    }

}
