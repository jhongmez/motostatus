<?php

namespace App\Http\Controllers;

use App\Mechanic;
use Illuminate\Http\Request;
use App\Http\Requests\MechanicRequest;

class MechanicController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mechanics = Mechanic::all();
        return view('mechanics.index')->with('mechanics', $mechanics);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mechanics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MechanicRequest $request)
    {
        //dd( $request->all() );
        $mechanic = new Mechanic;
        $mechanic->name         = $request->name;
        $mechanic->description  = $request->description;

        if ( $mechanic->save() ) {
            return redirect('mechanics')->with('message', 'El '.$mechanic->name.' fue agregado!');
        }

    }

    /** 
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mechanic $mechanic)
    {
        //
        return view('mechanics.show')->with('mechanic', $mechanic);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mechanic $mechanic)
    {
        //
        return view('mechanics.edit')->with('mechanic', $mechanic);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MechanicRequest $request, Mechanic $mechanic)
    {
        //
        $mechanic->name            = $request->name;
        $mechanic->description     = $request->description;
        $mechanic->activo          = $request->activo;

        if($mechanic->save()) {
            return redirect('mechanics')->with('message', 'El '.$mechanic->name.' fue Modificado con Exito!');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mechanic $mechanic)
    {
        if($mechanic->delete()) {
            return redirect('mechanics')->with('message', 'El '.$mechanic->name.' fue Eliminado!');
        } 
    }
}
