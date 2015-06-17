<h2>Administración de eventos</h2>
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
<div id="dvLista"></div>