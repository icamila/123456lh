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
        dd($request);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(medicamento $medicamento)
    {
        //
    }
}
