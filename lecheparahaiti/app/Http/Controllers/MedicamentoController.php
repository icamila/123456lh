<?php

namespace App\Http\Controllers;

use App\medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('medicamentos.index', ['medicamentos' => medicamento::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|max:255',
            'observacion' => 'required',
        ]);
        $data = $request->all();
        if (medicamento::create ($data)) {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'El Medicamento ha sido registrado');
        }
        return redirect()->action('MedicamentoController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function show(medicamento $medicamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function edit(medicamento $medicamento)
    {
        return response()->json(
            $medicamento->toArray()
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medicamento $medicamento)
    {
        $medicamento->fill($request->all());
        if ($medicamento->save()) {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'El Medicamento ha sido Actualizado');
        }
        return redirect()->action('MedicamentoController@index');
        /* para json gg
        return response()->json([
            'mensaje' => "listo"
        ]);*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(medicamento $medicamento)
    {
        if ($medicamento->delete()) {
            request()->session()->flash('message.level', 'danger');
            request()->session()->flash('message.content', 'El Medicamento ha sido Eliminado');
        }
        return redirect()->action('MedicamentoController@index');
    }
}
