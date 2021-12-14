<?php
namespace App\Lib;
use Illuminate\Http\JsonResponse;
class JsonRes{

    public static function json($status=false,$data=[],$message="!"){
        $res=new JsonResponse();
        return $res->setData(['status'=>$status,'data'=>$data,'message'=>$message]);
    }

}


