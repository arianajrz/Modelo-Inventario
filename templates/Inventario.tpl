<script>
    $(document).ready(function() {
		$('select').material_select();
    });
	 
</script>

	<div class="row">
	  <div class="col s12  blue lighten-4">
		<h5 class="center-align">Inventario</h5>
	  </div>
	</div>

	<form class = "col s12 center-align" method="post" action="?controller=User&action=Inventario General">
		<div class = "row">
			<div class = "input-field col s12">
				<table border="1">
					<tr>
						<td>id</td>
						<td>Nombre</td>
						<td>Descrpcion</td>
						<td>Precio</td>
						<td>Cantidad</td>
					</tr>
					<?php 
						$sql="SELECT * from `usuarios";
						$result=mysqli_query($conexion,$sql);

						while($mostrar=mysqli_fetch_array($result)){
						?>

						<tr>
							<td><?php echo $mostrar['id'] ?></td>
							<td><?php echo $mostrar['Nombre'] ?></td>
							<td><?php echo $mostrar['Descricion'] ?></td>
							<td><?php echo $mostrar['Precio'] ?></td>
							<td><?php echo $mostrar['Cantidad'] ?></td>
						</tr> 
					<?php 
					}
					?>
				</table>

			</div>
		</div>
	</form>

		