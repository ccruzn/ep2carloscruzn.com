<!DOCTYPE html>
<html>
<head>
	<title>Insertar</title>
	
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
	<center>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-2">
					<div>
						<table>
							<tr>
								
								
							</tr>
							<tr>
							 <?php 
							    if (isset($_GET['d'])){ 
							        echo "<td colspan='2'><div class='alert alert-info'>";
							        $error = $_GET['d'];
							        echo $error;
							        echo "</div></td>";
							    } 
							 ?>
	
						</tr>

						</table>
					</div>
					<div class="card">
						<div class="card-header bg-primary text-white">
							<H1>Ingreso de datos</H1>
						</div>
						<div class="card-body">
							<form action=guardar.php method="POST">
								<input type="text" class="form-control" onkeypress="return permite(event, 'num')" required name="cedula" placeholder="Cédula..." maxlength="10" value="">
								<br>
								<br>
								<input type="text" class="form-control" onkeypress="return permite(event, 'car')" required name="nombre" placeholder="Nombre..." value="">
								<br>
								<br>
								<input type="text" class="form-control" onkeypress="return permite(event, 'car')" required name="apellido" placeholder="Apellido..." value="">
								<br>
								<br>
								<input type="text" class="form-control" required name="direccion" placeholder="Direccién..." value="">
								<br>
								<br>
								<input type="text" class="form-control" onkeypress="return permite(event, 'num')" name="telefono" placeholder="Teléfono..." maxlength="9" value="">
								<br>
								<br>
								<input type="email" class="form-control" name="email" placeholder="Email..." value=""></br>
								<br>
								<br>
								<input type="submit" class="btn btn-primary" value="VALIDAR"/><br/>
								<br>
								
								<input name="REGISTROS" type="button" class="btn"  value="REGISTROS" onclick="location.href='tablalistado.php?id=2'"/>
								<br>
								<br>
								<input name="MODIFICAR" type="button" class="btn"  value="MODIFICAR" onclick="location.href='tablalistado.php?id=1'"/>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	</center>
</body>
</html>