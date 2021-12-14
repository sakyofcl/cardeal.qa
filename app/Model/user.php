<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'image',
        'role',
        'date',
        'verified',
        'password',
        'userStatus',
        'userType'
    ];
    public $primaryKey = "uid";
    public $timestamps = false;
}
