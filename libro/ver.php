<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
if(!empty($_GET))
{
	if (isset($_GET["id"]) && $_GET["id"] != "")
	{
		$id = $_GET["id"];
		
		include("conectar.php");
		$strComentario = "SELECT * FROM visitas WHERE id = $id";
		$resComentario = mysql_query ($strComentario,$conexion);
		
		if(mysql_num_rows($resComentario) == 1)
		{
			$nombre = mysql_result($resComentario,0,"nombre");
			$titulo = mysql_result($resComentario,0,"titulo");
			$fecha = mysql_result($resComentario,0,"fecha");
			$mensaje = mysql_result($resComentario,0,"mensaje");
		
			
			?>
            
            <p><b>NOMBRE:</b><?php echo $nombre; ?></p>
            <p><b>TITULO:</b><?php echo $titulo; ?></p>
            <p><b>FECHA:</b><?php echo $fecha; ?></p>
            <p><b>COMENTARIO:</b><?php echo $mensaje; ?></p>
           
           
            
            <?php
		}
		
		else
		     echo"<p>No hay comentario con id = $id</p>";
			 
			 mysql_free_result($resComentario);
			 mysql_close($conexion);
		
	}
	
	else
	{
		echo"<p>Datos no existentes</p>";
	}
	
	
}

else
{
	echo "<p>Intentando acceder sin datos en GET</p>";
}

?>

</body>
</html>