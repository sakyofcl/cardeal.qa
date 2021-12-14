<?php

namespace App\Http\Controllers;

use App\Model\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

use App\Model\car;
use App\Model\car_specification;
use App\Model\car_image;
use App\Model\car_feature;
use App\Model\car_type;
use App\Model\car_brand;
use App\Model\car_model;
use App\Model\common_car_feature;
use App\Model\user;

class carsController extends Controller
{

    public function getModelOfBrand(Request $data)
    {
        $model = car_model::where('brand_id', $data->id)->get();
        return response()->json(['model' => $model]);
    }

    public function carSearchController(Request $data)
    {
    }
    public function carIndex()
    {


        $data = DB::table('cars')
            ->select('cars.*', 'car_specifications.*')
            ->join('car_specifications', 'car_specifications.cid', '=', 'cars.cid')
            ->orderByRaw('cars.date DESC')
            ->paginate(30);


        return view(
            'cars',
            [
                'data' => $data,
                'feature' => car_feature::all(),
                'moreimage' => car_image::all(['cid']),
                'type' => car_type::all(),
                'brand' => car_brand::all(),
                'model' => car_model::all()
            ]
        );
    }
    public function filterCar(Request $data)
    {


        $filterData = [
            "brand" => $data->brand,
            "type" => $data->type,
            "mileage" => $data->mileage,
            "fuel_type" => $data->fuel,
            "drive_type" => $data->drive_type,
            "model" => $data->model,
            "min" => ($data->min == null) ? "0" : $data->min,
            "max" => ($data->max == null) ? "0" : $data->max,
        ];


        $queryString = "";


        foreach ($filterData as $key => $val) {
            if ($val !== "0") {
                if ($key == "brand") {
                    $queryString .= " cars.brand " . " = " . "'$val'" . " and ";
                } else if ($key == "model") {
                    $queryString .= " cars.model " . " = " . "'$val'" . " and ";
                } else if ($key == "type") {
                    $queryString .= " car_specifications.type " . " = " . "'$val'" . " and ";
                } else if ($key == "mileage") {
                    $queryString .= " car_specifications.mileage " . " >= " . (int)$val . " and ";
                } else if ($key == "fuel_type") {
                    $queryString .= " car_specifications.fuel_type " . " = " . "'$val'" . " and ";
                } else if ($key == "drive_type") {
                    $queryString .= " car_specifications.drive_type " . " = " . "'$val'" . " and ";
                }
            }
        }

        if ($filterData['min'] != "0" && $filterData['max'] != "0") {
            $queryString .= " cars.price " . " >= " . (int)$filterData['min'] . " and " . " cars.price " . " <= " . (int)$filterData['max'];
        } else if ($filterData['min'] == "0" && $filterData['max'] != "0") {
            $queryString .= " cars.price " . " <= " . (int)$filterData['max'] . " and ";
        } else if ($filterData['min'] != "0" && $filterData['max'] == "0") {
            $queryString .= " cars.price " . " >= " . (int)$filterData['min'] . " and ";
        }


        if ($queryString == "") {
            return back();
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


        $data = DB::table('cars')
            ->select('cars.*', 'car_specifications.*')
            ->join('car_specifications', 'car_specifications.cid', '=', 'cars.cid')
            ->whereRaw($finalQuery)
            ->paginate(20);



        return view(
            'cars',
            [
                'data' => $data,
                'feature' => car_feature::all(),
                'moreimage' => car_image::all(['cid']),
                'type' => car_type::all(),
                'brand' => car_brand::all(),
                'model' => car_model::all()
            ]
        );
    }
    public function carUpdate(Request $data)
    {
        
        
        if (session()->has('signature') || $data->has('token') ) {
            $type="user";
            if( $data->has('token') && $data->has('uid') && $data->has('cid') ){
                if(admin::where('token',$data->token)->exists()){

                    if(user::where('uid', $data->uid)->exists()){

                        if(car::where( ['uid'=>$data->uid,'cid'=>$data->cid] )->exists()){
                            $type="admin";
                            session()->put('token', $data->token);

                        }
                        else{
                            $type="user";
                        }
                        
                    }
                    else{
                        $type="user";
                    }
                    
                }
                else{
                    $type="user";
                }
            }
            

            if($type=="user"){
                if (!user::where('uid', session()->get('signature'))->exists()){
                    return redirect("/auth/register");
                }
            }

            
                $data = DB::table('cars')
                    ->select('cars.*', 'car_specifications.*')
                    ->join('car_specifications', 'car_specifications.cid', '=', 'cars.cid')
                    ->where("cars.cid", $data->cid)
                    ->first();
                $model=car_model::where('brand_id',$data->brand)->get();
                $moreImage=car_image::where('cid',$data->cid)->get(['images']);
                $finalImageString="";
                $finalFeatureString="";
                $car_feature=car_feature::where('cid',$data->cid)->get(['feature']);

                if(count($moreImage)>0){
                    foreach($moreImage as $moreImageItem){
                        $finalImageString.=$moreImageItem->images.",";
                    }
                }
                if(count($car_feature)>0){
                    foreach($car_feature as $car_featureItem){
                        $finalFeatureString.=$car_featureItem->feature.",";
                    }
                }

            
                
                return view(
                    'update-car',
                    [
                        'data' => $data,
                        'brand' => car_brand::all(),
                        'type' => car_type::all(),
                        'feature' => common_car_feature::all(),
                        'model' => $model,
                        'more_image'=>$finalImageString,
                        'car_feature'=>$car_feature,
                        'car_feature_default'=>$finalFeatureString
                    ]
                );
            
        } 
        else {
            return redirect('/auth/login');
        }
    }
    public function cars()
    {
        return view('cars');
    }
    public function carInfo(Request $data)
    {
        $enCodeFile = car_specification::where('cid', $data->v)->first(['attachment']);
        $deCode = base64_decode($enCodeFile->attachment);

        $pdf = fopen(public_path('/file/file.pdf'), 'w');
        fwrite($pdf, $deCode);
        fclose($pdf);

        $carBrand = car::where('cid', $data->v)->first(['brand']);

        $relatedCar = DB::table('cars')
            ->join('car_specifications', 'car_specifications.cid', '=', 'cars.cid')
            ->where("cars.brand", $carBrand->brand)
            ->take(5)
            ->get(['cars.cid', 'cars.name', 'cars.price', 'cars.image', 'car_specifications.year', 'car_specifications.condition', 'car_specifications.mileage','car_specifications.transmission','cars.status']);


        $final = DB::table('cars')
            ->select('cars.*', 'car_specifications.*')
            ->join('car_specifications', 'car_specifications.cid', '=', 'cars.cid')
            ->where("cars.cid", $data->v)
            ->first();

        $moreImage = car_image::where('cid', $data->v)->get();
        $all_more_image=car_image::all();
        return view(
            'car-view',
            [
                'data' => $final,
                'feature' => car_feature::where('cid', $data->v)->get(),
                'type' => car_type::all(),
                'brand' => car_brand::all(),
                'model' => car_model::all(),
                'related_car' => $relatedCar,
                'more_image' => $moreImage,
                'all_more_image'=>$all_more_image
            ]
        );
    }

    public function carAddIndex()
    {


        return view(
            'add-car',
            [
                'data' => car::all(),
                'brand' => car_brand::all(),
                'type' => car_type::all(),
                'feature' => common_car_feature::all()
            ]
        );
    }


    public function carSave(Request $data)
    {

        
       # return $data->all();
        
        
        if (session()->has('signature')) {
            if (user::where('uid', session()->get('signature'))->exists()) {

                if($data->hasFile('more_images')){
                    $thumb=false;
                    $moreimage=[];

                    if ($files = $data->file('more_images')) {
                        for ($i = 0; $i < count($files); $i++) {
                           if($i==0){
                            $thumb=$files[$i];
                           }
                           else{
                            $moreimage[]=$files[$i];
                           }
                        }
                    }
                }

                else{
                    return back();
                }
                $negotiable=0;

                if($data->has('negotiable')){
                    $negotiable=1;
                }
                
               
            
                $cars = new car;

                #store car main data
                $cars->uid = session()->get('signature');
                $cars->name = $data->name?$data->name:"0";
                $cars->price =$data->price!=null?(int)$data->price:0;
                $cars->brand = $data->brand;
                $cars->model = $data->model;
                $cars->description = $data->discription!=null?$data->discription:"0";
                $cars->negotiable=$negotiable;
                #thub immage name
                if($thumb){
                    $storepath = public_path('./products');
                    $imageName = time() . '.' . $thumb->getClientOriginalExtension();
                    #image move 
                    $thumb->move($storepath,  $imageName);
                    $cars->image=$imageName;
                }    
                
                $cars->contact = $data->contact!=null?$data->contact:"0";
                $cars->whatsapp = $data->whatsapp!=null?$data->whatsapp:"0";
                $cars->contact_name=$data->contact_name!=null?$data->contact_name:"0";
                

                if ($cars->save()) {


                    $car_spec = new car_specification;
                    #car specification
                    #optional
                    $car_spec->condition = $data->condition;
                    $car_spec->type = $data->type;
                    $car_spec->year = $data->year;
                    $car_spec->drive_type = $data->drive_type;
                    $car_spec->transmission = $data->transmission;
                    $car_spec->fuel_type = $data->fuel_type;
                    $car_spec->fuel_capacity=$data->fuel_capacity!=null?$data->fuel_capacity:"0";
                    $car_spec->mileage =$data->mileage!=null?(int)$data->mileage:0;
                    $car_spec->engine_size =$data->engine_size!=null?(int) $data->engine_size:0;
                    $car_spec->cylinders = (int)$data->cylinders;
                    $car_spec->color = $data->color!=null?$data->color:"0";
                    $car_spec->door = (int) $data->door;
                    $car_spec->vdo_link = $data->vdo_link;
                    $car_spec->location = $data->location;


                    if($data->hasFile('attachment')){
                        $car_spec->attachment = base64_encode(file_get_contents($data->file('attachment')));
                    }
                    else{
                        $car_spec->attachment = null;
                    }
                    


                    #must
                    $car_id = car::orderBy('cid', 'DESC')->first();
                    $car_spec->cid = $car_id->cid;
                    if ($car_spec->save()) {

                        if ($moreimage) {
                            $storepath = public_path('./products');
                            for ($i = 0; $i < count($moreimage); $i++) {
                                $imageName =time().$i. '.' . $moreimage[$i]->getClientOriginalExtension();
                                car_image::create([
                                    'cid' => $car_id->cid, 'images' => $imageName
                                ]);
                                $moreimage[$i]->move($storepath,  $imageName);
                            }
                        }

                        #add car feature
                        if ($data->feature != null && $data->feature != "0") {
                            foreach (explode(",", substr($data->feature, 0, -1)) as $value) {
                                car_feature::create([
                                    'cid' => $car_id->cid, 'feature' => $value
                                ]);
                            }
                        }


                        Session::flash('productSave', 'ok');
                        return back();
                    }
                }
            } else {
                return redirect("/auth/register");
            }
        } else {
            return redirect('/auth/login');
        }
    }


    public function carUpdateSave(Request $request){
        
        
        if (session()->has('signature') || session()->has('token') ) {
            $type="user";
            if(session()->has('token')){
                $type="admin"; 
            }

            if($type=="user"){
                if (!user::where('uid', session()->get('signature'))->exists()){
                    return redirect("/auth/register");
                }
            }
            

                

                

                
                #upadte car model
                car::where('cid',$request->cid)->update(array(

                    'name' => $request->name!="0"?$request->name:"0",
                    'price' => $request->price!=0 || $request->price!=null?$request->price:0,
                    'brand' => $request->brand!="0"?$request->brand:0,
                    'model'=>$request->model!="0"?$request->model:0,
                    'description'=>$request->discription!="0" || $request->discription!=null ?$request->discription:"0",
                    'negotiable'=> $request->has('negotiable')?"1":"0",
                    'contact'=>$request->contact!="0" || $request->contact!=null ?$request->contact:"0",
                    'whatsapp'=>$request->whatsapp!="0" || $request->whatsapp!=null ?$request->whatsapp:"0",
                    'contact_name'=>$request->contact_name!="0" || $request->contact_name!=null ?$request->contact_name:"0"
                ));

                #upadte specification model
                car_specification::where('cid',$request->cid)->update(array(

                    'condition' => $request->condition,
                    'type' => $request->type!="0" || $request->type!=null ?$request->type:"0",
                    'year' => $request->year!="0" || $request->year!=null ?$request->year:"0",
                    'drive_type'=>$request->drive_type!="0" || $request->drive_type!=null?$request->drive_type:"0",
                    'transmission'=>$request->transmission!="0" || $request->transmission!=null ?$request->transmission:"0",
                    'fuel_type'=> $request->fuel_type!="0" || $request->fuel_type!=null ?$request->fuel_type:"0",
                    'fuel_capacity'=>$request->fuel_capacity!="0" || $request->fuel_capacity!=null ?$request->fuel_capacity:"0",
                    'mileage'=>$request->mileage!="0" || $request->mileage!=null?(int)$request->mileage:0,
                    'engine_size'=>$request->engine_size!="0" || $request->engine_size!=null?(int)$request->engine_size:0,
                    'cylinders'=> $request->cylinders!="0" || $request->cylinders!=null?(int)$request->cylinders:0,
                    'color'=>$request->color!="0" || $request->color!=null ?$request->color:"0",
                    'door'=>$request->door!="0" || $request->door!=null ?(int)$request->door:0,
                    'vdo_link'=>$request->vdo_link!="0" || $request->vdo_link!=null ?$request->vdo_link:"0",
                    'location'=>$request->location!="0" || $request->location!=null ?$request->location:"0"

                ));

                #update car images

                


                

                    #modified previus imaage
                    if($request->prev_image){
                        
                        
                        $prevImg=explode(',',$request->prev_image);
                        if(count($prevImg)>0){
                            
                                #delete last ,
                                array_pop($prevImg);
                                
                                #call the db more image;
                                $dbImageArray=[];
                                $dbImage=car_image::where('cid', $request->cid)->get(['images']);

                                foreach($dbImage as $dbImageItem){
                                    $dbImageArray[]=$dbImageItem->images;
                                }

                                $delItemData=array_diff($dbImageArray,$prevImg);//compare more image 


                                #delete previous image
                                foreach($delItemData as $delItemDataItem){
                                    $delitem=car_image::where('images',$delItemDataItem)->first();
                                    if($delitem){
                                        File::delete(public_path("products/{$delitem->images}"));
                                        $delitem->delete();
                                    }
                                    
                                }
                                
        
                        }
                        
                        
                        
                        
                    }
                    else{
                        
                        $collection = car_image::where('cid', $request->cid)->get();

                        for ($i = 0; $i < count($collection); $i++) {
                            $collection[$i]->delete();
                            File::delete(public_path("products/{$collection[$i]->images}"));
                        }
                        
                    }
                    
                    $thumb=false;
                    $moreimage=[];

                    #check if more images upload
                    if($request->hasFile('more_images')){
                        
                        if ($files = $request->file('more_images')) {
                            for ($i = 0; $i < count($files); $i++) {
                                if($i==0 &&  $request->prev_image==null ){
                                    $thumb=$files[$i];
                                }
                                else{
                                    $moreimage[]=$files[$i];
                                }
                            }
                        }

                        #store more image
                        if ($moreimage) {
                            $storepath = public_path('./products');
                            for ($i = 0; $i < count($moreimage); $i++) {
                                $imageName =time().$i. '.' . $moreimage[$i]->getClientOriginalExtension();
                                car_image::create([
                                    'cid' => $request->cid, 'images' => $imageName
                                ]);
                                $moreimage[$i]->move($storepath,  $imageName);
                            }
                        }

                        #set thumb
                        if($thumb){

                            #del previus thum
                            $delthum = car::where('cid', $request->cid)->first();
                            File::delete(public_path("products/{$delthum->image}"));  

                            $storepath = public_path('./products');
                            $imageName = time() . '.' . $thumb->getClientOriginalExtension();
                            #image move 
                            $thumb->move($storepath,  $imageName);

                            #update name
                            car::where('cid',$request->cid)->update(array(
                                'image'=>$imageName
                            ));

                                                 
                        }
                    }

                    #update feature
                    $delFeaturesItem = car_feature::where('cid', $request->cid)->get();
                    $updateFeature=[];
                    $currentFeature=[];
                
                    #push curent db into currentFeature array
                    for ($i = 0; $i < count($delFeaturesItem); $i++) {
                        $currentFeature[]=strtolower($delFeaturesItem[$i]->feature);
                    }
                
                    if($request->feature !=null){
                        foreach (explode(",", substr($request->feature, 0, -1)) as $value) {
                            $updateFeature[]=strtolower($value);
                        }
                         
                        if(count($updateFeature) >= count($currentFeature) ){
                            $updatedItem=array_diff($updateFeature,$currentFeature);
                        }
                        else{
                            $updatedItem=array_diff($currentFeature,$updateFeature);
                        }
                       
                        
                        
                        if(count($updatedItem)>0){
                                        
                            foreach( $updatedItem as $updatedItemData){
                                if(car_feature::where(['cid'=>$request->cid,'feature'=>$updatedItemData])->exists()){
                                    $delAlreadyHaveData=car_feature::where(['cid'=>$request->cid,'feature'=>$updatedItemData])->first();
                                    $delAlreadyHaveData->delete();                           
                                }
                                else{
                                    car_feature::create([
                                        'cid' =>$request->cid, 'feature' =>$updatedItemData
                                    ]);
                                }
                                            
                            }
                        }
                        
                        
                                
                    }
                    else{
                        
                        for ($i = 0; $i < count($delFeaturesItem); $i++) {
                            $delFeaturesItem[$i]->delete();
                        }
                        
                    }


                    #store attachedment
                    if($request->isHaveAttachment=="0"){
                        car_specification::where('cid',$request->cid)->update(array(
                            'attachment'=>null
                        )); 
                    }
                    else{
                        if($request->has('attachment')){
                            if($request->hasFile('attachment')){
                                
                                car_specification::where('cid',$request->cid)->update(array(
                                    'attachment'=>base64_encode(file_get_contents($request->file('attachment')))
                                )); 
                                
                            }
                        }
                    }
                    
                
                    
                if($type=="admin"){
                    return redirect('/car/info?v='.$request->cid);   
                }
                return redirect('/user/profile');


            
        }
        
    }
}
