<div class="list-group">
{foreach from=$mensajes item=row name=message}
	<a href="#" class="list-group-item">
		<h4 class="list-group-item-heading">{$row.from}</h4>
		<p class="list-group-item-text">{$row.texto}</p>
	</a>
{/foreach}
</div>