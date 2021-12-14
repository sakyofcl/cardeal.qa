<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

use App\Model\user;
use App\Model\user_verify_token;

class authController extends Controller
{

    public function userLoginIndex()
    {
        return view('login');
    }

    public function userRegisterIndex()
    {
        return view('register');
    }

    public function userRegisterStore(Request $data)
    {
        $store = new user;

        $store->name = $data->name;
        $store->email = $data->email;
        $store->phone = $data->phone;
        $store->password = Hash::make($data->password);


        if ($store->save()) {
            $token = new user_verify_token;
            $user = user::orderBy('uid', 'DESC')->first();

            #put value for verfication
            $tokenData = Str::random(60);

            $token->uid = $user->uid;
            $token->token = $tokenData;

            if ($token->save()) {
                Mail::send('mail-verify', ['tokenString' => $tokenData], function ($message) use ($user) {
                    $message->from('Retail@retail.lk');
                    $message->to($user->email)->subject('Please verify your mail');
                });
            }

            return redirect('/auth/register/thanks');
        }
    }

    public function userLoginCheck(Request $data)
    {
        $user = user::where('email', $data->email)->first();
        if ($user) {
            if (Hash::check($data->password, $user->password)) {
                session()->put('signature', $user->uid);
                if ($user->verified == "1") {
                    session()->put('verified', "1");
                } else if ($user->verified == "0") {
                    session()->put('verified', "0");
                } else {
                    session()->put('verified', "2");
                }

                return redirect('/');
            }
            return redirect('/auth/login');
        } else {
            return redirect('/auth/register');
        }
    }

    public function userLogout()
    {

        if (session()->has('signature')) {

            session()->forget('signature');
            session()->forget('verified');
            return redirect('/');
        } else {
            return redirect('/auth/login');
        }
    }

    public function userRegisterThanks()
    {
        return view('thanks-register');
    }

    public function userVerify(Request $data)
    {
        if (user_verify_token::where('token', $data->token)->exists()) {

            $userData = user_verify_token::where('token', $data->token)->first();

            if ($userData->expired == "1") {
                return redirect('/');
            } else if ($userData->expired == "0") {
                user::where('uid', $userData->uid)->update(['verified' => 1]);
                user_verify_token::where('token', $data->token)->update(['expired' => 1]);
                return redirect('/auth/login');
            }
        } else {
            return back();
        }
    }
}
