<h1>Administración de grupos</h1>

<div class="btn-toolbar" role="toolbar">
	<div class="btn-group btn-group-xs">
		<button type="button" class="btn btn-default" id="btnBack">
			<span class="glyphicon glyphicon-arrow-left"></span> Regresar a eventos
		</button>
	</div>
</div>

<div class="row">
	<div class="col-sm-4">
		<form role="form" onsubmit="javascript: return false;" id="frmGrupo">
			<h2>Insertar/Modificar</h2>
			<div class="form-group">
				<label for="selSede" class="control-label">Sede</label>
				<select id="selSede" name="selSede" class="form-control">
					{foreach $sedes as $sede}
						<option value="{$sede@key}">{$sede}</option>
					{/foreach}
				</select>
			</div>
			<div class="form-group">
				<label for="txtNombre" class="control-label">Nombre / Identificador</label>
				<input type="text" class="form-control" value="" id="txtNombre" name="txtNombre" size="40">
			</div>
			<div class="form-group">
				<label for="txtNombre" class="control-label">Encargado</label>
				<input type="text" class="form-control" value="" id="txtEncargado" name="txtEncargado" size="40">
			</div>
			<div class="form-group">
				<label for="txtCupo" class="control-label">Cupo</label>
				<input type="text" class="form-control" value="" id="txtCupo" name="txtCupo" size="4" style="width: 60px">
			</div>
			
			<div class="form-group">
				<label for="txtComentarios" class="control-label">Comentarios o indicaciones</label>
				<textarea id="txtComentarios" class="form-control" name="txtComentarios" style="width: 300px; height: 60px"></textarea>
			</div>
			
			<br>
			<button class="btn btn-default" type="submit">Guardar</button>
			<button class="btn btn-default" type="reset">Cancelar</button>
			<input type="hidden" id="id" name="id"/>
			<input type="hidden" id="evento" name="evento" value="{$evento}"/>
			
			<br>
		</form>
	</div>
	<div class="col-sm-8" id="dvLista"></div>
</div>