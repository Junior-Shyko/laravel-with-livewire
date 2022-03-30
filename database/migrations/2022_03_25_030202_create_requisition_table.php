<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisitions', function (Blueprint $table) {
            $table->id();
            $table->integer('fkcodcategoria');
            $table->integer('fkcodprograma');
            $table->integer('fkcodhospital');
            $table->integer('fkcodestado');
            $table->integer('fkcodcidade');
            $table->integer('fkcodcurso');
            $table->dateTime('datainicio');
            $table->dateTime('datafinal');
            $table->string('matricula', 50);
            $table->string('crm', 50);
            $table->string('ano', 50);
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
        Schema::dropIfExists('requisitions');
    }
};
