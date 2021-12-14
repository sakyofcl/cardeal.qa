<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Model\car_brand;
use App\Model\common_car_feature;
use App\Model\car_model;
use App\Model\car_type;
use App\Lib\JsonRes;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// ---------------- [ import controller ] -----------------\\
use App\Http\Controllers\carsController;
use App\Http\Controllers\api\admin\AdsController;
use App\Http\Controllers\api\admin\AuthController;
use App\Http\Controllers\api\admin\userController;
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/car/model', [carsController::class, 'getModelOfBrand']);

Route::get('/ads',[AdsController::class,'getAds']);
Route::get('/user',[userController::class,'getUser']);
Route::get('/admin/change-car-status',[AdsController::class,'changeCarStatusAdmin']);
Route::post('/admin/delete/ads',[AdsController::class,'AdminDeleteAds']);

Route::post('/auth/admin/login',[AuthController::class,'authLogin']);

Route::post('/admin/create/user',[AuthController::class,'createUserSave']);

Route::get('/admin/user/info',[userController::class,'getUserInfo']);
Route::post('/admin/user/update',[userController::class,'updateUser']);
Route::get('/admin/user/delete',[userController::class,'deleteUser']);


#test


Route::post('admin/brand/create',function(Request $request){
    $data=explode(',',$request->brand);
    foreach($data as $dataItem){
        car_brand::create([
            'brand_name'=>$dataItem
        ]);
    }
    return  JsonRes::json(true,[],"ok");
});


Route::post('admin/feature/create',function(Request $request){

    $feature=new common_car_feature;
    $feature->feature_name=$request->feature;

    if($feature->save()){
        return  JsonRes::json(true,[],"ok");
    }
    
});

Route::get('/admin/car/feature',function(){
    $feature=common_car_feature::all();
    return  JsonRes::json(true,$feature,"ok");
});

Route::get('admin/car/brand',function(){
    $brand=car_brand::all();
    return  JsonRes::json(true,$brand,"ok");
});



Route::post('admin/model/create',function(Request $request){

    $saveModel=new car_model;
    $saveModel->brand_id= $request->brand_id;
    $saveModel->fuel_capacity=(int) $request->fuel_capacity;
    $saveModel->fuel_type= $request->fuel_type;
    $saveModel->model_name= $request->model_name;
    $saveModel->transmission= $request->transmission;
    $saveModel->type=(int)$request->type;
    $saveModel->door=(int)$request->door;
    $saveModel->engine_size=(int)$request->engine_size;
    $saveModel->drive_type=$request->drive_type;

    if($saveModel->save()){
        return  JsonRes::json(true,[],"ok");
    }
    
});

Route::get('/admin/car/bodytype',function(){
    $type=car_type::all();
    return  JsonRes::json(true,$type,"ok");
});