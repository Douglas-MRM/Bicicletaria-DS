<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = date('Y-m-d H:i:s');

        DB::table('clientes')->insert([
            [
                'nome' => 'Oliver Iago Figueiredo',
                'data_nascimento' => '1981-11-07',
                'email' => 'oliver_jipa@gmail.com',
                'cpf' => '30782939716',
                'rg' => '149100',
                'endereco' => 'Avenida Brasil T-01',
                'sexo_id' => 2,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Sophie Olivia Raimunda',
                'data_nascimento' => '1941-12-24',
                'email' => 'sophie_jipa@gmail.com',
                'cpf' => '96773592232',
                'rg' => '149150',
                'endereco' => 'Avenida Brasil T-02',
                'sexo_id' => 1,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Luan Pietro Figueiredo',
                'data_nascimento' => '1972-09-21',
                'email' => 'luan_jipa@gmail.com',
                'cpf' => '01114240206',
                'rg' => '149200',
                'endereco' => 'Avenida Brasil T-03',
                'sexo_id' => 2,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Laura Heloise Teixeira',
                'data_nascimento' => '1962-05-26',
                'email' => 'laura_jipa@gmail.com',
                'cpf' => '15692410400',
                'rg' => '149250',
                'endereco' => 'Avenida Brasil T-04',
                'sexo_id' => 1,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Clara Alessandra Aline',
                'data_nascimento' => '1944-08-10',
                'email' => 'clara_jipa@gmail.com',
                'cpf' => '38733062390',
                'rg' => '149300',
                'endereco' => 'Avenida Brasil T-05',
                'sexo_id' => 1,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Gabriel Anthony Teixeira',
                'data_nascimento' => '1978-02-25',
                'email' => 'gabriel_jipa@gmail.com',
                'cpf' => '77891661154',
                'rg' => '149350',
                'endereco' => 'Avenida Brasil T-06',
                'sexo_id' => 2,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Mariane Vera Pereira',
                'data_nascimento' => '1976-08-17',
                'email' => 'mariane_jipa@gmail.com',
                'cpf' => '99672378130',
                'rg' => '149400',
                'endereco' => 'Avenida Brasil T-07',
                'sexo_id' => 1,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Paulo Manoel Pereira',
                'data_nascimento' => '1989-06-11',
                'email' => 'paulo_jipa@gmail.com',
                'cpf' => '50257108637',
                'rg' => '149450',
                'endereco' => 'Avenida Brasil T-08',
                'sexo_id' => 2,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Fernanda Luciana Amanda',
                'data_nascimento' => '1969-07-19',
                'email' => 'fernanda_jipa@gmail.com',
                'cpf' => '99259534801',
                'rg' => '149500',
                'endereco' => 'Avenida Brasil T-09',
                'sexo_id' => 1,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'nome' => 'Louise Ester Vieira',
                'data_nascimento' => '1960-11-09',
                'email' => 'louise_jipa@gmail.com',
                'cpf' => '09517944772',
                'rg' => '149550',
                'endereco' => 'Avenida Brasil T-10',
                'sexo_id' => 1,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ]
        ]);
    }
}
