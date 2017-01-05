<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\user;
use Laracast\Flash\Flash;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    //

	/**
	*Display a listing of the resource
	*
	*@return \Illuminate\Http\Response
	*/
	public function index()
	{
		$users = user::orderBy('id', 'ASC') -> paginate(5);
		return view ('admin.users.index') -> with('users', $users);
	}
	/**
	*Show the form  for creating a new resource.
	*
	*@return \Illuminate\Http\Response
	*/
	public function create()
	{
		return view('admin.users.create');

	}

	/**
	*Store a newly created resource in storage.}
	*
	*@param \Illuminate\Http\Request $request
	*@return \Illuminate\Http\Response
	*/
	public function Store(UserRequest $request)
	{
		$user = new User($request -> all());
		$user -> password = bcrypt ($request -> password);
		$user -> save();
		return redirect()->route('admin.users.index');
	}

	/**
	* Display the specified resource
	*
	*@param int $id
	*@return \Illuminate\Http\Response
	*/
	public function show($id)
	{
		//
	}


	/**
	* Show the form for editing the specified resource.
	*
	*@param int $id
	*@return \Illuminate\Http\Response
	*/
	public function edit($id)
	{
		$user = user::find($id);
		return view('admin.users.edit')-> with('user', $user);
	}

	/**
	* Update the specified resorce in storage
	*
	*@param \Illuminate\Http\Request $request
	*@param int $id
	*@return \Illuminate\Http\Response
	*/
	public function update (Requests $request, $id)
	{
		$user = user::find($id);
		$user -> name=$request->name;
		$user -> email = $request ->email;
		$user -> type = $request ->type;
		$user -> save();
		flash ("El Usuario".$user -> name."se modifico exitosamente", "info");
		return redirect()-> route('admin.users.index');
	}

	/**
	* Remove the specified resource from storage.
	*
	*@param int $id
	*@return \Illuminate\Http\Response
	*/
	public function destroy($id)
	{
		$user = user::find($id);
		$user -> delete();
		return redirect()->route('admin.users.index');
	}
}
