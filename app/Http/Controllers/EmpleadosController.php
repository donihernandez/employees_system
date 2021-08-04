<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use App\Models\Empleado;
use App\Models\Provincia;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados', $empleados));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $provincias = Provincia::all();
        $documentos = Documento::all();

        return view('empleados.create', [
            'provincias' => $provincias,
            'documentos' => $documentos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'localidad' => 'required',
            'no_documento' => 'required',
            'codigo_postal' => 'required',
            'documento_id' => 'required',
            'provincia_id' => 'required',
        ]);


        Empleado::create($request->all());

        return redirect()->route('empleados.index')
            ->with('success','El empleado ha sido creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('empleados.show', compact('empleado', $empleado));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id);
        $provincias = Provincia::all();
        $documentos = Documento::all();
        return view('empleados.edit', [
            'empleado' => $empleado,
            'provincias' => $provincias,
            'documentos' => $documentos
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->update($request->all());
        $empleado->save();

        return redirect()->route('empleados.index')
            ->with('success','El empleado ha sido actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Empleado::destroy($id);
        return redirect()->route('empleados.index')
            ->with('success','El empleado ha sido eliminado satisfactoriamente');
    }
}
