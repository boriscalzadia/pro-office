<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
use Laracast\Flash\Flash;
use App\Http\Requests\proveedores;

class PrveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pro = Proveedor::odderBy('id','ASC')->paginate(10);
        return view('proveedores.index')->with('$pros',$pro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(proveedores $request)
    {
        $pro = new Proveedor($request->all());
        $pro->save();
        Flash::success("El proveedor '".$pro->pnombre_proveedor.' '.$pro->papel_proveedor."'");
        return redirect()->route('proveedor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pro = Proveedor::find($id);
        return view('salas.edit')->with('pros',$pro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(proveedores $request, $id)
    {
        $pro = Proveedor::find($id);
        $pro = fill($request->all());
        $pro->save();
        flash('El proveedor se "'.$pro->pnombre_proveedor.' '.$pro->papel_proveedor.'" ha actualiado','info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Proveedor::find($id);
        $pro->delete();
        flash('El proveedor "'.$pro->pnombre_proveedor.' '.$pro->papel_proveedor.' se ha eliminado de forma correcta','danger');
        return redirect()->route('proveedor.index');
    }
}
