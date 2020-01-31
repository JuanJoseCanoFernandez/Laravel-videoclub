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
					<button class="btn btn-danger">Devolver pelicula</button>
				@else
					Pelicula disponible <br><br>
					<button class="btn btn-primary">Alquilar pelicula</button>
				@endif
				<button class="btn btn-warning">Editar pelicula</button>
				<button class="btn">Volver al listado</button>
			</p>
		</div>
	</div>
@stop

</body>
</html>


