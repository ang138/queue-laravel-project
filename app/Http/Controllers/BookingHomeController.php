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

class BookingHomeController extends Controller
{

    public function pagebooking(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('pages.pagebooking', compact('data'));
    }
    
    public function inform(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }


        return view('pages.inform', compact('data'));
    }

    public function bookingData(Request $request)
    {  
        $bkname = $request->input('bkname');
        $email = $request->input('email');
        $tel = $request->input('tel');
        $wtype = $request->input('wtype');
        $title = $request->input('title');
        $details = $request->input('details');
        $channel = $request->input('channel');
        $date = $request->input('date');
        $expfile = $request->input('expfile');
        $data=array("bkname"=>$bkname,"email"=>$email,"tel"=>$tel,"wtype"=>$wtype,"title"=>$title,"details"=>$details,"channel"=>$channel,"date"=>$date,"expfile"=>$expfile);
        DB::table('data')->insert($data);
        if($data){
            return back()->with('success', 'กรอกข้อมูลสำเร็จ');
        } else{
            return back()->with('fail', 'กรอกข้อมูลไม่สำเร็จ');
        }

        

        /*$request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'tel' => 'required',
            'wtype' => 'required',
            'title' => 'required',
            'details' => 'required',
            'channel' => 'required',
            'date' => 'required',
            'expfile' => 'required',
        ]);
        Data::create([
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'wtype' => $request->wtype,
            'title' => $request->title,
            'details' => $request->details,
            'channel' => implode(',', $request->details),
            'date' => $request->date,
            'expfile' => $request->file('expfile')->store('public'),
        ]);*/
           
    }
    
    public function booking(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('pages.booking', compact('data'));
    }

    

}
