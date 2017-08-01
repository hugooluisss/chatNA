<?php /* Smarty version Smarty-3.1.11, created on 2015-10-02 19:46:02
         compiled from "templates/plantillas/modulos/eventos/medios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:576141399560f254ab2b906-99196186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f0302d97bc764e187cde9b4f5cd3f0f93e35d3b' => 
    array (
      0 => 'templates/plantillas/modulos/eventos/medios.tpl',
      1 => 1443832746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '576141399560f254ab2b906-99196186',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nombreEvento' => 0,
    'medios' => 0,
    'row' => 0,
    'idEvento' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_560f254ab83922_01984092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560f254ab83922_01984092')) {function content_560f254ab83922_01984092($_smarty_tpl) {?><h1>Medios del evento <?php echo $_smarty_tpl->tpl_vars['nombreEvento']->value;?>
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
</div>

<input id="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['idEvento']->value;?>
" /><?php }} ?>