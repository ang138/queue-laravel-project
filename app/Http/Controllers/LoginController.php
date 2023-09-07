<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function index()
    {
        return view('pages.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('pagebooking');
            }else{
                return back()->with('fail', 'รหัสผ่านไม่ถูกต้อง');
            }
        }else{
            return back()->with('fail', 'อีเมล์ไม่ถูกต้อง');
        }
    }

    public function register()
    {
        return view('pages.register');
    }
      
    public function customregister(Request $request)
    {  

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res=$user->save();
        if($res){
            return back()->with('success', 'ลงทะเบียนสำเร็จ');
        } else{
            return back()->with('fail', 'ไม่สามารถลงทะเบียนได้');
        }


      

      
        /*$user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
      Session::push('user', [
        'name' => $data['name'],
        'email' => $data['email']
      ]);

      return $user;*/
    }   
    
    
    
    public function signOut() {
        if(Session::has('loginId')){
            Session::pull('loginId');
            return Redirect('login');
        }
    }
}
