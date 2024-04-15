<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonitorModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'MM_NAME',
    ];
}
