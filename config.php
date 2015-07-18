<?php
define('SISTEMA', 'Transmisiones');
define('VERSION', 'v 1.0');
define('ALIAS', '');
define('AUTOR', 'Hugo Luis Santiago Altamirano');
define('EMAIL', 'hugooluisss@gmail.com');
define('EMAILSOPORTE', 'sistemas@iebo.edu.mx');
define('STATUS', 'En desarrollo');

define('LAYOUT_DEFECTO', 'layout/default.tpl');
define('LAYOUT_AJAX', 'layout/update.tpl');

#Login y su controlador	
$conf['inicio'] = array(
	#'controlador' => 'index.php',
	'vista' => 'usuarios/bienvenido.tpl',
	'descripcion' => '',
	'seguridad' => false,
	'js' => array('login.js'),
	'capa' => LAYOUT_DEFECTO);
	
#Login y su controlador	
$conf['clogin'] = array(
	'controlador' => 'login.php',
	'descripcion' => 'Inicio de sesion',
	'seguridad' => false,
	'capa' => LAYOUT_AJAX);
	

#Login chat
$conf['setPantallaInicio'] = array(
	'controlador' => 'usuario.php',
	'descripcion' => 'Discriminación de pantalla inicial',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);

$conf['panel'] = array(
	'controlador' => 'chat.php',
	'vista' => 'usuarios/panel.tpl',
	'descripcion' => 'Vista del panel',
	'seguridad' => true,
	'js' => array('usuario.class.js', 'mensaje.class.js', 'panel.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['cchat'] = array(
	'controlador' => 'chat.php',
	'descripcion' => 'Control de la sala de chat',
	'seguridad' => false,
	'capa' => LAYOUT_AJAX);
	
$conf['mensajes'] = array(
	'controlador' => 'chat.php',
	'vista' => 'usuarios/mensajes.tpl',
	'descripcion' => 'Lista de mensajes',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['eventos'] = array(
	'vista' => 'eventos/panel.tpl',
	'descripcion' => 'Vista del panel',
	'seguridad' => true,
	'js' => array('evento.class.js', 'panelEventos.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['cevento'] = array(
	'controlador' => 'evento.php',
	'descripcion' => 'Controlador de eventos',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['listaEventos'] = array(
	'controlador' => 'evento.php',
	'vista' => 'eventos/lista.tpl',
	'descripcion' => 'Lista de eventos',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['usuarios'] = array(
	'controlador' => 'usuario.php',
	'vista' => 'usuarios/panelAdmon.tpl',
	'descripcion' => 'Vista del panel de usuarios',
	'seguridad' => true,
	'js' => array('usuario.class.js', 'panelUsuarios.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['listaUsuarios'] = array(
	'controlador' => 'usuario.php',
	'vista' => 'usuarios/lista.tpl',
	'descripcion' => 'Lista de usuarios',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cusuario'] = array(
	'controlador' => 'usuario.php',
	'descripcion' => 'Controlador de cuentas de usuario',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);	

$conf['ubicacion'] = array(
	'controlador' => 'usuario.php',
	'vista' => 'usuarios/ubicacion.tpl',
	'descripcion' => 'Ubicación de los usuarios',
	'seguridad' => true,
	'js' => array('ubicacion.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['panelAdmonEvento'] = array(
	'controlador' => 'evento.php',
	'vista' => 'eventos/admon.tpl',
	'descripcion' => 'Lista de mensajes presentados al administrador',
	'seguridad' => true,
	'js' => array('usuario.class.js', 'mensaje.class.js', 'admonEvento.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['listaConectados'] = array(
	'controlador' => 'evento.php',
	'vista' => 'eventos/conectados.tpl',
	'descripcion' => 'Lista de usuarios conectados',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);

$conf['coordinador'] = array(
	'controlador' => 'chat.php',
	'vista' => 'usuarios/coordinador.tpl',
	'descripcion' => 'Lista de mensajes presentados al administrador',
	'seguridad' => true,
	'js' => array('mensaje.class.js', 'coordinador.js'),
	'capa' => LAYOUT_DEFECTO);
?>