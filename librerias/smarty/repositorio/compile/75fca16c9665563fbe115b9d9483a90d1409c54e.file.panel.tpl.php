<?php /* Smarty version Smarty-3.1.11, created on 2015-07-05 01:46:04
         compiled from "templates/plantillas/modulos/usuarios/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8869979785578591ab43f75-82357392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75fca16c9665563fbe115b9d9483a90d1409c54e' => 
    array (
      0 => 'templates/plantillas/modulos/usuarios/panel.tpl',
      1 => 1436074320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8869979785578591ab43f75-82357392',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5578591ab626e5_08915543',
  'variables' => 
  array (
    'evento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5578591ab626e5_08915543')) {function content_5578591ab626e5_08915543($_smarty_tpl) {?><div class="row">
	<h2><?php echo $_smarty_tpl->tpl_vars['evento']->value['nombre'];?>
</h2>
	<p><small><?php echo $_smarty_tpl->tpl_vars['evento']->value['descripcion'];?>
</small></p>
</div>
<div class="row">
	<div class="col-md-8 col-sm-12 hidden-xs">
		<div id="wowza" style="width:100%; margin:0 auto;text-align:center"></div>
	</div>
	<div class="col-md-4 col-sm-12">
		<div class="row">
			<div class="col-md-12">
				<div id="conversacion"></div>
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-6">
				<input type="checkbox" id="chkScroll" value="yes" checked="true"> <label for="chkScroll">Mostrar siempre el último mensaje</label>
				<div class="form-xgroup">
					<label for="txtMensaje">Mensaje</label>
					<textarea id="txtMensaje" placeholder="Escribe tu mensaje" class="form-control" autofocus="true"></textarea>
				</div>
				<button id="btnMensaje" class="btn btn-primary">Enviar</button>
			</div>
		</div>
	</div>
</div>

<input type="hidden" id="evento" name="evento" value="<?php echo $_smarty_tpl->tpl_vars['evento']->value['id'];?>
"/><?php }} ?>