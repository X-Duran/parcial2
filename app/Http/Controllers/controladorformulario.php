<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorformulario extends Controller
{
    public  function store(Request $request){
    $datos = [
      "nombre" => $request->nombre,
      "apellido" => $request->apellido,
      "cedula" => $request->cedula,
      "fechaNacimiento" => $request->fechaNacimiento,
      "contraseña" => $request->contraseña
    ];
    return view('datos',compact('datos'));

    }
}
