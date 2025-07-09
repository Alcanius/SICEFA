<?php

namespace App\Http\Controllers;

use App\Models\TipoVehiculo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TipoVehiculoController extends Controller
{
    public function index(): View
    {
        return view('tipos_vehiculo.index', [
            'tipos' => TipoVehiculo::all(),
        ]);
    }

    public function create(): View
    {
        return view('tipos_vehiculo.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'descripcion' => 'required|unique:tipos_vehiculo,descripcion',
        ]);

        TipoVehiculo::create($data);

        return redirect()->route('tipos_vehiculo.index');
    }

    public function edit(TipoVehiculo $tipoVehiculo): View
    {
        return view('tipos_vehiculo.edit', ['tipoVehiculo' => $tipoVehiculo]);
    }

    public function update(Request $request, TipoVehiculo $tipoVehiculo): RedirectResponse
    {
        $data = $request->validate([
            'descripcion' => 'required|unique:tipos_vehiculo,descripcion,' . $tipoVehiculo->id,
        ]);

        $tipoVehiculo->update($data);

        return redirect()->route('tipos_vehiculo.index');
    }

    public function destroy(TipoVehiculo $tipoVehiculo): RedirectResponse
    {
        $tipoVehiculo->delete();
        return redirect()->route('tipos_vehiculo.index');
    }
}
