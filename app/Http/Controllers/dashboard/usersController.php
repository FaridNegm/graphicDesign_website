<?php

namespace App\Http\Controllers\dashboard;
use App\Http\Requests\userRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\User;
use DB;

class usersController extends Controller
{
    public function index(){
        return view('dashboard/welcome');
    }

    public function addNewUser(){
        return view('dashboard/users/add');
    }

    public function allUser(){
        $all_users = User::all();
        return view('dashboard/users/all' , compact('all_users'));
    }

    public function saveNewUser(Request $request , userRequest $userRequest){
        $path = 'dashboard/images/users';
        $def_path = 'dfuser.png';
        $file = request('image');
        if($file == ''){
            $file_name = $def_path;
        }else{
            $file_name = time() . '.' .$file->getClientOriginalExtension();
            $file->move(public_path($path) , $file_name);
        }

        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password'),
            'status' => request('admin'),
            'image' => $file_name,
            'description' => request('description'),
            'facebook' => request('facebook'),
            'twitter' => request('twitter'),
            'instegram' => request('instegram'),
        ]);

        session()->flash('noti_success' , 'Member added successfully');

        return redirect('users/all-user');
    }

    public function editUser($id){
        $edit_users = User::where('id' , $id)->get();
        return view('dashboard/users/edit' , compact('edit_users'));
    }

    public function updateUser($id , Request $request){

        DB::table('users')->where('id' , $id)->update([
            'name' => request('name'),
            'email' => request('email'),
            'status' => request('admin'),
            'description' => request('description'),
            'facebook' => request('facebook'),
            'twitter' => request('twitter'),
            'instegram' => request('instegram'),
        ]);

        session()->flash('noti_success' , 'The change has been successful');
        return redirect()->back();
    }

    public function updatePasswordAndImageUser($id , Request $request){
//        $path = 'dashboard/images/users';
//        $def_path = 'dfuser.png';
//        $file = request('image');
//        if($file == ''){
//            $file_name = $def_path;
//        }else{
//            $file_name = time() . '.' .$file->getClientOriginalExtension();
//            $file->move(public_path($path) , $file_name);
//        }

        $db_password = User::all();

        foreach ($db_password as $user){
            dd (Hash::make($request['old_password']));

            if(Hash::make($request['old_password']) == $user->password){
                DB::table('users')->where('id' , $id)->update([
                    'password' => Hash::make($request['new_password']),
//            'image' => $file_name
                ]);
                session()->flash('noti_success' , 'The change has been successful');
                return redirect()->back();
            }else{
                session()->flash('noti_error' , 'Pleas Insert Correct Password !!!');
                return redirect()->back();
            }
        }

    }

    public function deleteUser($id){
        $user = User::findOrFail($id);
        $user->delete();

        session()->flash('noti_success' , 'Member ٍSuccessfully Deleted');
        return redirect()->back();
    }

    public function admins(){
        $all_admins = User::where('status' , 1)->get();
        return view('dashboard/users/all' , compact('all_admins'));
    }
}
