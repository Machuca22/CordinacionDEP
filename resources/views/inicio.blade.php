@extends('layout\plantilla')

@section('tituloPagina', 'Tools')

@section('contenido')

@php
  print_r($listardepto); 
@endphp

    <div class="card" style="background-color: #ffffff82">
        <div class="card-header">
            Registro de datos
        </div>
        <div class="card-body">
            <h5 class="card-title">Registro de ingreso para ......</h5>
          
            <div class="col-sm-6">
              @if ($mensaje = Session::get('success')) 
            
            <div class="alert alert-success" role="alert">
                {{ $mensaje }}
                  </div>
            @endif
</div>
            <p> <a href="{{ route('registro.create') }}" class="btn btn-primary">
                    <i class="fa-solid fa-newspaper"></i>
                    Nuevo registro</a></p>

                    <div class="table-responsive table-condensed ">
                <table class="table datatable table-bordered table-hover table-sm  display nowrap">

                    <thead>
                        <tr class="">
                            <th scope="col">Departamento</th>
                            <th scope="col">Municipio</th>
                            <th scope="col" class="">Fecha</th>
                            <th scope="col" class="colum-7">Tipo de Espacio</th>
                            <th scope="col" class="colum-7">Nombre de Espacio</th>
                            <th scope="col" class="colum-7">Agenda Institucional</th>
                            <th scope="col" class="colum-7">Clasificación de Resultados</th>
                            <th scope="col" class="colum-7">Resultados Institucionales</th>
                            <th scope="col " class="colum-7">Participantes Salientes</th>
                            <th scope="col" class="colum-7">Participantes Entrantes</th>
                            <th scope="col" class="colum-7">Nombre de Registro</th>
                            <th scope="col" class="colum-7"> Editar</th>
                            <th scope="col" class="colum-7">eliminar</th>

                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($datos as $item)
                            <tr>
                                <td>{{ $item->idDepartamento }}</td>
                                <td>{{ $item->idMunicipio }}</td>
                                <td>{{ $item->fecha }}</td>
                                <td>{{ $item->idTipoEspacio }}</td>
                                <td>{{ $item->nombreEspacio }}</td>
                                <td>{{ $item->idAgenda_Institucional }}</td>
                                <td>{{ $item->idClasificacion_R }}</td>
                                <td>{{ $item->resultados_Institucionales }}</td>
                                <td>{{ $item->participantes_Out }}</td>
                                <td>{{ $item->participantes_in }}</td>
                                <td>{{ $item->nombreRegistro }}</td>
                                <td>
                                    <form action="{{ route("registro.edit", $item->idRegistro) }}"  method="GET">
                                        <button class="btn btn-primary bt-sm">
                                          <span class="fa-regular fa-pen-to-square"></span>
                                        </button>
                                    </form>
                                    
                                </td>

                                <td>
                                    <form action="{{ route("registro.show", $item->idRegistro) }}"  method="GET">
                                        <button class="btn btn-danger bt-sm">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>
        </div>
    </div>



    <div class="container">
        <div class="table-responsive">





        </div>

    </div>
@endsection
