<html>
<head>
	<title>Mi web</title>
</head>
<body>
@extends('layouts.master')
@section('content')
	<br>
	<div class="row">
		<div class="col-sm-4">
			<img src="{{$unicaPelicula->poster}}"/>
		</div>
		<div class="col-sm-8">
			<h3>{{$unicaPelicula->title}}</h3>
			<h4>{{$unicaPelicula->year}} </h4>
			<h4>{{$unicaPelicula->director}} </h4>
			<br>
			<p><strong>Resumen:</strong> {{$unicaPelicula->synopsis}} </p><br>
			<p>
				<strong>Estado:</strong>
				@if($unicaPelicula->rented==true)
					Pelicula actualmente alquilada<br><br>
					<a class="btn btn-danger">Devolver pelicula</a>
				@else
					Pelicula disponible <br><br>
					<a class="btn btn-primary">Alquilar pelicula</a>
				@endif
				<a class="btn btn-warning" href="{{url('catalog/edit/'.$unicaPelicula->id)}}">Editar pelicula</a>
				<a class="btn" href="{{url('/')}}">Volver al listado</a>
			</p>
		</div>
	</div>
@stop

</body>
</html>


