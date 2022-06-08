<?php 
require_once('conexion.php');
//recuperamos los datos del nuevo usuario y comprobamos que no hayan campos vacios 
$name=$_POST['nombre'];
if($name==''){
	header('Location: login.php?error=name');
	}else{
$apelle=$_POST['apellido'];
if($apelle==''){
	header('Location: login.php?error=apelle');
	}else{
$correo=$_POST['correo'];
if($correo==''){
	header('Location: login.php?error=meil');
	}else{
$clave1=$_POST['pass'];
if($clave1==''){
	header('Location: login.php?error=pass');
	}else{
$clave2=$_POST['rpass'];
if($clave1==$clave2){
// con todos los datos comprobados ahora pasamos a registrar el usuario a la base de datos
mysql_select_db($db,$cn);
$query="INSERT INTO usuario(nombre,apellido,correo,clave) values ('$name','$apelle','$correo','$clave2')";	
$insertar=mysql_query($query,$cn);
if(!$insertar){
	header('Location: login.php?error=existe');
	}else{
		header('Location: entrar-user.php?error=si');
		}	
	}else{
		header('Location: login.php?error=rpass');
		}
	}
	}
	}
	}
	
?>