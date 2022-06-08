<?php 
$cn=mysql_connect("localhost","root","")or die("Error en Conexion");
$db=mysql_select_db("noticiero")or die("No existe BD");
return($cn);
return($db);
?>

