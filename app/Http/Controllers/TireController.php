<?php

namespace App\Http\Controllers;

use App\Tire;
use Illuminate\Http\Request;
use App\Http\Requests\TireRequest;

class TireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tires = Tire::paginate(3);
        return view('tires.index')->with('tires', $tires);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tires.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TireRequest $request)
    {
        //
        $tire = new Tire;
        $tire->name         = $request->name;
        $tire->description  = $request->description;

        if ( $tire->save() ) {
            return redirect('tires')->with('message', 'La llanta: '.$tire->name.' fue Agregada con Exito!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tire $tire)
    {
        //
        return view('tires.show')->with('tire', $tire);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tire $tire)
    {
        //
        return view('tires.edit')->with('tire', $tire);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TireRequest $request, Tire $tire)
    {
        //
        $tire->name            = $request->name;
        $tire->description     = $request->description;
        $tire->activo          = $request->activo;

        if($tire->save()) {
            return redirect('tires')->with('message', 'La Llanta: '.$tire->name.' fue Modificada con Exito!');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tire $tire)
    {
        if($tire->delete()) {
            return redirect('tires')->with('message', 'El Llanta: '.$tire->name.' fue Eliminada!');
        } 
    }
}
