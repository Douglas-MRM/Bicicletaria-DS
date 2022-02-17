<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FuncionariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = date('Y-m-d H:i:s');

        DB::table('funcionarios')->insert([
            [
                'nome' => 'Douglas Jerônimo da Silva',
                'cpf' => '04880719250',
                'rg' => '1497209',
                'cep' => '76908360',
                'rua' => 'Rua Curitiba',
                'bairro' => 'Nova Brasília',
                'numero' => 150,
                'complemento' => 'Casa',
                'email' => 'douglaswwaff@gmail.com',
                'telefone' => '69999356209',
                'cargo_id' => 5,
                'sexo_id' => 2,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ]
        ]);
    }
}
