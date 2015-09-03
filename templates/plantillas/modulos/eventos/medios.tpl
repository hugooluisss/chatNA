<h1>Medios del evento {$nombreEvento}</h1>

<span>Medios disponibles</span>
<div class="row">
	{foreach from=$medios item=row name=lstMedios}
	<div class="checkbox">
		<label>
			<input type="checkbox" class="chkMedio" value="{$row.idMedio}" {if $row.incluido}checked{/if} data="{$row.json}">{$row.nombre}
		</label>
	</div>
	{/foreach}
</div>