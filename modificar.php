<!DOCTYPE html>
<html>
<head>
	<title>Modificar</title>
	
	<script src="validaciones.js"></script>
</head>
<style type="text/css">
body{
    background: #FDFF7F;
    padding:10px 400px;
}

form {
    text-align: center;
    background: #ffffff;
}
 
label {
    display: inline-block;
    float: center;
    width: 80px;
    padding-right: 10px 32px;
}
 
input {
    float: center;
    width: 320px;
    padding: 10px 32px;
}
 
button {
    float: right;
    width: 150px;

}   
h1,div{
     text-align: center;
      background-color: #ffffff;
} 

</style>
<body>
	<section>
		<?php
			$cedula=$_REQUEST['cedula'];
			include("conexion.php");
			$query="SELECT*FROM usuarios WHERE cedula='$cedula'";
			$resultado= $conexion->query($query);
			$row=$resultado->fetch_assoc();
		?>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-2">
					<div class="card">
						<div class="card-header bg-primary text-white">
							Modificar datos
						</div>
						<div class="card-body">
							<form action="modificarguardar.php?cedula=<?php echo $row['cedula']; ?>" method="POST">		
								<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>"/>
								<br>
								<br>
								<b>Cédula</b> <input type="text" class="form-control" name="cedula" placeholder="Cédula..." onkeypress="return permite(event, 'num')" maxlength='10' value="<?php echo $row['cedula']; ?>"/>
								<br>
								<br>
								<b>Nombre</b> <input type="text" class="form-control" name="nombre" placeholder="Nombre..." onkeypress="return permite(event, 'car')" value="<?php echo $row ['nombre']; ?>"/>
								<br>
								<br>
								<b>Apellido</b> <input type="text" class="form-control" name="apellido" placeholder="Apellido..." onkeypress="return permite(event, 'car')" value="<?php echo $row ['apellido']; ?>"/>
								<br>
								<br>
								<b>Dirección</b> <input type="text" class="form-control" name="direccion" placeholder="Dirección..." value="<?php echo $row ['direccion']; ?>"/>
								<br>
								<br>
								<b>Teléfono</b> <input type="text" class="form-control" name="telefono" placeholder="Teléfono..." onkeypress="return permite(event, 'num')" maxlength='9' value="<?php echo $row ['telefono']; ?>"/>
								<br>
								<br>
								<b>Email</b> <input type="email" class="form-control" name="email" placeholder="Email..." value="<?php echo $row ['email']; ?>"/><br/><br/>
								<br>
								<br>
								<input type="submit" class="btn btn-primary" value="ACTUALIZAR"/>
								<br>
								<br>
								<input name="REGISTROS" type="button" class="btn"  value="REGRESAR" onclick="location.href='tablalistado.php?id=1'"/>
								<br>
								<br>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>