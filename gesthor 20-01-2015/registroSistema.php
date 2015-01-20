<html>
<head>
<title>Proceso datos</title>
</head>
<body>
<?php
	include("bd.php");		
	$conexion = conectar("bd_gesthor");
	mostrar($conexion);	
	function mostrar($conexion)
	{	$consult = "insert into personaprospecto (nombre,apellido,documento,correo,celular, telefono, pais, ciudad, direccion) values ('".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['documento']."','".$_POST['correo']."','".$_POST['celular']."','".$_POST['telefono']."','".$_POST['pais']."','".$_POST['ciudad']."',,'".$_POST['direccion']."')";	
		$resultado = mysql_query($consult,$conexion);
		print "<center><h2>Datos registrados exitosamente</h2></center>";
		print "<meta http-equiv=refresh content=\"2; url=lead_edit.php\">";
	}
?>
</body>
</html>