<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracast\Flash\Flash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::orderBy('id','ASC')->paginate(5);
        return view('usuarios.index')->with('user',$user);
    }

    public function register(){
          $user = User::all();
        if(count($user->all())>0){
            return redirect('/');
        }
        else{
            return view('usuarios.register');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User($request -> all());
        $users->password= bcrypt($request->password);
        $users->save();
        flash('El Usuario "'.$users->name.'" se creo exitosamente',"success");
        return redirect()->route('usuarios.index');
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
    public function stores(Request $request)
    {
<<<<<<< HEAD
        $users = new User($request ->all());
=======
        $users = new User($request->all());
>>>>>>> 6de9318f3ed4cc1b16ebfab4eb9bbae1546f9c92
        $users->password= bcrypt($request->password);
        $users->save();
        flash('inicia session con tu usuario',"success");
        return redirect('/');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('usuarios.edit')->with('user',$users);
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
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->type = $request->type;
        $users->save(); 
        flash('El usuario "'.$users->name.' se modifico exitosamente',"info");
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->route('usuarios.index');
    }
}
