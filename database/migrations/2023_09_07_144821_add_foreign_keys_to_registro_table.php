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
        Schema::table('registro', function (Blueprint $table) {
            $table->foreign(['idDepartamento'], 'registro_ibfk_2')->references(['idDepartamento'])->on('departamento');
            $table->foreign(['idClasificacion_R'], 'registro_ibfk_4')->references(['idClasificacion_R'])->on('clasificacionresultados');
            $table->foreign(['idMunicipio'], 'registro_ibfk_1')->references(['idMunicipio'])->on('municipio');
            $table->foreign(['idAgenda_Institucional'], 'registro_ibfk_3')->references(['idAgenda_Institucional'])->on('agendainstitucional');
            $table->foreign(['idTipoEspacio'], 'registro_ibfk_5')->references(['idTipoEspacio'])->on('tipoespacio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registro', function (Blueprint $table) {
            $table->dropForeign('registro_ibfk_2');
            $table->dropForeign('registro_ibfk_4');
            $table->dropForeign('registro_ibfk_1');
            $table->dropForeign('registro_ibfk_3');
            $table->dropForeign('registro_ibfk_5');
        });
    }
};
