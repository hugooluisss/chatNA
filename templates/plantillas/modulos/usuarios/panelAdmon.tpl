<h2>Administración de usuarios</h2>
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
										{foreach $tipos as $tipo}
											<option value="{$tipo@key}">{$tipo}</option>
										{/foreach}
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
		<button type="button" class="btn btn-default" id="btnJoomlaUsers">Agregar desde Joomla</button>
	</div>
</div>
<br />
<div id="dvLista"></div>