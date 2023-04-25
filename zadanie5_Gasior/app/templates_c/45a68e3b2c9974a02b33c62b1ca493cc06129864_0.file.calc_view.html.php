<?php
/* Smarty version 4.3.0, created on 2023-04-25 15:03:39
  from 'C:\xampp\htdocs\zadanie5_Gasior\app\calc_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6447cfab78b125_68506810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45a68e3b2c9974a02b33c62b1ca493cc06129864' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadanie5_Gasior\\app\\calc_view.html',
      1 => 1682427816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6447cfab78b125_68506810 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13905656516447cfab777c41_87941794', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1409188896447cfab779337_54893386', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_13905656516447cfab777c41_87941794 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_13905656516447cfab777c41_87941794',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Jarosław Gąsior<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1409188896447cfab779337_54893386 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1409188896447cfab779337_54893386',
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

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
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



	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
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
	<?php }?>
	
	<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
		<div class="bg-success text-white border border-2 border-dark"> Obliczono ratę miesięczną </div>
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
