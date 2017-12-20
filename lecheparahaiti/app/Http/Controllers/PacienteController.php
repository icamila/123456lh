<?php

namespace App\Http\Controllers;

use App\paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pacientes.index', ['pacientes' => paciente::all()]);
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
            'aPaterno' => 'required',
            'aMaterno' => 'required',
            'fechaNacimiento' => 'required|date',
            'sexo_id' => 'required',
        ]);
        $data = $request->all();
        if (paciente::create ($data)) {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'El Paciente a sido registrado');
        }
        return redirect()->action('PacienteController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(paciente $paciente)
    {
        //
    }
}
