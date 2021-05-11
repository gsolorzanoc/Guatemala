<!DOCTYPE html>
<html>
<head>
	<title>Datos registrados</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
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
		<table>
		<div class="alert alert-primary" role="alert">
 	 Datos Registrados
		</div>
<?php

$c=$_POST["nom"];
$n=$_POST["tip"];

    
echo "Nombre: ".$c."<br>";
echo "Tipo: ".$n."<br>";


?>
</body>
</table>
</center>
</html>



