<?php

namespace App\Http\Controllers;

use App\Models\Profesional;
use Illuminate\Http\Request;


class ProfesionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesional = Profesional::all(['id','identificacion','nombres','apellidos','correo','celular','ubicacion','contrasena']);
        return response()->json($profesional);
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
        $profesional = Profesional::create($request->post());
        return response()->json(['profesional' => $profesional]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Profesional $profesional)
    {
        return response()->json($profesional);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesional $profesional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profesional $profesional)
    {
        $profesional->fill($request->post())->save();
        return response()->json(['profesional' => $profesional]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesional $profesional)
    {
        $profesional->delete();
        return response()->json([
            'mensaje' => 'Profesional Eliminado'
        ]);
    }
}
