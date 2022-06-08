<?php session_start();error_reporting(E_ALL ^ E_NOTICE);
require_once('sesion.php');
 ?>
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
        <article id='titulo'><h2>Lista de noticias ordenadas por fecha de publiaccion</h2></article> 
        <?php
		include('conexion.php');
		mysql_select_db($db,$cn);
		$id= $_GET['id'];
		$query = "SELECT * FROM noticias";
		$consulta=mysql_query($query,$cn);
		while($str=mysql_fetch_assoc($consulta)){
		
		 ?>
        <section id='lis-noticias'><b><?php echo $str['titulo'];?></b><div><a href="edita-noticias.php?id=<?php echo $str['id_noticia']; ?>">Editar</a> | <a href="borrar.php?id=<?php echo  $str['id_noticia']; ?>">Borrar </a></section>
        <?php }mysql_free_result($consulta); ?>
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