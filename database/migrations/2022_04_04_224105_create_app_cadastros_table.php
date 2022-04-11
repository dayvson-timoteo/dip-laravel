<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppCadastrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_cadastros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tipo',150);
            $table->integer('numero');
            $table->string('unidade',150);
            $table->date('data');
            $table->string('linkPdf',150);
            $table->longText('conteudo');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_cadastros');
    }
}
