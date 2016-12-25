<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Servicio;
use App\Proveedor;
use App\Http\Requests\servicios;
class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicio::orderBy('id','ASC')->paginate(10);
        return view('servicios.index')->with('servicios',$servicios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(servicios $request)
    {
        $servicio = new Servicio($request->all());
        $servicio->save();
        Flash::success('Se ha registrado el servicio "'.$servicio->servicio.'" con exito');
        return redirect()->route('servicios.index');
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
        $servicio = Servicio::find($id);
        return view('servicios.edit')->with('servicio',$servicio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(servicios $request, $id)
    {
        $servicio = Servicio::find($id);
        $servicio->fill($request->all());
        $servicio->save();
         flash('El servicio "'.$servicio->servicio.'" se modifico con exito','info');
         return redirect()->route('servicios.index');
        //dd($servicio->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicios = Servicio::find($id);
        $permiso=true;
        $pro = Proveedor::all();
        foreach ($pro as $ser) {
            if ($ser->servicio_id==$id) {
                flash('El servicio "'.$servicios->servicio.'" no pudo ser eliminado por que el proveedor'.$ser->pnombre_proveedor.' '.$ser->papel_proveedor.' sigue activo','warning');
                $permiso = false;
            }
        }
        //dd($permiso);
        if ($permiso) {
            flash('El servicio "'.$servicios->servicio.'"ha sido eliminado con exito','warning');
            $servicios->delete();
        }
        return redirect()->route('servicios.index');
    }
}
