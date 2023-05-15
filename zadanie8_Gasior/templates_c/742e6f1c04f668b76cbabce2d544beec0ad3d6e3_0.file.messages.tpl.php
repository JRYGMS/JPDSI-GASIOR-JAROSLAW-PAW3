<?php
/* Smarty version 4.3.0, created on 2023-05-15 21:35:04
  from 'C:\xampp\htdocs\zadanie8_Gasior\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_646289686161b6_05163100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '742e6f1c04f668b76cbabce2d544beec0ad3d6e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadanie8_Gasior\\app\\views\\templates\\messages.tpl',
      1 => 1684177826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646289686161b6_05163100 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
    <div class="bg-success text-white border border-2 border-dark w-100"><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
  <div class="bg-warning text-dark border border-2 border-dark w-100"> Odnaleziono błędy </div>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
        <div class="bg-danger text-white py-1 border border-2 border-dark w-100"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
