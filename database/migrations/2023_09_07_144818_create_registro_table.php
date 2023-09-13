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
        Schema::create('registro', function (Blueprint $table) {
            $table->integer('idRegistro', true);
            $table->integer('idDepartamento')->nullable()->index('idDepartamento');
            $table->integer('idMunicipio')->nullable()->index('idMunicipio');
            $table->date('fecha')->nullable();
            $table->integer('idTipoEspacio')->nullable()->index('idTipoEspacio');
            $table->string('nombreEspacio')->nullable();
            $table->integer('idAgenda_Institucional')->nullable()->index('idAgenda_Institucional');
            $table->integer('idClasificacion_R')->nullable()->index('idClasificacion_R');
            $table->integer('resultados_Institucionales')->nullable();
            $table->integer('participantes_Out')->nullable();
            $table->integer('participantes_in')->nullable();
            $table->string('nombreRegistro', 110);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro');
    }
};
