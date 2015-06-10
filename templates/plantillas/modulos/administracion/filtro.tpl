<h1>Filtro de personal</h1>
<br>

<div class="btn-toolbar" role="toolbar">
	<div class="btn-group btn-group-xs">
		<button type="button" class="btn btn-default" id="btnBack">
			<span class="glyphicon glyphicon-arrow-left"></span> Regresar a eventos
		</button>
	</div>
	<div class="btn-group btn-group-xs">
		<button type="button" class="btn btn-default" id="btnAdd">
			<span class="glyphicon glyphicon-plus"></span> Agregar
		</button>
	</div>
</div>
<br />
<div>
	<table class="display compact" id="tblFiltrados" cellspacing="0" width="100%">
		<thead>
			<tr>
			    <th>Nombre</th>
			    <th>Plaza</th>
			    <th>Plantel</th>
			    <th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$filtrados item=row name=outer}
				<tr>
					<td>{$row.trabajador.nombre}</td>
					<td>{$row.trabajador.plaza}</td>
					<td>{$row.trabajador.plantel} - {$row.trabajador.nombrePlantel}</td>
					<td>
						<div class="btn-group btn-group-xs">
							<a href="#" class="btn btn-info" action="borrar" data='{$row.json}'>Eliminar</a>
						</div>
					</td>
				</tr>
			{/foreach}
		</tbody>
	</table>
</div>

<!-- Ventana modal -->
<div class="modal fade" id="winTrabajadores">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" data-dismiss="modal">×</button>
				<h3>Trabajadores</h3>
			</div>
			<div class="modal-body" id="msg-texto">
				<table class="display" id="tblTrabajadores" cellspacing="0" width="100%">
					<thead>
						<tr>
						    <th>Pl</th>
						    <th>Nombre</th>
						    <th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						{foreach from=$trabajadores item=row name=outer}
							<tr>
								<td>{$row.id_plantel}</td>
								<td>{$row.nombreCompleto}</td>
								<td>
									<div class="btn-group btn-group-xs">
									  <button type="button" class="btn btn-info" data='{$row.json}' action="btnAgregar">Agregar</button>
									</div>
								</td>
							</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>