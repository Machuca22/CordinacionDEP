<?php

use Illuminate\Support\Facades\Route;
//Agregar los controllers necesarios
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\DepartamentoController;



Route::get('/', [RegistroController::class, 'index'])->name('registro.index');
//Creacion de ruta para el formulario de creacion
Route::get('/create', [RegistroController::class, 'create'])->name('registro.create');
//add
Route::post('/store', [RegistroController::class, 'store'])->name('registro.store');


//aqui podemos cambiar la direccion que correspondiente a edit, le podemos agregar un direccion diferente.
Route::get('/edit/{id}', [RegistroController::class, 'edit'])->name('registro.edit');

//update
Route::put('/update/{id}', [RegistroController::class, 'update'])->name('registro.update');

//show- get for this
Route::get('/show/{id}', [RegistroController::class, 'show'])->name('registro.show');

///delete
Route::delete('/destroy/{id}', [RegistroController::class, 'destroy'])->name('registro.destroy');


Route::get('/deleteNoty',  [RegistroController::class, 'deletenoty'])->name('registro.deletenoty');


//url('edit/'. $item->idRegistro )

/*-----------Departamento-----*/

Route::get('/listardep',  [DepartamentoController::class, 'listardep'])->name('departamento.listardep');



//Route::resource('registros', RegistroController::class);