<?php 

$var = $con->real_escape_string;
$nombre = 'PEDRO';
$precio = 300.50;
$correo = 'ejemplo@hotmail.com';
$id = '';

//Consulta simple
$ins = $con->query(" INSERT INTO mitabla VALUES('','$nombre','$precio') ");

//Consulta preparada
$ins = $con->prepare(" INSERT INTO mitabla VALUES(?,?,?,?) ");
$ins->bind_param("isds",$id,$nombre,$precio,$correo);
$ins->execute();
$ins->close();

/*
i = integer
s = string
d = double
b = booleano
*/

$con->close();
?>

<?php
$id = 1;
$sel = $con->prepare("SELECT * FROM mitabla WHERE id = ?");
$sel->bind_param('i',$id);
$sel->execute();
$res = $sel->get_result();

?>

<table>
	<th>id estado</th>
	<th>nombre estado</th>
	<?php while($f = $res->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $f['id'] ?></td>
		<th><?php echo $f['nombre'] ?></th>
	</tr>
	<?php }
	$sel->close();
	$con->close();
	?>
</table>

<?php
$id = 1;
$sel = $con->prepare("SELECT id,estdo FROM mitabla WHERE id = ?");
$sel->bind_param('i',$id);
$sel->execute();
$sel = $sel->bind_result($id,$estado);

?>

<table>
	<th>id estado</th>
	<th>nombre estado</th>
	<?php while($sel->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $id ?></td>
		<th><?php echo $estado ?></th>
	</tr>
	<?php }
	$sel->close();
	$con->close();
	?>
</table>
