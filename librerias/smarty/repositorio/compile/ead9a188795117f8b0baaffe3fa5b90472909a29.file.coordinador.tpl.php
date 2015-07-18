<?php /* Smarty version Smarty-3.1.11, created on 2015-07-17 19:06:51
         compiled from "templates\plantillas\modulos\usuarios\coordinador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3078855a994aabfa9e0-29897851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ead9a188795117f8b0baaffe3fa5b90472909a29' => 
    array (
      0 => 'templates\\plantillas\\modulos\\usuarios\\coordinador.tpl',
      1 => 1437178010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3078855a994aabfa9e0-29897851',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55a994aac909d7_48038163',
  'variables' => 
  array (
    'evento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a994aac909d7_48038163')) {function content_55a994aac909d7_48038163($_smarty_tpl) {?><div class="row">
	<h2><?php echo $_smarty_tpl->tpl_vars['evento']->value['nombre'];?>
</h2>
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

<input type="hidden" id="evento" name="evento" value="<?php echo $_smarty_tpl->tpl_vars['evento']->value['id'];?>
"/><?php }} ?>