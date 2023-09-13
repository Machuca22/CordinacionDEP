@extends('layout\plantilla')

@section("tituloPagina", "Crear un nuevo registro")


@section('contenido')


<p> <a href="{{ route('registro.index') }}" class="btn btn-secondary"> 
    <span class="fa-solid fa-arrow-left"> </span>
    Regresar</a></p>

<br>

  <div class="container">
    <h2>Agregar nuevo Registro</h2>
    <form  action="{{ route('registro.store')}}" method="POST">
        @csrf <!-- Agrega el token CSRF para proteger tu formulario -->

        <div class=" row mb-3">
            <div class="col-md-4">
            <label for="idDepartamento">Departamento</label>
            <select class="form-select" id="idDepartamento" name="idDepartamento" required>
                <!-- Aquí puedes cargar dinámicamente los departamentos desde la base de datos si lo deseas -->
                <option value="">Selecciona un departamento</option>
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
                <option value="">Selecciona un municipio</option>
                <option value="1">San Salvador </option>
                <option value="2">Apopa </option>
                <option value="3">Soyapango </option>
                <!-- Agrega más municipios según corresponda -->
            </select>
            </div>
        


        <div class="col-md-4">
            <label for="fecha">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>
    </div>
        <div class="mb-3">
            <label for="idTipoEspacio">Tipo de Espacio</label>
            <select class="form-select" id="idTipoEspacio" name="idTipoEspacio" required>
                <!-- Aquí puedes cargar dinámicamente los tipos de espacio desde la base de datos si lo deseas -->
                <option value="">Selecciona un tipo de espacio</option>
                <option value="1">Tipo 1</option>
                <!-- Agrega más tipos de espacio según corresponda -->
            </select>
        </div>

        <div class="mb-3">
            <label for="nombreEspacio">Nombre de Espacio</label>
            <input type="text" class="form-control" id="nombreEspacio" name="nombreEspacio" required>
        </div>

        <div class=" row mb-3">
            <div class="col-md-6">
            <label for="idAgenda_Institucional">Agenda Institucional</label>
            <select class="form-select" id="idAgenda_Institucional" name="idAgenda_Institucional" required>
                <!-- Aquí puedes cargar dinámicamente las agendas institucionales desde la base de datos si lo deseas -->
                <option value="">Selecciona una agenda institucional</option>
                <option value="1">Agenda 1</option>
                <!-- Agrega más agendas institucionales según corresponda -->
            </select>
        </div>

        <div class="col-md-6">
            <label for="idClasificacion_R">Clasificación de Resultados</label>
            <select class="form-select" id="idClasificacion_R" name="idClasificacion_R" required>
                <!-- Aquí puedes cargar dinámicamente las clasificaciones de resultados desde la base de datos si lo deseas -->
                <option value="">Selecciona una clasificación de resultados</option>
                <option value="1">Clasificación 1</option>
                <!-- Agrega más clasificaciones de resultados según corresponda -->
            </select>
        </div>
    </div>

        <div class="mb-3">
            <label for="resultados_Institucionales">Resultados Institucionales</label>
            <input type="number" class="form-control" id="resultados_Institucionales" name="resultados_Institucionales" required>
        </div>

        <div class="mb-3">
            <label for="participantes_Out">Participantes Salientes</label>
            <input type="number" class="form-control" id="participantes_Out" name="participantes_Out" required>
        </div>

        <div class="mb-3">
            <label for="participantes_in">Participantes Entrantes</label>
            <input type="number" class="form-control" id="participantes_in" name="participantes_in" required>
        </div>

        <div class="mb-3">
            <label for="nombreRegistro">Nombre de Registro</label>
            <input type="text" class="form-control" id="nombreRegistro" name="nombreRegistro" required>
        </div>

        <button type="submit" class="btn btn-success">
            <span class="fa-solid fa-newspaper"> </span> Guardar Registro
        </button>

    </form>
   
</div>
<br>
@endsection