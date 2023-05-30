<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuarios extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['index']);
    }
    public function index(){
        return view('dash');
    }
}
