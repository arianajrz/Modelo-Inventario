<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-21 02:00:04
  from 'C:\xampp\htdocs\ModeloInventario-master1\Modelo-Inventario\templates\Inventario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec5c4841bd158_10896504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbae33881de918611ae30ccdb22f8d72cbaa2349' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ModeloInventario-master1\\Modelo-Inventario\\templates\\Inventario.tpl',
      1 => 1590019198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec5c4841bd158_10896504 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    $(document).ready(function() {
		$('select').material_select();
    });
	 
<?php echo '</script'; ?>
>
<?php echo '<?php
						';?>
class VerInvent 
						{
							public function MuestraInventario()
							{	
								$mostrar = new Inventario();
								$lib = new Librerias();
								$smarty = new Smarty();

								{
									$datos=$mostrar->VerInventario();
									$tabla=$lib->PrepararSmarty($datos);
 
									$smarty->assing('Inventario' , $tabla); 
								}
			
								$smarty->assign('e','true');  
								$smarty->assign('vista','Inventario'); 
								$smarty->assign('usuario',$_SESSION['user']); 
								$smarty->assign('tipo',$_SESSION['tipo']); 
								$smarty->display('Master.tpl');
							}
						}
					<?php echo '?>';?>

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
					
						<tr>
							<td><?php echo '<?php ';?>
echo $mostrar['id'] <?php echo '?>';?>
</td>
							<td><?php echo '<?php ';?>
echo $mostrar['Nombre'] <?php echo '?>';?>
</td>
							<td><?php echo '<?php ';?>
echo $mostrar['Descricion'] <?php echo '?>';?>
</td>
							<td><?php echo '<?php ';?>
echo $mostrar['Precio'] <?php echo '?>';?>
</td>
							<td><?php echo '<?php ';?>
echo $mostrar['Cantidad'] <?php echo '?>';?>
</td>
						</tr> 
					
				</table>

			</div>
		</div>
	</form>

		<?php }
}
