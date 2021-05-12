<!DOCTYPE html>
<html>
<head>
	<title>Factura</title>
</head>
<body>
	<?php
require "encabezado.php";
	?>
<div id="fondo"><center><font face="elephant" color="#0B615E" size="30">Sus datos son</font></center>
<?php
$n = $_POST["nom"];
$o = $_POST["opc"];

echo "<font face ='impact' color = 'green' size = '6'>Nombre: </font>" .$n. "<br>";
echo "<font face ='impact' color = 'green' size = '6'> Tipo: </font>" .$o. "<br>";
?><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</body>
</html>