<div>
	<table class="display" id="tblEventos" cellspacing="0" width="100%">
		<thead>
			<tr>
			    <th>Id</th>
			    <th>Titulo</th>
			    <th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$eventos item=row name=outer}
				<tr>
					<td>{$row.idEvento}</td>
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
						    <li><a href="#" class="btnGrupos" data='{$row.json}'>Grupos</a></li>
						    <li><a href="#" class="btnAdministradores" data='{$row.json}'>Administradores</a></li>
						    <li><a href="#" class="btnSedes" data='{$row.json}'>Sedes</a></li>
						    {if $row.dirigido eq 'P' or $row.dirigido eq 'N'}
						    	<li><a href="#" class="btnFiltro" data='{$row.json}'>Lista {if $row.dirigido eq P}permitir{else}negar{/if}</a></li>
						    {/if}
						    <li><a href="#" class="btnImprimir" data='{$row.json}'>Imprimir</a></li>
						  </ul>
						</div>
					</td>
				</tr>
			{/foreach}
		</tbody>
	</table>
</div>