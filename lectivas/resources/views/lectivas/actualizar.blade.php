<!DOCTYPE html>
<html>
<head>
	<title>actualizar</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	@foreach($lectivas as $lectiva)
	<center><form  method="POST" action="up1\{{$lectiva->id}}">

<div class="row">
	<label>Nombre</label>
		<div class="col-md-12">

		<input type="text" name="nombre" value="{{$lectiva->nombre}}" required>


	</div>
	</div>

<div class="row">
<label>Profesor</label>
	<div class="col-md-12">
		<input type="text" name="profesor"  value="{{$lectiva->profesor}}" required>


	</div>
	</div>

	<div class="row">
	<label>Cupos</label>
	<div class="col-md-12">
		<input type="number" name="cupos" value ="{{$lectiva->cupos}}" required>

	</div>
	
</div>
<div class="row">
<label>Descripcion</label>
	<div class="col-md-12">
	
<textarea name="descripcion" placeholder="nueva descripcion" required></textarea>

	</div>
</div>
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
<button class="btn-success">Enviar</button>

@endforeach
</form></center>


  <script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>