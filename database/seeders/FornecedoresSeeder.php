<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FornecedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = date('Y-m-d H:i:s');

        DB::table('fornecedores')->insert(array(
            [
                'razao_social' => 'JR Comércio Ltda',
                'nome_fantasia' => 'JR Comércio de Peças para Bicicletas',
                'cnpj' => '31946795000159',
                'cep' => '76908150',
                'rua' => 'Avenida Brasil',
                'bairro' => 'Nova Brasília',
                'numero' => '100',
                'complemento' => 'T-01',
                'email' => 'jr_comercio@adm.com',
                'telefone' => '69934241111',
                'descricao' => 'Fornecedor de Peças para Bikes',
                'cidade' => 'Ji-Paraná',
                'estado_id' => 21,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'razao_social' => 'Pimont M.E.I',
                'nome_fantasia' => 'Pimont - Indústria de Peças',
                'cnpj' => '06571282000163',
                'cep' => '76908200',
                'rua' => 'Avenida Brasil',
                'bairro' => 'Nova Brasília',
                'numero' => '150',
                'complemento' => 'T-02',
                'email' => 'pimont@adm.com',
                'telefone' => '69934242222',
                'descricao' => 'Fornecedor de Catracas para Bikes',
                'cidade' => 'Ji-Paraná',
                'estado_id' => 21,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'razao_social' => 'Alfa Ltda',
                'nome_fantasia' => 'Alfa Meq Indústria',
                'cnpj' => '94938974000164',
                'cep' => '76908250',
                'rua' => 'Avenida Brasil',
                'bairro' => 'Nova Brasília',
                'numero' => '200',
                'complemento' => 'T-03',
                'email' => 'alfa@adm.com',
                'telefone' => '69934243333',
                'descricao' => 'Fornecedor de Pedais para Bikes',
                'cidade' => 'Ji-Paraná',
                'estado_id' => 21,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'razao_social' => 'DNZ Met. M.E.I',
                'nome_fantasia' => 'DNZ Metalúrgica',
                'cnpj' => '79546211000184',
                'cep' => '76908300',
                'rua' => 'Avenida Brasil',
                'bairro' => 'Nova Brasília',
                'numero' => '250',
                'complemento' => 'T-04',
                'email' => 'dnz@adm.com',
                'telefone' => '69934244444',
                'descricao' => 'Fornecedor de Parafusos para Bikes',
                'cidade' => 'Ji-Paraná',
                'estado_id' => 21,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'razao_social' => 'Becker M.E.I',
                'nome_fantasia' => 'Lojas Becker',
                'cnpj' => '74911173000106',
                'cep' => '76908350',
                'rua' => 'Avenida Brasil',
                'bairro' => 'Nova Brasília',
                'numero' => '300',
                'complemento' => 'T-05',
                'email' => 'becker@adm.com',
                'telefone' => '69934245555',
                'descricao' => 'Fornecedor de Cadeados para Bikes',
                'cidade' => 'Ji-Paraná',
                'estado_id' => 21,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'razao_social' => 'Indústria Huston Ltda',
                'nome_fantasia' => 'Huston - Indústria de Bicicletas',
                'cnpj' => '24978351000130',
                'cep' => '76908400',
                'rua' => 'Avenida Brasil',
                'bairro' => 'Nova Brasília',
                'numero' => '350',
                'complemento' => 'T-06',
                'email' => 'huston@adm.com',
                'telefone' => '69934246666',
                'descricao' => 'Fornecedor de Assentos para Bikes',
                'cidade' => 'Ji-Paraná',
                'estado_id' => 21,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'razao_social' => 'Monark M.E.I',
                'nome_fantasia' => 'Monark Bicicletas',
                'cnpj' => '80537846000102',
                'cep' => '76908450',
                'rua' => 'Avenida Brasil',
                'bairro' => 'Nova Brasília',
                'numero' => '400',
                'complemento' => 'T-07',
                'email' => 'monark@adm.com',
                'telefone' => '69934247777',
                'descricao' => 'Fornecedor de Câmaras de Ar para Bikes',
                'cidade' => 'Ji-Paraná',
                'estado_id' => 21,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'razao_social' => 'Athor Ltda',
                'nome_fantasia' => 'Athor Bicicletas',
                'cnpj' => '16369712000112',
                'cep' => '76908500',
                'rua' => 'Avenida Brasil',
                'bairro' => 'Nova Brasília',
                'numero' => '450',
                'complemento' => 'T-08',
                'email' => 'athor@adm.com',
                'telefone' => '69934248888',
                'descricao' => 'Fornecedor de Aros para Bikes',
                'cidade' => 'Ji-Paraná',
                'estado_id' => 21,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'razao_social' => 'Gazul M.E.I',
                'nome_fantasia' => 'Gazul - Peças e Acessórios',
                'cnpj' => '88631440000198',
                'cep' => '76908550',
                'rua' => 'Avenida Brasil',
                'bairro' => 'Nova Brasília',
                'numero' => '500',
                'complemento' => 'T-09',
                'email' => 'gazul@adm.com',
                'telefone' => '69934249999',
                'descricao' => 'Fornecedor de Acessórios Personalizados para Bikes',
                'cidade' => 'Ji-Paraná',
                'estado_id' => 21,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'razao_social' => 'Yozda Ltda',
                'nome_fantasia' => 'Yozda Cests Equipment',
                'cnpj' => '25640145000188',
                'cep' => '76908600',
                'rua' => 'Avenida Brasil',
                'bairro' => 'Nova Brasília',
                'numero' => '550',
                'complemento' => 'T-10',
                'email' => 'yozda@adm.com',
                'telefone' => '69934241010',
                'descricao' => 'Fornecedor de Cestas para Bikes',
                'cidade' => 'Ji-Paraná',
                'estado_id' => 21,
                'ativo' => true,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ]
        ));
    }
}
