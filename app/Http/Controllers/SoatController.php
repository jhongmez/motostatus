<?php

namespace App\Http\Controllers;

use App\Soat;
use Illuminate\Http\Request;
use App\Http\Requests\SoatRequest;


class SoatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $soats = Soat::paginate(3);
        return view('soats.index')->with('soats', $soats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('soats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SoatRequest $request)
    {
        //
        $soat = new Soat;
        $soat->name         = $request->name;
        $soat->description  = $request->description;

        if ( $soat->save() ) {
            return redirect('soats')->with('message', 'El SOAT: '.$soat->name.' fue Agregado con Exito!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Soat $soat)
    {
        //
        return view('soats.show')->with('soat', $soat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Soat $soat)
    {
        //
        return view('soats.edit')->with('soat', $soat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SoatRequest $request, Soat $soat)
    {
        //
        $soat->name            = $request->name;
        $soat->description     = $request->description;
        $soat->activo          = $request->activo;

        if($soat->save()) {
            return redirect('soats')->with('message', 'El SOAT: '.$soat->name.' fue Modificado con Exito!');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Soat $soat)
    {
        //
        if($soat->delete()) {
            return redirect('soats')->with('message', 'El SOAT: '.$soat->name.' fue Eliminado!');
        } 
    }
}
