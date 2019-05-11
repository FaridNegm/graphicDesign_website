<?php

namespace App\Http\Controllers\dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\myWorks;

class myWorksController extends Controller
{
    public function allWorks(){
        $all_works = myWorks::all();
        return view('dashboard/my_works/all' , compact('all_works'));
    }

    public function addNewWork(){
        return view('dashboard/my_works/add');
    }

    public function saveNewWork(Request $request){
        $this->validate($request , [
            'name' => 'required|min:10|max:250',
            'body' => 'required|min:50',
            'category' => 'required',
            'image' => 'required'
        ]);

        $path = 'dashboard/images/works';
        $def_path = 'dfwork.jpg';
        $file = request('image');
        if($file == ''){
            $file_name = $def_path;
        }else{
            $file_name = time() . '.' .$file->getClientOriginalExtension();
            $file->move(public_path($path) , $file_name);
        }

        $add = myWorks::create([
            'title' => request('name'),
            'body' => request('body'),
            'category' => request('category'),
            'image' => $file_name,
            'status' => request('status'),
        ]);

        session()->flash('noti_success' , 'Work has been successfully added');

        return redirect('all-works');
    }

    public function editWork($id){
        $edit_works = myWorks::where('id' , $id)->get();
        return view('dashboard/my_works/edit' , compact('edit_works'));
    }

    public function updateWork($id , Request $request){
        $this->validate($request , [
            'name' => 'required|min:10|max:250',
            'body' => 'required|min:50',
            'category' => 'required',
        ]);

        $path = 'dashboard/images/works';
        $def_path = 'dfwork.jpg';
        $file = request('image');
        if($file == ''){
            $file_name = $def_path;
        }else{
            $file_name = time() . '.' .$file->getClientOriginalExtension();
            $file->move(public_path($path) , $file_name);
        }

        DB::table('worksandposts')->where('id' , $id)->update([
            'title' => request('name'),
            'body' => request('body'),
            'category' => request('category'),
            'image' => $file_name,
            'status' => request('status'),
        ]);

        session()->flash('noti_success' , 'The change has been successful');
        return redirect('all-works');
    }

    public function deleteWork($id){
        $user = myWorks::findOrFail($id);
        $user->delete();

        session()->flash('noti_success' , 'Work Successfully Deleted');
        return redirect()->back();
    }
}

