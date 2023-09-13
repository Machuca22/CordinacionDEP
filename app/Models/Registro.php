<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
  // Desactivar el uso de created_at y updated_at
    //Al no desactivar se agregan tablas erroneamente
    public $timestamps = false; 

///Decalaramos la llave primaria
    protected $primaryKey = 'idRegistro';

    /* */
    protected $fillable = [
        'idDepartamento',
        'idMunicipio',
        'fecha',
        'idTipoEspacio',
        'nombreEspacio',
        'idAgenda_Institucional',
        'idClasificacion_R',
        'resultados_Institucionales',
        'participantes_Out',
        'participantes_in',
        'nombreRegistro',
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'idDepartamento');
    }

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'idMunicipio');
    }

    public function tipoEspacio()
    {
        return $this->belongsTo(TipoEspacio::class, 'idTipoEspacio');
    }

    public function agendaInstitucional()
    {
        return $this->belongsTo(AgendaInstitucional::class, 'idAgenda_Institucional');
    }

    public function clasificacionResultados()
    {
        return $this->belongsTo(ClasificacionResultados::class, 'idClasificacion_R');
    }

   
    use HasFactory;

}
