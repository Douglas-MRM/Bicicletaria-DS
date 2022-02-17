<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ServicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = date('Y-m-d H:i:s');

        DB::table('servicos')->insert([
            [
                'nome' => 'Ajustar corrente',
                'tempo' => '00:30',
                'preco' => 25,
                'descricao' => 'Realização de ajuste na corrente',
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Alinhamento de Roda',
                'tempo' => '01:15',
                'preco' => 100,
                'descricao' => 'Realização do alinhamento da roda',
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Centragem',
                'tempo' => '00:45',
                'preco' => 50,
                'descricao' => 'Realização da centragem da roda',
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Meia revisão',
                'tempo' => '01:00',
                'preco' => 120,
                'descricao' => 'Realização da meia revisão',
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Regulagem de Câmbio',
                'tempo' => '00:40',
                'preco' => 70,
                'descricao' => 'Regulagem do câmbio',
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Revisão da Suspensão',
                'tempo' => '00:30',
                'preco' => 45,
                'descricao' => 'Revisão da suspensão',
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Revisão completa',
                'tempo' => '01:20',
                'preco' => 150,
                'descricao' => 'Revisão completa',
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Remendos',
                'tempo' => '00:40',
                'preco' => 75,
                'descricao' => 'Remendos',
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Regulagem de Freio',
                'tempo' => '00:40',
                'preco' => 160,
                'descricao' => 'Regulagem de Freio',
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ]
        ]);
    }
}
