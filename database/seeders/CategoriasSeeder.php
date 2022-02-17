<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = date('Y-m-d H:i:s');

        DB::table('categorias')->insert([
            [
                'nome' => 'Acessórios',
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Bicicletas',
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Câmaras de Ar',
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Pneus',
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Catracas e correntes',
                'created_at' => $datetime,
                'updated_at' => $datetime
            ]
        ]);
    }
}
