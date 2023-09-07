<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Data;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\DB;

class RecordController extends Controller
{
    public function record(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();

            /*$bkdata = Data::join('data', 'data.bkid', '=', 'users.id')
                            ->select()
                            ->get();*/


            //$bkdata = Data::where('bkname', '=', Session::get('loginId'))->get(['bkid','title','wtype','channel']);
        }
        $bkdata = Data::all();

        return view('pages.record', compact('data','bkdata'));
    }

    public function edit(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('pages.edit', compact('data'));
    }
}
