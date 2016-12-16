<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Sala;
use App\Http\Requests\SalasRequest;

class SalasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $clientes = Sala::orderBy('id','ASC')->paginate(5);
        return view('salas.index')->with('salas',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('salas.cretae');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalasRequest $request)
    {
        $sala = new Sala($request->all());
        $sala->save();
        Flash::success("se ha registrado la sala \"" . $sala->nombre_sala . "\" de forma exitosa");
        return redirect()->route('salas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Sala::find($id);
        $cliente->clientes;
        //dd($cliente);
        return view('salas.ver',['salas'=>$cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = sala::find($id);
        return view('salas.edit')->with('salas',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SalasRequest $request, $id)
    {
        $cl = Sala::find($id);
        $cl->fill($request->all());
        $cl->save();
        flash('La sala "'.$cl->nombre_sala.'" se modifico con exito','info');
        return redirect()->route('salas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salas = Sala::find($id);
        $salas->detallessalas;
        $salas->clientes;
        if($salas->estado_sala == 0){
            flash("La sala '".$salas->nombre_sala."' no se puede eliminar por que esta ocupada","warning");
        }
        else{
            flash("La sala '".$salas->nombre_sala."' se elimino con exito","danger");
            $salas->delete();
        }
        //dd($salas);
        return redirect()->route('salas.index');
    }
}
