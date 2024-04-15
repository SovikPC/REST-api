<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NetworkEquipmentType extends Model
{
    use HasFactory;

    protected $fillable = [
        'NET_NAME',
    ];
}
