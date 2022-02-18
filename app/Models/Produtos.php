<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $table = 'produtos';
    protected $guarded = [];

    protected $attributes = [
        'ativo' => true
    ];

    public function fornecedor(): HasOne
    {
        return $this->hasOne(Fornecedores::class, 'id', 'fornecedor_id');
    }

    public function categoria(): HasOne
    {
        return $this->hasOne(Categorias::class, 'id', 'categoria_id');
    }
}
