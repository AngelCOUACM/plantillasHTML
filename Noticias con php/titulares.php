<?php 

session_start();

include('conexion.php');

mysql_select_db($db,$cn);

$query = "SELECT * FROM noticias";
$datos_public ='<script type="text/javascript"><!--
google_ad_client = "ca-pub-4733374939079614";
/* barra lateral */
google_ad_slot = "2148225281";
google_ad_width = 300;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';
$consulta = mysql_query($query,$cn);

while($row=mysql_fetch_assoc($consulta))

{

$id= $row['id_noticia'];



$row['titulo'].'<br />';	

{ ?>

<a href="detalle.php?id=<?php echo $row['id_noticia']; ?>"><div id="titulares">

<?php echo $row['titulo']; ?>

</div></a>
<?php }}mysql_free_result($consulta); ?>
<br />
<?php echo $datos_public;echo $datos_public;?>