<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class car_brand extends Model
{
    protected $fillable = [
        'brand_name',
        'date',
    ];
    public $primaryKey = "brand_id";
    public $timestamps = false;
}
