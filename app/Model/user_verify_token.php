<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user_verify_token extends Model
{
    protected $fillable = [
        'token',
        'expired',
        'uid',
        'date',
    ];
    public $primaryKey = "token_id";
    public $timestamps = false;
}
