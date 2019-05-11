<?php

namespace App\Http\Controllers\dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\siteSetting;
use DB;

class siteSettingController extends Controller
{
    public function allsetting(){
        $all_settings = siteSetting::all();
        return view('dashboard/site_settings/all' , compact('all_settings'));
    }

    public function editsiteSetting($name){
        $edit_site_setting = siteSetting::where('name' , $name)->get();
        return view('dashboard/site_settings/edit' , compact('edit_site_setting'));
    }

    public function updateSiteSetting ($name , Request $request){
        $path = 'dashboard/images/sitesetting';
        $def_path = 'dfSiteImage.jpg';
        $file = request('image');
        if($file == ''){
            $file_name = $def_path;
        }else{
            $file_name = time() . '.' .$file->getClientOriginalExtension();
            $file->move(public_path($path) , $file_name);
        }

        DB::table('siteSetting')->where('name' , $name)->update([
            'name' => request('name'),
            'description' => request('desc'),
            'email' => request('email'),
            'phones' => request('phones'),
            'address' => request('address'),
            'fax' => request('fax'),
            'site_image' => $file_name,
            'facebook' => request('facebook'),
            'twitter' => request('twitter'),
            'youtube' => request('youtube'),
            'behance' => request('behance'),

        ]);

        session()->flash('noti_success' , 'The change has been successful');
        return redirect('all-settings');
    }
}
