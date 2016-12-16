<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Laracasts\Flash\Flash;
use App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientes = Cliente::orderBy('id','ASC')->paginate(5);
        return view('clientes.index')->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        
        $cliente = new Cliente($request->all());
        $cliente->save();
        Flash::success("se ha registrado el cliente " . $cliente->ncomercial_cliente . " de forma exitosa");
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        $cliente->salas;
        $cliente->documentos;
        $cliente->serviadd;
        //dd($cliente);
        return view('welcome',['clientes'=>$cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Cliente::find($id);
        return view('clientes.edit')->with('cliente',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteRequest $request, $id)
    {
        $cl = Cliente::find($id);
        $cl->fill($request->all());
        $cl->save();
        flash('El cliente '.$cl->ncomercial_cliente.' se modifico con exito','info');
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes = Cliente::find($id);
        $clientes->salas;
        $clientes->documentos;
        $clientes->serviadd;
        if(count($clientes->salas)==0&&count($clientes->documentos)==0&&count($clientes->serviadd)==0)
        {
            $clientes->delete();
            flash("se ha eliminado el cliente " . $clientes->ncomercial_cliente . " de forma exitosa",'danger');
        }
        else{
            flash("No se ha eliminado el cliente " . $clientes->ncomercial_cliente . " de forma exitosa <br>Si desea eliminar el cliente debe desocupar las salas",'danger');
        }
        return redirect()->route('clientes.index');
    }
}
