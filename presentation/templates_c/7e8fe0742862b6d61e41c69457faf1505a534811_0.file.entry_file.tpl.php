<?php
/* Smarty version 3.1.33, created on 2019-08-29 10:16:51
  from 'C:\xampp\htdocs\vipananwebtest\presentation\templates\entry_file.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d6789f380eb35_28274264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e8fe0742862b6d61e41c69457faf1505a534811' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vipananwebtest\\presentation\\templates\\entry_file.tpl',
      1 => 1563972050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6789f380eb35_28274264 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vipananwebtest\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"router",'assign'=>"obj"),$_smarty_tpl);?>





<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['obj']->value->contentFile, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
