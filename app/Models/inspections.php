<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inspections extends Model
{
    protected $fillable=[
        'id',
        'case_id',
        'type',
        'requested_by',
        'start_ts',
        'location',
        'checks',
   
    ];

}
