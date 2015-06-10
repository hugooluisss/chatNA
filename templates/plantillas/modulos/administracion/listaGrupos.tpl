<div>
	<table class="display compact" id="tblGrupos" cellspacing="0" width="100%">
		<thead>
			<tr>
			    <th>Grupo</th>
			    <th>Sede</th>
			    <th>Inscritos</th>
			    <th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$grupos item=row name=outer}
				<tr>
					<td>{$row.nombre}</td>
					<td>{$row.nombreSede}</td>
					<td>{$row.inscritos}/{$row.cupo}</td>
					<td>
						<div class="btn-group">
						  <button type="button" class="btn btn-default btn-xs dropdown-toggle btn-info"
						          data-toggle="dropdown">
						    Acciones <span class="caret"></span>
						  </button>
						 
						  <ul class="dropdown-menu" role="menu">
						    <li><a href="#" class="btnInscritos" data='{$row.json}'>Inscritos <span class="badge">{$row.inscritos}</span></a></li>
						    <li><a href="#" class="btnModificar" data='{$row.json}'>Modificar</a></li>
						    {if $row.inscritos eq 0 }
							    <li><a href="#" class="btnEliminar" data='{$row.json}'>Eliminar</a></li>
							{/if}
							<li><a href="#" class="btnEspecialidad" data='{$row.json}'>Especialidades</a></li>
							<li><a href="#" class="btnRestricciones" data='{$row.json}'>Restricciones</a></li>
						  </ul>
						</div>
					</td>
				</tr>
			{/foreach}
		</tbody>
	</table>
</div>