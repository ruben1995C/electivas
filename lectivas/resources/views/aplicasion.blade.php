<!DOCTYPE html>
<html>
<head>
	<title>aplicasion</title>
	 <link href="css/bootstrap.min.css" rel="stylesheet">
	  <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

</head>
<body>

                                <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>salir</a>
                       <center><h1> Sistema de electivas</h1></center>     
<div class="row">
	

@if(Auth::user()->id_rol==1)


<div class="col-md-12" style="background-color: green;"></div>
<center> <h3 style="color: green;">crear electivas</h3></center>
<center><a href="crear" class="btn-success">  <br></br>

<img src="img/caffe.jpg" width="100%" height="500px"></a></center>

</div>


       
 @endif


<div class="row">
	
<div class="col-md-12" style="background-color: #878D85;"></div>

<center> <h3 style="color: #878D85;">seleccionar electivas</h3></center>
<center><a href="seleccionar" class="btn-primary"> <br></br><img src="img/seleccion.jpg" width="100%" height="500px"> </a></center>
</div>
</body>
</html>