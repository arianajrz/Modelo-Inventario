<?php

	/**
	 * 
	 */
	//include ('./Modelo/Class.CrearUsuario.php');
	class Us
	{
		
		function __construct()
		{
			# code...
		}

		public function guardar()
		{
			$guardaruser=new CrearUsuario();

			$nombre=$_POST['nombre'];
			$apellido =$_POST['apellido'];
			$pass=$_POST['pass'];
			//$fecha=$_POST['fecha'];
			$tipo=$_POST['tipo'];

			$resultado=$guardaruser->GuardarUsuario($nombre, $apellido, $pass,$tipo);

			if ($resultado)
			{
				echo "Producto Agregado";
			}
			else
			{
				echo "Producto no agregado";
			}
		}
	}
?>
