<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;



//call model
use App\Model\car;
use App\Model\car_brand;
use App\Model\car_model;
use App\Model\car_image;
class homeController extends Controller
{
    public function index()
    {
        $brand = car_brand::all();
        $model = car_model::all();
        session()->put('brand', $brand);
        session()->put('model', $model);

        $recentCarNew = DB::table('cars')
            ->select('cars.*', 'car_specifications.*')
            ->join('car_specifications', 'car_specifications.cid', '=', 'cars.cid')
            ->whereRaw("car_specifications.condition='new'")
            ->orderBy("date", "DESC")
            ->take(20)
            ->get();

        $recentCarUsed = DB::table('cars')
            ->select('cars.*', 'car_specifications.*')
            ->join('car_specifications', 'car_specifications.cid', '=', 'cars.cid')
            ->whereRaw("car_specifications.condition='used'")
            ->orderBy("date", "DESC")
            ->take(20)
            ->get();


        return view(
            'home',
            [
                'brand' => $brand,
                "recentCarNew" => $recentCarNew,
                "recentCarUsed" => $recentCarUsed,
                'moreimage' => car_image::all(['cid'])

            ]
        );
    }

    public function demo(Request $data)
    {
        return $data;
    }
}
