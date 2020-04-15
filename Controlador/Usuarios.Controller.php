<?php

	/**
	 * 
	 */
	include ('./Modelo/Class.CrearUsuario.php');
	class CrearUsuario
	{
		
		function __construct()
		{
			# code...
		}

		public function guardar()
		{
			$guardaruser=new Inventarios();

			$user=$_POST['Usuario'];
			$apellido =$_POST['Apellido'];
			$pass=$_POST['Password'];
			$fecha=$_POST['FechaNac'];
			$tipo=$_POST['Estado'];

			$resultado=$guardarinvent->GuardarUsuarios($user, $apellido, $pass, $fecha,$tipo);

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