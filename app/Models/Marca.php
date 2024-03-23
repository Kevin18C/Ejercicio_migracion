<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Marca extends Model
{
    use HasFactory;

    public function camion(): HasOne
    {
        return $this->hasOne(Camion::class,'id_marca');
    }

}
