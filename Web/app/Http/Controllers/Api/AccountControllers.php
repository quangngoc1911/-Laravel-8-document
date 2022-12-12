<?php
    
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AccountControllers extends Controller{
    public function register (Request $request)
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

        if($validator->fails())
        {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()
            ],400);
        }else{
            $account = new Account();
            $account->HoVaTen = $request->HoVaTen;
            $account->TenDN = $request->TenDN;
            $account->password = Hash::make($request->password);
            $account->save();

            return response()->json([
                'status' => true,
                'message' => 'Register Success.'
            ],201);
        }   
    }
}