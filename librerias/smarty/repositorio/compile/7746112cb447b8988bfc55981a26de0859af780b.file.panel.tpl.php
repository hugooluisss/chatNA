<?php /* Smarty version Smarty-3.1.11, created on 2015-10-02 19:45:27
         compiled from "templates/plantillas/modulos/eventos/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116546609655818ac69b4614-96226214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7746112cb447b8988bfc55981a26de0859af780b' => 
    array (
      0 => 'templates/plantillas/modulos/eventos/panel.tpl',
      1 => 1443832746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116546609655818ac69b4614-96226214',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55818ac69d20b7_73908334',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55818ac69d20b7_73908334')) {function content_55818ac69d20b7_73908334($_smarty_tpl) {?><h2>Administración de eventos</h2>
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