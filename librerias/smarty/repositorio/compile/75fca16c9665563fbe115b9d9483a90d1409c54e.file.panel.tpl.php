<?php /* Smarty version Smarty-3.1.11, created on 2015-06-10 12:43:04
         compiled from "templates/plantillas/modulos/usuarios/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8869979785578591ab43f75-82357392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75fca16c9665563fbe115b9d9483a90d1409c54e' => 
    array (
      0 => 'templates/plantillas/modulos/usuarios/panel.tpl',
      1 => 1433958183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8869979785578591ab43f75-82357392',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5578591ab626e5_08915543',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5578591ab626e5_08915543')) {function content_5578591ab626e5_08915543($_smarty_tpl) {?><div class="row">
	<div class="col-md-8">
		<div id="wowza" style="width:100%; margin:0 auto;text-align:center"></div>
	</div>
	<div class="col-md-4">
		<div class="row">
			<div class="col-md-12">
				<div id="conversacion">&nbsp;</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label for="txtMensaje">Mensaje</label>
					<textarea id="txtMensaje" placeholder="Escribe tu mensaje" class="form-control" autofocus="true"></textarea>
				</div>
				<button id="btnMensaje" class="btn btn-primary">Enviar</button>
			</div>
		</div>
	</div>
</div><?php }} ?>