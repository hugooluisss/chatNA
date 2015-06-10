<?php /* Smarty version Smarty-3.1.11, created on 2015-06-10 14:49:55
         compiled from "templates/plantillas/modulos/usuarios/mensajes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132291394557894e3768ef0-05026681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '615c04ed3406a6ed8c2c58fcb5a34cd6d9fee8f2' => 
    array (
      0 => 'templates/plantillas/modulos/usuarios/mensajes.tpl',
      1 => 1433965792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132291394557894e3768ef0-05026681',
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
  'unifunc' => 'content_557894e3798534_81259877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557894e3798534_81259877')) {function content_557894e3798534_81259877($_smarty_tpl) {?><div class="list-group">
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mensajes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<a href="#" class="list-group-item active">
		<h4 class="list-group-item-heading"><?php echo $_smarty_tpl->tpl_vars['row']->value['usuario'];?>
</h4>
		<p class="list-group-item-text"><?php echo $_smarty_tpl->tpl_vars['row']->value['mensaje'];?>
</p>
	</a>
<?php } ?>
</div><?php }} ?>