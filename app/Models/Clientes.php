<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $guarded = [];

    protected $dates = [
        'data_nascimento'
    ];

    public function sexo(): HasOne
    {
        return $this->hasOne(Sexos::class, 'id', 'sexo_id');
    }
}
