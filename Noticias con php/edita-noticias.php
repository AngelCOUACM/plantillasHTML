<?php session_start();error_reporting(E_ALL ^ E_NOTICE);
require_once('sesion.php');
if($_SESSION['niv']=='')
{
header('Location: index.php');	
}else{
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Insertar Nuevas Noticias </title>
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
    <a href="index.php" title="Ir a la pagina principal" id="link"><menu>Home</menu></a>
    <a href="http://www.facebook.com"><menu>Facebook</menu></a>
    <a href="http://www.twitter.com"><menu>Twitter</menu></a>
        <?php if($_SESSION['niv']=='2'){echo '<a href="enviar-noticias.php"><menu>Administrar</menu></a>';} ?>
</nav>
<section id='cuerpo'>
    <section id='contenido'>
        <div id="titulo">
        <h1>Bienvenidos al sistema de publicaci&oacute;n de noticias</h1>        </div>  <br /><br />
        <?php
		include('conexion.php');
		mysql_select_db($db,$cn);
		$id= $_GET['id'];
		$query = "SELECT * FROM noticias WHERE id_noticia='$id'";
		$consulta=mysql_query($query,$cn);
		if($str=mysql_fetch_assoc($consulta)){		
		 ?>
        <div id="formulario"><br />
        
        <form action="update-noticias.php" method="post" enctype="multipart/form-data">
        <b>Titulo de la noticia</b><br />
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <input type="text" name="titulo" id="form1" value="<?php echo $str['titulo'];?>" /><br /><br /><img src="imagen/<?php echo $str['imagen'];?>" id="edita-noticia"/><br />Cambiar Imagen de Esta Noticia<br />
        <input type="file" name="img"><br />
       <b>Descripcion de la noticia</b><br />
        <textarea cols="50" rows="3" name="descripcion" id="coment"><?php echo $str['descripcion'];?></textarea><br />
        <b>Desarrollo de la noticia</b><br />
        <textarea cols="70" rows="10" name="noticia" id="coment"><?php echo $str['texto'];?></textarea><br /><br />
        <input type="submit" value="Actaulizar" id="submit" />
        </form>
        <?php }mysql_free_result($consulta); ?>
        </div> 
    </section> 
    <aside>
<div id='publicaciones'><h2>Administracion de noticias </h2></div>
<div><a href="lista-noticias.php" >Borrar Noticias</a></div>
<div><a href="lista-noticias.php">Editar Noticias</a></div>
<div><a href="enviar-noticias.php">Insertar Noticias</a></div>
</aside>
</section>
<footer>
copiry@2012 | <a href="http://www.comocrearmiweb.com">comocrearmiweb.com</a> | Diseñado por Eriberto Peguero
</footer>
</body>
</html>
<?php } ?>