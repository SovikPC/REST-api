<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComputerModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'CM_NAME',
    ];
}
