<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NetworkEquipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'NE_NAME',
        'NE_MAN',
        'NE_MOD',
        'NE_TYP',
        'NE_INV',
        'NE_SER',
        'NE_RES',
        'NE_LOC',
        'NE_STA'
    ];

    public function manufacturer():BelongsTo
    {
        return $this->belongsTo(Manufacturer::class, 'NE_MAN', 'id');
    }

    public function model():BelongsTo
    {
        return $this->belongsTo(NetworkEquipmentModel::class, 'NE_MOD', 'id');
    }

    public function type():BelongsTo
    {
        return $this->belongsTo(NetworkEquipmentType::class, 'NE_TYP', 'id');
    }

    public function responsible():BelongsTo
    {
        return $this->belongsTo(User::class, 'NE_RES', 'id');
    }

    public function location():BelongsTo
    {
        return $this->belongsTo(Location::class, 'NE_LOC', 'id');
    }

    public function state():BelongsTo
    {
        return $this->belongsTo(State::class, 'NE_STA', 'id');
    }

}
