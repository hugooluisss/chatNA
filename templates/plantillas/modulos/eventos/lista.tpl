<div>
	<table class="display" id="tblEventos" cellspacing="0" width="100%">
		<thead>
			<tr>
			    <th>Nombre</th>
			    <th>Descripción</th>
			    <th>Fecha</th>
			    <th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$eventos item=row name=outer}
				<tr>
					<td>{$row.nombre}</td>
					<td>{$row.descripcion}</td>
					<td>{$row.fecha}</td>
					<td>
						{if $row.estado eq 'A'}
						<div class="btn-group">
							<button type="button" class="btn btn-default btn-xs dropdown-toggle btn-info" data-toggle="dropdown">
								Acciones
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#" class="btnModificar" data='{$row.json}'>Modificar</a></li>
								<li><a href="#" class="btnMedios" data='{$row.json}'>Medios</a></li>
								<li><a href="#" class="btnEliminar" data='{$row.json}'>Eliminar</a></li>
								<li><a href="#" class="btnAdmonEvento" data='{$row.json}'>Panel de administración</a></li>
							</ul>
						</div>
						{/if}
					</td>
				</tr>
			{/foreach}
		</tbody>
	</table>
</div>