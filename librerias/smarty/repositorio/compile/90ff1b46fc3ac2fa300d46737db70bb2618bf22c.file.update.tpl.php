<?php /* Smarty version Smarty-3.1.11, created on 2015-06-16 17:48:13
         compiled from "templates\plantillas\layout\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:240595580a7ad89e6f1-92954472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90ff1b46fc3ac2fa300d46737db70bb2618bf22c' => 
    array (
      0 => 'templates\\plantillas\\layout\\update.tpl',
      1 => 1434494321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240595580a7ad89e6f1-92954472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5580a7ad91b264_50578814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5580a7ad91b264_50578814')) {function content_5580a7ad91b264_50578814($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['PAGE']->value['vista']!=''){?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['PAGE']->value['vista'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>