<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Monitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'M_NAME',
        'M_MAN',
        'M_MOD',
        'M_TYP',
        'M_INV',
        'M_SER',
        'M_RES',
        'M_LOC',
        'M_STA'
    ];

    public function manufacturer():BelongsTo
    {
        return $this->belongsTo(Manufacturer::class, 'M_MAN', 'id');
    }

    public function model():BelongsTo
    {
        return $this->belongsTo(MonitorModel::class, 'M_MOD', 'id');
    }

    public function type():BelongsTo
    {
        return $this->belongsTo(MonitorType::class, 'M_TYP', 'id');
    }

    public function responsible():BelongsTo
    {
        return $this->belongsTo(User::class, 'M_RES', 'id');
    }

    public function location():BelongsTo
    {
        return $this->belongsTo(Location::class, 'M_LOC', 'id');
    }

    public function state():BelongsTo
    {
        return $this->belongsTo(State::class, 'M_STA', 'id');
    }
}
