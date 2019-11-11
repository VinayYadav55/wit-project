<?php
/* Smarty version 3.1.33, created on 2019-08-31 16:05:48
  from '/home2/labiknmy/public_html/womenintech/presentation/templates/entry_file.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d6a9adc0b2150_26350784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9131163ba9ea1e136298fe89437d986cac2b105d' => 
    array (
      0 => '/home2/labiknmy/public_html/womenintech/presentation/templates/entry_file.tpl',
      1 => 1567267482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6a9adc0b2150_26350784 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/womenintech/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"router",'assign'=>"obj"),$_smarty_tpl);?>





<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['obj']->value->contentFile, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
