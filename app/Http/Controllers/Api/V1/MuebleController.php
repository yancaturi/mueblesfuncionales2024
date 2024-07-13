<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Muebles;
use Illuminate\Http\Request;

class MuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return response()->json(Muebles::all(), 200); // mostrar todos los muebles
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validar datos
        $datos = $request->validate([
         "nombre" => ["required", "string","max:100"],
         "descripcion" => ["nullable", "string","max:255"],
          "precio" => ["required", "integer","min:5000"],
           "stock" => ["required", "integer","min:1"], 
        ]);

        // guardar datos
        $mueble = Muebles::create($datos);

        // respuesta al cliente
        return response()->json([
            "success" => true,
            "message" => "Mueble creado exitosamente",
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Muebles $mueble)
    {
        return response()->json($mueble, 200); // mostrar un producto
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Muebles $mueble)
    {
         // validar datos
         $datos = $request->validate([
            "nombre" => ["required", "string","max:100"],
            "descripcion" => ["nullable", "string","max:255"],
             "precio" => ["required", "integer","min:5000"],
              "stock" => ["required", "integer","min:1"], 
           ]);
   
           // actualizar datos
           $mueble->update($datos);
   
           // respuesta al cliente
           return response()->json([
               "success" => true,
               "message" => "Mueble actualizado exitosamente",
           ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Muebles $mueble)
    {
        // eliminar mueble
        $mueble->delete();

        // respuesta al cliente
        return response()->json([
            "success" => true,
            "message" => "Mueble eliminado exitosamente",
        ],204);
    }
}
