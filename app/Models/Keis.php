<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Keis extends Model
{
    protected $keyType = 'string';

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

    public function inspections()
    {
        return $this->hasMany(Inspection::class, 'keis_id');
    }
    public function documents()
    {
        return $this->hasMany(Document::class, 'keis_id');
    }
    public function declarant()
    {
        return $this->belongsTo(Partie::class, 'declarant_id');
}
    public function consignee()
    {
        return $this->belongsTo(Partie::class, 'consignee_id');
    }
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }
}



    

