<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Movie;
class CatalogController extends Controller
{
	public function getShow($id)
	{
		return view('catalog.show', array('unicaPelicula'=>Movie::findOrFail($id)));
	}
	public function getEdit($id)
	{
		return view('catalog.edit', array('unicaPelicula'=>Movie::findOrFail($id)));
	}
	public function getCreate()
	{
		return view('catalog.create');
	}
	public function getIndex()
	{
		return view('catalog.index')->with('arrayPeliculas', Movie::all());
	}
	public function postCreate(Request $request)
	{
		$movie1 = new Movie;
		$movie1->title = $request->input('title');
		$movie1->year = $request->input('year');
		$movie1->director = $request->input('director');
		$movie1->poster = $request->input('poster');
		$movie1->synopsis = $request->input('synopsis');
		$movie1->save();
		return redirect()->action('CatalogController@getIndex');
	}
	public function putEdit(Request $request, $id)
	{
		$movie1 = Movie::findOrFail($id);
		$movie1->title = $request->input('title');
		$movie1->year = $request->input('year');
		$movie1->director = $request->input('director');
		$movie1->poster = $request->input('poster');
		$movie1->synopsis = $request->input('synopsis');
		$movie1->save();
		return redirect()->action('CatalogController@getIndex');
	}
}
