<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class car_model extends Model
{
    protected $fillable = [
        'model_name',
        'brand_id',
        'date',
        'type',
        'drive_type',
        'engine_size',
        'transmission',
        'fuel_type',
        'mileage',
        'door',
    ];
    public $primaryKey = "model_id";
    public $timestamps = false;
}
