<?php

namespace App\Http\Controllers;

use App\Models\Muebles;
use Illuminate\Http\Request;

class MueblesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Muebles::all();
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Muebles::create($request->all());
        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Muebles $producto)
    {
        return view("productos.edit", compact("producto"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Muebles $muebles)
    {
        $producto->update($request->all());
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Muebles $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
