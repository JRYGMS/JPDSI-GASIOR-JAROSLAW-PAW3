<?php
/* Smarty version 4.3.0, created on 2023-05-15 14:50:44
  from 'C:\xampp\htdocs\zadanie7_Gasior\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64622aa4966fd8_49832864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f379c90f25071c39fa8383b8f642952f643837bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadanie7_Gasior\\app\\views\\LoginView.tpl',
      1 => 1684154652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_64622aa4966fd8_49832864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79575927964622aa484acd5_17345811', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_79575927964622aa484acd5_17345811 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_79575927964622aa484acd5_17345811',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="row">
    <div class="col-6"> Logowanie </div>
    <div class="col-6"> Blok informacyjny </div>
</div>

<div class="row align-items-start d-table">

<div class="col-2 m-2 p-5 border border-3 border-white rounded d-table-cell">

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post">
    <div class="form-group">
        <label for="id_log">Login: </label>
        <input id="id_log" class="form-control" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" placeholder="Wprowadź login"/> <br />
    </div>

    <div class="form-group">
        <label for="id_has">Hasło: </label>
        <input id="id_has" class="form-control" type="password" name="pass" placeholder="Wprowadź hasło"/> <br />
    </div>

    <input type="submit" value="Zaloguj" class="btn btn-primary btn-lg"/>
</form>

</div>

<div class="col-2 m-2 p-5 border border-3 border-white rounded d-table-cell">

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

</div>

<?php
}
}
/* {/block 'content'} */
}
