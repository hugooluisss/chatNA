<div class="row">
	<h2>{$evento.nombre}</h2>
	<p><small>{$evento.descripcion}</small></p>
	<div class="col-lg-2"><label for="sala">Medio de transmisión</label></div>
	<div class="col-lg-6">
		<select id="selMedio">
			{foreach from=$medios item=medio name=medios}
				<option value="{$medio.idMedio}" {if $medio.idMedio eq $medioDefecto}selected{/if} data='{$medio.json}'>{$medio.nombre}</option>
			{/foreach}
		</select>
	</div>
</div>
<div class="row">
	<div class="col-md-8 col-sm-12 hidden-xs">
		<div id="wowza" style="width:100%; margin:0 auto;text-align:center"></div>
	</div>
	<div class="col-md-4 col-sm-12">
		<div class="row">
			<div class="col-md-12">
				<div id="conversacion"></div>
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-6">
				<input type="checkbox" id="chkScroll" value="yes" checked="true"> <label for="chkScroll">Mostrar siempre el último mensaje</label>
				<div class="form-xgroup">
					<label for="txtMensaje">Mensaje</label>
					<textarea id="txtMensaje" placeholder="Escribe tu mensaje" class="form-control" autofocus="true"></textarea>
				</div>
				<button id="btnMensaje" class="btn btn-primary">Enviar</button>
			</div>
		</div>
	</div>
</div>

<input type="hidden" id="evento" name="evento" value="{$evento.id}"/>