<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class car_specification extends Model
{
    protected $fillable = [
        'condition',
        'type',
        'year',
        'drive_type',
        'transmission',
        'fuel_type',
        'mileage',
        'engine_size',
        'cylinders',
        'color',
        'door',
        'vdo_link',
        'location',
        'cid',
        'attachment',
        'fuel_capacity'
    ];
    public $primaryKey = "id";
    public $timestamps = false;
}
