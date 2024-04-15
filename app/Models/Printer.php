<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Printer extends Model
{
    use HasFactory;

    protected $fillable = [
        'P_NAME',
        'P_MAN',
        'P_MOD',
        'P_TYP',
        'P_INV',
        'P_SER',
        'P_RES',
        'P_LOC',
        'P_STA'
    ];

    public function manufacturer():BelongsTo
    {
        return $this->belongsTo(Manufacturer::class, 'P_MAN', 'id');
    }

    public function model():BelongsTo
    {
        return $this->belongsTo(PrinterModel::class, 'P_MOD', 'id');
    }

    public function type():BelongsTo
    {
        return $this->belongsTo(PrinterType::class, 'P_TYP', 'id');
    }

    public function responsible():BelongsTo
    {
        return $this->belongsTo(User::class, 'P_RES', 'id');
    }

    public function location():BelongsTo
    {
        return $this->belongsTo(Location::class, 'P_LOC', 'id');
    }

    public function state():BelongsTo
    {
        return $this->belongsTo(State::class, 'P_STA', 'id');
    }
}
