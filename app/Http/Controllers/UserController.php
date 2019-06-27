<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function AddUser(Request $request){

        $this->validate($request, [
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);

        $table = new User();

        $table->first_name = $request->input('first_name');
        $table->last_name = $request->input('last_name');
        $table->email = $request->input('email');
        //password Encrypted
        $table->password = bcrypt($request->input('password'));
        $table->save();
    }

    public function LogUser(Request $request){
        $userdata = array(
            'email' => $request->get('email'),
            'password'  => $request->get('password')
        );
        if (Auth::attempt($userdata)) {
            # code...
            return view('admin.component');
        }
        return redirect()->back()->with('message','Your Username and Password Does not match...');
    }
}
