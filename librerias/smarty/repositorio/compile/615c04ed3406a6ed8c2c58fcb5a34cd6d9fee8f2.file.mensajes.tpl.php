<?php /* Smarty version Smarty-3.1.11, created on 2017-08-01 12:06:37
         compiled from "templates/plantillas/modulos/usuarios/mensajes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12616372185980b51d3271a8-61375769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '615c04ed3406a6ed8c2c58fcb5a34cd6d9fee8f2' => 
    array (
      0 => 'templates/plantillas/modulos/usuarios/mensajes.tpl',
      1 => 1438092246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12616372185980b51d3271a8-61375769',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensajes' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5980b51d40c6c5_38472878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5980b51d40c6c5_38472878')) {function content_5980b51d40c6c5_38472878($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mensajes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<div class="well well-sm mensajeActivo" obj='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>
	<p><?php echo $_smarty_tpl->tpl_vars['row']->value['from'];?>
 dijo el <span class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['row']->value['hora'];?>
</span></p>
	<?php echo $_smarty_tpl->tpl_vars['row']->value['texto'];?>

	</div>
<?php } ?><?php }} ?>