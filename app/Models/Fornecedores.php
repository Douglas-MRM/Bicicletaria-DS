<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;
use Facades\App\Support\Formatador;

class Fornecedores extends Model
{
    use HasFactory;

    protected $table = 'fornecedores';
    protected $guarded = [];

    public function estado(): HasOne
    {
        return $this->hasOne(Estados::class, 'id', 'estado_id');
    }

    public function cnpjFormatado()
    {
        return Formatador::cnpj($this->cnpj);
    }

    public function telefoneFormatado()
    {
        return Formatador::telefone($this->telefone);
    }
}
