<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.pages.index');
    }
    public function userLogin(){
        return view('frontend.pages.login');
    }
    public function userRegister(){
        return view('frontend.pages.register');
    }
}
