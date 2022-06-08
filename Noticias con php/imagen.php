<?php 
$img = array('<img src="imagen/Imagen1.jpg">','<img src="imagen/Imagen2.PNG">','<img src="imagen/Imagen3.jpg">','<img src="imagen/Imagen4.jpg">');
$imagen = array_rand($img,2);
foreach($imagen as $imagen);
{
	echo $img[$imagen];
}
?>