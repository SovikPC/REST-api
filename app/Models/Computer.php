<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Computer extends Model
{
    use HasFactory;

    protected $fillable = [
      'C_NAME',
      'C_MAN',
      'C_MOD',
      'C_TYP',
      'C_INV',
      'C_SER',
      'C_RES',
      'C_LOC',
      'C_STA'
    ];

    public function manufacturer():BelongsTo
    {
        return $this->belongsTo(Manufacturer::class, 'C_MAN', 'id');
    }

    public function model():BelongsTo
    {
        return $this->belongsTo(ComputerModel::class, 'C_MOD', 'id');
    }

    public function type():BelongsTo
    {
        return $this->belongsTo(ComputerType::class, 'C_TYP', 'id');
    }

    public function responsible():BelongsTo
    {
        return $this->belongsTo(User::class, 'C_RES', 'id');
    }

    public function location():BelongsTo
    {
        return $this->belongsTo(Location::class, 'C_LOC', 'id');
    }

    public function state():BelongsTo
    {
        return $this->belongsTo(State::class, 'C_STA', 'id');
    }
}
