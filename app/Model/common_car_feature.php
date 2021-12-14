<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class common_car_feature extends Model
{
    protected $fillable = [
        'feature_name',
    ];
    public $primaryKey = "feature_id";
    public $timestamps = false;
}
