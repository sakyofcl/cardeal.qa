<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
//Lib
use App\Lib\JsonRes;

//Model
use App\Model\car;
use App\Model\car_brand;
use App\Model\car_model;
use App\Model\admin;
use App\Model\car_specification;
use App\Model\car_feature;
use App\Model\car_image;
use App\Model\user;
class AdsController extends Controller
{
    public function getAds(Request $request){

        
        $qury="status != 'pending' ";

        if($request->has('status')){
            if($request->status=="pending"){
                $qury="status = 'pending' ";
            }
        }
        

        $data = DB::table('cars')
            ->select([
                'cid',
                'model',
                'brand',
                'status',
                'date',
                'uid',
            ])
            ->whereRaw($qury)
            ->orderBy('cars.date','DESC')
            ->paginate(30);

        
        
        
        if($data->total()>0){
            for ($i=0; $i < $data->total() ; $i++) {
               
                if(car_brand::where('brand_id',$data[$i]->brand)->exists()){
                    $brand=car_brand::where('brand_id',$data[$i]->brand)->first(['brand_name']);
                    $data[$i]->brand=$brand->brand_name;
                }
                else{
                    $data[$i]->brand="0";
                }

                if(car_model::where('model_id',$data[$i]->model)->exists()){
                    $model=car_model::where('model_id',$data[$i]->model)->first(['model_name']);
                    $data[$i]->model=$model->model_name;
                }
                else{
                    $data[$i]->model="0";
                }

                
                if(user::where('uid',$data[$i]->uid)->exists()){
                    $userName=user::where('uid',$data[$i]->uid)->first('name');
                    $data[$i]->userName=$userName->name;
                }
                else{
                    $data[$i]->userName="0";
                }
                
            }
        }
        
        

        return  JsonRes::json(true,$data,"ok");
    }

    public function changeCarStatusAdmin(Request $request){
        
        if (isset($request->cid) && isset($request->status) &&  isset($request->token) ) {
            if ($request->status == "sold" || $request->status == "active" || $request->status == "deleted" || $request->status == "pending" || $request->status == "rejected" ) {

                if(admin::where('token',$request->token)->exists()){
                    car::where(['cid' => $request->cid])->update(array(
                        'status' => $request->status,
                    ));
                    return  JsonRes::json(true,[],"Status changed");
                }
                else{
                    return  JsonRes::json(false,[],"Not autherized.");
                }
                
                
            }
            else{
                return  JsonRes::json(false,[],"Wrong status");
            }
            
        }
        else{
            return  JsonRes::json(false,[],"Ender currect credential");
        }
    }

    public function AdminDeleteAds(Request $request){
        if($request->has('cid') && $request->has('token') ){
            
            if(admin::where('token',$request->token)->exists()){

                if(car::where('cid',$request->cid)->exists()){
                    #delete car & specification
                    $car = car::where('cid',$request->cid)->first();
                    $car_spec=car_specification::where('cid',$request->cid)->first();
                    $car->delete();
                    File::delete(public_path("products/{$car->image}"));
                    $car_spec->delete();

                    #delete car feature
                    $feature = car_feature::where('cid',$request->cid)->get();
                    for ($i = 0; $i < count($feature); $i++) {
                        $feature[$i]->delete();
                    }
                    #delet car images
                    $car_image=car_image::where('cid',$request->cid)->get();
                    for ($i = 0; $i < count($car_image); $i++) {
                        $car_image[$i]->delete();
                        File::delete(public_path("products/{$car_image[$i]->images}"));
                    }

                    return  JsonRes::json(true,[],"Successfully Car Deleted.");
                }
                else{
                    return  JsonRes::json(false,[],"Not Found This Car.");
                }
                
            }
            else{
                return  JsonRes::json(false,[],"Not autherized.");
            }
        }
        else{
            return  JsonRes::json(false,[],"Ender currect credential");
        }
        
    }
}
