@extends('layout\plantilla')

@section('tituloPagina', 'Crear un nuevo registro')


@section('contenido')

    <div class="card" style="background-color: #ffffff82">
        <h5 class="card-header">E1iminar una Registro de datos!</h5>
        <div class="card-body">
            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro! ! !

                <table class="table table-striped table-bordered">

                    <thead>
                        <tr class="">
                            <th scope="col " class="colum-7">Fecha</th>
                            <th scope="col " class="colum-7">Tipo de Espacio</th>
                            <th scope="col " class="colum-7">Nombre de Espacio</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>{{$registros->fecha}}</td>
                            <td>{{$registros->idTipoEspacio}}</td>
                            <td>{{$registros->nombreEspacio}}</td>
                        </tr>
                    </tbody>

                </table>


            </div>

            <div class="container">
                <form action="{{ route('registro.destroy', $registros-> idRegistro) }}" method="POST"> 
                    @csrf
                    @method('DELETE')

                <a href="{{ route('registro.index') }}" class="btn btn-info">Regresar</a>
                    <button class="btn btn-danger">E1iminar </button>
                    </form>

                    </button>
            </div>
            </p>
        </div>
    </div>

@endsection
