<?php /* Smarty version Smarty-3.1.11, created on 2015-10-02 19:46:15
         compiled from "templates/plantillas/modulos/eventos/admon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213388412955bd12523c70d2-51611316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97f46aa7843e2a721b200aa17ca8b7a7c42acbac' => 
    array (
      0 => 'templates/plantillas/modulos/eventos/admon.tpl',
      1 => 1443832746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213388412955bd12523c70d2-51611316',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55bd12524d02e5_26065532',
  'variables' => 
  array (
    'evento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bd12524d02e5_26065532')) {function content_55bd12524d02e5_26065532($_smarty_tpl) {?><div class="row">
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