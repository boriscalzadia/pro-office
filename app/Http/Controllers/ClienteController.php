<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Laracasts\Flash\Flash;
use App\Http\Requests\ClienteRequest;
use Illuminate\Support\Facades\DB;
use App\Sala;
use App\Contrato;
use Carbon\Carbon;

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
        Flash::success("se ha registrado el cliente " . $cliente->razon_cliente . " de forma exitosa");
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
        $users = DB::table('salas')->where('cliente_id', NULL)->pluck('nombre_sala', 'id');
        $salaso = DB::table('salas')->where('cliente_id', $id)->get();
        $contratos = DB::table('contratos')->where('cliente_id', $id)->get();
        //$contratos = Contrato::all();
        $cliente = Cliente::find($id);
        //dd($contratos);
        return view('clientes.salas') ->with('salas',$users) ->with('cliente',$cliente) ->with('salaso',$salaso) ->with('contratos',$contratos);
    }
    public function asisala(Request $request, $id)
    {
        
        $cliente = Cliente::find($id);
        $sala = Sala::find($request->id);
        $sala->cliente_id = $id;
        $sala->estado_sala = 0;
        $inicio=Carbon::parse($request->fechaini);
        $fin=Carbon::parse($request->fechafin);
        $elem = [
            'cliente_id'    =>  $id,
            'horas'         =>  $request->horas,
            'pago'          =>  $sala->precio,
            'sala_id'       =>  $sala->id,
            'fechafin'      =>  $request->fechafin,
            'fechaini'      =>  $request->fechaini,
            'fechapago'     =>  $request->fechapago
        ];
        if (($inicio->diffInMonths($fin))>2) {
            $cont = new Contrato($elem);
            $sala->save();
            $cont->save();
            flash("El contrato se llevo a acabo exitosamente el cliente '".$cliente->ncomercial_cliente."' pagara una cuota base de $".$cont->pago." por la sala '".$sala->nombre_sala."' ademas de los gastos por otros servicios en el mes el dia '".$cont->fechapago."' de cada mes",'success');
            return redirect()->route('clientes.index');
        } else {
            flash('El contrato no se pudo llevar a cabo por ser demaciado corto','info');
            return redirect()->route('clientes.show',$id);
        }
        
        
       
    }
    public function desocupar(Request $request, $id)
    {
        $salasdes = "";
        $salas = $request->id;
        for ($i=0; $i < count($request->id) ; $i++) {
            $disp = DB::table('contratos')->select('id')->where([
            ['cliente_id',"=", $id],
            ['sala_id',"=",$salas[$i]]
            ])->get();
            $sal = Sala::find($salas[$i]);
            $sal->cliente_id = NULL;
            $sal->estado_sala = 1;
            $sal->save();
            $contrato = Contrato::find($disp->id);
            $contrato->delete();
            $salasdes = $salasdes.', '.$sal->nombre_sala;
        }
        flash("se desocuparon las salas '".$salasdes."' con exito",'success');
        return redirect()->route('clientes.index');
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
    public function update(Request $request, $id)
    {
        $cl = Cliente::find($id);
        $cl->fill($request->all());
        $cl->save();
        flash('El cliente '.$cl->razon_cliente.' se modifico con exito','info');
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
            flash("se ha eliminado el cliente " . $clientes->razon_cliente . " de forma exitosa",'danger');
        }
        else{
            flash("No se ha eliminado el cliente " . $clientes->razon_cliente . " de forma exitosa <br>Si desea eliminar el cliente debe desocupar las salas",'danger');
        }
        return redirect()->route('clientes.index');
    }
}

