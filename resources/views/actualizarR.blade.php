@extends('layout\plantilla')

@section("tituloPagina", "Crear un nuevo registro")


@section('contenido')

  <p> <a href="{{ route('registro.index') }}" class="btn btn-secondary">Regresar</a></p>

<br>

  <div class="container">
    <h2>Actualizar Registro</h2>
    <form  action="{{ route('registro.update', $registros->idRegistro) }}" method="POST">
        @csrf <!-- Agrega el token CSRF para proteger tu formulario -->
        @method("PUT")
        <div class=" row mb-3">
            <div class="col-md-4">
            <label for="idDepartamento">Departamento</label>
            <select class="form-select" id="idDepartamento" name="idDepartamento" required >
                <!-- Aquí puedes cargar dinámicamente los departamentos desde la base de datos si lo deseas -->
                <option value="{{$registros->idDepartamento}}">
                @php
                    
                    print_r($registros->idDepartamento);
                @endphp
                </option>
                <option value="1">San Salvador </option>
                <option value="1">Santa Ana </option>
                <option value="1">San Miguel </option>
                <option value="1">Usulután </option>
                <option value="1">La Libertad </option>
                <option value="1">La Paz </option>
                <option value="1">Cuscatlán </option>
                <option value="1">Chalatenango</option>
                <option value="1">Cabañas</option>
                <option value="1">Ahuachapán </option>
               
             
                
                <!-- Agrega más departamentos según corresponda -->
            </select>
        </div>

        <div class="col-md-4">
            <label for="idMunicipio">Municipio</label>
            <select class="form-select" id="idMunicipio" name="idMunicipio" required>
                <!-- Aquí puedes cargar dinámicamente los municipios según el departamento seleccionado -->
                <option value="{{$registros->idDepartamento}}">
                    @php
                        
                        print_r($registros->idDepartamento);
                    @endphp
                    </option>
                <option value="1">San Salvador Municipio 1</option>
                <!-- Agrega más municipios según corresponda -->
            </select>
            </div>
        


        <div class="col-md-4">
            <label for="fecha">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required value="{{$registros->fecha}}">
        </div>
    </div>
        <div class="mb-3">
            <label for="idTipoEspacio">Tipo de Espacio</label>
            <select class="form-select" id="idTipoEspacio" name="idTipoEspacio" required>
                <!-- Aquí puedes cargar dinámicamente los tipos de espacio desde la base de datos si lo deseas -->
                <option value="{{$registros->idTipoEspacio}}">
                    @php
                        
                        print_r($registros->idTipoEspacio);
                    @endphp
                    </option>
                <option value="1">Tipo 1</option>
                <!-- Agrega más tipos de espacio según corresponda -->
            </select>
        </div>

        <div class="mb-3">
            <label for="nombreEspacio">Nombre de Espacio</label>
            <input type="text" class="form-control" id="nombreEspacio" name="nombreEspacio" required value="{{$registros->nombreEspacio}}">
        </div>

        <div class=" row mb-3">
            <div class="col-md-6">
            <label for="idAgenda_Institucional">Agenda Institucional</label>
            <select class="form-select" id="idAgenda_Institucional" name="idAgenda_Institucional" required>
                <!-- Aquí puedes cargar dinámicamente las agendas institucionales desde la base de datos si lo deseas -->
                <option value="{{$registros->idAgenda_Institucional}}">
                    @php
                        
                       // print_r($registros->idAgenda_Institucional);

                        if ($registros->idAgenda_Institucional ==1 ) {
                           print_r("Agenda 1");
                        }
                    @endphp
                    </option>

                <option value="1">Agenda 1</option>
                <!-- Agrega más agendas institucionales según corresponda -->
            </select>
        </div>

        <div class="col-md-6">
            <label for="idClasificacion_R">Clasificación de Resultados</label>
            <select class="form-select" id="idClasificacion_R" name="idClasificacion_R" required>
                <!-- Aquí puedes cargar dinámicamente las clasificaciones de resultados desde la base de datos si lo deseas -->
                <option value="{{$registros->idClasificacion_R}}">
                    @php
                        
                       // print_r($registros->idAgenda_Institucional);

                        if ($registros->idClasificacion_R ==1 ) {
                           print_r("Class1");
                        }
                    @endphp
                    </option>

                <option value="1">Clasificación 1</option>
                <!-- Agrega más clasificaciones de resultados según corresponda -->
            </select>
        </div>
    </div>

        <div class="mb-3">
            <label for="resultados_Institucionales">Resultados Institucionales</label>
            <input type="text" class="form-control" id="resultados_Institucionales" name="resultados_Institucionales" required value="{{$registros->resultados_Institucionales}}">
        </div>

        <div class="mb-3">
            <label for="participantes_Out">Participantes Salientes</label>
            <input type="number" class="form-control" id="participantes_Out" name="participantes_Out" required value="{{$registros->participantes_Out}}">
        </div>

        <div class="mb-3">
            <label for="participantes_in">Participantes Entrantes</label>
            <input type="number" class="form-control" id="participantes_in" name="participantes_in" required value="{{$registros->participantes_in}}">
        </div>

        <div class="mb-3">
            <label for="nombreRegistro">Nombre de Registro</label>
            <input type="text" class="form-control" id="nombreRegistro" name="nombreRegistro" required value="{{$registros->nombreRegistro}}">
        </div>

        <button type="submit" class="btn btn-success">Guardar Registro</button>

    </form>
   
</div>
<br>
@endsection