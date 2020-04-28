<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-25 06:51:58
  from 'C:\xampp\htdocs\Modelo-Inventario\templates\MenuAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea3c1ee4acbd6_71272420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec0608c7a7421d238419e40bfeeb229544c06b10' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Modelo-Inventario\\templates\\MenuAdmin.tpl',
      1 => 1587790270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea3c1ee4acbd6_71272420 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
	<div class="collection">
		 <a href="?controller=Menu&action=CargarOpcion&opcion=CrearUsuario" class="collection-item">Crear Usuario</a>
		 <a href="#!" class="collection-item">Habilitar / Deshabilitar</a>
		 <a href="#!" class="collection-item">Ver Inventario</a>
		 <a href="#!" class="collection-item">Productos con mas salidas</a>
		 <a href="#!" class="collection-item">Productos con menos salidas</a>
		  <a href="#!" class="collection-item">Productos agotados</a>
  </div>
</div><?php }
}
