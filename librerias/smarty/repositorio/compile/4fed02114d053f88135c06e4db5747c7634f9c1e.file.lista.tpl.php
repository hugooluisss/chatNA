<?php /* Smarty version Smarty-3.1.11, created on 2015-07-03 19:16:37
         compiled from "templates\plantillas\modulos\usuarios\lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26849559725e5f204f7-01960317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fed02114d053f88135c06e4db5747c7634f9c1e' => 
    array (
      0 => 'templates\\plantillas\\modulos\\usuarios\\lista.tpl',
      1 => 1435967863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26849559725e5f204f7-01960317',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuarios' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_559725e60953c0_59446372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559725e60953c0_59446372')) {function content_559725e60953c0_59446372($_smarty_tpl) {?><div>
	<table class="display" id="tblUsuarios" cellspacing="0" width="100%">
		<thead>
			<tr>
			    <th>Nombre</th>
			    <th>Último acceso</th>
			    <th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['user'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['ultimoAcceso'];?>
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