<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    protected $fillable = [
        'uid',
        'name',
        'price',
        'brand',
        'model',
        'description',
        'image',
        'date',
        'contact',
        'contact_name',
        "status",
        "negotiable",
        "whatsapp"
    ];
    public $primaryKey = "cid";
    public $timestamps = false;
}
