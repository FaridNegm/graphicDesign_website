<?php

namespace App\Http\Controllers\dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\testmonials;
use DB;

class testmonialController extends Controller
{
    public function allTestmonial(){
        $all_testmonials = testmonials::all();
        return view('dashboard/testmonial/all' , compact('all_testmonials'));
    }

    public function addNewTestmonial(){
        return view('dashboard/testmonial/add');
    }

    public function saveNewSeTestmonial(Request $request){
        $this->validate($request , [
            'name' => 'required|min:5|max:250',
            'body' => 'required|min:50',
            'image' => 'required'
        ]);

        $path = 'dashboard/images/testmonials';
        $def_path = 'dfuser.png';
        $file = request('image');
        if($file == ''){
            $file_name = $def_path;
        }else{
            $file_name = time() . '.' .$file->getClientOriginalExtension();
            $file->move(public_path($path) , $file_name);
        }

        $add = testmonials::create([
            'title' => request('name'),
            'body' => request('body'),
            'image' => $file_name,
            'status' => request('status'),
        ]);

        session()->flash('noti_success' , 'Testmonial has been successfully added');

        return redirect('all-testmonials');
    }

    public function editTestmonial($id){
        $edit_testmonial = testmonials::where('id' , $id)->get();
        return view('dashboard/testmonial/edit' , compact('edit_testmonial'));
    }

    public function updateTestmonial($id , Request $request){
        $this->validate($request , [
            'name' => 'required|min:5|max:250',
            'body' => 'required|min:50',
        ]);

        $path = 'dashboard/images/testmonials';
        $def_path = 'dfuser.png';
        $file = request('image');
        if($file == ''){
            $file_name = $def_path;
        }else{
            $file_name = time() . '.' .$file->getClientOriginalExtension();
            $file->move(public_path($path) , $file_name);
        }

        DB::table('testmonials')->where('id' , $id)->update([
            'title' => request('name'),
            'body' => request('body'),
            'image' => $file_name,
            'status' => request('status'),
        ]);

        session()->flash('noti_success' , 'The change has been successful');
        return redirect('all-testmonials');
    }

    public function deleteTestmonial($id){
        $user = testmonials::findOrFail($id);
        $user->delete();

        session()->flash('noti_success' , 'TestmoniaL Successfully Deleted');
        return redirect()->back();
    }

}
