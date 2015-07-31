<?php /* Smarty version Smarty-3.1.11, created on 2015-07-30 16:33:07
         compiled from "templates\plantillas\modulos\usuarios\bienvenido.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90995580a74a8f4001-68791266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb4fe7640f580c7afe10f98f5a1d0eb51281f75a' => 
    array (
      0 => 'templates\\plantillas\\modulos\\usuarios\\bienvenido.tpl',
      1 => 1438291985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90995580a74a8f4001-68791266',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5580a74a92f1c0_27366655',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5580a74a92f1c0_27366655')) {function content_5580a74a92f1c0_27366655($_smarty_tpl) {?><div class="container">
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