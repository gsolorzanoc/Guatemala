<!DOCTYPE html>
<html>
<head>
	<title>Datos validados</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
		<font face="Beauty and the Beast" size="8" color="#0B4F7C">
		Datos del formulario
	</font>
	<br><br>
<?php

$n=$_POST["nom"];
$t=$_POST["tip"];

echo "Nombre: ".$n."<br>";
echo "Tipo: ".$t."<br>";

?>
</body>
</html>