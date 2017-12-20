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
        return view('enfermedad.index', ['enfermedades' => enfermedad::all()]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\enfermedad  $enfermedad
     * @return \Illuminate\Http\Response
     */
    public function destroy(enfermedad $enfermedad)
    {
        //
    }
}
