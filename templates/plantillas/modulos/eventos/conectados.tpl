<ul class="list-group">
	{foreach from=$usuarios item=row name=outer}
		<li class="list-group-item">
			<h4 class="list-group-item-heading">{$row->getNombre()}</h4>
			<p class="list-group-item-text"><small></small>{$row->getUltimoAcceso()|default:"nunca"}</small></p>
		</li>
	{/foreach}
</ul>