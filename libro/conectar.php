<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

$conexion = mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('Libro')or die ('Error al seleccionar la Base de Datos: '.mysql_error());


?>

</body>
</html>