<h1>Administración de eventos</h1>

<div class="row">
	<div class="col-sm-4">
		<form role="form" onsubmit="javascript: return false;" id="frmEvento">
			<h2>Insertar/Modificar</h2>
			<div class="form-group">
				<label for="txtTitulo" class="control-label">Título</label>
				<input type="text" class="form-control" value="" id="txtTitulo" name="txtTitulo" size="40">
			</div>
			
			<div class="form-group">
				<label for="txtDescripcion" class="control-label">Descripción</label>
				<textarea class="form-control" id="txtDescripcion" name="txtDescripcion" cols="40" rows="5"></textarea>
			</div>
			
			<div class="form-group">
				<label for="selPeriodo" class="control-label">Periodo</label>
				<select id="selPeriodo" name="selPeriodo" class="form-control">
					{foreach $periodos as $periodo}
						<option value="{$periodo@key}">{$periodo}</option>
					{/foreach}
				</select>
			</div>
			
			<div class="form-group">
				<label for="selEstado" class="control-label">Estado</label>
				<select id="selEstado" name="selEstado" class="form-control">
					<option value="A">Activo</option>
					<option value="I">Inactivo</option>
				</select>
			</div>
			
			<div class="form-group">
				<label for="selDirigido" class="control-label">Dirigido a</label>
				<select id="selDirigido" name="selDirigido" class="form-control">
					<option value="T">Todos</option>
					<option value="A">Solo asesores</option>
					<option value="D">Directores de plantel</option>
					<option value="P">Solo permitir a</option>
					<option value="N">Solo negar a</option>
				</select>
			</div>
			
			<div class="form-group">
				<label for="txtUsuario" class="control-label">Usuario mail</label>
				<input type="text" class="form-control" value="" id="txtUsuario" name="txtUsuario" size="40">
			</div>
			
			<div class="form-group">
				<label for="txtPass" class="control-label">Contraseña mail</label>
				<input type="password" class="form-control" value="" id="txtPass" name="txtPass" size="40">
			</div>
			<div class="form-group">
				<label for="txtMail" class="control-label">Cuerpo del correo </label>
				<textarea class="form-control" id="txtMail" name="txtMail" cols="40" rows="5"></textarea>
			</div>
			<br>
			<button class="btn btn-default">Guardar</button>
			<input type="hidden" id="id" name="id">
			<button class="btn btn-default">Cancelar</button>
			<br>
		</form>
	</div>
	<div class="col-sm-8" id="dvLista"></div>
</div>