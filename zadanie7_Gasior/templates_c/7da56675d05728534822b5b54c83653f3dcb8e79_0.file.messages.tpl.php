<?php
/* Smarty version 4.3.0, created on 2023-05-15 14:50:44
  from 'C:\xampp\htdocs\zadanie7_Gasior\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64622aa4d3acc6_59148434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7da56675d05728534822b5b54c83653f3dcb8e79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadanie7_Gasior\\app\\views\\templates\\messages.tpl',
      1 => 1684154546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64622aa4d3acc6_59148434 (Smarty_Internal_Template $_smarty_tpl) {
?>	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<div class="bg-success text-white border border-2 border-dark"><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
		<div class="bg-warning text-dark border border-2 border-dark w-100"> Odnaleziono błędy </div>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
		<div class="bg-danger text-white border border-2 border-dark w-100"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }
}
}
