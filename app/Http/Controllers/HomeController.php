<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function home(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.about');
    }
    public function service(){
        return view('pages.service');
    }
    public function admin(){
        return view('pages.admin');
    }
    
}
