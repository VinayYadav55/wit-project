<?php
/* Smarty version 3.1.33, created on 2019-10-22 13:27:16
  from 'C:\xampp\htdocs\womenintech\presentation\templates\entry_file.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5daee7949c1596_45874065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f82b85f446b347e47aa8410284c5869019d86ae6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\entry_file.tpl',
      1 => 1567267482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5daee7949c1596_45874065 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"router",'assign'=>"obj"),$_smarty_tpl);?>





<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['obj']->value->contentFile, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
