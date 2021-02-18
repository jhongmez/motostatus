<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;


class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $brands = Brand::all();
        //dd($brands);
        return view('brands.index')->with('brands', $brands);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
        //
        //dd($request);
        $brand = new Brand;
        $brand->name = $request->name;
        $brand->description = $request->description;
        if ($request->hasFile('image')) {
            $file = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('imgs'), $file);
            $brand->image = 'imgs/'.$file;
        }

        if($brand->save()) {
            return redirect('brands')->with('message', 'La marca: '.$brand->name.' fue Adicionada con Exito!');
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
        return view('brands.show')->with('brand', $brand);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
        return view('brands.edit')->with('brand', $brand);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandRequest $request, Brand $brand)
    {
        //
        // dd( $request->all() );
        $brand->name         = $request->name;
        
        if ($request->hasFile('photo')) {
            $file = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('imgs'), $file);
            $brand->image = 'imgs/'.$file;
        }

        $brand->description  = $request->description;
        
        if($brand->save()) {
            return redirect('brands')->with('message', 'La Marca: '.$brand->name.' fue Modificada con Exito!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
        if($brand->delete()) {
            return redirect('brands')->with('message', 'La Marca: '.$brand->name.' fue Eliminada con Exito!');
        } 
    }
}
