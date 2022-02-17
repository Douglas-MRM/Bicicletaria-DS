<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RegioesSeeder::class,
            EstadosSeeder::class,
            SexosSeeder::class,
            CargosSeeder::class,
            FuncionariosSeeder::class,
            FornecedoresSeeder::class,
            CategoriasSeeder::class,
            ProdutosSeeder::class,
            ServicosSeeder::class,
            ClientesSeeder::class
        ]);
    }
}
