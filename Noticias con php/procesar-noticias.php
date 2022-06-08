<?php
session_start();
//recuperamos los datos
$dato1=$_POST['titulo'];
$_FILES['img'];
$dato2=$_POST['descripcion'];
$dato3=$_POST['noticia'];
// con los datos recuperados ahora lo sometemos a comprobacion
if($dato1==''){
	header('Location: enviar-noticias.php?error=titulo');
	}else{
		if($_FILES['img']==false){
			header('Location: enviar-noticias.php?error=img');
			}else{
		// subimos la imagen al servior y la guardamos en una variable
			require_once('subir.php');
		if($dato2==''){
	header('Location: enviar-noticias.php?error=description');
	}else{
		if($dato3==''){
	header('Location: enviar-noticias.php?error=noticia');
	}else{
// si lo datos existen entonces les vamos a anadir los br 
$titulo=nl2br($dato1);
$description=nl2br($dato2);
$noticia=nl2br($dato3);
// con el codigo anterior lo que hemos hecho es recuperar los saltos de lineas

//ahora optenemos la hora en que fue enviada la noticia 

$fecha =date("d-M-Y-");
$hora=date('H:i:s'); 
$tiempo = $fecha."A las ".$hora;

 // con todo esto hecho entonces incluimos la conexion a la base de datos y empezamos a grabar los datos en dicha tabla
 
include('conexion.php');
$db=mysql_select_db($db,$cn);

//almacenamos los datos en una variable
$query= "INSERT INTO noticias (titulo,descripcion,texto,fecha,imagen)VALUES ('$titulo','$description','$noticia','$tiempo','$nombre')";

// ejecutamos los datos de la variable
$consulta=mysql_query($query,$cn);
if(!$consulta){
	header('Location: enviar-noticias.php?error=no');
	}else{
		header('Location: enviar-noticias.php?error=si');
		}

	}

		}
		}
		}


?>