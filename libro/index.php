<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

    <p><a href="formulario.php">Comentar</a></p>

    <?php
    include("conectar.php");
	$strComentario = "SELECT * FROM visitas ORDER BY fecha DESC";
	$resComentario = mysql_query ($strComentario,$conexion);
	
	if(mysql_num_rows($resComentario) > 0)
	{
		echo"<p>Se encontraron ".mysql_num_rows($resComentario)." Comentarios</p>";
		
    ?>
   <form action="" method="get">
   
   <input class="search-filed" type="search" />
   
   </form>
   <table border="1">
  <tr>
    <th>VER</th>
    <th>TITULO</th>
    <th>FECHA</th>
  </tr>
  
        
        <?php
		
	for(  $i = 0; $i < mysql_num_rows($resComentario); $i ++)
		{
			static $i = 0;
			
			$titulo = mysql_result($resComentario, $i ,"titulo");
			$fecha = mysql_result($resComentario, $i ,"fecha");
			$id = mysql_result($resComentario, $i ,"id");
		}
		
		?>
	
		
		<tr>
    <td><a href="ver.php?id=<?php echo $id; ?>">VER</a></td>
    <td><?php echo $titulo; ?></td>
    <td><?php echo $fecha; ?></td>
  </tr>


       <?php
	   
	   ?>
</table>
      
        <?php
	
	}
	
	else  
	    echo"<p>No hay Comentarios</p>";
		mysql_free_result($resComentario);
		mysql_close($conexion);
	

    ?>
</body>
</html>