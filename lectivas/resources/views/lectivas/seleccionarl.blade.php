<!DOCTYPE html>
<html>
<head>
	<title>seleccionar</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


	  <center> <table class="table table-striped"  >
                <thead>
                  <tr>
                 
                    <th>Materia</th>
                 <th>profesor</th>
                    <th>cupos</th>
                     <th>Descripcion</th>
                 
                        
                         <th>Inscribirse</th>
                  
@if(Auth::user()->id_rol==1)
                        <th>Eliminar</th>

   <th>Actualizar</th>
@endif
   <th>Alumnos</th>
                  </tr>
                </thead>
                <tbody>
                   @foreach($lectivas as $lectiva)



    <tr >
                 
                    <td>{{$lectiva->nombre}}</td>
             
                    <td>{{$lectiva->profesor}}</td>
                     <td>{{$lectiva->cupos}}</td>
                      <td>{{$lectiva->descripcion}}</td>
                 
                 
                     <td><button class="btn-primary" onclick="seleccion({{$lectiva->id}},{{$lectiva->cupos}})">Inscribirse</button></td>
                     @if(Auth::user()->id_rol==1)
       <td><button class="btn-danger" onclick="eliminar({{$lectiva->id}})">Eliminar</button></td>


         <td><button class="btn-warning" onclick="actualizar({{$lectiva->id}})">Actualizar</button></td>
         @endif

         <td><button class="btn-info" onclick="alumnos({{$lectiva->id}})">Alumnos</button></td>
                  </tr>

   @endforeach
                
               
                </tbody>
              </table></center>
<script type="text/javascript">
	function seleccion(lectiva,cupos){
if (cupos==0) {alert('Cupo lleno no esta disponible');}else{
alert('lectiva seleccionada con exito');
         var url = '{{url('/seleccion/')}}'+'/'+lectiva;
   
                location.href =url;
           }
}
function eliminar(id){
alert("eliminado con exito");
  var url = '{{url('/eliminar/')}}'+'/'+id;
   
                location.href =url;
}

function actualizar(id){

 var url = '{{url('/actualizar/')}}'+'/'+id;
   
                location.href =url;

}


function alumnos(id){
 var url = '{{url('/alumnos/')}}'+'/'+id;
   
                location.href =url;

}
</script>
</body>
</html>