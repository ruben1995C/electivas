<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	  <center> <table class="table table-striped"  >
                <thead>
                  <tr>
                 
                    <th>Nombre Materia</th>
           <th>Nombre Alumno</th>
                  </tr>
                </thead>
                <tbody>
                   @foreach($alumnos as $alumno)



    <tr >
                 
                    <td>{{$alumno->nombre}}</td>
             
                    <td>{{$alumno->name}}</td>
                
             
                  </tr>

   @endforeach
               
</body>
</html>