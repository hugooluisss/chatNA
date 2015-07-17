<?php /* Smarty version Smarty-3.1.11, created on 2015-07-16 20:58:44
         compiled from "templates\plantillas\modulos\eventos\admon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1197155a8578d764f85-73979689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f85a38440ebd2ebfcf6d11c9cb86889391041540' => 
    array (
      0 => 'templates\\plantillas\\modulos\\eventos\\admon.tpl',
      1 => 1437098322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1197155a8578d764f85-73979689',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55a8578d7f28f6_07580659',
  'variables' => 
  array (
    'evento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a8578d7f28f6_07580659')) {function content_55a8578d7f28f6_07580659($_smarty_tpl) {?><div class="row">
<h2>Panel de administración del evento <b>"<?php echo $_smarty_tpl->tpl_vars['evento']->value->getNombre();?>
"</b></h2>
</div>
<div class="row">
	<div class="col-lg-9">
		<h3>Mensajes</h3>
		<div id="conversacionAdmon"></div>
		<input type="checkbox" id="chkScroll" value="yes" checked="true"> <label for="chkScroll">Mostrar siempre el último mensaje</label>
	</div>
	<div class="col-lg-3">
		<h3>Conectados</h3>
		<div id="conectados"></div>
	</div>
</div>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['evento']->value->getId();?>
" id="id" name="id"/><?php }} ?>