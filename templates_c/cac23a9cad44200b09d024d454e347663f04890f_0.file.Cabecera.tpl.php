<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-14 03:12:27
  from 'C:\xampp\htdocs\ModeloInventario-master1\ModeloInventario-master\templates\Cabecera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e950dfb7bdde9_08402963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cac23a9cad44200b09d024d454e347663f04890f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ModeloInventario-master1\\ModeloInventario-master\\templates\\Cabecera.tpl',
      1 => 1586826165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e950dfb7bdde9_08402963 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row  blue lighten-3">
	<div class=" col s4 " >
		<p class="white-text  "> <strong>USUARIO: <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</strong> </p>
		<p class="white-text  "> <strong>PUESTO: <?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
</strong> </p>
	</div>
	<div class=" col s4" >
		<img class="materialboxed " data-caption="Usuario" width="100"  src="Recursos/FotosTrab/php.png">
	</div>
	<div class=" col s4 ">
		<a href="?controller=Salir&action=CerrarSesion" class="brand-logo white-text  ">Salir</a>
	</div>
</div><?php }
}
