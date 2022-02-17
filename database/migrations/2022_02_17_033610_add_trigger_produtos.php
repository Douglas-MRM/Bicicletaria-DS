<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddTriggerProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE OR REPLACE FUNCTION adicionar_estoque()
        RETURNS TRIGGER AS $$
        BEGIN
            INSERT INTO estoque(quantidade, produto_id, created_at, updated_at) VALUES (0, NEW.id, current_timestamp, current_timestamp);
            RETURN NULL;
        END
        $$ LANGUAGE plpgsql;

        CREATE TRIGGER add_produto_estoque
        AFTER INSERT ON produtos
        FOR EACH ROW
        EXECUTE PROCEDURE adicionar_estoque()
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('
        DROP TRIGGER IF EXISTS "add_produto_estoque" ON produtos;
        DROP FUNCTION IF EXISTS adicionar_estoque;
        ');
    }
}
