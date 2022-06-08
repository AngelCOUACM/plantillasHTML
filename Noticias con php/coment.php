<?php 
session_start();
include('conexion.php');
$id=$_POST['id'];
if($_POST['opinion']=='')
{
	header('Location: index.php?error=opinion');
	}else{
		$texto=nl2br($_POST['opinion']);
		$nombre=$_SESSION['name'].' '.$_SESSION['apelle'];
		$fecha =date("d-M-Y-"); $hora=date('H:i:s'); $tiempo = $fecha."A las ".$hora;
		mysql_select_db($db,$cn);
		$query="INSERT INTO comentarios(id_noticia,texto,nombre,fecha)VALUES('$id','$texto','$nombre','$tiempo')";
		$consulta=mysql_query($query,$cn);
		if(!$consulta){
			echo 'Error al publicar el comentario';
			}else{
				echo header('Location:'.$_SERVER['HTTP_REFERER'].'?id=si');
				}
		
		}
?>