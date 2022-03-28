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
        Schema::table('requisitions', function (Blueprint $table) {
            $table->longText('informacoes');
            $table->longText('observacoes');
            $table->dateTime('dataresposta')->nullable($value = true);
            $table->dateTime('datavencimento')->nullable($value = true);
            $table->boolean('pago')->default(false);
            $table->boolean('isento')->default(false);
            $table->boolean('pronto')->default(false);
            $table->integer('situacao');
            $table->integer('iddae');
            $table->dateTime('dataemissao')->nullable($value = true);;
            $table->dateTime('datarecebimento')->nullable($value = true);;
            $table->float('valordae', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('requisitions', function (Blueprint $table) {
            $table->dropColumn(['informacoes', 'observacoes', 'dataresposta','datavencimento',
            'pago', 'isento','pronto','situacao','iddae','dataemissao','datarecebimento','valordae']);
        });
    }
};
