{foreach from=$mensajes item=row name=message}
	<div class="well well-sm mensajeActivo" obj='{$row.json}'>
	<p>{$row.from} dijo el <span class="label label-warning">{$row.hora}</span></p>
	{$row.texto}
	</div>
{/foreach}