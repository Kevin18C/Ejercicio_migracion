<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Camion extends Model
{
    use HasFactory;

    public function transporte(): BelongsTo
    {
        return $this->belongsTo(Transporte::class,'id_transporte');
    }

    public function marca(): HasOne
    {
        return $this->hasOne(Marca::class,'id_marca');
    }



}
