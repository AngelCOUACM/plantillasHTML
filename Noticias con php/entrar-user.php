<?php session_start();error_reporting(E_ALL ^ E_NOTICE);
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Entrar al sitio web</title>
    <style>
	*{margin:0px;padding:0px;}	
	section#contenido{
		position:fixed;
		width:300px;
		height:200px;
		top:180px;
		padding:10px;
		margin:0px;
		border-radius:5px;
		left:350px;
		color:#03C;
		border:solid 1px #DEDEDE;
		background:-moz-linear-gradient(#f0f0f0 0%,#f9f9f9 100%);		
		}
		a{text-decoration:none;background:none;}
		a:hover{color:orange;}
		div{background:none;border-bottom:solid 1px #DEDEDE;font-size:18px;color:#06F;padding-bottom:10px;}
		b{background:none;}
		#input1{width:150px;height:25px;border:solid 1px #DEDEDE;border-radius:5px;}
		#ENTRAR{width:100px;background:#DEDEDE;border:solid 1px #DEDEDE;margin-top:5px;height:25px;color:red;border-radius:5px;}
	</style>
</head>
<body>
<section id="contenido">
<div>Bienvenidos a comocrearmiweb.com</div><br />
<?php 
error_reporting(E_ALL ^ E_NOTICE);
if($_SESSION['name']){
	echo '<font color="#FF0000"><h2>Ya estas logeado</h2></font> <a href="salir.php">Serrar Sesion</a> O <a href="index.php">Ir al Home</a>';
}else{
if($_GET['error']=='meil'){
	echo '<font color="#FF0000">Escribe tu correo</font>';
	}
	if($_GET['error']=='clave'){
	echo '<font color="#FF0000">Escribe tu Password</font>';
	}
	if($_GET['error']=='no'){
	echo '<font color="#FF0000">Algo salio mal</font>';
	}
	if($_GET['error']=='si'){
	echo '<font color="#FF0000">Estas registrado logeate</font>';
	}

 ?>
<form action="entrar.php" method="post">
<b>Correo:</b><br /><input type="email" name="mail" id='input1'/><br />
<b>Password:</b><br /><input type="password" name="pass" id='input1'/><br />
<input type="submit" value="ENTRAR" id="ENTRAR"/><br /></form>
<a href="#">Olvide mis datos</a> || <a href="login.php">Registrarme</a>
</section>
</body>
</html>
<?php } ?>