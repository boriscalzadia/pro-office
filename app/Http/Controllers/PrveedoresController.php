<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Proveedor;
use Laracasts\Flash\Flash;
use App\Http\Requests\proveedores;

use App\Servicio;
class PrveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pro = Proveedor::orderBy('id','ASC')->paginate(5);
        $pros = DB::table('servicios')->get();
        //dd($pros);
        return view('proveedores.index')
        ->with('pros',$pro)
        ->with('ser',$pros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$servicios = DB::table('servicios')->pluck('servicio', 'id');
        $users = DB::table('servicios')->whereNotIn('id', function($q){
                    $q->select('servicio_id')->from('proveedores');
                })->pluck('servicio', 'id');
        //dd($users->all());
        if($users->all() == null||isset($user)){
            return view('proveedores.salas');
        }
        else{
            return view('proveedores.create')->with("ser",$users);
        }
        //return view('proveedores.create')->with("ser",$users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(proveedores $request)
    {
        //dd($request);
        $pro = new Proveedor($request->all());
        $pro->save();
        flash("El proveedor '".$pro->pnombre_proveedor.' '.$pro->papel_proveedor."'",'success');
        return redirect()->route('provedores.index');
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
        $users = DB::table('servicios')->whereNotIn('id', function($q){
                    $q->select('servicio_id')->from('proveedores');
                })->pluck('servicio', 'id');
        //dd($users->all());
        if($users->all() == null||isset($user)){
            return view('proveedores.salas');
        }
        else{
            return view('proveedores.edit')->with("ser",$users)->with('prov',$pro);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pro = Proveedor::find($id);
        $pro->fill($request->all());
        $pro->save();
        flash('El proveedor se "'.$pro->pnombre_proveedor.' '.$pro->papel_proveedor.'" ha actualiado','info');
        return redirect()->route('provedores.index');
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
        return redirect()->route('provedores.index');
    }
}
