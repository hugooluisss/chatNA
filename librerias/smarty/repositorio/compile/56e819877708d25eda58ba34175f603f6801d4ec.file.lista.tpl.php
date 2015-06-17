<?php /* Smarty version Smarty-3.1.11, created on 2015-06-16 21:26:59
         compiled from "templates\plantillas\modulos\eventos\lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203445580d89e9bd6b5-97491904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56e819877708d25eda58ba34175f603f6801d4ec' => 
    array (
      0 => 'templates\\plantillas\\modulos\\eventos\\lista.tpl',
      1 => 1434508015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203445580d89e9bd6b5-97491904',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5580d89ea46774_17329666',
  'variables' => 
  array (
    'eventos' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5580d89ea46774_17329666')) {function content_5580d89ea46774_17329666($_smarty_tpl) {?><div>
	<table class="display" id="tblEventos" cellspacing="0" width="100%">
		<thead>
			<tr>
			    <th>Nombre</th>
			    <th>Descripción</th>
			    <th>Fecha</th>
			    <th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eventos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['descripcion'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['fecha'];?>
</td>
					<td>
						<div class="btn-group">
							<button type="button" class="btn btn-default btn-xs dropdown-toggle btn-info" data-toggle="dropdown">
								Acciones
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#" class="btnModificar" data='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>Modificar</a></li>
								<li><a href="#" class="btnEliminar" data='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>Eliminar</a></li>
							</ul>
						</div>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div><?php }} ?>