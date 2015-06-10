<h1>Restricciones</h1>
<div class="btn-toolbar" role="toolbar">
	<div class="btn-group btn-group-xs">
		<button type="button" class="btn btn-default" id="btnBack">
			<span class="glyphicon glyphicon-arrow-left"></span> Regresar a grupos
		</button>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<form role="form" onsubmit="javascript: return false;" id="frmRestriccion">
			<h2>Insertar/Modificar</h2>
			<div class="form-group">
				<label for="selTipo" class="control-label">Tipo</label>
				<select id="selTipo" name="selTipo" class="form-control">
					{foreach $tipos as $tipo}
						<option value="{$tipo@key}">{$tipo}</option>
					{/foreach}
				</select>
			</div>
			<div class="form-group">
				<label for="txtEnunciado" class="control-label">Nombre</label>
				<input type="text" class="form-control" value="" id="txtEnunciado" name="txtEnunciado" size="40" autocomplete="no">
			</div>
			<br>
			<button class="btn btn-default" type="submit">Guardar</button>
			<button class="btn btn-default" type="reset">Cancelar</button>
			<input type="hidden" id="id" name="id"/>
			<input type="hidden" id="grupo" name="grupo" value="{$grupo}"/>
			<input type="hidden" id="evento" name="evento" value="{$evento}"/>
			
			<br>
		</form>
	</div>
	<div class="col-sm-8" id="dvLista"></div>
</div>