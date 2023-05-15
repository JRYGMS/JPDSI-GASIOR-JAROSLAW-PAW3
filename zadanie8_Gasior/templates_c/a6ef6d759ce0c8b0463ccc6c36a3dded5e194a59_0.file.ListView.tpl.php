<?php
/* Smarty version 4.3.0, created on 2023-05-15 21:35:39
  from 'C:\xampp\htdocs\zadanie8_Gasior\app\views\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6462898bbb2551_67619850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6ef6d759ce0c8b0463ccc6c36a3dded5e194a59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadanie8_Gasior\\app\\views\\ListView.tpl',
      1 => 1684179088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6462898bbb2551_67619850 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9003671926462898bba3576_06376484', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_9003671926462898bba3576_06376484 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9003671926462898bba3576_06376484',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class = "center">

<table class="table table-bordered table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">ID Wynik</th>
      <th scope="col">Kwota</th>
      <th scope="col">Ilość lat</th>
      <th scope="col">Oprocentowanie</th>
      <th scope="col">Rata miesięczna</th>
      <th scope="col">Data i godzina</th>
    </tr>
  </thead>
  <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wyniki']->value, 'w');
$_smarty_tpl->tpl_vars['w']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['w']->value) {
$_smarty_tpl->tpl_vars['w']->do_else = false;
?>
    <tr><td><?php echo $_smarty_tpl->tpl_vars['w']->value["ID_wynik"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["kwota"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["ile_lat"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["oprocentowanie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["rata_miesieczna"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["data"];?>
</td></tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>

</div>

<?php
}
}
/* {/block 'content'} */
}
