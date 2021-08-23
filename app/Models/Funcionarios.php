<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    use HasFactory;
    protected $table = 'Funcionario';

    protected $guarde = [];
    
    public $timestamps = False;
}
