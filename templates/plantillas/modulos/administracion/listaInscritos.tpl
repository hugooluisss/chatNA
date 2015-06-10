<h1>Personal Inscrito en el grupo {$grupo.nombre}</h1>
<br>

<div class="btn-toolbar" role="toolbar">
	<div class="btn-group btn-group-xs">
		<button type="button" class="btn btn-default" id="btnBack">
			<span class="glyphicon glyphicon-arrow-left"></span> Regresar a Grupos
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
	<table class="display compact" id="tblInscritos" cellspacing="0" width="100%">
		<thead>
			<tr>
			    <th>Nombre</th>
			    <th>Plaza</th>
			    <th>Plantel</th>
			    <th>Inscrito</th>
			    <th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$inscritos item=row name=outer}
				<tr>
					<td>{$row.trabajador.nombre}</td>
					<td>{$row.trabajador.plaza}</td>
					<td>{$row.trabajador.plantel} - {$row.trabajador.nombrePlantel}</td>
					<td>{$row.hora}</td>
					<td>
						<div class="btn-group">
						  <button type="button" class="btn btn-default btn-xs dropdown-toggle btn-info"
						          data-toggle="dropdown">
						    Acciones <span class="caret"></span>
						  </button>
						 
						  <ul class="dropdown-menu" role="menu">
						    <li><a href="#" class="btnImprimir" data='{$row.json}'>Imprimir</a></li>
						    <li><a href="#" class="btnEliminar" data='{$row.json}'>Eliminar</a></li>
						    {if $row.inscritos > 0 }
							    <li><a href="#" class="btnEliminar" data='{$row.json}'>Eliminar</a></li>
							{/if}
						  </ul>
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
									{if $totalEspecialidades eq 0}
										<div class="btn-group btn-group-xs">
											<button type="button" class="btn btn-info" data='{$row.json}' especialidad="" action="btnInscribir">Inscribir</button>
										</div>
									{else}
										<div class="btn-group">
											<button type="button" class="btn btn-default btn-xs dropdown-toggle btn-info"
												data-toggle="dropdown">
												Inscribir <span class="caret"></span>
											</button>
								  
											<ul class="dropdown-menu" role="menu">
												{foreach from=$especialidades item=rowEsp name=rsEsp}
													<li><a href="#" action="btnInscribir" data='{$row.json}' especialidad="{$rowEsp.idEspecialidad}">{$rowEsp.nombre}</a></li>
												{/foreach}
											</ul>
										</div>
									{/if}
								</td>
							</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>