<?php
/* Smarty version 3.1.33, created on 2019-07-26 09:19:01
  from 'C:\xampp\htdocs\sanjeev\presentation\templates\entry_file.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3aa9650d2050_22845186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '444d3fcb91c6c7d436add2968827c6efdfb794f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanjeev\\presentation\\templates\\entry_file.tpl',
      1 => 1563930650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3aa9650d2050_22845186 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\sanjeev\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"router",'assign'=>"obj"),$_smarty_tpl);?>





<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['obj']->value->contentFile, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
