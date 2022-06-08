<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

if (!empty($_POST))

{
	
	include("conectar.php");
	if($_POST["nombre"] != "" && $_POST["titulo"] != "" && $_POST["comentario"] != "")
	{
	echo "Guardando Mensaje";
	$nombre = $_POST["nombre"];
	$titulo = $_POST["titulo"];
	$comentario = $_POST["comentario"];
	$insComentario = "INSERT INTO visitas VALUES (NULL, '$nombre','$titulo','$comentario','".date("Y-m-d")."')";
		
		$resComentario = mysql_query($insComentario,$conexion);
		
		if($resComentario)
		{
			echo "<p>Se ha Guardado tu Comentario</p>";
		}
		else
		    echo"<p>Hubo un error al guardar tu comentario</p>";
		
	}
	else
	   echo"<p>Mandando cadenas vacias</p>";
	   
	   mysql_close($conexion);
	
}
else
{
	echo "<p>No hay datos</p>";
}

	


?>

</body>
</html>