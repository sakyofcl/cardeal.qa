<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Lib\JsonRes;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
//MODEL
use App\Model\user;
use App\Model\car;
use App\Model\car_specification;
use App\Model\user_verify_token;
use App\Model\car_feature;
use App\Model\car_image;

class userController extends Controller
{
    public function getUser(Request $request){

        if($request->has('type')){
            if($request->type=="filter"){
                $filterData = [
                    "name" => $request->has('name') ? $request->name:"0",
                    "email" => $request->has('email')?$request->email:"0",
                    "phone" => $request->has('phone')?$request->phone:"0",
                    "verified" => $request->has('verified')?$request->verified:"no",
                    "userStatus" => $request->has('status')?$request->status:"0",                   
                ];

                $queryString = "";

                foreach ($filterData as $key => $val) {
                    if ($val !== "0" ) {
                        if ($key == "name") {
                            $queryString .= " users.name " . " = " . "'$val'" . " and ";
                        } else if ($key == "email") {
                            $queryString .= " users.email " . " = " . "'$val'" . " and ";
                        } else if ($key == "phone") {
                            $queryString .= " users.phone " . " = " .  (int)$val . " and ";
                        } else if ($key == "userStatus") {
                            $queryString .= " users.userStatus " . " = " . "'$val'"  . " and ";
                        }
                    }
                    if($key=="verified"){
                        if($val !=="no"){
                            $queryString .= " users.verified " . " = " . "'$val'"  . " and ";
                        }
                    }
                }

                $final = trim($queryString);

                $l3 = $final[strlen($final) - 1];
                $l2 = $final[strlen($final) - 2];
                $l1 = $final[strlen($final) - 3];



                if ($l1 . $l2 . $l3 == "and") {
                    $finalQuery = chop($final, "and");
                } else {
                    $finalQuery = $final;
                }

                $data = DB::table('users')
                    ->select([
                        'uid',
                        'name',
                        'email',
                        'phone',
                        'verified',
                        'userStatus',
                        'userType'
                    ])
                    ->whereRaw($finalQuery)
                    ->orderBy('users.date','DESC')
                    ->paginate(30);

            }
        }
        else{
            $data = DB::table('users')
            ->select([
                'uid',
                'name',
                'email',
                'phone',
                'verified',
                'userStatus',
                'userType'
            ])
            ->orderBy('users.date','DESC')
            ->paginate(30);
        }

        


        if($data->total()>0){
            for ($i=0; $i < $data->total(); $i++) {

                if($data[$i]->phone==null){
                    $data[$i]->phone=0;
                }
                

                if( car::where('uid',$data[$i]->uid )->exists() ){
                    $tot=car::where('uid',$data[$i]->uid)->count();
                    $active=car::where([ 'uid'=>$data[$i]->uid, 'status'=> 'active' ] )->count();
                    $sold=car::where([ 'uid'=>$data[$i]->uid, 'status'=> 'sold' ] )->count();

                    $data[$i]->tot=$tot;
                    $data[$i]->active=$active;
                    $data[$i]->sold=$sold;

                }
                else{
                    $data[$i]->tot=0;
                    $data[$i]->active=0;
                    $data[$i]->sold=0;
                }
            }
        }

        return  JsonRes::json(true,$data,"ok");
    }

    public function getUserInfo(Request $request){
        if($request->has('uid')){
            if(user::where('uid',$request->uid)->exists()){
                $info=user::where('uid',$request->uid)->first();
                return  JsonRes::json(true,$info,"ok"); 
            }
        }
        else{
            return  JsonRes::json(false,[],"plz mention uid"); 
        }
    }

    public function updateUser(Request $request){
        $validate=Validator::make($request->all(),[
            'email'=>'required|email',
            'name'=>'required',
            'phone'=>'required',
            'userStatus'=>'required',
            'userType'=>'required',
            'verified'=>'required'
        ]);
        if($validate->fails()){
            return  JsonRes::json(false,[],"validation error."); 
        }
        user::where(['uid' => $request->uid])->update(array(
            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
            'userStatus' => $request->userStatus,
            'userType' => $request->userType,
            'verified'=>$request->verified,
        ));

        if($request->has('password')){
            if($request->password){
                user::where(['uid' => $request->uid])->update(array(
                    'password' => Hash::make($request->password),
                ));
            }
            
        }

        return  JsonRes::json(true,[],"User successfully updated");

    }


    public function deleteUser(Request $request){
        $validate=Validator::make($request->all(),[
            'uid'=>'required',
        ]);

        if($validate->fails()){
            return  JsonRes::json(false,[],"validation error."); 
        }

        if(user::where('uid',$request->uid)->exists()){

            $delUser=user::where('uid',$request->uid)->first();
            $delAuth=user_verify_token::where('uid',$request->uid)->first();

            $userCar=car::where('uid',$request->uid)->get();

            for ($i = 0; $i < count($userCar); $i++) {

                #delete car
                File::delete(public_path("products/{$userCar[$i]->image}"));
                $userCar[$i]->delete();
                #car specification
                $delspec=car_specification::where('cid',$userCar[$i]->cid)->first();
                if($delspec){
                    $delspec->delete();
                }
                #car feature
                $delCarFeature=car_feature::where('cid',$userCar[$i]->cid)->get();
                if($delCarFeature){
                    for($j = 0; $j < count($delCarFeature); $j++){
                        $delCarFeature[$j]->delete();
                    }
                }
                #delete more image
                $delMoreImage=car_image::where('cid',$userCar[$i]->cid)->get();
                if ($delMoreImage) {
                    for ($q = 0; $q < count($delMoreImage); $q++) {
                        File::delete(public_path("products/{$delMoreImage[$q]->images}"));
                        $delMoreImage[$q]->delete();
                    }
                }
                
            }

            $delUser->delete();
            $delAuth->delete();
            
            return  JsonRes::json(true,[],"User successfully deleted."); 
        }
    }
}
