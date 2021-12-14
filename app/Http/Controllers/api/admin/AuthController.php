<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
#Library
use App\Lib\JsonRes;
use App\Model\admin;
use App\Model\user;
use App\Model\user_verify_token;

class AuthController extends Controller
{
    public function authLogin(Request $request){

        

        $validator=Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required',
        ]);

        if($validator->fails()){
            return JsonRes::json(false,[],'plz ender data correct format.');
        }
        
    
        if(admin::where('email',$request->email)->exists()){
            $user = admin::where(['email' => $request->email])->first();
        
            if($user){

                if ($request->password==$user->password) {
                    $token=$user->token;
                    if($token){

                        $resData=[
                            'token' => $token,
                            'name'=>$user->name
                        ];
                        return JsonRes::json(true,$resData,'user successfully login');
                    }
                    else{
                        
                        return JsonRes::json(false,[],"does'nt match token.");
                    }
                } 
                else {
                    return JsonRes::json(false,[],"Wrong password.");
                }
            }
          
        }
        else{
            return JsonRes::json(false,[],"Wrong email address.");
        }
        
        
        
    }


    public function createUserSave(Request $request){
        $store = new user;

        $store->name = $request->name;
        $store->email = $request->email;
        $store->phone = $request->phone;
        $store->password = Hash::make($request->password);
        $store->userStatus=$request->userStatus;
        $store->userType=$request->userType;


        if($request->verified=="1"){
            $store->verified="1";
        }
        

        if ($store->save()) {

            $token = new user_verify_token;

            #put value for verfication
            $tokenData = Str::random(60);

            $user = user::orderBy('uid', 'DESC')->first();
            $token->uid = $user->uid;
            $token->token = $tokenData;


            if($request->verified=="1"){
                $token->expired ="1";
                if ($token->save()) {
                    return JsonRes::json(true,[],"User Successfully Created.");
                }
            }
            else{
                if ($token->save()) {
                    Mail::send('mail-verify', ['tokenString' => $tokenData], function ($message) use ($user) {
                        $message->from('topcardeals.lk');
                        $message->to($user->email)->subject('Please verify your mail');
                    });

                    return JsonRes::json(true,[],"User Successfully Created.");
                }
                
            }
            
        }
    }
}
