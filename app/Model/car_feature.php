<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class car_feature extends Model
{
    protected $fillable = [
        'cid',
        'feature',
    ];
    public $primaryKey = "id";
    public $timestamps = false;
}
