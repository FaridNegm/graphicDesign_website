<?php

namespace App\Http\Controllers\dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\services;


class servicesController extends Controller
{
    public function allservices(){
        $all_services = services::all();
        return view('dashboard/services/all' , compact('all_services'));
    }

    public function addNewservice(){
        return view('dashboard/services/add');
    }

    public function saveNewService(Request $request){
        $this->validate($request , [
            'name' => 'required|min:5|max:250',
            'body' => 'required|min:50',
            'image' => 'required'
        ]);

        $path = 'dashboard/images/services';
        $def_path = 'dfservice.png';
        $file = request('image');
        if($file == ''){
            $file_name = $def_path;
        }else{
            $file_name = time() . '.' .$file->getClientOriginalExtension();
            $file->move(public_path($path) , $file_name);
        }

        $add = services::create([
            'title' => request('name'),
            'body' => request('body'),
            'image' => $file_name,
            'status' => request('status'),
        ]);

        session()->flash('noti_success' , 'Service has been successfully added');

        return redirect('all-services');
    }

    public function editService($id){
        $edit_service = services::where('id' , $id)->get();
        return view('dashboard/services/edit' , compact('edit_service'));
    }

    public function updateService($id , Request $request){
        $this->validate($request , [
            'name' => 'required|min:5|max:250',
            'body' => 'required|min:50',
        ]);

        $path = 'dashboard/images/services';
        $def_path = 'dfservice.png';
        $file = request('image');
        if($file == ''){
            $file_name = $def_path;
        }else{
            $file_name = time() . '.' .$file->getClientOriginalExtension();
            $file->move(public_path($path) , $file_name);
        }

        DB::table('services')->where('id' , $id)->update([
            'title' => request('name'),
            'body' => request('body'),
            'image' => $file_name,
            'status' => request('status'),
        ]);

        session()->flash('noti_success' , 'The change has been successful');
        return redirect('all-services');
    }

    public function deleteService($id){
        $user = services::findOrFail($id);
        $user->delete();

        session()->flash('noti_success' , 'Service Successfully Deleted');
        return redirect()->back();
    }
}
