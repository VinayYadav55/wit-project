<?php
/* Smarty version 3.1.33, created on 2019-11-07 07:58:55
  from 'C:\xampp\htdocs\womenintech\presentation\templates\mentors_dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc3c0af91ffb0_56569867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c05bf462a4b4acd39e924facb8dcf58c5cc8d5cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\mentors_dashboard.tpl',
      1 => 1573109933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:dashheader.tpl' => 1,
  ),
),false)) {
function content_5dc3c0af91ffb0_56569867 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'userDashboard','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);
$_smarty_tpl->_assignInScope('candidateDetail', $_smarty_tpl->tpl_vars['obj']->value->applicantDetails);?>

   
    <?php $_smarty_tpl->_subTemplateRender('file:dashheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <div class="docs-content-wrapper">
   <h1>mentor dashbaord</h1>
   </div><?php }
}
