<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class CatalogController extends Controller
{
	public function getShow($id)
	{
		$arrayPeliculas = Movie::findOrFail($id);
		return view('catalog.show', ['unicaPelicula' => $arrayPeliculas]);
	}
	public function getEdit($id)
	{
		return view('catalog.edit', array('id'=>$id));
	}
	public function getCreate()
	{
		return view('catalog.create');
	}
	public function getIndex()
	{
		$arrayPeliculas = Movie::all();
		return view('catalog.index',['arrayPeliculas' => $arrayPeliculas]);

	}

}
