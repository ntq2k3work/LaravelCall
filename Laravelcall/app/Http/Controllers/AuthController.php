<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct()
    {

    }
    public function login(Request $request)
    {
        // if(auth()->attempt([
        //     'email' => $request->email,
        //     'password' => $request->password
        // ])){
        //     return response()->json([
        //        'status' => true,
        //         'data' => auth()->user()
        //     ]);
        // }else{
        //     return response()->json([
        //        'status' => false,
        //        'message' => 'Email or Password is wrong'
        //     ]);
        // }
        if(Auth::attempt([
            'email' => $request -> email,
            'password' => $request -> password
        ])){
            session(['user' => Auth::user()]);
            return response()->json([
               'status' => true,
                'data' => Auth::user()
            ]);
        }else{
            return response()->json([
               'status' => false,
               'message' => 'Email or Password is wrong'
            ]);
        }
    }
    public function logout(){
        Auth::logout();
        session()->flush();
        return redirect()-> route('home.login');

    }
}
