<?php

namespace ventas_project\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;

class LoginController extends Controller
{
	public function index()
	{
		return view('auth.login');
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('/login');
	}

	public function store(Request $request)
	{
		if(Auth::attempt(['name' => $request['name'], 'password' => $request['password']])) {
			return Redirect::to('/');
		} else {
			Session::flash('message-error', 'Acceso denegado');
			return Redirect::to('/login');
		}
	}
}
