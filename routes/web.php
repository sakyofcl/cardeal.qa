<?php


use Illuminate\Support\Facades\Route;
use App\Model\car_brand;
use App\Model\car_model;

// ---------------- [ import controller ] -----------------\\
use App\Http\Controllers\carsController;
use App\Http\Controllers\authController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\userController;
use App\Model\car_feature;
use App\Model\common_car_feature;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ----------------------- [ HOME CONTROLLER ROUTES ] ------------------------------- \\
Route::get('/', [homeController::class, 'index']);



// ----------------------- [ AUTH CONTROLLER ROUTES ] ------------------------------- \\

// ------- [ GET ] ------- \\
Route::get('/auth/login', [authController::class, 'userLoginIndex']);
Route::get('/auth/register', [authController::class, 'userRegisterIndex']);
Route::get('/auth/register/thanks', [authController::class, 'userRegisterThanks']);
Route::get('/auth/user/verify', [authController::class, 'userVerify']);
Route::get("/auth/user/logout", [authController::class, 'userLogout']);

// ------- [ POST ] ------- \\
Route::post('/auth/register/store', [authController::class, 'userRegisterStore']);
Route::post('/auth/login/check', [authController::class, 'userLoginCheck']);

// ----------------------- [ CAR CONTROLLER ROUTES ] ------------------------------- \\

// ------- [ GET ] ------- \\
Route::get('/search', [carsController::class, 'carSearchController']);
Route::get('/car', [carsController::class, 'carIndex']);
Route::get('/car/info', [carsController::class, 'carInfo']);
Route::get('/car/add', [carsController::class, 'carAddIndex']);
Route::get('/car/update', [carsController::class, 'carUpdate']);
Route::post('/car/update/save', [carsController::class, 'carUpdateSave']);

// ------- [ POST ] ------- \\
Route::post('/car/save', [carsController::class, 'carSave']);
Route::post('/filter/car', [carsController::class, 'filterCar']);



// ----------------------- [ CONTACT CONTROLLER ROUTES ] ------------------------------- \\
Route::post('/contact/seller', [contactController::class, 'sendMail']);


// ----------------------- [ SEARCH CONTROLLER ROUTES ] ------------------------------- \\
Route::get("/search", [searchController::class, 'search']);

// ----------------------- [ USER CONTROLLER ROUTES ] ------------------------------- \\
// ------- [ GET ] ------- \\
Route::get("/user/profile", [userController::class, 'useProfile']);
Route::get("/user/delete/car/", [userController::class, 'userDeleteCar']);
Route::get("/profile/car/status-change",[userController::class, 'UpdateCarStatus']);


Route::get('/test',function(){
    $brand=car_brand::all();
    return view('add-model',['brand'=>$brand]);
});

Route::post('/brand/create',function(Request $request){
    $data=explode(',',$request->brand);
    foreach($data as $dataItem){
        car_brand::create([
            'brand_name'=>$dataItem
        ]);
    }
    return back();
});

Route::post('/model/create',function(Request $request){

    $data=explode(',',$request->model);
    foreach($data as $dataItem){
        car_model::create([
            'model_name'=>$dataItem,
            'brand_id'=>$request->brand
        ]);
    }
    return back();
    
    
});

Route::post('/feature/create',function(Request $request){

    $data=explode(',',$request->feature);
    foreach($data as $dataItem){
        common_car_feature::create([
            'feature_name'=>$dataItem
        ]);
    }
    return back();
    
});

Route::get('/blog',function(){
    return view('blog');
});




