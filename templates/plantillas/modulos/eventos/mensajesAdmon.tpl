<div class="row">
<h2>Mensajes del evento <b>"{$evento->getNombre()}"</b></h2>
</div>
<div class="row">
	 <div class="col-md-12 col-sm-6">
	 	  <div id="conversacionAdmon"></div>
	 </div>
</div>
<input type="hidden" value="{$evento->getId()}" id="id" name="id"/>
<div class="row">
	<div class="col-lg-12">
		<input type="checkbox" id="chkScroll" value="yes" checked="true"> <label for="chkScroll">Mostrar siempre el último mensaje</label>
	</div>
</div>