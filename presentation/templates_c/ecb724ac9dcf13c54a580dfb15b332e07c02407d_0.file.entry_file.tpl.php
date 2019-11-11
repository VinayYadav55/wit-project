<?php
/* Smarty version 3.1.33, created on 2019-07-01 10:39:24
  from 'C:\xampp\htdocs\rbswit\presentation\templates\entry_file.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d19e2dc51d163_38047821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecb724ac9dcf13c54a580dfb15b332e07c02407d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rbswit\\presentation\\templates\\entry_file.tpl',
      1 => 1561977055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d19e2dc51d163_38047821 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\rbswit\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"router",'assign'=>"obj"),$_smarty_tpl);?>





<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['obj']->value->contentFile, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
