<?php

namespace App\Support;

class Formatador
{
    public function cnpj(string $cnpj): string
    {
        return substr($cnpj, 0, 2) . "." .
               substr($cnpj, 2, 3) . "." .
               substr($cnpj, 5, 3) . "/" .
               substr($cnpj, 8, 4) . "-" .
               substr($cnpj, 12, 2);
    }

    public function cpf(string $cpf): string
    {
        return substr($cpf, 0, 3) . "." .
               substr($cpf, 3, 3) . "." .
               substr($cpf, 6, 3) . "-" .
               substr($cpf, 9, 2);
    }
    
    public function telefone(string $telefone): string
    {
        return '(' . substr($telefone, 0, 2) . ") " .
                     substr($telefone, 2, 1) . "." .
                     substr($telefone, 3, 4) . "-" .
                     substr($telefone, 7, 4);
    }

    public function cep(string $cep): string
    {
        return substr($cep, 0, 5) . "-" .
               substr($cep, 5, 3);
    }

    public function somenteNumeros($string): string
    {
        return preg_replace('/\D/', '', $string);
    }
}