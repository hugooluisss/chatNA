<?php /* Smarty version Smarty-3.1.11, created on 2015-07-06 14:58:18
         compiled from "templates\plantillas\modulos\usuarios\ubicacion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5625559adddaba2fa0-36924011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '774b46ae6f18d5cb9f84c450c50ba6bf74726dfe' => 
    array (
      0 => 'templates\\plantillas\\modulos\\usuarios\\ubicacion.tpl',
      1 => 1436211842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5625559adddaba2fa0-36924011',
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
  'unifunc' => 'content_559adddac73113_03313674',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559adddac73113_03313674')) {function content_559adddac73113_03313674($_smarty_tpl) {?><div class="row">
	<h2>Conexiones activas</h2>
</div>

<div class="row">
	<div id="mapa" class="col-lg-12" style="height: 400px;"></div>
</div>

<div class="row">
	<table class="display" id="tblUsuarios" cellspacing="0">
		<thead>
			<tr>
			    <th style="width: 15%;">Usuario</th>
			    <th style="width: 15%;">Último acceso</th>
			    <th>Dirección</th>
			    <th>Marca</th>
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
					<td id="pos<?php echo $_smarty_tpl->tpl_vars['row']->value['idUsuario'];?>
"></td>
					<td>
						<input type="button" value="Ubicar" id="btnPos<?php echo $_smarty_tpl->tpl_vars['row']->value['idUsuario'];?>
"/>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div><?php }} ?>