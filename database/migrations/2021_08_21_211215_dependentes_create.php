<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DependentesCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependentes', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->bigInteger('parentesco_id')->unsigned();
            $table->bigInteger('funcionario_id')->unsigned();
            $table->timestamps();
            $table->foreign('parentesco_id')->references('id')->on('parentescos');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dependentes');
    }
}
