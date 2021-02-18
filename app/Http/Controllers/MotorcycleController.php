<?php

namespace App\Http\Controllers;

use App\Motorcycle;
use App\User;
use App\Brand;
use App\Brake;
use App\Mechanic;
use App\Oil;
use App\Soat;
use App\Tire;

use Illuminate\Http\Request;
use App\Http\Requests\MotorcycleRequest;

class MotorcycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $motorcycles = Motorcycle::all();
        //dd($brands);
        return view('motorcycles.index')->with('motorcycles', $motorcycles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users      = User::all();
        $brands     = Brand::all();
        $brakes     = Brake::all();
        $mechanics  = Mechanic::all();
        $oils       = Oil::all();
        $soats      = Soat::all();
        $tires      = Tire::all();

        return view('motorcycles.create')->with('users', $users)
                                       ->with('brands', $brands)
                                       ->with('brakes', $brakes)
                                       ->with('mechanics', $mechanics)
                                       ->with('oils', $oils)
                                       ->with('soats', $soats)
                                       ->with('tires', $tires);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MotorcycleRequest $request)
    {
        //dd($request->all());
        $motorcycle = new Motorcycle;
        $motorcycle->user_id            = $request->user_id;
        $motorcycle->brand_id           = $request->brand_id;
        $motorcycle->nameMotorcycle     = $request->nameMotorcycle;
        $motorcycle->cc                 = $request->cc;
        $motorcycle->model              = $request->model;
        $motorcycle->soat_id            = $request->soat_id;
        $motorcycle->soatDate           = $request->soatDate;
        $motorcycle->taxes              = $request->taxes;
        $motorcycle->taxesDate          = $request->taxesDate;
        $motorcycle->mechanic_id        = $request->mechanic_id;
        $motorcycle->mechanicsDate      = $request->mechanicsDate;
        $motorcycle->tire_id            = $request->tire_id;
        $motorcycle->tiresDate          = $request->tiresDate;
        $motorcycle->brake_id           = $request->brake_id;
        $motorcycle->brakesDate         = $request->brakesDate;
        $motorcycle->oil_id             = $request->oil_id;
        $motorcycle->oilsDate           = $request->oilsDate;

        if ( $motorcycle->save() ) {
            return redirect('motorcycles')->with('message', 'La Moto '.$motorcycle->nameMotorcycle.' fue agregada!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Motorcycle $motorcycle)
    {
        //
        return view('motorcycles.show')->with('motorcycle', $motorcycle);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Motorcycle $motorcycle)
    {
        //
        $users      = User::all();
        $brands     = Brand::all();
        $brakes     = Brake::all();
        $mechanics  = Mechanic::all();
        $oils       = Oil::all();
        $soats      = Soat::all();
        $tires      = Tire::all();
        
        return view('motorcycles.edit')->with('users', $users)
                                       ->with('brands', $brands)
                                       ->with('brakes', $brakes)
                                       ->with('mechanics', $mechanics)
                                       ->with('oils', $oils)
                                       ->with('soats', $soats)
                                       ->with('tires', $tires)
                                       ->with('motorcycle', $motorcycle);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MotorcycleRequest $request, Motorcycle $motorcycle)
    {
        //
        $motorcycle->user_id            = $request->user_id;
        $motorcycle->brand_id           = $request->brand_id;
        $motorcycle->nameMotorcycle     = $request->nameMotorcycle;
        $motorcycle->cc                 = $request->cc;
        $motorcycle->model              = $request->model;
        $motorcycle->soat_id            = $request->soat_id;
        $motorcycle->soatDate           = $request->soatDate;
        $motorcycle->taxes              = $request->taxes;
        $motorcycle->taxesDate          = $request->taxesDate;
        $motorcycle->mechanic_id        = $request->mechanic_id;
        $motorcycle->mechanicsDate      = $request->mechanicsDate;
        $motorcycle->tire_id            = $request->tire_id;
        $motorcycle->tiresDate          = $request->tiresDate;
        $motorcycle->brake_id           = $request->brake_id;
        $motorcycle->brakesDate         = $request->brakesDate;
        $motorcycle->oil_id             = $request->oil_id;
        $motorcycle->oilsDate           = $request->oilsDate;

        if($motorcycle->save()) {
            return redirect('motorcycles')->with('message', 'La Moto: '.$motorcycle->nameMotorcycle.' fue Modificada con Exito!');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motorcycle $motorcycle)
    {
        if($motorcycle->delete()) {
            return redirect('motorcycles')->with('message', 'La Moto: '.$motorcycle->nameMotorcycle.' fue Eliminada con Exito!');
        }
    }
}
