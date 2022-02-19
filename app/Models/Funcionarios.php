<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;
use Facades\App\Support\Formatador;

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

    public function cpfFormatado(): string
    {
        return $this->cpf = Formatador::cpf($this->cpf);
    }

    public function cepFormatado(): string
    {
        return $this->cep = Formatador::cep($this->cep);
    }

    public function telefoneFormatado(): string
    {
        return Formatador::telefone($this->telefone);
    }
}
