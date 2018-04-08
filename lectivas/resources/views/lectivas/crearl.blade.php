<!DOCTYPE html>
<html>
<head>
	<title>crear</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<body>
<center><form  method="POST" action="crearle">

<div class="row">
	<label>Nombre</label>
		<div class="col-md-12">

		<input type="text" name="nombre" required>


	</div>
	</div>

<div class="row">
<label>Profesor</label>
	<div class="col-md-12">
		<input type="text" name="profesor" required>


	</div>
	</div>

	<div class="row">
	<label>Cupos</label>
	<div class="col-md-12">
		<input type="number" name="cupos" required>

	</div>
	
</div>
<div class="row">
<label>Descripcion</label>
	<div class="col-md-12">
	
<textarea name="descripcion" required></textarea>

	</div>
</div>
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
<button class="btn-success">Enviar</button>
</form></center>

@if(Session::has('message'))
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <center><strong>   {{ Session::get('message') }}</strong></center>
</div>
@endif

  <script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

  <script src="js/popper.min.js"></script>
</body>

</html>