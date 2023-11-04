<?php

namespace App\Http\Controllers;

use App\Models\automovil;
use Illuminate\Http\Request;

class automovilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $automoviles = automovil::all();
        return view('automoviles.index', ['automoviles'=> $automoviles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('automoviles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'matricula' => 'required|unique:automoviles|max:20',
            'marca' => 'required|max:255',
            'modelo' => 'required|',
            'color' => 'required|',
            'precio' => 'required|',
        ]);

        $automovil = new automovil();
        $automovil->matricula = $request->input('matricula');
        $automovil->marca = $request->input('marca');
        $automovil->modelo = $request->input('modelo');
        $automovil->color = $request->input('color');
        $automovil->precio = $request->input('precio');
        $automovil->save();

        return view("automoviles.message", ['msg' => "Registro guardado"]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\automovil  $automovil
     * @return \Illuminate\Http\Response
     */
    public function show(automovil $automovil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\automovil  $automovil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $automovil = automovil::find($id);
        return view('automoviles.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\automovil  $automovil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'matricula' => 'required|max:20|unique:automoviles,matricula'.$id,
            'marca' => 'required|max:255',
            'modelo' => 'required|',
            'color' => 'required|',
            'precio' => 'required|',
        ]);

        $automovil = automovil::find($id);
        $automovil->matricula = $request->input('matricula');
        $automovil->marca = $request->input('marca');
        $automovil->modelo = $request->input('modelo');
        $automovil->color = $request->input('color');
        $automovil->precio = $request->input('precio');
        $automovil->save();

        return view("automoviles.message", ['msg' => "Registro modificado"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\automovil  $automovil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $automovil = automovil::find($id);
        $automovil->delete();

        return redirect('automoviles');
    }
}
