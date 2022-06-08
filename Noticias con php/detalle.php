<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);
require_once('conexion.php');  
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
    <div id='titulo'><h1>www.comocrearmiweb.com</h1></div><img src="imagen/<?php echo $_SESSION['img']; ?>" class="avatar">
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
      <?php 
	  $id=$_GET['id'];
	  mysql_select_db($db,$cn);
$query = "SELECT * FROM noticias WHERE id_noticia='$id'";
$consulta = mysql_query($query,$cn);
if($row=mysql_fetch_assoc($consulta))
{
?>
        <article id='titulo'><h2><?php echo $row['titulo']; ?></h2>
        </article>
        <article id='foto'><img src="imagen/<?php echo $row['imagen']; ?>" /></article>      
        <article id='noticias'><h2><?php echo $row['descripcion']; ?></h2>
          <br>
          <?php echo $row['texto']; ?>
          <div id="mensaje">
<a href="index.php">Ir a la Pagina Principal</a>
               </div>
               <?php }mysql_free_result($consulta); ?>
 
      </section>
     

<aside>
  <div id='publicaciones'><h2>Ultimas publicaciones </h2></div>  
<?php  require_once('titulares.php');?>
</div></a>
</aside>
</section>
<footer>
copiry@2012 | <a href="http://www.comocrearmiweb.com">comocrearmiweb.com</a> | Diseñado por Eriberto Peguero
</footer>
</body>
</html>

