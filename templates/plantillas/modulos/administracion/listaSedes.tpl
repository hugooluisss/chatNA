<div>
	<table class="display compact" id="tblSedes" cellspacing="0" width="100%">
		<thead>
			<tr>
			    <th>Id</th>
			    <th>Nombre</th>
			    <th>Región</th>
			    <th>Grupos</th>
			    <th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$sedes item=row name=outer}
				<tr>
					<td>{$row.idSede}</td>
					<td>{$row.nombre}</td>
					<td>{$row.nombreRegion}</td>
					<td>{$row.grupos}</td>
					<td>
						<div class="btn-group">
						  <button type="button" class="btn btn-default btn-xs dropdown-toggle btn-info"
						          data-toggle="dropdown">
						    Acciones <span class="caret"></span>
						  </button>
						 
						  <ul class="dropdown-menu" role="menu">
						    <li><a href="#" class="btnModificar" data='{$row.json}'>Modificar</a></li>
						    {if $row.grupos eq 0}
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