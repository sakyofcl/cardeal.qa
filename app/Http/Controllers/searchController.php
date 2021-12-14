<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Model\car_brand;
use App\Model\car_feature;
use App\Model\car_type;
use App\Model\car_image;
use App\Model\car_model;

class searchController extends Controller
{
    public function search(Request $data)
    {
        //return $data;
        $filterData = [
            "brand" => ($data->brand == null || $data->brand == "0") ? "0" : $data->brand,
            "type" => ($data->type == null || $data->type == "0") ? "0" : $data->type,
            "mileage" => ($data->mileage == null || $data->mileage == "0") ? "0" : $data->mileage,
            "fuel_type" => ($data->fuel == null || $data->fuel == "0") ? "0" : $data->fuel,
            "drive_type" => ($data->drive_type == null || $data->drive_type == "0") ? "0" : $data->drive_type,
            "model" => ($data->model == null || $data->model == "0") ? "0" : $data->model,
            "min" => ($data->min == null || $data->min == "0") ? "0" : $data->min,
            "max" => ($data->max == null || $data->max == "0") ? "0" : $data->max,
            "condition" => ($data->condition == null || $data->condition == "0") ? "0" : $data->condition,
            "transmission" => ($data->transmission == null || $data->transmission == "0") ? "0" : $data->transmission,
            
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
                } else if ($key == "condition") {
                    $queryString .= " car_specifications.condition " . " = " . "'$val'" . " and ";
                }
                else if($key == "transmission"){
                    $queryString .= " car_specifications.transmission " . " = " . "'$val'" . " and ";
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

        //return $final;

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
            ->orderByRaw('cars.date DESC')
            ->paginate(30);

        //return $data;
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
}
