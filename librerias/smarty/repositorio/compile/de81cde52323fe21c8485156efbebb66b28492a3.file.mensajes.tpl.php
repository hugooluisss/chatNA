<?php /* Smarty version Smarty-3.1.11, created on 2015-06-16 17:48:14
         compiled from "templates\plantillas\modulos\usuarios\mensajes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43235580a7aeec3bc1-15082022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de81cde52323fe21c8485156efbebb66b28492a3' => 
    array (
      0 => 'templates\\plantillas\\modulos\\usuarios\\mensajes.tpl',
      1 => 1434494321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43235580a7aeec3bc1-15082022',
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
  'unifunc' => 'content_5580a7af003219_47353427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5580a7af003219_47353427')) {function content_5580a7af003219_47353427($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mensajes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<div class="well well-lg">
	<p><?php echo $_smarty_tpl->tpl_vars['row']->value['from'];?>
 dijo el <span class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['row']->value['hora'];?>
</span></p>
	<?php echo $_smarty_tpl->tpl_vars['row']->value['texto'];?>

	</div>
<?php } ?><?php }} ?>