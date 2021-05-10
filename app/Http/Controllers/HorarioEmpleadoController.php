<?php

namespace App\Http\Controllers;

use App\Models\Horario_Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HorarioEmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horario_Empleados= Horario_Empleado::all();
        return response($horario_Empleados,200);
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
        $horario_Empleado=new Horario_Empleado;
        $horario_Empleado->empleado_id=$request->empleado_id;
        $horario_Empleado->horario_id=$request->horario_id;
        $horario_Empleado->save();

        return response($horario_Empleado,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Horario_Empleado  $horario_Empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Horario_Empleado $horario_Empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Horario_Empleado  $horario_Empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Horario_Empleado $horario_Empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Horario_Empleado  $horario_Empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horario_Empleado $horario_Empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Horario_Empleado  $horario_Empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horario_Empleado $horario_Empleado)
    {
        //
    }
}
