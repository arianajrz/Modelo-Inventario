<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-19 03:04:08
  from 'C:\xampp\htdocs\ModeloInventario-master1\Modelo-Inventario\templates\MenuAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec33088935ef5_44450625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6245e2defa1f4cd0eb3543d2617c6a9c314b1fcd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ModeloInventario-master1\\Modelo-Inventario\\templates\\MenuAdmin.tpl',
      1 => 1589850211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec33088935ef5_44450625 (Smarty_Internal_Template $_smarty_tpl) {
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
