<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model

{
    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'keis_id',
        'filename',
        'mime_type',
        'category',
        'pages',
        'uploaded_by',
    ];
}
