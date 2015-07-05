<div class="row">
	<h2>Conexiones activas</h2>
</div>

<div class="row">
	<div id="mapa" class="col-lg-12" style="height: 400px;"></div>
</div>

<div class="row">
	<table class="display" id="tblUsuarios" cellspacing="0">
		<thead>
			<tr>
			    <th style="width: 15%;">Usuario</th>
			    <th style="width: 15%;">Último acceso</th>
			    <th>Dirección</th>
			    <th>Marca</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$usuarios item=row name=outer}
				<tr>
					<td>{$row.user}</td>
					<td>{$row.ultimoAcceso}</td>
					<td id="pos{$row.idUsuario}"></td>
					<td>
						<input type="button" value="Ubicar" id="btnPos{$row.idUsuario}"/>
					</td>
				</tr>
			{/foreach}
		</tbody>
	</table>
</div>