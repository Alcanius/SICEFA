<?php

namespace App\Http\Controllers;

use App\Models\Tractor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TractorController extends Controller
{
    public function index(): View
    {
        return view('tractores.index', [
            'tractores' => Tractor::with('tipo')->get(),
        ]);
    }

    public function create(): View
    {
        return view('tractores.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'numero_serial' => 'required|unique:tractores,numero_serial',
            'tipo_vehiculo_id' => 'required|exists:tipos_vehiculo,id',
            'estado' => 'required',
        ]);

        Tractor::create($data);

        return redirect()->route('tractores.index');
    }

    public function edit(Tractor $tractor): View
    {
        return view('tractores.edit', ['tractor' => $tractor]);
    }

    public function update(Request $request, Tractor $tractor): RedirectResponse
    {
        $data = $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'numero_serial' => 'required|unique:tractores,numero_serial,' . $tractor->id,
            'tipo_vehiculo_id' => 'required|exists:tipos_vehiculo,id',
            'estado' => 'required',
        ]);

        $tractor->update($data);

        return redirect()->route('tractores.index');
    }

    public function destroy(Tractor $tractor): RedirectResponse
    {
        $tractor->delete();
        return redirect()->route('tractores.index');
    }
}
