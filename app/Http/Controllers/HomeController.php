<?php namespace App\Http\Controllers;
use App\Invitado;
use Input;

class HomeController extends Controller {


	public function index(){
		return view('web');
	}
	public function nosotros(){
		return view('nosotros');
	}
	public function agregar_mensaje(){
		$invitado  			= new Invitado;
		$invitado->nombre_i   = e(Input::get('nombre'));
		$invitado->email_i    = e(Input::get('email'));
		$invitado->telefono_i = e(Input::get('telefono'));
		$invitado->mensaje_i  = e(Input::get('mensaje'));
		$invitado->save();
		return view('modals/mensaje-enviado');
	}
	public function galeria()
	{
		return view('circleslider');
	}

}
