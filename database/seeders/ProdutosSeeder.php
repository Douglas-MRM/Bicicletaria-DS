<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = date('Y-m-d H:i:s');

        DB::table('produtos')->insert([
            [
                'nome' => 'Capacete Cyber One',
                'marca' => 'CyberPunk',
                'preco' => 136.45,
                'categoria_id' => 1,
                'fornecedor_id' => 1,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Capacete Cyber Two',
                'marca' => 'CyberPunk',
                'preco' => 100.99,
                'categoria_id' => 1,
                'fornecedor_id' => 1,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Bicicleta Cairu Rog-Strix',
                'marca' => 'Cairu Bikes',
                'preco' => 1249.50,
                'categoria_id' => 2,
                'fornecedor_id' => 2,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Bicicleta Cairu Tuf- Gaming',
                'marca' => 'Cairu Bikes',
                'preco' => 1050.95,
                'categoria_id' => 2,
                'fornecedor_id' => 2,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Câmara TM-16',
                'marca' => 'Kenda',
                'preco' => 35.50,
                'categoria_id' => 3,
                'fornecedor_id' => 3,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Câmara TM-14',
                'marca' => 'Kenda',
                'preco' => 28.99,
                'categoria_id' => 3,
                'fornecedor_id' => 3,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Catraca TM-22',
                'marca' => 'KingSpec',
                'preco' => 60.49,
                'categoria_id' => 5,
                'fornecedor_id' => 4,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Corrente Bike Rog-Strix',
                'marca' => 'KingSpec',
                'preco' => 130.30,
                'categoria_id' => 5,
                'fornecedor_id' => 4,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Pneu aro 8',
                'marca' => 'KingSton',
                'preco' => 25.49,
                'categoria_id' => 4,
                'fornecedor_id' => 5,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Pneu aro 6',
                'marca' => 'KingSton',
                'preco' => 20.99,
                'categoria_id' => 4,
                'fornecedor_id' => 5,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ]
        ]);
    }
}
