<?php /* Smarty version Smarty-3.1.11, created on 2015-07-03 19:16:36
         compiled from "templates\plantillas\modulos\usuarios\panelAdmon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15997559725e4a91193-65000378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8a5f16283cd8dae6f26c3f9e6d29d769e2d9a41' => 
    array (
      0 => 'templates\\plantillas\\modulos\\usuarios\\panelAdmon.tpl',
      1 => 1435967863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15997559725e4a91193-65000378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tipos' => 0,
    'tipo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_559725e4bf6881_80508376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559725e4bf6881_80508376')) {function content_559725e4bf6881_80508376($_smarty_tpl) {?><h2>Administración de usuarios</h2>
<div class="modal fade" id="winInsertar">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" data-dismiss="modal">×</button>
				<h3>Insertar / Modificar</h3>
			</div>
			<div class="modal-body" id="msg-texto">
				<div class="row">
					<div class="col-sm-12">
						<form role="form" onsubmit="javascript: return false;" id="frmUsuario" class="form-horizontal">
							<div class="form-group">
								<label for="selTipo" class="control-label col-lg-4">Periodo</label>
								<div class="col-lg-4">
									<select id="selTipo" name="selTipo" class="form-control">
										<?php  $_smarty_tpl->tpl_vars['tipo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tipo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->key => $_smarty_tpl->tpl_vars['tipo']->value){
$_smarty_tpl->tpl_vars['tipo']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['tipo']->key;?>
"><?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
</option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="txtUser" class="col-lg-4 control-label">Usuario</label>
								<div class="col-lg-8">
									<input type="text" class="form-control" value="" id="txtUser" name="txtUser" size="40" placeholder="Usuario">
								</div>
							</div>
							<div class="form-group">
								<label for="txtPass" class="control-label col-lg-4">Contraseña</label>
								<div class="col-lg-8">
									<input type="password" class="form-control" value="" id="txtPass" name="txtPass" size="40" placeholder="Contraseña">
								</div>
							</div>
							<div class="form-group">
								<label for="txtPass" class="control-label col-lg-4">Correo electrónico</label>
								<div class="col-lg-8">
									<input type="email" class="form-control" value="" id="txtEmail" name="txtEmail" size="40" placeholder="Correo electrónico">
								</div>
							</div>
							<input type="hidden" id="id">
						</form>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="btnGuardar">Guardar</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			</div>
		</div>
	</div>
</div>

<div class="btn-toolbar" role="toolbar">
	<div class="btn-group">
		<button type="button" class="btn btn-default" id="btnAgregar">Agregar</button>
	</div>
</div>
<br />
<div id="dvLista"></div><?php }} ?>