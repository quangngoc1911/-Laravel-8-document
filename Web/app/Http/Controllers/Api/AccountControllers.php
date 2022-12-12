<?php
    
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Validator;

class AccountControllers extends Controller{
    public function register (Request $request)
    {
        //validasi
        // $validator = Validator::make($request->all(),[
        //     'HoVaTen' => ['required','max:255'],
        //     'TenDN'=>['required','max:255','unique:account'],
        //     'Passwords'=>['required','max:255','confirmed']
        // ],[
        //     'HoVaTen.required' => 'Please enter your first and last name !!!',
        //     'HoVaTen.max' => 'Character limit is 255 !!!',
        //     'TenDN.required'=>'Please enter your account !!!',
        //     'TenDN.unique'=> 'This account has already existed !!! ',
        //     'TenDN.max'=>'Character limit is 255 !!!',
        //     'Passwords.required'=>'Please enter your password !!!',
        //     'Passwords.max'=>'Character limit is 255 !!!',
        //     'Passwords.confirmed'=>'Character limit is 255 !!!',
        // ])
    }
}