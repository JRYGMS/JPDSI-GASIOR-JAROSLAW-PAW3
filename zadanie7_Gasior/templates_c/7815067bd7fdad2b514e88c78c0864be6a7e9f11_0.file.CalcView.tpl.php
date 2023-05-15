<?php
/* Smarty version 4.3.0, created on 2023-05-15 15:15:24
  from 'C:\xampp\htdocs\zadanie7_Gasior\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6462306cde7736_99336058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7815067bd7fdad2b514e88c78c0864be6a7e9f11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadanie7_Gasior\\app\\views\\CalcView.tpl',
      1 => 1684156520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6462306cde7736_99336058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1036149296462306cdd8785_13019812', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18452078586462306cdd9014_35458651', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_1036149296462306cdd8785_13019812 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1036149296462306cdd8785_13019812',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Jarosław Gąsior<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_18452078586462306cdd9014_35458651 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18452078586462306cdd9014_35458651',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="row">
	<div class="col-6"> Kalkulator </div>
	<div class="col-6"> Blok informacyjny </div>
</div>

<div class="row align-items-start d-table">

<div class="col-2 m-2 p-5 border border-3 border-white rounded d-table-cell">

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
	<div class="form-group">
		<label for="id_kwo">Kwota: </label>
		<input id="id_kwo" class="form-control" type="text" name="k" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->k;?>
" placeholder="Podaj kwotę:"/><br />
	</div>
	<div class="form-group">
		<label for="id_lat">Lata: </label>
		<input id="id_lat" class="form-control" type="text" name="l" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->l;?>
" placeholder="Podaj ilość lat:"/><br />
	</div>
	<div class="form-group">
    	<label for="id_opr">Oprocentowanie: </label>
		<input id="id_opr" class="form-control" type="text" name="opr" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->opr;?>
" placeholder="Podaj wysokość oprocentowania:"/><br />
	</div>

	<input type="submit" value="Oblicz" class="btn btn-primary btn-lg"/>
</form>

</div>

<div class="col-2 m-2 p-5 border border-3 border-white rounded d-table-cell">

	<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
    	<div class="bg-success text-white border border-2 border-dark"> Rata miesięczna: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
</div>
	<?php }?>



</div>

</div>

<?php
}
}
/* {/block 'content'} */
}
