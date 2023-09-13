<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $datos = Registro ::all();
    return view('inicio', compact('datos'));
       //  / 
    }

    public function create()
    {
        // Mostrar formulario para crear un nuevo registro
        return view('agregarR');
    }
    
    public function store(Request $request)
    {
        // Validar y guardar el nuevo registro en la base de datos
        print_r($_POST);

        $registros = new Registro();
        $registros->idDepartamento = $request ->post('idDepartamento');
        $registros->idMunicipio  = $request ->post('idMunicipio');
       
        $registros->fecha = $request ->post('fecha');
        $registros->idTipoEspacio  = $request ->post('idTipoEspacio');
        $registros->nombreEspacio = $request ->post('nombreEspacio');
        $registros->idAgenda_Institucional  = $request ->post('idAgenda_Institucional');
        $registros->idClasificacion_R  = $request ->post('idClasificacion_R');
        $registros->resultados_Institucionales = $request ->post('resultados_Institucionales');
        $registros->participantes_Out = $request ->post('participantes_Out');
        $registros->participantes_in = $request ->post('participantes_in');
        $registros->nombreRegistro = $request ->post('nombreRegistro');
        $registros-> save();

         return  redirect()->route("registro.index")->with("success", "Agregado con exito");
             /*   SDASDASDSA*/
    }
     
    public function show( $idRegistro)
    {
      //  echo $idRegistro;
        $registros = Registro::find($idRegistro);
       return view("eliminarR", compact('registros'));
    }
    
    public function edit($idRegistro)
    {
        //Si captura los datos
      //  echo $idRegistro;
     // echo $id;
        $registros = Registro::find($idRegistro);
      // $registros = Registro::find($idRegistros);
     
      return view("actualizarR", compact('registros'));
    }
    

    public function update(Request $request, $idRegistro)
    {
        // Validar y actualizar el registro en la base de datos
        $registros = Registro::find($idRegistro);

        $registros->idDepartamento = $request ->post('idDepartamento');
        $registros->idMunicipio  = $request ->post('idMunicipio');    
        $registros->fecha = $request ->post('fecha');
        $registros->idTipoEspacio  = $request ->post('idTipoEspacio');
        $registros->nombreEspacio = $request ->post('nombreEspacio');
        $registros->idAgenda_Institucional  = $request ->post('idAgenda_Institucional');
        $registros->idClasificacion_R  = $request ->post('idClasificacion_R');
        $registros->resultados_Institucionales = $request ->post('resultados_Institucionales');
        $registros->participantes_Out = $request ->post('participantes_Out');
        $registros->participantes_in = $request ->post('participantes_in');
        $registros->nombreRegistro = $request ->post('nombreRegistro');
        $registros-> save();

        return  redirect()->route("registro.index")->with("success", "Actualizado con exito");
        
    }

    
    public function deletenoty(Registro $registro)
    {
        // Eliminar un registro
        return view("eliminarR");
    }

    public function destroy( $idRegistro)
    {
        // Eliminar un registro
       
       //print_r($idRegistro);

       $idRegistro = Registro::find($idRegistro);
       $idRegistro->delete();

        // return view("eliminarR");
        return  redirect()->route("registro.index")->with("success", "Registro eliminado");
    }
}
