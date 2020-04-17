<?php
	/**
	 * 
	 */

	//include('Class.Conexion.php');

	class CrearUsuarios
	{
		
		function __construct()
		{
			# code...
		}

		public function GuardarUsuario( $user, $apellido, $tipo, $pass)
		{
			$usuario = new Conexion();
			$query="INSERT INTO `usuarios`(`Nombre`, `Apellido`, `Tipo`, `Password`)  VALUES ('$user', '$apellido', '$tipo', '$pass') ";

			$consulta=$usuario->query($query);
			$usuario->close();
			return $consulta;
		}
	}
?>
