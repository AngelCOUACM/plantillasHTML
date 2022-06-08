<?php 
session_start();
require_once('conexion.php');
$usermail=$_POST['mail'];
if($usermail==''){
	header('Location: entrar-user.php?error=meil');
	}else{
		$password=$_POST['pass'];
		if($password==''){
			header('Location: entrar-user.php?error=clave');
			}else{
				mysql_select_db($db,$cn);
				$datos=mysql_query("select id_user,nombre,apellido,clave,nivel from usuario where correo='$usermail'",$cn)or die(mysql_error());
				if($row=mysql_fetch_array($datos)){
				if($row['clave']==$password){
				$_SESSION['id']=$row['id_user'];
				$_SESSION['name']= $row['nombre'];
				$_SESSION['apelle']= $row['apellido'];
				$_SESSION['niv']=$row['nivel'];
				$_SESSION['img']=$row['imagen'];
				header('location: index.php');
					}else{
						header('Location: entrar-user.php?error=no');
						}
				}
				}
				
		}

?>