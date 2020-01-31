<?php

namespace App\Http\Controllers;

use App\User;

use App\Http\Controllers\Controller;

class PaginasController extends Controller {
	public function nosotros (){
		//return "Nosotros desde el controlador";
		return view('nosotros');
	}
	public function contacto () {
		//return "Nosotros desde el controlador";
		return view('contacto');
	}
}