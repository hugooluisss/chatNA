<div>
	<table class="display" id="tblAdministradores" cellspacing="0" width="100%">
		<thead>
			<tr>
			    <th>Id</th>
			    <th>Nombre</th>
			    <th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$administradores item=row name=outer}
				<tr>
					<td>{$row.num_personal}</td>
					<td>{$row.nombre}</td>
					<td>
						<div class="btn-group">
							<a href="#" class="btnEliminar" data='{$row.json}'>Eliminar</a>
						</div>
					</td>
				</tr>
			{/foreach}
		</tbody>
	</table>
</div>