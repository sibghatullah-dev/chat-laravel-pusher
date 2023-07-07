<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {
        # code...
        // return $request->all();

        //    User::create([
        //     'name' => 'test3',
        //     'email' => 'test3@gmail.com',
        //     'password' => bcrypt('test3'),
        // ]);


        if($request->email == null && $request->password == null){
            return sendExternalError("Please Enter Email and Password");
        }

        if($request->email == null){
            return sendExternalError("Please Enter Email");
        }

        if($request->password == null){
            return sendExternalError("Please Enter Password");
        }

        $UserData = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
           );
        //    return $UserData;
        if (!Auth::attempt($UserData)) {
            return sendExternalError("Please Enter Correct Credentials");
        }else{
            return sendInternalSuccess("Logged In successfully");
        }


    }
}
