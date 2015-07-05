<div>
	<table class="display" id="tblUsuarios" cellspacing="0" width="100%">
		<thead>
			<tr>
			    <th>Nombre</th>
			    <th>Último acceso</th>
			    <th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$usuarios item=row name=outer}
				<tr>
					<td>{$row.user}</td>
					<td>{$row.ultimoAcceso}</td>
					<td>
						<div class="btn-group">
							<button type="button" class="btn btn-default btn-xs dropdown-toggle btn-info" data-toggle="dropdown">
								Acciones
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#" class="btnModificar" data='{$row.json}'>Modificar</a></li>
								<li><a href="#" class="btnEliminar" data='{$row.json}'>Eliminar</a></li>
							</ul>
						</div>
					</td>
				</tr>
			{/foreach}
		</tbody>
	</table>
</div>