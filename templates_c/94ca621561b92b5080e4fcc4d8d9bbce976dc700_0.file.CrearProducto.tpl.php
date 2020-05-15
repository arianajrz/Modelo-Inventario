<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-15 19:59:35
  from 'C:\xampp\htdocs\ModeloInventario-master1\Modelo-Inventario\templates\CrearProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebed887a322e4_70946514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94ca621561b92b5080e4fcc4d8d9bbce976dc700' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ModeloInventario-master1\\Modelo-Inventario\\templates\\CrearProducto.tpl',
      1 => 1589565572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebed887a322e4_70946514 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    $(document).ready(function() {
		$('select').material_select();
    });
	 
<?php echo '</script'; ?>
>

	<div class="row">
	  <div class="col s12  blue lighten-4">
		<h5 class="center-align">Crear Producto</h5>
	  </div>
	</div>

	<form class = "col s12 center-align" method="post" action="?controller=User&action=GuardarInvent">
		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">account_circle</i>
				<input placeholder = "Nombre" name="nombre"  id = "nombre" type = "text" class = "active validate" required />
				<label for = "nombre">Nombre</label>
			</div>
		</div>
		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">account_circle</i>
				<input placeholder = "Descripcion" name="descripcion"  id = "descripcion" type = "text" class = "active validate" required />
				<label for = "descripcion">Descripcion</label>
			</div>
		</div>
		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">account_circle</i>
				<input placeholder = "Precio" name="precio"  id = "precio" type = "text" class = "active validate" required />
				<label for = "precio">Precio</label>
			</div>
		</div>
		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">account_circle</i>
				<input placeholder = "Cantidad" name="cantidad"  id = "cantidad" type = "text" class = "active validate" required />
				<label for = "cantidad">Cantidad</label>
			</div>
		</div>

		<div class="row">
		  <div class="input-field col s12">
			<input type="submit" value="CREAR" class="btn col s12 blue">
		  </div>
		</div>
	</form><?php }
}
