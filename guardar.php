<?php  

	include ("conexion.php");

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
                $query="INSERT INTO usuarios(cedula, nombre,apellido, direccion,telefono,email)VALUES ('$cedula','$nombre','$apellido','$direccion','$telefono','$email')";
        		$resultado= $conexion->query($query);
        		if ($resultado){
        			header("Location: tablalistado.php?id=1");
        		}
        		else
        		{
        		    $error = 'Error al ingresar el registro en la BD';
        			header("Location: formulariobrionesb.php?d=".$error);
        		}
            }
        } else {
            $error = 'Cédula incorrecta: '.$validador->getError();;
            header("Location: formulario.php?d=".$error);
        }

?>