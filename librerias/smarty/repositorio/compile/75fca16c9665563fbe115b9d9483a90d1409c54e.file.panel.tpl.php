<?php /* Smarty version Smarty-3.1.11, created on 2017-08-01 11:12:18
         compiled from "templates/plantillas/modulos/usuarios/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4148327455980a8625bd141-51592264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75fca16c9665563fbe115b9d9483a90d1409c54e' => 
    array (
      0 => 'templates/plantillas/modulos/usuarios/panel.tpl',
      1 => 1501596445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4148327455980a8625bd141-51592264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'evento' => 0,
    'medios' => 0,
    'medio' => 0,
    'medioDefecto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5980a8626602a6_11121828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5980a8626602a6_11121828')) {function content_5980a8626602a6_11121828($_smarty_tpl) {?><div class="row">
	<h2><?php echo $_smarty_tpl->tpl_vars['evento']->value['nombre'];?>
</h2>
	<p><small><?php echo $_smarty_tpl->tpl_vars['evento']->value['descripcion'];?>
</small></p>
	<div class="col-lg-2"><label for="sala">Medio de transmisión</label></div>
	<div class="col-lg-6">
		<select id="selMedio">
			<?php  $_smarty_tpl->tpl_vars['medio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['medio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['medios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['medio']->key => $_smarty_tpl->tpl_vars['medio']->value){
$_smarty_tpl->tpl_vars['medio']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['medio']->value['idMedio'];?>
" <?php if ($_smarty_tpl->tpl_vars['medio']->value['idMedio']==$_smarty_tpl->tpl_vars['medioDefecto']->value){?>selected<?php }?> data='<?php echo $_smarty_tpl->tpl_vars['medio']->value['json'];?>
'><?php echo $_smarty_tpl->tpl_vars['medio']->value['nombre'];?>
</option>
			<?php } ?>
		</select>
	</div>
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