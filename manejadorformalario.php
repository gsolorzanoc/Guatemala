<!DOCTYPE html>
<html>
<head>
	<title>DATOS REGISTRADOS</title>
	<meta charset="utf-8">
</head>
<body background="fondo1.jpg">

	<center>
		<br><br><br><br><br><br><br><br>
		<b><font face="Monotype Corsiva" size="8">Los Datos han sido Registrados </font></b><br><br>
		<br><br>
		<font face="arial" size="5">
		<?php
			$no = $_POST["nom"];
			$ti = $_POST["tip"];
			

			echo "Nombre: ".$no."<br>";
			echo "Tipo: ".$ti."<br>";
			
		?>
		</font>
	</center>

</body>
</html>