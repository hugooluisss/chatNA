<?php /* Smarty version Smarty-3.1.11, created on 2015-08-02 09:11:07
         compiled from "templates/plantillas/modulos/usuarios/coordinador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48954398855be24fbe65d29-95841697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e96415375c628d06bf2c84004830c560b2cec4b' => 
    array (
      0 => 'templates/plantillas/modulos/usuarios/coordinador.tpl',
      1 => 1438452424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48954398855be24fbe65d29-95841697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'evento' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55be24fc02c088_32800006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55be24fc02c088_32800006')) {function content_55be24fc02c088_32800006($_smarty_tpl) {?><div class="row">
	<h2><?php echo $_smarty_tpl->tpl_vars['evento']->value['nombre'];?>
</h2>
	<p><small>Mensajes al coordinador</small></p>
</div>
<div class="row">
	<div class="col-lg-12">
		<div id="conversacion"></div>
		<div class="row">
			<div class="col-lg-12">
				<input type="checkbox" id="chkScroll" value="yes" checked="true"> <label for="chkScroll">Mostrar siempre el último mensaje</label>
			</div>
		</div>
	</div>
</div>

<input type="hidden" id="evento" name="evento" value="<?php echo $_smarty_tpl->tpl_vars['evento']->value['id'];?>
"/><?php }} ?>