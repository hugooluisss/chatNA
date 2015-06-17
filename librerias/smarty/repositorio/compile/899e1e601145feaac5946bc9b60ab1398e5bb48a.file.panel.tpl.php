<?php /* Smarty version Smarty-3.1.11, created on 2015-06-16 17:48:13
         compiled from "templates\plantillas\modulos\usuarios\panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:246585580a7adabe669-13951032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '899e1e601145feaac5946bc9b60ab1398e5bb48a' => 
    array (
      0 => 'templates\\plantillas\\modulos\\usuarios\\panel.tpl',
      1 => 1434494321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246585580a7adabe669-13951032',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5580a7adb24632_57701247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5580a7adb24632_57701247')) {function content_5580a7adb24632_57701247($_smarty_tpl) {?><div class="row">
	<div class="col-md-8 col-sm-12">
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
				<input type="checkbox" id="chkScroll" value="yes" checked="true"> <label for="chkScroll">Scroll automático</label>
				<div class="form-group">
					<label for="txtMensaje">Mensaje</label>
					<textarea id="txtMensaje" placeholder="Escribe tu mensaje" class="form-control" autofocus="true"></textarea>
				</div>
				<button id="btnMensaje" class="btn btn-primary">Enviar</button>
			</div>
		</div>
	</div>
</div><?php }} ?>