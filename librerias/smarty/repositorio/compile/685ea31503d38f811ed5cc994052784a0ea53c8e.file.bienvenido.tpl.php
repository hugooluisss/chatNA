<?php /* Smarty version Smarty-3.1.11, created on 2017-08-01 09:29:19
         compiled from "templates/plantillas/modulos/usuarios/bienvenido.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13050223975980903f71dd42-92160178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '685ea31503d38f811ed5cc994052784a0ea53c8e' => 
    array (
      0 => 'templates/plantillas/modulos/usuarios/bienvenido.tpl',
      1 => 1501596445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13050223975980903f71dd42-92160178',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5980903f723c15_87045144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5980903f723c15_87045144')) {function content_5980903f723c15_87045144($_smarty_tpl) {?><div class="container">
    <div class="row">
    	<div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
			<form role="form" id="frmLogin" action="javascript: return false;">
				<div class="form-login">
					<div class="thumbnail">
						<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
/logoNA.png" style="border: none"/>
					</div>
					<input type="text" id="txtUsuario" class="form-control input-sm chat-input" placeholder="Grupo" autocomplete="off" autofocus="yes" />
					</br>
					<input type="password" id="txtPass" class="form-control input-sm chat-input" placeholder="Contraseña" />
					</br>
					<div class="wrapper">
						<span class="group-btn">
							<input type="submit" class="btn btn-primary btn-md" value="Iniciar">
						</span>
					</div>
				</div>
			</form>
		</div>
	</div>
</div><?php }} ?>