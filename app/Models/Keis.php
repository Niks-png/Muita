<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keis extends Model
{
 protected $fillable = [
            'id',
            'external_ref',
            'status',
            'priority',
            'arrival_ts',
            'checkpoint_id',
            'origin_country',
            'destination_country',
            'risk_flags',
            'declarant_id',
            'consignee_id',
            'vehicle_id',
 ];
}
