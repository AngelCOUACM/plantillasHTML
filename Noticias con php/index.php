<?php 

session_start();

error_reporting(E_ALL ^ E_NOTICE);

require_once('conexion.php'); 

require_once('juego-registro.php'); 

  ?>

<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="utf-8" />

    <meta content="Aprender,c�mocrear,hacer,dise�ar,mi p�ginas web,con php,HTML,CSS,MySQL" name="keywords" />

    <title>como aprender a crear,hacer y dise�ar mi pagina web</title>

    <meta content="Tutoriales para aprender como crear,hacer,dise�ar a programar p�ginas web con HTML,CSS,PHP,MySQL" name="description" />

    

    <link rel="stylesheet" href="style/stylo.css" type="text/css" />

    <script type="text/javascript">



  var _gaq = _gaq || [];

  _gaq.push(['_setAccount', 'UA-37001040-1']);

  _gaq.push(['_trackPageview']);



  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();



</script>

</head>

<body>

<?php include_once("analyticstracking.php") ?>

<header>

    <div id="titulo"><h1>www.comocrearmiweb.com</h1></div>

	<?php if($_SESSION['name']){

		echo '<div id="sesion"><div id="sesion">'.$_SESSION['name']." ".$_SESSION['apelle'].'|| <a href="salir.php">Serrar Sesion</a></div></div>';

		}else{ ?>

    <div id='sesion'><div id='sesion'><a href="entrar-user.php">Inisiar Sesion</a> O <a href="login.php">Registrarme</a></div></div> 

    <?php } ?> 

</header>

<nav>

    <a href="index.php"><menu><strong>Home</strong></menu></a>

    <a href="aprender-a-programar-con-html.php"><menu><strong>Curso de HTML</strong></menu></a>

    <a href="aprender-a-programar-con-css.php"><menu><strong>Curso de CSS</strong></menu></a>

   <a href="aprender-a-programar-con-php.php"><menu><strong>Curso de PHP </strong></menu></a>

   <a href="aprender-a-programar-con-javascript.php"><menu><strong>Curso de javascript</strong></menu></a> <a href="aprender-a-programar-con-mysql.php"><menu><strong>Curso de MySQL</strong></menu></a>

        <?php if($_SESSION['niv']=='2'){echo '<a href="enviar-noticias.php"><menu>Administrar</menu></a>';} ?>

</nav>

<section id='cuerpo'>

          <section id='contenido'><?php do { ?>

        <article id='titulo'><h2><?php echo $row_noticias['titulo']; ?></h2>

        </article>

        <article id='foto'><script type="text/javascript"><!--

google_ad_client = "ca-pub-4733374939079614";

/* imagen */

google_ad_slot = "4362465289";

google_ad_width = 250;

google_ad_height = 250;

//-->

</script>

<script type="text/javascript"

src="http://pagead2.googlesyndication.com/pagead/show_ads.js">

</script></article>      

        <article id='noticias'><h2><?php echo $row_noticias['descripcion']; ?></h2>

          <br>

<br />
          <?php echo $row_noticias['texto']; ?><br />
          <div id="mensaje">

                <?php if ($pageNum_noticias > 0) { ?>

                    <a href="<?php printf("%s?pageNum_noticias=%d%s", $currentPage, max(0, $pageNum_noticias - 1), $queryString_noticias); ?>"> - Anterior</a>

                    <?php }?>

                <?php if ($pageNum_noticias < $totalPages_noticias) { ?>

                    <a href="<?php printf("%s?pageNum_noticias=%d%s", $currentPage, min($totalPages_noticias, $pageNum_noticias + 1), $queryString_noticias); ?>">Siguiente - </a>

                    <?php }?>

               </div>

            <div id="comentarios">

            <?php 

			mysql_select_db($db,$cn);

$query="SELECT * FROM comentarios WHERE id_noticia=$row_noticias[id_noticia]";

$consulta= mysql_query($query,$cn);

if($row_noticias['id_noticia']==0){

	echo 'No hay datos para mostrar';

}else{

while($row=mysql_fetch_assoc($consulta))

{

	echo '<article id="cuerpo-coment">';

	echo '<div>';

	echo '<font color="#0000CC">'.$row['nombre'].'</font><br />';

	echo '</div>';

	echo $row['texto'];

	echo '<div>';

	echo '<font size="-1" color="#666666">Publicado el dia '.$row['fecha'].'</font>';

	echo '</div>';

	echo '</article>';

	}mysql_free_result($consulta);

}

			

			?>

            </div>

         <?php if($_SESSION['name']){ ?>

                <article id="comentario">   

          	<form action="coment.php" method="post"><br /> <br />



         <?php if($_GET['error']=='opinion')

				{echo '<font color="#FF0000">Tienes que enviar un comentario</font>';}

				if($_GET['error']=='si'){echo '<font color="#FF0000">Gracias por dejarnos tu opinion</font>';} ?><br />

            <textarea  rows="3" cols="50" name="opinion" id='coment'></textarea><br />

            <input type="submit" value="Comentar" id="submit"/> 

            <input type="hidden" value="<?php echo $row_noticias['id_noticia']; ?>" name='id'>

            <input type="reset" value="Borrar Todo" id="submit" /><br />

            

            </form>

            <br /></article><?php } ?> 			

      </section>

      <?php } while ($row_noticias = mysql_fetch_assoc($noticias)); ?>



<aside>

  <div id='publicaciones'><h2>Ultimas publicaciones </h2></div>  

<?php  require_once('titulares.php');?>

<br />


</aside>

</section>

<footer>

copiry@2012 | <a href="http://www.comocrearmiweb.com">comocrearmiweb.com</a> | Dise�ado por Eriberto Peguero

</footer>

</body>

</html>

<?php

mysql_free_result($noticias);

?>

