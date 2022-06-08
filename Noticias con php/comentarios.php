<?php
session_start();
include('conexion.php');
mysql_select_db($db,$cn);
$query="SELECT * FROM comentarios WHERE ";

?>