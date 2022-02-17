<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf', 11)->unique();
            $table->string('rg');
            $table->string('cep', 8);
            $table->string('rua');
            $table->string('bairro');
            $table->integer('numero');
            $table->string('complemento')->nullable();
            $table->string('email')->unique();
            $table->string('telefone', 11);
            $table->foreignId('cargo_id')->constrained('cargos');
            $table->foreignId('sexo_id')->constrained('sexos');
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
        Schema::dropIfExists('funcionarios');
    }
}
