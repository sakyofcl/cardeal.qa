<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class car_image extends Model
{
    protected $fillable = [
        'cid',
        'images',
    ];
    public $primaryKey = "id";
    public $timestamps = false;
}
