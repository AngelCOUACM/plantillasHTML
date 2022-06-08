<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form" name="form" method="post" action="agregar.php">
  <fieldset><legend>Inserte los siguientes Datos</legend>
  
  <table width="254" border="0">
    <tr>
      <td width="74"><label for="nombre">Nombre:</label></td>
      <td width="170"><input type="text" name="nombre" id="nombre" /></td>
    </tr>
    <tr>
      <td><label for="titulo">Titulo:</label></td>
      <td><input type="text" name="titulo" id="titulo" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label for="comentario">Comentario:</label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><textarea name="comentario" id="comentario" cols="30" rows="10"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="submit" name="button" id="button" value="Comentar" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>

  </fieldset>
  
</form>


</body>
</html>