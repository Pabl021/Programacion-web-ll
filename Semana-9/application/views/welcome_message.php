<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registro de datos</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}


	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	</style>
</head>
<body>

<div id="container">
	<h1>¡REGISTRO DE ESTUDIANTES!</h1>

	<div id="body">
		<form action="/index.php/empleado/guardarDatos" method="post">
			<h2>Digite la información que se le solicita.</h2>
			<input type="text" name="nombre" placeholder="NOMBRE" required="true"><br><br>
			<input type="text" name="apellido" placeholder="APELLIDO" required="true"><br><br>
			<input type="text" name="nacionalidad" placeholder="NACIONALIDAD" required="true"><br><br>
			<input type="submit" value="Guardar Datos">
		</form>
		</div>
</div>


 <!-- <?php
 //foreach ($consulta->result() as $fila) {
 //	echo $fila->nombre;
 //}
?>  -->

<table>

<tr>
	<th>ID</th>
	<th>NOMBRE</th>
	<th>APELLIDO</th>
	<th>NACIONALIDAD</th>
</tr>

<?php
 $query = $this->db->query('SELECT * FROM datos'); 
foreach ($query->result_array() as $row) 
{ ?>
<tr>
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['nombre'];?></td>
	<td><?php echo $row['apellido'];?></td>
	<td><?php echo $row['nacionalidad'];?></td>
</tr>
<?php
}
?>
</table>


</body>
</html>