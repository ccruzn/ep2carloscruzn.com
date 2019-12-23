<!DOCTYPE html>
<html>
<head>
	<title>Tabla De Registros </title>
	
</head>
<style type="text/css">
body{
    
    padding:10px 400px;
}
 table {
  border-collapse: collapse;
  width: 100%;
}
th {
  background-color: #f8f9fa;
  color: black;
}
th, td {
  padding: 8px;
  text-align: center;
  border-bottom: 1px solid #36FF00;
}

tr:hover 
{
  background-color:#DFDFDF;}

input {
    float: left;
    width: 320px;
    padding: 10px 32px;
}
}
form {
	input {
    float: center;
    width: 320px;
    padding: 120px;
}
 
button {
    float: center;
    width: 250px;
	}
}

</style>
<body>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-2">
				    <div>
    					 <?php 
    					    if (isset($_GET['d'])){ 
    					        echo "<td colspan='2'><div class='alert alert-info'>";
    					        $error = $_GET['d'];
    					        echo $error;
    					        echo "</div></td>";
    					    } 
    					 ?>
					</div>
					<table class="table table-hover">
						<thead>
							<tr>
								<?php if ($_GET['id']=='1') { ?>
									
								<?php } ?>
								<th colspan="8"> Listado de Personas</th><br/><br/>
							</tr>
							<tr>
								<th>Id</th>
								<th>Cédula</th>
								<th>Nombres</th>
								<th>Apellidos</th>
								<th>Dirección</th>
								<th>Teléfono</th>
								<th>Email</th>
								<th colspan="2"></th>
							</tr>
						</thead>

						<tbody> 
							<?php
								include("conexion.php");
								$query="SELECT*FROM usuarios";
								$resultado= $conexion->query($query);
								while ($row=$resultado->fetch_assoc()){
							?>

							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['cedula']; ?></td>
								<td><?php echo $row['nombre']; ?></td>
								<td><?php echo $row['apellido']; ?></td>
								<td><?php echo $row['direccion']; ?></td>
								<td><?php echo $row['telefono']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<?php if ($_GET['id']=='1'){ ?>
									<td><a href="modificar.php?cedula=<?php echo $row['cedula']; ?>" class="btn btn-warning">Modificar</a></td>
								<?php } ?>
							</tr>
							<?php
								}
							?>
						
						</tbody>
					</table>
					<br>
								<br>
					<input name="REGISTROS" type="button" class="btn"  value="NUEVO" onclick="location.href='formulario.php'"/>
								<br>
								<br>
					
				</div>
			</div>
		</div>
	</section>
</body>
</html>