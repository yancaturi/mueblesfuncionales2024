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
        return view("welcome", ["productos" => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $productos = Muebles::find($id);
        return view("detalle", compact("productos"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Muebles $muebles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Muebles $muebles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Muebles $muebles)
    {
        //
    }
}
