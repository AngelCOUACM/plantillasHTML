<?php session_start();error_reporting(E_ALL ^ E_NOTICE); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Noticiero con php y mysql</title>
    <link rel="stylesheet" href="style/stylo.css" type="text/css" />
</head>
<body>
<header>
    <div id='titulo'><h1>www.comocrearmiweb.com</h1></div>
	<?php if($_SESSION['name']){
		echo '<div id="sesion"><div id="sesion">'.$_SESSION['name']." ".$_SESSION['apelle'].'|| <a href="salir.php">Serrar Sesion</a></div></div>';
		}else{ ?>
    <div id='sesion'><div id='sesion'><a href="entrar-user.php">Inisiar Sesion</a> O <a href="login.php">Registrarme</a></div></div> 
    <?php } ?> 
</header>
<nav>
    <a href="index.php"><menu>Home</menu></a>
    <a href="http://www.facebook.com"><menu>Facebook</menu></a>
    <a href="http://www.twitter.com"><menu>Twitter</menu></a>
        <?php if($_SESSION['niv']=='2'){echo '<a href="enviar-noticias.php"><menu>Administrar</menu></a>';} ?>
</nav>
<section id='cuerpo'>
    <section id='contenido'>
        <article id='titulo'><h2>Bienvenidos a como crear mi web</h2></article>      
        <article id='login'>
        <?php
		if($_SESSION['name']){
	echo '<font color="#FF0000"><h2>Ya estas logeado</h2></font> <a href="salir.php">Serrar Sesion</a> O <a href="index.php">Ir al Home</a>';
}else{
		 ?>
         <font size="+1" color="#f00">Eres usuario registrado</font><br />
        <form action="entrar.php" method="post" >
        <b>Correo:</b><br />
       	<input type="email" name="mail" id="input1" /><br />
        <b>Password:</b><br />
        <input type="password" name="pass" id="input1" /><br />
        <input type="submit" value="ENTRAR" id="input2" />
        </form>
        </article><br />
        <article id='registrar'>
        
        <p>
        <font size="+2" color="#FF6600">Quiero Registrarme</font><br />
        <form action="registrar.php" method="post" >
        <?php 
		if($_GET['error']=='name'){
	echo '<font color="#FF0000">Tienes que poner un nombre<br /></font>';
	}
		?>
        <b>Nombre:</b><br />
        <input type="text" name="nombre" id="input3" /><br />
                <?php 
		if($_GET['error']=='apelle'){
	echo '<font color="#FF0000">Tienes que poner un apelido<br /></font>';
	}
		?>
        <b>Apellido:</b><br />
        <input type="text" name="apellido" id="input3" /><br />
                <?php 
		if($_GET['error']=='meil'){
	echo '<font color="#FF0000">Falta el correo<br /></font>';
	}
		?>
        <b>Correo:</b><br />
       	<input type="email" name="correo" id="input3" /><br />
                <?php 
		if($_GET['error']=='pass'){
	echo '<font color="#FF0000">Pon un Password<br /></font>';
	}
		?>
                <b>Password:</b><br />
        <input type="password" name="pass" id="input3" /><br />
                <?php 
		if($_GET['error']=='rpass'){
	echo '<font color="#FF0000">Las claves no son iguales<br /></font>';
	}
		?>
        <b>Repetir Password:</b><br />
        <input type="password" name="rpass" id="input3" /><br />
        <input type="submit" value="Registrar" id="input2" /><br />
          <?php 
		if($_GET['error']=='existe'){
	echo '<font color="#ff0000">Prueba de nuevo o Intenta con otro correo<br /></font>';
	}
		?>
        </form>
        <?php } ?>
        </article>
    </section> 
    <aside>
<div id='publicaciones'><h2>Ultimas publicaciones </h2></div>
Noticias mas resientes
</aside>
</section>
<footer>
copiry@2012 | <a href="http://www.comocrearmiweb.com">comocrearmiweb.com</a> | Diseñado por Eriberto Peguero
</footer>
</body>
</html>