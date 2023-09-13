<?php

namespace App\Http\Controllers;

use App\Models\Departamento;   
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class DepartamentoController extends Controller
{
   
    public function index()
    {
        //
       // $listardepto = Departamento::all();
        return view('inicio', compact('listardepto'));
    }

   
    public function listardep()
    {
        //funcionaa
        //print_r($listardepto); 
        
       $listardepto = Departamento::all();
       print_r($listardepto);

     //Log::info("hub_mode: ".$request->input("hub_mode"));
    // Log::info("hub_verify_token: ".$request->input("hub_verify_tokene"));
     Log::info("Listar departamento: ".$listardepto);
     /* */
       // return view('inicio', compact('listardepto'));
   
    }

/*
    function ListarDeptos() {
        $departamentos  = Departamento::all();
        return view('agregarR', ['departamentos ' => $departamentos ]);
     }
   */
    public function store(Request $request)
    {
        //
    }

   
    public function show(Departamento $departamento)
    {
        //
    }

    public function edit(Departamento $departamento)
    {
        //
    }

    
    public function update(Request $request, Departamento $departamento)
    {
        //
    }

  
    public function destroy(Departamento $departamento)
    {
        //
    }
}
