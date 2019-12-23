<?php  

	include ("conexion.php");
		$id= $_REQUEST['id'];
		$cedula= $_REQUEST['cedula'];
		$cedula= $_POST['cedula'];
		$nombre= $_POST['nombre'];
		$apellido= $_POST['apellido'];
		$direccion= $_POST['direccion'];
		$telefono= $_POST['telefono'];
		$email= $_POST['email'];
		$error = '';
		
		/*Validaciones*/
		require('ValidarIdentificacion.php');
        $validador = new ValidarIdentificacion();
        
        if ($validador->validarCedula($cedula) && strlen($cedula)==10 ) {
            if (strlen($nombre)>0 && strlen($apellido)>0){
        		$query="UPDATE usuarios SET cedula='$cedula',nombre='$nombre',apellido='$apellido',direccion='$direccion',telefono='$telefono',email='$email' WHERE id='$id'";
        		
        		$resultado= $conexion->query($query);
        		if ($resultado){
        			header("Location: tablalistado.php?id=1");
        		}
        		else
        		{
        			$error = "No se pudo realizar la modificación";
        			header("Location: tablalistado.php?id=1&d=".$error);
        		}
            }
        } else {
            $error = 'Cédula incorrecta: '.$validador->getError();;
            header("Location: tablalistado.php?id=1&d=".$error);
        }
?>