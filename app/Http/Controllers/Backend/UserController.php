<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function UserView(){

        //$allData = User::all();
        $data['allData'] = User::all();
        return view('backend.user.view_user', $data);
    }

    public function UserAdd() {
    return view('backend.user.add_user');

    }

    public function UserStore(Request $request) {
        $request->validate([
            'name' => 'required',
            'familyname' => 'required',
            'email' =>'required|unique:users',
            'password' =>[
                'required',
                'string',
                'confirmed',
                'min:8',
                'regex:/[A-Z]/','regex:/[a-z]/','regex:/[0-9]/','regex:/[_!@#$%^&*()<>?]/'],
                [
                    'password.regex'=>'The password must contain at least one uppercase letter, one lowercase letter, one number and one symbol().',
                ]
        ]);


        $data = new User();
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->familyname = $request->familyname;
        $data->email = $request->email;


        $data->password = bcrypt($request->password);
        $data->save();
        dd($data);

        return redirect()->route('user.view');
    }



    public function UserEdit($id) {

        $editData = User::find($id);
        return view('backend.user.edit_user', compact('editData'));

    }


    public function UserUpdate(Request $request, $id) {

        // Pourquoi $Validate data empeche de Update le formulaire ? 

        /*$validateData = $request->validate([
            'name' => 'required',
            'familyname' => 'required',
            'email' =>'required|unique:users',


        ]);*/

        

        $data = User::find($id);
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->familyname = $request->familyname;
        $data->email = $request->email;
        $data->save();

        
        return redirect()->route('user.view');

    }

    public function UserDelete($id) {

        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.view');
    }

    

}
