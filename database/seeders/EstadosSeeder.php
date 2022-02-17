<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = date('Y-m-d H:i:s');

        DB::table('estados')->insert([
            [
                'nome' => 'Acre',
                'uf' => 'AC',
                'codigo_ibge' => 12,
                'regiao_id' => 1,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Alagoas',
                'uf' => 'AL',
                'codigo_ibge' => 27,
                'regiao_id' => 2,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Amazonas',
                'uf' => 'AM',
                'codigo_ibge' => 13,
                'regiao_id' => 1,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Amapá',
                'uf' => 'AP',
                'codigo_ibge' => 16,
                'regiao_id' => 1,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Bahia',
                'uf' => 'BA',
                'codigo_ibge' => 29,
                'regiao_id' => 2,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Ceará',
                'uf' => 'CE',
                'codigo_ibge' => 23,
                'regiao_id' => 2,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Distrito Federal',
                'uf' => 'DF',
                'codigo_ibge' => 53,
                'regiao_id' => 3,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Espírito Santo',
                'uf' => 'ES',
                'codigo_ibge' => 32,
                'regiao_id' => 4,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Goiás',
                'uf' => 'GO',
                'codigo_ibge' => 52,
                'regiao_id' => 3,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Maranhão',
                'uf' => 'MA',
                'codigo_ibge' => 21,
                'regiao_id' => 2,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Minas Gerais',
                'uf' => 'MG',
                'codigo_ibge' => 31,
                'regiao_id' => 4,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Mato Grosso do Sul',
                'uf' => 'MS',
                'codigo_ibge' => 50,
                'regiao_id' => 3,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Mato Grosso',
                'uf' => 'MT',
                'codigo_ibge' => 51,
                'regiao_id' => 3,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Pará',
                'uf' => 'PA',
                'codigo_ibge' => 15,
                'regiao_id' => 1,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Paraíba',
                'uf' => 'PB',
                'codigo_ibge' => 25,
                'regiao_id' => 2,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Pernambuco',
                'uf' => 'PE',
                'codigo_ibge' => 26,
                'regiao_id' => 2,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Piauí',
                'uf' => 'PI',
                'codigo_ibge' => 22,
                'regiao_id' => 2,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Paraná',
                'uf' => 'PR',
                'codigo_ibge' => 41,
                'regiao_id' => 5,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Rio de Janeiro',
                'uf' => 'RJ',
                'codigo_ibge' => 33,
                'regiao_id' => 4,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Rio Grande do Norte',
                'uf' => 'RN',
                'codigo_ibge' => 24,
                'regiao_id' => 2,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Rondônia',
                'uf' => 'RO',
                'codigo_ibge' => 11,
                'regiao_id' => 1,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Roraima',
                'uf' => 'RR',
                'codigo_ibge' => 14,
                'regiao_id' => 1,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Rio Grande do Sul',
                'uf' => 'RS',
                'codigo_ibge' => 43,
                'regiao_id' => 5,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Santa Catarina',
                'uf' => 'SC',
                'codigo_ibge' => 42,
                'regiao_id' => 5,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Sergipe',
                'uf' => 'SE',
                'codigo_ibge' => 28,
                'regiao_id' => 2,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'São Paulo',
                'uf' => 'SP',
                'codigo_ibge' => 35,
                'regiao_id' => 4,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Tocantins',
                'uf' => 'TO',
                'codigo_ibge' => 17,
                'regiao_id' => 1,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ]
        ]);
    }
}
