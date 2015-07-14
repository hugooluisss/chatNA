<?php /* Smarty version Smarty-3.1.11, created on 2015-07-14 15:46:09
         compiled from "templates\plantillas\modulos\eventos\mensajesAdmon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1890355a41c80314339-25267492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '654c5f42e174ea636ddee27063ce65d92f4622af' => 
    array (
      0 => 'templates\\plantillas\\modulos\\eventos\\mensajesAdmon.tpl',
      1 => 1436906767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1890355a41c80314339-25267492',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55a41c8035d1a3_34630371',
  'variables' => 
  array (
    'evento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a41c8035d1a3_34630371')) {function content_55a41c8035d1a3_34630371($_smarty_tpl) {?><div class="row">
<h2>Mensajes del evento <b>"<?php echo $_smarty_tpl->tpl_vars['evento']->value->getNombre();?>
"</b></h2>
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
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['evento']->value->getId();?>
" id="id" name="id"/><?php }} ?>