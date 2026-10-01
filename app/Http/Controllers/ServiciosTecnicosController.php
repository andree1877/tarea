<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiciosTecnicos; 

class ServiciosTecnicosController extends Controller
{
    public function index()
    {
        $servicios = ServiciosTecnicos::all();
        return view('vistas.index', compact('servicios'));
    }

    public function create()
    {
        return view('vistas.create');
    }

    public function store(Request $request)
    {
        $servicio = new ServiciosTecnicos();
        $servicio->cliente = $request->cliente;
        $servicio->telefono = $request->telefono;
        $servicio->tipo_dispositivo = $request->tipo_dispositivo;
        $servicio->cantidad = $request->cantidad;
        $servicio->servicio = $request->servicio;
        $servicio->precio = $request->precio;
        $servicio->estado = $request->estado;

        $servicio->save();
        return redirect()->route('servicios.index');
    }

    public function show(string $id)
    {
        $servicio = ServiciosTecnicos::findOrFail($id);
        return view('vistas.show', compact('servicio'));
    }

    public function edit(string $id)
    {
        $servicio = ServiciosTecnicos::findOrFail($id);
        return view('vistas.edit', compact('servicio'));
    }

    public function update(Request $request, string $id)
    {
        $servicio = ServiciosTecnicos::findOrFail($id);
        $servicio->cliente = $request->cliente;
        $servicio->telefono = $request->telefono;
        $servicio->tipo_dispositivo = $request->tipo_dispositivo;
        $servicio->cantidad = $request->cantidad;
        $servicio->servicio = $request->servicio;
        $servicio->precio = $request->precio;
        $servicio->estado = $request->estado;

        $servicio->save();
        return redirect()->route('servicios.index');
    }

    public function destroy(string $id)
    {
        $servicio = ServiciosTecnicos::findOrFail($id);
        $servicio->delete();
        return redirect()->route('servicios.index');
    }
}