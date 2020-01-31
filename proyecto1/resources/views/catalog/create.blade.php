<html>
<head>
	<title>Mi web</title>
</head>
<body>
@extends('layouts.master')
@section('content')
<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Añadir película
         </div>
         <div class="card-body" style="padding:30px">
            <form action="catalog_create.php" method="post">
               {{ csrf_field() }}
               <div class="form-group">
                  <label for="title">Título</label>
                  <input type="text" name="title" id="title" class="form-control">
               </div>

               <div class="form-group">
               	  <label for="title">Año</label>
                  <input type="text" name="año" id="year" class="form-control">
               </div>

               <div class="form-group">
               	  <label for="title">Director</label>
                  <input type="text" name="director" id="director" class="form-control">
               </div>

               <div class="form-group">
               	  <label for="title">Poster</label>
                  <input type="text" name="poster" id="poster" class="form-control">
               </div>

               <div class="form-group">
                  <label for="synopsis">Resumen</label>
                  <textarea name="synopsis" id="synopsis" class="form-control" rows="3"></textarea>
               </div>

               <div class="form-group text-center">
                  <button type="submit" class="btn btn-primary">
                      Añadir película
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@stop

</body>
</html>