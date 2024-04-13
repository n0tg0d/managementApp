<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use App\Models\User;


class AdminController extends Controller
{
    // Destroy Method
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        //Show notification
        $notification = array(
            'message' => 'User Logout Successfully',
            'alert-type' => 'success'
        
        );

        return redirect('/login')->with($notification);
    }// End Method


    //Admin profile Method
    public function profile() {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile', compact('adminData'));
    }// End Method

    //Edit Pofile Method
    public function editprofile() {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('admin.admin_profile_edit', compact('editData'));
    }// End Method

    //Store Profile Method
    public function storeprofile(Request $request) {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone_number = $request->phone_number;
        $data->adresse = $request->adresse;

        if ($request->file('profile_image')){
            $file = $request->file('profile_image');

            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['profile_image']  = $filename;
        }
        $data->save();

        //Show notification
        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        
        );

        return redirect()->route('admin.profile')->with($notification);

    }// End Method

    //Change Password page Method
    public function changepassword() {
        return view('admin.admin_change_password');
    }//End Method

    //Update Password Method
    public function updatepassword(Request $request) {
        $validateData = $request->validate ([
            'currentpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password' => 'required|same:newpassword',
        ]);

        $hashedPassword = Auth::user()->password;

        if (Hash::check($request->currentpassword,$hashedPassword)) {
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->newpassword);
            $users->save();

            session()->flash('message', 'Password Updated Successfully');
            return redirect()->back();
        }else{
            session()->flash('message', 'Current Passowrd does not match');
            return redirect()->back();
        }

    }//End Method
}
