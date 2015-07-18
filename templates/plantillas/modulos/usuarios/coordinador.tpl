<div class="row">
	<h2>{$evento.nombre}</h2>
	<p><small>Mensajes al coordinador</small></p>
</div>
<div class="row">
	<div class="col-lg-12">
		<div id="conversacion"></div>
		<div class="row">
			<div class="col-lg-12">
				<input type="checkbox" id="chkScroll" value="yes" checked="true"> <label for="chkScroll">Mostrar siempre el último mensaje</label>
			</div>
		</div>
	</div>
</div>

<input type="hidden" id="evento" name="evento" value="{$evento.id}"/>