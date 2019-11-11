<?php
/* Smarty version 3.1.33, created on 2019-11-08 11:33:05
  from 'C:\xampp\htdocs\womenintech\presentation\templates\user_dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc54461393d68_23859745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a575ff5f62aaf7d102de209255fdde4a11cc3a84' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\user_dashboard.tpl',
      1 => 1573208481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:dashheader.tpl' => 1,
    'file:dashfooter.tpl' => 1,
  ),
),false)) {
function content_5dc54461393d68_23859745 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'userDashboard','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);
$_smarty_tpl->_assignInScope('candidateDetail', $_smarty_tpl->tpl_vars['obj']->value->applicantDetails);?>

   
    <?php $_smarty_tpl->_subTemplateRender('file:dashheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <input type="hidden" baseUrl=<?php echo base_url();?>
 class="baseUrl">
    <input type="hidden" userId=<?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['id'];?>
 class="usedId">
    <div class="docs-content-wrapper">
       <?php if ($_smarty_tpl->tpl_vars['userSessionDetail']->value['type'] === 'Candidate') {?>
        <div class="container-fluid"  style="background-color: #ececec; height:90vh; padding:100px;">
            <div class="row py-5">
              
            </div>
        </div>
        
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['userSessionDetail']->value['type'] === 'Mentor') {?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="text-success text-center">Mentor Dashboard</h4>
                </div>
            </div>
        </div>

        <?php }?>
    </div>


    <?php $_smarty_tpl->_subTemplateRender('file:dashfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
