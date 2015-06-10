<h1>Administración de Sedes</h1>

<div class="btn-toolbar" role="toolbar">
	<div class="btn-group btn-group-xs">
		<button type="button" class="btn btn-default" id="btnBack">
			<span class="glyphicon glyphicon-arrow-left"></span> Regresar a eventos
		</button>
	</div>
</div>

<div class="row">
	<div class="col-sm-4">
		<form role="form" onsubmit="javascript: return false;" id="frmSedes">
			<h2>Insertar/Modificar</h2>
			<div class="form-group">
				<label for="txtNombre" class="control-label">Nombre</label>
				<input type="text" class="form-control" value="" id="txtNombre" name="txtNombre" size="40">
			</div>
			<div class="form-group">
				<label for="selRegion" class="control-label">Región</label>
				<select id="selRegion" name="selRegion" class="form-control">
					{foreach $regiones as $region}
						<option value="{$region@key}">{$region}</option>
					{/foreach}
				</select>
			</div>
			<br>
			<button class="btn btn-default" type="submit">Guardar</button>
			<input type="hidden" id="id" name="id">
			<button class="btn btn-default" type="reset">Cancelar</button>
			<br>
		</form>
	</div>
	<div class="col-sm-8" id="dvLista"></div>
</div>