<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = date('Y-m-d H:i:s');

        DB::table('cargos')->insert([
            [
                'nome' => 'Balconista',
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Estagiário',
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Mêcanico de Bicicleta',
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Ajudante Geral',
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Gerente de TI',
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Gerente Contábil',
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Gerente Financeiro',
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Gerente Administrativo',
                'created_at' => $datetime,
                'updated_at' => $datetime
            ]
        ]);
    }
}
