<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sala;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use App\Historial;
use App\clientes

class HistorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historial = Historial::orderBy('id','ASC')->paginate(5);
        $
        dd($historial->all());
        return view('historial.index')->with('reg',$historial)->whit('id_cl',null)->whit('horasc',)->whit();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = DB::table('salas')->pluck('nombre_sala', 'id');
        $clientes = DB::table('clientes')->pluck('nombre_cliente', 'id');
        $thiss = \Auth::user()->id;
        return view('historial.new')->with('salas',$users)->with('inises',$thiss)->with('clin',$clientes);
        //dd($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = null;
        if (isset($request->cliente_id)) {
            $cliente = $request->cliente_id;
        }
        $datos = [
                'ofiusuarios_id' => \Auth::user()->id,
                'sala_id'       => $request->sala_id,
                'tiempo'        => $request->tiempo,
                'hora'          =>  $request->hora,
                'fecha'         =>  $request->fecha,
                'cliente_id'    =>  $cliente,
        ];
        $historial = new Historial($datos);
        //dd($datos);
        //dd($historial);
        $historial->save();
        $sala = Sala::find($request->sala_id);
        Flash::success("Se ha registrado el tiempo de uso para " . $sala->nombre . " de forma exitosa");
        return redirect()->route('historial.index');
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
        //
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
        //
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
