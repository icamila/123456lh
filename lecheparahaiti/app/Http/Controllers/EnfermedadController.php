<?php

namespace App\Http\Controllers;

use App\enfermedad;
use Illuminate\Http\Request;

class EnfermedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('enfermedades.index', ['enfermedades' => enfermedad::all()]);
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
      if (enfermedad::create ($data)) {
          $request->session()->flash('message.level', 'success');
          $request->session()->flash('message.content', 'La enfermedad ha sido registrado');
      }
      return redirect()->action('EnfermedadController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\enfermedad  $enfermedad
     * @return \Illuminate\Http\Response
     */
    public function show(enfermedad $enfermedad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\enfermedad  $enfermedad
     * @return \Illuminate\Http\Response
     */
    public function edit(enfermedad $enfermedad)
    {
      return response()->json(
          $enfermedad->toArray()
      );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\enfermedad  $enfermedad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, enfermedad $enfermedad)
    {
      $enfermedad->fill($request->all());
      if ($enfermedad->save()) {
          $request->session()->flash('message.level', 'success');
          $request->session()->flash('message.content', 'La enfermedad ha sido Actualizado');
      }
      return redirect()->action('EnfermedadController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\enfermedad  $enfermedad
     * @return \Illuminate\Http\Response
     */
    public function destroy(enfermedad $enfermedad)
    {
      if ($enfermedad->delete()) {
          request()->session()->flash('message.level', 'danger');
          request()->session()->flash('message.content', 'La enfermedad ha sido Eliminado');
      }
      return redirect()->action('EnfermedadController@index');
    }
}
