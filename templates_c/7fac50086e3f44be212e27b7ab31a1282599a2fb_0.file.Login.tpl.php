<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-31 22:14:20
  from 'C:\xampp\htdocs\ModeloInventario-master1\ModeloInventario-master\templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e83a49c40c439_65583142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fac50086e3f44be212e27b7ab31a1282599a2fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ModeloInventario-master1\\ModeloInventario-master\\templates\\Login.tpl',
      1 => 1585685648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e83a49c40c439_65583142 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    $(document).ready(function() {
    $('select').material_select();
    });
<?php echo '</script'; ?>
>

<div class="container">
	<div style="height:50px"></div>

	<div class="row">
	  <div class="col s12    orange lighten-1">
		<h5 class="center-align">REGISTRO</h5>
	  </div>
	</div>

	<form class = "col s12 center-align" method="post" action="?controller=User&action=Login">
		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">account_circle</i>
				<input placeholder = "Nombre de Usuario" name="usuario"  id = "usuario" type = "text" class = "active validate" required />
				<label for = "usuario">Usuario</label>
			</div>
		</div>
		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">vpn_key</i>
				<input placeholder = "Password de Usuario" name="pass"  id = "pass" type = "password" class = "active validate" required />
				<label for = "pass">Password</label>
			</div>
		</div>
		
		<div class="row">
			<div class = "input-field col s4">
				<label for = "tipo">Tipo de usuario</label>
				<i class = "material-icons prefix">work</i>
			</div>
			<div class = "input-field col s4">
				   <select class = "browser-default" name="tipo" id="tipo" >
					  <option value = "Trabajador">Trabajador</option>
					  <option value = "Administrador">Administrador</option>
				   </select>
			</div>
		</div>

		<div class="row">
		  <div class="input-field col s12">
			<input type="submit" value="INGRESAR" class="btn col s4  teal darken-1">
		  </div>
		</div>
	</form>
</div><?php }
}
