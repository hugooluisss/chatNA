<?php /* Smarty version Smarty-3.1.11, created on 2015-08-31 15:52:00
         compiled from "templates\plantillas\modulos\eventos\medios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2800355e4ba564ead40-79709436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06c5bb86ff5782bd8e9573da0b2aefd4ce92d1ad' => 
    array (
      0 => 'templates\\plantillas\\modulos\\eventos\\medios.tpl',
      1 => 1441054212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2800355e4ba564ead40-79709436',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55e4ba56534955_65260579',
  'variables' => 
  array (
    'nombreEvento' => 0,
    'medios' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e4ba56534955_65260579')) {function content_55e4ba56534955_65260579($_smarty_tpl) {?><h1>Medios del evento <?php echo $_smarty_tpl->tpl_vars['nombreEvento']->value;?>
</h1>

<span>Medios disponibles</span>
<div class="row">
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['medios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<div class="checkbox">
		<label>
			<input type="checkbox" class="chkMedio" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idMedio'];?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['incluido']){?>checked<?php }?> data="<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>

		</label>
	</div>
	<?php } ?>
</div><?php }} ?>