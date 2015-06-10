<h1>Especialidades del grupo</h1>

<div class="btn-toolbar" role="toolbar">
	<div class="btn-group btn-group-xs">
		<button type="button" class="btn btn-default" id="btnBack">
			<span class="glyphicon glyphicon-arrow-left"></span> Regresar a grupos
		</button>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<form role="form" onsubmit="javascript: return false;" id="frmEspecialidad">
			<h2>Insertar/Modificar</h2>
			<div class="form-group">
				<label for="txtNombre" class="control-label">Nombre</label>
				<input type="text" class="form-control" value="" id="txtNombre" name="txtNombre" size="40">
			</div>
			<div class="form-group">
				<label for="selLimite" class="control-label">Límite</label>
				<select id="selLimite" name="selLimite" class="form-control">
					<option value="0">Sin límite</option>
					{for $cont=1 to $limite}
						<option value="{$cont}">{$cont}</option>
					{/for}
				</select>
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