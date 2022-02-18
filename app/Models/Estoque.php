<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    use HasFactory;

    protected $table = 'estoque';
    protected $guarded = [];

    public function produto(): HasOne
    {
        return $this->hasOne(Produtos::class, 'id', 'produto_id');
    }
}
