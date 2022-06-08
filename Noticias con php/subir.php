 <?php 
 require_once('conexion.php');
error_reporting(E_ALL ^ E_NOTICE);
  $id=$_GET['id'];  
$directorio = $_SERVER['DOCUMENT_ROOT'].'imagen/';
 
    // Recibo los datos de la imagen
	$nombre = $_FILES['img']['name'];
  $tipo = $_FILES['img']['type'];
       $tamano = $_FILES['img']['size'];
    // Muevo la imagen desde su ubicación
    // temporal al directorio definitivo
    move_uploaded_file($_FILES['img']['tmp_name'],$directorio.$nombre);
	mysql_select_db($db,$cn);
?>