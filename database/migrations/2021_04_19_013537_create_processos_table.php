<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('id_cliente', 5);
            $table->string('nro_processo', 10);
            $table->string('data_distribuicao', 10);
            $table->string('valor_causa', 10);
            $table->string('vara', 20);
            $table->string('cidade', 65);
            $table->string('uf', 2);
            $table->string('created_at', 20);
            $table->string('updated_at', 20)->nullable();
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
        //
    }
}
