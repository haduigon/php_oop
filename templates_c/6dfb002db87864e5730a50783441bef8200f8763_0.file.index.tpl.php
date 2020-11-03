<?php
/* Smarty version 3.1.36, created on 2020-11-03 14:40:51
  from '/laravel/Views/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa16bf35ff915_56027734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dfb002db87864e5730a50783441bef8200f8763' => 
    array (
      0 => '/laravel/Views/index.tpl',
      1 => 1604414161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa16bf35ff915_56027734 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5578904325fa16bf35fe799_69893347', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_5578904325fa16bf35fe799_69893347 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_5578904325fa16bf35fe799_69893347',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <form  method="POST" class="form-group">
        <input class="form-control" type="email" name="email" placeholder="example@email.com">
        <input class="form-control" type="password" name="password" placeholder="Password">
        <input type="submit" class="btn btn-success" value="Create" formaction="">
         <input type="submit" class="btn btn-success" value="LOGIN" formaction="/Auth/createUser">
    </form>


<?php
}
}
/* {/block 'body'} */
}
