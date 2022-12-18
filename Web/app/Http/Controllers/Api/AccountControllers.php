<?php
    
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AccountControllers extends Controller{

    public function register(){
        $data['title'] = 'Register';
        return view('register',$data);
    }

    public function register_action (Request $request)
    {
        //validasi
        $validator = Validator::make($request->all(),[
            'HoVaTen' => ['required','max:255'],
            'TenDN'=>['required','max:255','unique:accounts'],
            'password'=>['required','max:255','confirmed']
        ],[
            'HoVaTen.required' => 'Please enter your first and last name !!!',
            'HoVaTen.max' => 'Character limit is 255 !!!',
            'TenDN.required'=>'Please enter your account !!!',
            'TenDN.unique'=> 'This account has already existed !!! ',
            'TenDN.max'=>'Character limit is 255 !!!',
            'password.required'=>'Please enter your password !!!',
            'password.max'=>'Character limit is 255 !!!',
            'password.confirmed'=>'Password no match'
        ]);
        
            $account = new Account();
            $account->HoVaTen = $request->HoVaTen;
            $account->TenDN = $request->TenDN;
            $account->password = Hash::make($request->password);
            $account->save();
            
            return redirect()->route('login')->with('success','Register Success. Please Login !');
            
    }

    public function login(){
        $data['title'] = 'Login';
        return view('login',$data);
    }

    public function login_action (Request $request)
    {
        //validasi
        $validator = Validator::make($request->all(),[
            'TenDN'=>['required','max:255'],
            'password'=>['required','max:255']
        ],[
            'TenDN.required'=>'Please enter your account !!!',
            'TenDN.max'=>'Character limit is 255 !!!',
            'password.required'=>'Please enter your password !!!',
            'password.max'=>'Character limit is 255 !!!',
        ]);

        if(Auth::attempt(['TenDN' => $request->TenDN, 'password' => $request->password])){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors('password','Wrong username or password!');     
    }
}