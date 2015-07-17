<div class="row">
<h2>Panel de administración del evento <b>"{$evento->getNombre()}"</b></h2>
</div>
<div class="row">
	<div class="col-lg-9">
		<h3>Mensajes</h3>
		<div id="conversacionAdmon"></div>
		<input type="checkbox" id="chkScroll" value="yes" checked="true"> <label for="chkScroll">Mostrar siempre el último mensaje</label>
	</div>
	<div class="col-lg-3">
		<h3>Conectados</h3>
		<div id="conectados"></div>
	</div>
</div>
<input type="hidden" value="{$evento->getId()}" id="id" name="id"/>