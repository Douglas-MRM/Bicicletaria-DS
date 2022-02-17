<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('razao_social');
            $table->string('nome_fantasia');
            $table->string('cnpj', 14)->unique();
            $table->string('cep');
            $table->string('rua');
            $table->string('bairro');
            $table->integer('numero');
            $table->string('complemento')->nullable();
            $table->string('email')->unique();
            $table->string('telefone', 11);
            $table->string('descricao')->nullable();
            $table->string('cidade')->nullable();
            $table->foreignId('estado_id')->constrained('estados');
            $table->boolean('ativo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fornecedores');
    }
}
