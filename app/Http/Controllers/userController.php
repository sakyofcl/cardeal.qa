<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\user;
use App\Model\car;
use App\Model\car_brand;
use App\Model\car_specification;
use App\Model\car_image;
use App\Model\car_model;

class userController extends Controller
{
    public function useProfile(Request $data)
    {
        if (session()->has('signature')) {

            if (user::where('uid', session()->get('signature'))->exists()) {
                $uid = session()->get('signature');
                $userCar = "";
                $userCarCount = car::where('uid', $uid)->get()->count();
                $userSoldCount = car::where(['uid' => $uid, 'status' => "sold"])->get()->count();
                $userActiveCount = car::where(['uid' => $uid, 'status' => "active"])->get()->count();

                if ($data->type) {
                    if ($data->type == "all") {
                        $userCar = car::where('uid', $uid)->orderBy('date', 'DESC')->paginate(10);
                    } else if ($data->type == "sold") {
                        $userCar = car::where(['uid' => $uid, 'status' => "sold"])->orderBy('date', 'DESC')->paginate(10);
                    } else if ($data->type == "active") {
                        $userCar = car::where(['uid' => $uid, 'status' => "active"])->orderBy('date', 'DESC')->paginate(10);
                    } else {
                        return back();
                    }
                } else {

                    $userCar = car::where('uid', $uid)->orderBy('date', 'DESC')->paginate(10);
                }

                $brand = car_brand::all();
                $model = car_model::all();
                $profile = user::where('uid', session()->get('signature'))->get(
                    [
                        'name',
                        'email',
                        'image',
                        'role',
                        'phone',
                        'uid',
                        'verified'
                    ]
                )->first();
                return view(
                    'profile',
                    [
                        "userCar" => $userCar,
                        "carCount" => $userCarCount,
                        "soldCarCount" => $userSoldCount,
                        "activeCarCount" => $userActiveCount,
                        "brand" => $brand,
                        'model' => $model,
                        'profile' => $profile
                    ]
                );
            } else {
                return redirect('/auth/register');
            }
        } else {
            return redirect('/auth/login');
        }
    }

    public function UpdateCarStatus(Request $data)
    {
        if (session()->has('signature')) {
            if (user::where('uid', session()->get('signature'))->exists()) {
                
                if (isset($data->cid) && isset($data->status)) {
                    if ($data->status == "sold" || $data->status == "active" || $data->status == "deleted") {
                        
                        car::where(
                            ['uid' => session()->get('signature'), 'cid' => $data->cid]
                        )->update(array(
                            'status' => $data->status,
                        ));

                    
                        return redirect('/user/profile');
                    }
                    
                    
                }
                else{
                    return back();
                }
                
            } else {
                return redirect('/auth/register');
            }
        } else {
            return redirect('/auth/login');
        }
    }
    public function userDeleteCar(Request $data)
    {

        if (session()->has('signature')) {
            if (user::where('uid', session()->get('signature'))->exists()) {

                $delCar = car::where('cid', $data->cid)->first();
                $delCarSpec = car_specification::where('cid', $data->cid)->first();
                $collection = car_image::where('cid', $data->cid)->get();

                for ($i = 0; $i < count($collection); $i++) {
                    $collection[$i]->delete();
                }
                $delCar->delete();
                $delCarSpec->delete();
                return back();
            } else {
                return redirect('/auth/register');
            }
        } else {
            return redirect('/auth/login');
        }
    }
}
