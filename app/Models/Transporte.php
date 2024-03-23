<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transporte extends Model
{
    use HasFactory;

    public function camion(): HasMany
    {
        return $this->hasMany(Camion::class,'id_transporte');
    }

}
