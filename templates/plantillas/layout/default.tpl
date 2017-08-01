<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<HTML>
      <HEAD>
			<META HTTP-EQUIV="Expires" CONTENT="Mon, 04 Dec 1999 21:29:02 GMT">
			<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
			<TITLE>{$PAGE.nombreAplicacion} - {$PAGE.empresaAcronimo}</TITLE>
			<meta name="author" content="Hugo Luis Santiago Altamirano" >
			<META name="copyright" content="">
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link type="text/css" rel="stylesheet" href="{$PAGE.css}bootstrap.css">
			<link type="text/css" rel="stylesheet" href="{$PAGE.css}jquery.dataTables.min.css" />
			<!--<link type="text/css" rel="stylesheet/less" href="{$PAGE.css}theme.less">-->
			<link type="text/css" rel="stylesheet" href="{$PAGE.css}theme.css">
      </HEAD>
      <BODY>
      		
	    <nav role="navigation" class="navbar navbar-default">
	        <div class="navbar-header">
	            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
	                <span class="sr-only">Navegador</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a href="#" class="navbar-brand">
	            	{$PAGE.nombreAplicacion}
	            </a>
	        </div>
	
	        <div id="navbarCollapse" class="collapse navbar-collapse">
	            <ul class="nav navbar-nav">
	                <li {if $PAGE.modulo eq 'panel' or $PAGE.modulo eq ''}class="active"{/if}><a href="index.php?mod=setPantallaInicio">Inicio</a></li>
	                {if $PAGE.sesionIniciada}
	                	{if $PAGE.isAdmin eq true}
			                <li class="dropdown">
			                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Administración<b class="caret"></b></a>
			                    <ul role="menu" class="dropdown-menu">
			                        <li><a href="?mod=eventos">Evento</a></li>
			                        <li><a href="?mod=usuarios">Usuarios</a></li>
			                        <li><a href="?mod=ubicacion">Conexiones activas</a></li>
			                    </ul>
			                </li>
			            {/if}
		                <li><a id="btnSalir" href="#">Salir</a></li>
		            {/if}
	            </ul>
	
	        </div>
	
	    </nav>
	    <div id="modulo" class="container">
    	{include file=$PAGE.vista}
	    </div>
	    <script src="{$PAGE.ruta}js/jquery.min.js"></script>
		<script type="text/javascript" src="{$PAGE.ruta}js/bootstrap.js"></script>
		
		<script type="text/javascript" src="{$PAGE.ruta}js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="{$PAGE.ruta}js/ui/jquery-ui.js"></script>
			
	    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.3.1/less.min.js" type="text/javascript"></script>-->
	    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFa9dJnYA73gbJSdoery99NTOzUgbdL3w"></script>
	    
	    <script type="text/javascript" src="{$PAGE.ruta}js/eventos.js"></script>
		{foreach from=$PAGE.scriptsJS item=script}
			<script type="text/javascript" src="javascript/{$script}"></script>
		{/foreach}
		<script src="http://releases.flowplayer.org/js/flowplayer-3.2.13.min.js"></script>
      </BODY>
</HTML>