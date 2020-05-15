<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-15 20:20:34
  from 'C:\xampp\htdocs\ModeloInventario-master1\Modelo-Inventario\templates\MenuTrab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebedd72a32743_93302867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6d61bfcee581e8a70af34e0232bd13f923fa351' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ModeloInventario-master1\\Modelo-Inventario\\templates\\MenuTrab.tpl',
      1 => 1589566818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebedd72a32743_93302867 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
	<div class="collection">
		<a href="?controller=Menu2&action=CargarOp&op2=CrearProducto" class="collection-item">Crear Producto</a>
		<a href="#!" class="collection-item">Entrada de Productos</a>
		<a href="#!" class="collection-item">Salida de Productos</a>
		<a href="#!" class="collection-item">Ajustes</a>
		<a href="?controller=Menu2&action=CargarOp&op2=Inventario General" class="collection-item">Inventario General</a>
		<a href="#!" class="collection-item">Buscar por Producto</a>
		<a href="#!" class="collection-item">Buscar por Entrada</a>
		<a href="#!" class="collection-item">Buscar por Salida</a>
		<a href="#!" class="collection-item">Buscar por Fecha</a>
	</div>
</div><?php }
}
