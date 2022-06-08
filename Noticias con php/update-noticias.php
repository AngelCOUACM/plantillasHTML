<?php
session_start();
//recuperamos los datos
$dato1=$_POST['titulo'];
$dato2=$_POST['descripcion'];
$dato3=$_POST['noticia'];
$id=$_POST['id'];
$imagen=$_FILES['img'];
$destino=$_SERVER['DOCUMENT_ROOT'].'imagen/';
$nombre=$_FILES['img']['name'];
$tipo=$_FILES['img']['type'];
$tmp=$_FILES['img']['tmp_name'];
move_uploaded_file($_FILES['img']['tmp_name'],$directorio.$nombre);
// con los datos recuperados ahora lo sometemos a comprobacion
if($dato1==''){
	header('Location:'.$_SERVER['HTTP_REFERER'].'?id='.$id);
	}else{		
		// subimos la imagen al servior y la guardamos en una variable
		if($dato2==''){
			header('Location: '.$_SERVER['HTTP_REFERER'].'?id='.$id);
			}else{
			if($dato3==''){
			header('Location: '.$_SERVER['HTTP_REFERER'].'?error=noticia');
		}else{
// si lo datos existen entonces les vamos a anadir los br 
$titulo=nl2br($dato1);
$description=nl2br($dato2);
$noticia=nl2br($dato3);
// con el codigo anterior lo que hemos hecho es recuperar los saltos de lineas

//ahora optenemos la hora en que fue enviada la noticia 

$fecha =date("d-M-Y-"); $hora=date('H:i:s'); $tiempo = $fecha."A las ".$hora;

 // con todo esto hecho entonces incluimos la conexion a la base de datos y empezamos a grabar los datos en dicha tabla
 
include('conexion.php');
$db=mysql_select_db($db,$cn);

//almacenamos los datos en una variable
$query= "UPDATE noticias SET titulo='$titulo',descripcion='$description',texto='$noticia',fecha='$fecha',imagen='$nombre' where id_noticia='$id'";

// ejecutamos los datos de la variable
$consulta=mysql_query($query,$cn);
	if(!$consulta){
		header('Location: '.$_SERVER['HTTP_REFERER'].'?error=no');
		}else{
		header('Location: lista-noticias.php?error=si');
		}}}}
?>