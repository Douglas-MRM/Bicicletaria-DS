<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    use HasFactory;

    protected $table = 'funcionarios';
    protected $guarded = [];

    public function sexo(): HasOne
    {
        return $this->hasOne(Sexos::class, 'id', 'sexo_id');
    }

    public function cargo(): HasOne
    {
        return $this->hasOne(Cargos::class, 'id', 'cargo_id');
    }
}
