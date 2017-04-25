<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ofiusuario;
use App\Cliente;
use Laracast\Flash\Flash;


class OfiUsuariosController extends Controller
{
	 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $ofiusuarios = Ofiusuario::Search($request ->razo_cliente) -> orderBy('id','ASC')->paginate(5);
        $clientes = DB::table('clientes')->get();
        //dd($pros);
        return view('ofiusuarios.index')
        ->with('ofiusuarios',$ofiusuarios)
        ->with('clientes',$clientes);
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

       $clientes = Cliente::orderBy('razon_cliente', 'ASC')->pluck('razon_cliente', 'id');
            return view('ofiusuarios.create')
            ->with("clientes",$clientes);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {       

        $ofiusuarios = new Ofiusuario($request->all());
        $ofiusuarios->save();
        Flash('El Usuario "'.$ofiusuarios->name_ofiusuarios.'" se creo exitosamente',"success");
        return redirect()->route('ofiusuarios.index');  
       
    }

    /** 
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ofiusuarios= Ofiusuario::find($id);
       $clientes = Cliente::orderBy('razon_cliente', 'ASC')->pluck('razon_cliente', 'id');
       
            return view('ofiusuarios.edit')
            ->with("clientes",$clientes)
            ->with("ofiusuarios", $ofiusuarios);
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
        $ofiusuarios = Ofiusuario::find($id);
        $ofiusuarios->fill($request->all());
        $ofiusuarios->save();
        flash('El Usuario se "'.$ofiusuarios->name_ofiusuarios.'" ha actualiado','info');
        return redirect()->route('ofiusuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
         $ofiusuarios = Ofiusuario::find($id);
         $ofiusuarios->delete();
        flash('El Usuario "'.$ofiusuarios->name_ofiusuarios.'"se ha eliminado de forma correcta','danger');
        return redirect()->route('ofiusuarios.index');

    }

    

}


