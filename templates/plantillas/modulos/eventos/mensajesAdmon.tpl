<div class="row">
<h2>Mensajes del evento <b>"{$evento->getNombre()}"</b></h2>
</div>
<div class="row">
	 <div class="col-md-12 col-sm-6">
	 	  <span class="mensajeShowCoordinador">Mostrados al coordinador</span>
	 </div>
</div>
<div class="row">
	 <div class="col-md-12 col-sm-6">
	 	  <div id="conversacion"></div>
	 </div>
</div>
<input type="checkbox" id="chkScroll" value="yes" checked="true"> <label for="chkScroll">Mostrar siempre el último mensaje</label>
<input type="hidden" value="{$evento->getId()}" id="id" name="id"/>