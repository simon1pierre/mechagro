<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AdminMainController extends Controller
{
    public function index(){ 
        $loggeduser = Auth::user();
        return view('admin.admin', compact('loggeduser'));
    }


    public function usermanage(){
        $users = user:: all();
        return view('admin.manage.users', compact('users'));
    }

    public function bookingmanage(){
        return view('admin.manage.bookings');
    }

    public function showuser($id){
        $user_info = User::find($id);
        return view('admin.manage.edituser', compact('user_info'));
    }

    public function updateuser(Request $request, $id){

        $User = User::FindOrFail($id);

        // validating before submission 
        $validate_data = $request->validate([
            'name'=> 'unique:users|max:100|min:4',
            'email' => 'unique:users,email,' . $User->id . '|max:100|min:4',
        ]);

        $User->update($validate_data);

        return redirect()->route('admin.')->with('success', 'User Updated Successfully!');
    }

    

    public function setting(){ 
        return view('admin.settings');
    }


    
}
