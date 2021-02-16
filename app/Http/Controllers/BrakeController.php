<?php

namespace App\Http\Controllers;

use App\Brake;
use Illuminate\Http\Request;
use App\Http\Requests\BrakeRequest;

class BrakeController extends Controller
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
        $brakes = brake::all();
        return view('brakes.index')->with('brakes', $brakes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('brakes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrakeRequest $request)
    {
        //dd( $request->all() );
        $brake = new Brake;
        $brake->name         = $request->name;
        $brake->description  = $request->description;

        if ( $brake->save() ) {
            return redirect('brakes')->with('message', 'Los frenos: '.$brake->name.' fueron agregados!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Brake $brake)
    {
        // dd($brake);
        return view('brakes.show')->with('brake', $brake);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Brake $brake)
    {
        //dd($brake);
        return view('brakes.edit')->with('brake', $brake);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrakeRequest $request, Brake $brake)
    {
        //
        $brake->name            = $request->name;
        $brake->description     = $request->description;
        $brake->activo          = $request->activo;

        if($brake->save()) {
            return redirect('brakes')->with('message', 'Los frenos: '.$brake->name.' fueron Modificados con Exito!');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
