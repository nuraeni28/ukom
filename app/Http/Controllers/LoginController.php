<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Lang;
use Session;
use Validator;

class LoginController extends Controller
{
     public function index()
    {
        return view('welcome');
    

    }
     public function gate()
    {
        $check = Auth::check();
        // dd(Auth::user()->operasional_id);
        if($check)
            if(Auth::user()->role ==1)
                return redirect()->route('admin.index');
            else
                return redirect()->route('home.index');


        else
        
         return view('welcome');
    }
   
     public function post(Request $request)
    {
        $messages = [
            'username.required' => Lang::get('web.login-user.required'),
            'password.required' => Lang::get('web.login-password.required'),
        ];
    
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ], $messages);

          if($validator->fails())
        {
            $validator->errors()->add('login', Lang::get('Username dan Password Tidak Boleh Kosong'));
            return redirect()->back()->withInput()->withErrors($validator);
    }
      if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
             $login = User::where('username', $request->username)->first();
             if($login->role == 1){
                 return redirect()->route('admin.index');
             }
             else{
                  return redirect()->route('home.index');
             }
        
      }
      else{
           return redirect()->back()->withInput()->withErrors(['login' => Lang::get('Username atau password yang Anda masukkan salah. Silahkan login kembali!')]);
      }

}
  public function logout()
    {
        Auth::logout();
        Session::flush();
         return view('welcome');
    }
}