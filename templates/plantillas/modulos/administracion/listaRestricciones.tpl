<div>
	<table class="display compact" id="tblRestricciones" cellspacing="0" width="100%">
		<thead>
			<tr>
			    <th>Id</th>
			    <th>Nombre</th>
			    <th>Tipo</th>
			    <th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$restricciones item=row name=outer}
				<tr>
					<td>{$row.idRestriccion}</td>
					<td>{$row.enunciado} <span class="badge">{$row.inscritos}</span></td>
					<td>{$row.titulo}</td>
					<td>
						<div class="btn-group">
						  <button type="button" class="btn btn-default btn-xs dropdown-toggle btn-info"
						          data-toggle="dropdown">
						    Acciones <span class="caret"></span>
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