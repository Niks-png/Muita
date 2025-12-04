<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicales extends Model
{
    protected $fillable=[
        'id',
        'plate_no',
        'country',
        'model',
        'vin',
   
    ];
}
