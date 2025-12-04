<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    protected $fillable=[
        'id',
        'ser_id',
        'ip_address',
        'user_agent',
        'payload',
       'last_activity',
    ];
}
