<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class car_type extends Model
{
    protected $fillable = [
        'type_name',
        'date',
    ];
    public $primaryKey = "type_id";
    public $timestamps = false;
}
