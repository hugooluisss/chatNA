<div class="list-group">
{foreach from=$mensajes item=row name=message}
	<a href="#" class="list-group-item active">
		<h4 class="list-group-item-heading">{$row.usuario}</h4>
		<p class="list-group-item-text">{$row.mensaje}</p>
	</a>
{/foreach}
</div>