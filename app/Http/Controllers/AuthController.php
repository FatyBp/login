<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest'])->only(['index']);
    }
    public function index(){
        return view('login');
    }
    public function logear(Request $request){
        $credenciales = $request->only('name','password');
        if(Auth::attempt($credenciales)){
            return redirect()->route('dash');
        }else{
            return back()->withInput($credenciales);
        }
    }
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }

}
