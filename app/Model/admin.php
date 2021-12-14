<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $fillable=[
        'admin_id',
        'name',
        'email',
        'password',
        'token',
        'date'
    ];
    public $primaryKey="admin_id";
    public $timestamps=false;
}
