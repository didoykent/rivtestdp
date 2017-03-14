<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class ViewController extends Controller
{


    public function index(){

if(Auth::user()){

  return view('riv-admin/profile');
}
else{
return view('user/signin');
}
    }
}
