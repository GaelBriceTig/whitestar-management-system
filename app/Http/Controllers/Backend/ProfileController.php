<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{

    public function ProfileView(){

        $id = Auth::user()->id;
        $user = User::find($id);

        return view('backend.user.view_profile', compact('user'));

    }


    public function ProfileEdit(){

        $id = Auth::user()->id;
        $editData = User::find($id);

        return view('backend.user.edit_profile', compact('editData'));

    }



    public function ProfileStore(Request $request){

        $data = User::find(Auth::user()->id);
        $data->familyname = $request->familyname;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->gender = $request->gender;
        $data->adress = $request->adress;
        $data->image = $request->image;

        if($request->file('image')){

            $file = $request->file('image');
            @unlink(public_path('uploads/user_images/' . $data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $data['image'] = $filename;

        }

        $data->save();

        $notification = array(
            'message' => 'Le profil Utilisateur à Jour',
            'alert-type' => 'success',
        );

        return redirect()->route('profile.view')->with($notification);

    }


    public function PasswordView(){
        return view('backend.user.edit_password');
    }

    public function PasswordUpdate(Request $request){

        $validateData = $request->validate([
            'oldPassword' => 'required',
            'password' => 'required|confirmed',

        ]);

        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->oldPassword, $hashedPassword)){
        
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login');

        }else{
            return redirect()->back();
        }



    }// end methods probleme avec la redirection du password
}
