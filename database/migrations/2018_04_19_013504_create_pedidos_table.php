<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('id_tipo_pedido', 5);
            $table->string('valor_risco_provavel', 10);
            $table->string('status', 10);
            $table->string('data_criacao', 20);
            $table->string('data_edicao', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
