<?php /* Smarty version Smarty-3.1.11, created on 2015-07-05 01:40:50
         compiled from "templates/plantillas/layout/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86087753755784df4f34a24-17731746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88f47345f87357691db158f81dd14f424f0cd759' => 
    array (
      0 => 'templates/plantillas/layout/default.tpl',
      1 => 1436074932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86087753755784df4f34a24-17731746',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55784df5074085_06894637',
  'variables' => 
  array (
    'PAGE' => 0,
    'script' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55784df5074085_06894637')) {function content_55784df5074085_06894637($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<HTML>
      <HEAD>
			<META HTTP-EQUIV="Expires" CONTENT="Mon, 04 Dec 1999 21:29:02 GMT">
			<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
			<TITLE><?php echo $_smarty_tpl->tpl_vars['PAGE']->value['nombreAplicacion'];?>
 - <?php echo $_smarty_tpl->tpl_vars['PAGE']->value['empresaAcronimo'];?>
</TITLE>
			<meta name="author" content="Hugo Luis Santiago Altamirano" >
			<META name="copyright" content="">
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['css'];?>
bootstrap.css">
			<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['css'];?>
jquery.dataTables.min.css" />
			<link type="text/css" rel="stylesheet/less" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['css'];?>
theme.less">
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
	            	<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['nombreAplicacion'];?>

	            </a>
	        </div>
	
	        <div id="navbarCollapse" class="collapse navbar-collapse">
	            <ul class="nav navbar-nav">
	                <li <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['modulo']=='panel'||$_smarty_tpl->tpl_vars['PAGE']->value['modulo']==''){?>class="active"<?php }?>><a href="index.php?mod=panel">Inicio</a></li>
	                <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['sesionIniciada']){?>
	                	<?php if ($_smarty_tpl->tpl_vars['PAGE']->value['isAdmin']==true){?>
			                <li class="dropdown">
			                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Administración<b class="caret"></b></a>
			                    <ul role="menu" class="dropdown-menu">
			                        <li><a href="?mod=eventos">Evento</a></li>
			                        <li><a href="?mod=usuarios">Usuarios</a></li>
			                        <li><a href="?mod=ubicacion">Conexiones activas</a></li>
			                    </ul>
			                </li>
			            <?php }?>
		                <li><a id="btnSalir" href="#">Salir</a></li>
		            <?php }?>
	            </ul>
	
	        </div>
	
	    </nav>
	    <div id="modulo" class="container">
    	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['PAGE']->value['vista'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	    </div>
	    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
js/bootstrap.js"></script>
		
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
js/ui/jquery-ui.js"></script>
			
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.3.1/less.min.js" type="text/javascript"></script>
	    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFa9dJnYA73gbJSdoery99NTOzUgbdL3w"></script>
	    
	    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
js/eventos.js"></script>
		<?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['script']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PAGE']->value['scriptsJS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
$_smarty_tpl->tpl_vars['script']->_loop = true;
?>
			<script type="text/javascript" src="javascript/<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
"></script>
		<?php } ?>
		<script src="http://releases.flowplayer.org/js/flowplayer-3.2.13.min.js"></script>
      </BODY>
</HTML><?php }} ?>