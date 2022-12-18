<?php
    
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Validator;

class AccountControllers extends Controller{


    //register
    public function register(){
        $data['title'] = 'register';
        return view('\Auth\Register',$data);
    }

    public function register_action (Request $request)
    {
        //validasi
        $request -> validate([
            'HoVaTen' => 'required',
            'TenDN'=>'required|unique:accounts',
            'password'=>'required',
            'password_confirm' =>'required|same:password'
        ]);
        
            $account = new User();
            $account->HoVaTen = $request->HoVaTen;
            $account->TenDN = $request->TenDN;
            $account->password = Hash::make($request->password);
            $account->save();
            
            return redirect()->route('login')->with('success','Register Success. Please Login !');
            
    }


    //login
    public function login(){
        $data['title'] = 'login';
        return view('\Auth\Login',$data);
    }

    public function login_action (Request $request)
    {
        //validasi
        $request -> validate([
            'TenDN'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt(['TenDN' => $request->TenDN, 'password' => $request->password])){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors(['password'=>'Wrong username or password!']);     
    }

    //logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}