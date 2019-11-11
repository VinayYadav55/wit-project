<?php
/* Smarty version 3.1.33, created on 2019-11-06 10:51:21
  from 'C:\xampp\htdocs\womenintech\presentation\templates\applied_jobs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc29799513792_82229198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f79a292f3eca2296891e9d6398c768aa78d6fe0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\applied_jobs.tpl',
      1 => 1573033530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:dashheader.tpl' => 1,
    'file:dashfooter.tpl' => 1,
  ),
),false)) {
function content_5dc29799513792_82229198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'userDashboard','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);
$_smarty_tpl->_subTemplateRender('file:dashheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_assignInScope('total_applied_jobs', count($_smarty_tpl->tpl_vars['obj']->value->appliedJobsList));?>

  <div class="docs-content-wrapper">
    <div class="container-fluid" style="background-color: #ececec;">
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10 my-4 bg-white">
          <h3 class="py-2 text-center">Applied Job</h3>
          <hr class="bg-secondary" />
        </div>
        <div class="col-sm-1"></div>
      </div>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->appliedJobsList, 'jobList');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['jobList']->value) {
?>
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10 bg-light p-4 appliedJobMain" style="border: 1px solid #d2cccc;">
          <h4><?php echo $_smarty_tpl->tpl_vars['jobList']->value['company_name'];?>
</h4>
          <p class="text-capitalize">Profile: <?php echo $_smarty_tpl->tpl_vars['jobList']->value['job_title'];?>
</p>
          <p><?php echo $_smarty_tpl->tpl_vars['jobList']->value['job_description'];?>
</p>
          <span class="btn p-2 appliedStatusBtn disabled">
            Applied <i class='far fa-check-circle'></i>
          </span>
          <span class="ml-md-5 float-right viewFullDetails"><a class="text-white"
              href="<?php echo base_url();?>
/job_details/job_id=<?php echo $_smarty_tpl->tpl_vars['jobList']->value['job_id'];?>
">View
              Details</a></span>
        </div>
        <div class="col-sm-1"></div>
      </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <div class="col-sm-1"></div>
    </div>
  </div>

  <?php $_smarty_tpl->_subTemplateRender('file:dashfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
