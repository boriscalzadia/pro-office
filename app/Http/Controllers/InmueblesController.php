<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Inmueble;

class InmueblesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $inmueble = Inmueble::orderBy('id','ASC')->paginate(5);
        return view('inmuebles.index')->with('inm',$inmueble);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inmuebles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $inmueble = new Inmueble($request->all());
        $inmueble->save();
        Flash::success("se ha registrado el inmueble " . $inmueble->nombre . " de forma exitosa");
        return redirect()->route('inmuebles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = DB::table('salas')->where('inmueble_id', NULL)->pluck('nombre_sala', 'id');
        $salaso = DB::table('salas')->where('inmueble_id', $id)->get();
        $inmueble = Inmueble::find($id);
        //dd($salaso);
        return view('inmuebles.salas') ->with('salas',$users) ->with('inmueble',$inmueble) ->with('salaso',$salaso);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $user = Inmueble::find($id);
        return view('inmuebles.edit')->with('inm',$user);
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
        $cl = Inmueble::find($id);
        $cl->fill($request->all());
        $cl->save();
        flash('El inmueble '.$cl->ncomercial_inmueble.' se modifico con exito','info');
        return redirect()->route('inmuebles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inmuebles = Inmueble::find($id);
        $inmuebles->salas;
        $inmuebles->documentos;
        $inmuebles->serviadd;
        if(count($inmuebles->salas)==0&&count($inmuebles->documentos)==0&&count($inmuebles->serviadd)==0)
        {
            $inmuebles->delete();
            flash("se ha eliminado el inmueble " . $inmuebles->ncomercial_inmueble . " de forma exitosa",'danger');
        }
        else{
            flash("No se ha eliminado el inmueble " . $inmuebles->ncomercial_inmueble . " de forma exitosa <br>Si desea eliminar el inmueble debe desocupar las salas",'danger');
        }
        return redirect()->route('inmuebles.index');
    }
}
