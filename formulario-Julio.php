<!DOCTYPE html>
<html>
<head>
	<title>FORMULARIO</title>
</head>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<body>
		<ul class="nav justify-content-end">
        <li class="nav-item">
    <a class="nav-link" href="Izabal-Julio.php">DEPARTAMENTO</a>
    </li>
	<li class="nav-item">
    <a class="nav-link" href="turismo-julio.php">TURISMO</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="formulario-Julio.php">FORMULARIO</a>
    </li>
   </ul>

	<center>
	<font face="Comic Sans MS" size="15" color="black">IZABAL, GUATEMALA</font>
		<br><br><br>

<form action="manejador.php" method="POST">
        <div class="alert alert-primary" role="alert">
     INGRESO DE DATOS
        </div>
        NOMBRE:<input type="text" name="nom" placeholder="Ingrese nombre"><br>
        TIPO : <input type="text" name="tip" placeholder="Flora/Fauna"><br>
        
        <br>
        <input type="submit" name="enviar" value="REGISTAR" class="btn btn-outline-success">
        
    </form>
    	

</center>
</body>
</html>