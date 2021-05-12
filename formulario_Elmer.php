<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>
<?php
require "encabezado.php";
?>
<div id="fondo">
	<center><font face="ravie" color="#0B615E" size="30">Ingrese la informacion</font></center><br><br><br><br><br>
	<center><form action="manejador_Elmer.php" method="POST">
<input class="form-control form-control-lg" type="text" placeholder="Nombre" aria-label=".form-control-lg example" name="nom"><br><br>
<select name="opc">
<option value="Flora">flora</option>
<option value="Fauna">Fauna</option>
</select><BR><br><br>
<button type="submit" class="btn btn-secondary">Ingresar</button>
	</form></center><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</body>
</html>