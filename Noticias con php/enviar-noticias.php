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
        
        <div id="formulario"><br /><?php if($_GET['error']){ ?>
        <div id="mensaje">
		
	<?php if($_GET['error']=='si'){
		echo 'Noticia publicada correctamente';			}
		if($_GET['error']=='titulo'){echo 'Tienes que poner un titulo.';}
		if($_GET['error']=='img'){echo 'Tienes que Subir una imagen.';}
		if($_GET['error']=='description'){echo 'Falta la descripcion de la noticia';}
		if($_GET['error']=='noticia'){echo 'Tienes que poner una noticia';}
		if($_GET['error']=='no'){echo 'Revisa los datos algo salio mal';}
			
		}?> </div>
        <form action="procesar-noticias.php" method="post" enctype="multipart/form-data">
        <b>Titulo de la noticia</b><br />
        <input type="text" name="titulo" id="form1" /><br />
        <b>Seleciona una imagen</b><br />
        <input type="file" name="img" /><br />
        <b>Descripcion de la noticia</b><br />
        <textarea cols="50" rows="3" name="descripcion" id="texto1"></textarea><br />
        <b>Desarrollo de la noticia</b><br />
        <textarea cols="70" rows="10" name="noticia" id="texto"></textarea><br /><br />
        <input type="submit" value="PUBLICAR" id="submit" />
        <input type="reset" value="BORRAR TODO" id="submit"/>
        </form>
        
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