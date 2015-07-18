<?php /* Smarty version Smarty-3.1.11, created on 2015-07-17 18:24:07
         compiled from "templates\plantillas\modulos\eventos\conectados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186055a85ad474b888-20142715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc092832d3e85998069718dd664b71b50d4f5960' => 
    array (
      0 => 'templates\\plantillas\\modulos\\eventos\\conectados.tpl',
      1 => 1437175445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186055a85ad474b888-20142715',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55a85ad47b71e0_18219097',
  'variables' => 
  array (
    'usuarios' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a85ad47b71e0_18219097')) {function content_55a85ad47b71e0_18219097($_smarty_tpl) {?><ul class="list-group">
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<li class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo $_smarty_tpl->tpl_vars['row']->value->getNombre();?>
</h4>
			<p class="list-group-item-text"><small><?php echo (($tmp = @$_smarty_tpl->tpl_vars['row']->value->getUltimoAcceso())===null||$tmp==='' ? "nunca" : $tmp);?>
</small></p>
		</li>
	<?php } ?>
</ul><?php }} ?>