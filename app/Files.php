<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    //
    protected $fillable = [
        'name', 'type', 'size', 'extension'
    ];
}
