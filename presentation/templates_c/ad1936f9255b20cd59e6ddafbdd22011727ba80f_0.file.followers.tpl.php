<?php
/* Smarty version 3.1.33, created on 2019-11-12 13:08:28
  from 'C:\xampp\htdocs\womenintech\presentation\templates\followers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcaa0bc877b50_66997973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad1936f9255b20cd59e6ddafbdd22011727ba80f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\followers.tpl',
      1 => 1573560505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcaa0bc877b50_66997973 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
<div class="vinay">
	<?php echo var_dump($_smarty_tpl->tpl_vars['obj']->value->mentorFollowersRequest);?>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->mentorFollowersRequest, 'pendingRequest');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pendingRequest']->value) {
?>
	<div>Name:<?php echo $_smarty_tpl->tpl_vars['pendingRequest']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['pendingRequest']->value['last_name'];?>
</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<div><?php }
}
