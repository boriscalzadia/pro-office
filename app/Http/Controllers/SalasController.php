<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\DB;
use App\Sala;
use App\Inmueble;
use App\DetallesSala;
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
       $clientes = Sala::orderBy('id','ASC')->paginate(10);
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
    public function asignar(Request $request,$id)
    {
       $sala = Sala::find($id);
       $disp = DB::table('detalles_salas')->select(DB::raw("SUM(inmueble_cant) as disp"))->where('inmueble_id', $request->inmueble_id)->get();
       $cantidad = DB::table('inmuebles')->select('cantidad','nombre')->where('id',$request->inmueble_id)->get();
       $limite = $cantidad[0]->cantidad-$disp[0]->disp;
       $nlimite = $limite-$request->cantidad;
       if ($limite>=0&&$nlimite>=0) {
           $detalle = new DetallesSala;
           $detalle->sala_id=$id;
           $detalle->inmueble_id=$request->inmueble_id;
           $detalle->inmueble_cant = $request->cantidad;
           $detalle->save();
           flash('Se agregaron con exito '.$request->cantidad.' '.$cantidad[0]->nombre.' a la sala '.$sala->nombre_sala,"success");
       }
       else{
            flash('El limite de cantidad para el inmueble "'.$cantidad[0]->nombre.'" es de '.$limite,"warning");
       }
       //dd($cantidad->all());
       return redirect()->route('salas.amueblar',$id);
    }

    public function administramuebles(Request $request,$id)
    { 
        // $datos;
        // for ($i=0; $i <count($request->cantidad) ; $i++) { 
        //     $datos[$i]= array('id' => $request->inmueble_id[$i] , 'cantidad'=>$request->cantidad[$i] );
        // }
        // foreach ($datos as $key) {
        //     $disp = DB::table('detalles_salas')->select(DB::raw("SUM(inmueble_cant) as disp"))->where([
        //         ['inmueble_id',"=", $request->inmueble_id[$i]],
        //         ['sala_id',"<>",$id]
        //         ])->get();
        //     $cantidad = DB::table('inmuebles')->select('cantidad','nombre')->where('id',$key['id'])->get();
        //     $limite = $cantida -$disp[0]->disp;
        //     $nlimite = $limite-$request->cantidad[$i];
        //     if ($limite>=0&&$nlimite>=0) {
        //             $detalle = DetallesSala::where([
        //             ['inmueble_id',"=", $request->inmueble_id[$i]],
        //             ['sala_id',"=",$id]
        //             ])->pluck('id');
        //             $new = DetallesSala::find($detalle[0]);
        //             $new->inmueble_cant = $request->cantidad[$i];
        //             //$new->save();
        //             flash('Se modifico con exito '.$request->cantidad[$i].' '.$cantidad[$i]->nombre,"success");
        //        }
        //        else{
        //             flash('El limite de cantidad para el inmueble "'.$cantidad[$i]->nombre.'" es de '.$limite,"warning");
        //        }
        // }
       for ($i=0; $i < count($request->cantidad) ; $i++) { 
        $disp = DB::table('detalles_salas')->select(DB::raw("SUM(inmueble_cant) as disp"))->where([
            ['inmueble_id',"=", $request->inmueble_id[$i]],
            ['sala_id',"<>",$id]
            ])->get();
        $cantidad = DB::table('inmuebles')->select('cantidad','nombre')->where('id',$request->inmueble_id[$i])->get();
        $limite = $cantidad[0]->cantidad -$disp[0]->disp;
        $nlimite = $limite-$request->cantidad[$i];
        if ($limite>=0&&$nlimite>=0) {
                $detalle = DetallesSala::where([
                ['inmueble_id',"=", $request->inmueble_id[$i]],
                ['sala_id',"=",$id]
                ])->pluck('id');
                $new = DetallesSala::find($detalle[0]);
                $new->inmueble_cant = $request->cantidad[$i];
                $new->save();
                flash('Se modifico con exito el inmuebles'.$cantidad[0]->nombre,"success");
           }
           else{
                flash('El limite de cantidad para el inmueble "'.$cantidad[$i]->nombre.'" es de '.$limite,"warning");
           }
       }
       return redirect()->route('salas.amueblar',$id);
    }

    public function amueblar($id)
    {
        $detalle = Inmueble::all();
        $sala = $id;
        $users = DB::table('detalles_salas')->where('sala_id', $id)->get();
        $ids = DB::table('detalles_salas')->where('sala_id', $id)->pluck('inmueble_id');
        $disp = DB::table('inmuebles')->whereNotIn('id', $ids)->pluck('nombre','id');
        return view('salas.inmueble')->with('inmuebles',$detalle)->with('detalles',$users)->with('disp',$disp)->with('sala',$sala);
        //dd($detalle);
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
