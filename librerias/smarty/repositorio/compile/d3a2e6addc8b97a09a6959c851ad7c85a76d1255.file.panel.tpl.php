<?php /* Smarty version Smarty-3.1.11, created on 2015-06-16 21:40:58
         compiled from "templates\plantillas\modulos\eventos\panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26255580c9a92cd4d6-90194744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3a2e6addc8b97a09a6959c851ad7c85a76d1255' => 
    array (
      0 => 'templates\\plantillas\\modulos\\eventos\\panel.tpl',
      1 => 1434508847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26255580c9a92cd4d6-90194744',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5580c9a9312f76_70409968',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5580c9a9312f76_70409968')) {function content_5580c9a9312f76_70409968($_smarty_tpl) {?><h2>Administración de eventos</h2>
<div class="modal fade" id="winInsertarEvento">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" data-dismiss="modal">×</button>
				<h3>Insertar / Modificar</h3>
			</div>
			<div class="modal-body" id="msg-texto">
				<div class="row">
					<div class="col-sm-12">
						<form role="form" onsubmit="javascript: return false;" id="frmEvento">
							<div class="form-group">
								<label for="txtNombre" class="control-label">Nombre</label>
								<input type="text" class="form-control" value="" id="txtNombre" name="txtNombre" size="40">
							</div>
							<div class="form-group">
								<label for="txtDescripcion" class="control-label">Descripcion</label>
								<textarea id="txtDescripcion" class="form-control" row="5"></textarea>
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