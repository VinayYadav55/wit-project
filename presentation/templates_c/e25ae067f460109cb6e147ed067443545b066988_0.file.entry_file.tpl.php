<?php
/* Smarty version 3.1.33, created on 2019-07-22 14:23:07
  from '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/entry_file.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d35c6cb009249_34259741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e25ae067f460109cb6e147ed067443545b066988' => 
    array (
      0 => '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/entry_file.tpl',
      1 => 1563219728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d35c6cb009249_34259741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/vipananwebtest/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"router",'assign'=>"obj"),$_smarty_tpl);?>





<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['obj']->value->contentFile, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
