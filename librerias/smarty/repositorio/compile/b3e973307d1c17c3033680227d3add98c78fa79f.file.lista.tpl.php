<?php /* Smarty version Smarty-3.1.11, created on 2015-10-02 19:45:32
         compiled from "templates/plantillas/modulos/eventos/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74209154055818b63c273c8-39110619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3e973307d1c17c3033680227d3add98c78fa79f' => 
    array (
      0 => 'templates/plantillas/modulos/eventos/lista.tpl',
      1 => 1443832746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74209154055818b63c273c8-39110619',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55818b63c6fff4_35702799',
  'variables' => 
  array (
    'eventos' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55818b63c6fff4_35702799')) {function content_55818b63c6fff4_35702799($_smarty_tpl) {?><div>
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
						<?php if ($_smarty_tpl->tpl_vars['row']->value['estado']=='A'){?>
						<div class="btn-group">
							<button type="button" class="btn btn-default btn-xs dropdown-toggle btn-info" data-toggle="dropdown">
								Acciones
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#" class="btnModificar" data='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>Modificar</a></li>
								<li><a href="#" class="btnMedios" data='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>Medios</a></li>
								<li><a href="#" class="btnEliminar" data='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>Eliminar</a></li>
								<li><a href="#" class="btnAdmonEvento" data='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>Panel de administración</a></li>
							</ul>
						</div>
						<?php }?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div><?php }} ?>