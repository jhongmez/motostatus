<?php

namespace App\Http\Controllers;

use App\Oil;
use Illuminate\Http\Request;
use App\Http\Requests\OilRequest;


class OilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $oils = Oil::all();
        return view('oils.index')->with('oils', $oils);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('oils.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OilRequest $request)
    {
        //
        $oil = new oil;
        $oil->name         = $request->name;
        $oil->description  = $request->description;

        if ( $oil->save() ) {
            return redirect('oils')->with('message', 'El aceite: '.$oil->name.' fue Agregado con Exito!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Oil $oil)
    {
        //
        return view('oils.show')->with('oil', $oil);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Oil $oil)
    {
        //
        return view('oils.edit')->with('oil', $oil);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OilRequest $request, Oil $oil)
    {
        //
        $oil->name            = $request->name;
        $oil->description     = $request->description;
        $oil->activo          = $request->activo;

        if($oil->save()) {
            return redirect('oils')->with('message', 'El aceite: '.$oil->name.' fue Modificado con Exito!');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oil $oil)
    {
        if($oil->delete()) {
            return redirect('oils')->with('message', 'El aceite: '.$oil->name.' fue Eliminado!');
        } 
    }
}
