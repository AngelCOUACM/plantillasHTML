<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="ajaxupload.js"></script>
<link href="style/sube-foto.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
    $(document).ready(function(){
 
        var button = $('#upload'), interval;
        new AjaxUpload(button,{
            action: 'procesa.php',
            name: 'image',
            onSubmit : function(file, ext){
                // cambiar el texto del boton cuando se selecicione la imagen
                button.text('Subiendo');
                // desabilitar el boton
                this.disable();
 
                interval = window.setInterval(function(){
                    var text = button.text();
                    if (text.length < 11){
                        button.text(text + '.');
                    } else {
                        button.text('Subiendo');
                    }
                }, 200);
            },
            onComplete: function(file, response){
                button.text('Subir Foto');
 
                window.clearInterval(interval);
 
                // Habilitar boton otra vez
                this.enable();
 
                // Añadiendo las imagenes a mi lista
 
                if($('#gallery li').length == 0){
                    $('#gallery').html(response).fadeIn("fast");
                    $('#gallery li').eq(0).hide().show("slow");
                }else{
                    $('#gallery').prepend(response);
                    $('#gallery li').eq(0).hide().show("slow");
                }
            }
        });
 
        // Listar  fotos que hay en mi tabla
        $("#gallery").load("procesa.php?action=listFotos");
    });
 
</script>
<?php

$cn = mysql_connect("localhost","root","");
mysql_select_db('noticiero', $cn);
 
if($_GET['action'] == 'listFotos'){
 
    $query = mysql_query("SELECT * FROM fotos ORDER BY id_img DESC", $cn);
    while($row = mysql_fetch_array($query))
    {
        echo  '<li>
                <img src="photos/'.$row['nombre_foto'].'" />
                <span>'.$row['nombre_foto'].'</span>
            </li>';
    }
 
}else
{
    $destino = "imagen/";
    if(isset($_FILES['image'])){
 
        $nombre = $_FILES['image']['name'];
        $temp   = $_FILES['image']['tmp_name'];
 
        // subir imagen al servidor
        if(move_uploaded_file($temp, $destino.$nombre))
        {
            $query = mysql_query("INSERT INTO imagen VALUES('','".$nombre."')" ,$cn);
        }
 
        echo  '<li>
                <img src="photos/'.$nombre.'" />
                <span>'.$nombre.'</span>
            </li>';
    }
}
?>

<div id="content">
        <a href="javascript:;" id="upload">Subir Foto</a>
        
            <!-- Cargar Fotos -->
        </ul>
    </div>

