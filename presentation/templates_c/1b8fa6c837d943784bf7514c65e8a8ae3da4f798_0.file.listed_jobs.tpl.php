<?php
/* Smarty version 3.1.33, created on 2019-11-06 11:04:03
  from 'C:\xampp\htdocs\womenintech\presentation\templates\listed_jobs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc29a93701929_34386098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b8fa6c837d943784bf7514c65e8a8ae3da4f798' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\listed_jobs.tpl',
      1 => 1573034572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc29a93701929_34386098 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),1=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\libs\\smarty\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
echo smarty_function_load_presentation_object(array('filename'=>'jobPortal','assign'=>'obj'),$_smarty_tpl);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->jobDetails, 'job');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['job']->value) {
?>

<div class="row">
  <div class="col-md-2">
    <div class="speakerImgDivHomeCompany">
      <div class="imageContainerSpeakerHomeCompany">
        <img class="main-image-speakerHomeCompany" src="<?php echo base_url();?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['company_logo'];?>
" />
      </div>
    </div>
  </div>
  <div class="col-md-10">
    <div>
      <a href="<?php echo base_url();?>
/job_title/job_id=<?php echo $_smarty_tpl->tpl_vars['job']->value['job_id'];?>
" class="jobTitle text-capitalize"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_title'];?>
</a>
    </div>
    <div class="companyName py-2"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['job']->value['company_name']);?>
</div>
    <button class="btn witBtn px-4 float-right applyJobs" id=<?php echo $_smarty_tpl->tpl_vars['job']->value['job_id'];?>
>Apply</button>
    <ul class="nav">
      <li class="nav-item listBorder pr-2">
        <i class="fas fa-map-marker"></i> <?php echo $_smarty_tpl->tpl_vars['job']->value['job_location'];?>

      </li>
      <li class="nav-item listBorder pr-2">
        &nbsp; <i class="fas fa-briefcase"></i> <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['job']->value['work_experience']);?>
 <?php if ($_smarty_tpl->tpl_vars['job']->value['work_experience'] == 'freshers') {
} else { ?> years <?php }?>
      </li>
    </ul>
  </div>
</div>
<hr />
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['obj']->value->jobDetails) {?>
<div class="pagination">
  <?php if ($_smarty_tpl->tpl_vars['obj']->value->totalJobs > 10) {?>
  <div class="page">
    <div class="row">
      <?php $_smarty_tpl->_assignInScope('totalpage', $_smarty_tpl->tpl_vars['obj']->value->totalJobs/ceil(10));?>
      <?php $_smarty_tpl->_assignInScope('counter', (isset($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] : null));?>
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a href='<?php echo base_url();?>
/job_portal' class="page-link productpagetab text-dark" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>

          <?php $_smarty_tpl->_assignInScope('counter', (isset($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] : null));?>
          <li class="page-item">
            <a class="page-link <?php if ($_smarty_tpl->tpl_vars['obj']->value->page >= 2) {?>productpagetab<?php } else { ?>disabled<?php }?>" aria-label="Next"
              id="<?php if ($_smarty_tpl->tpl_vars['obj']->value->page >= 2) {
echo $_smarty_tpl->tpl_vars['obj']->value->page-1;
}?>">
              <span aria-hidden="true">&#8249;</span>

            </a>
          </li>
          <li class="page-item active">
            <a class="page-link productpagetab currentPage" id="<?php if ($_smarty_tpl->tpl_vars['obj']->value->page) {
echo $_smarty_tpl->tpl_vars['obj']->value->page;
} else { ?>1<?php }?>"><?php if ($_smarty_tpl->tpl_vars['obj']->value->page) {
echo $_smarty_tpl->tpl_vars['obj']->value->page;
} else { ?>1<?php }?></a></li>
          <li class="page-item ">
            <a class="page-link <?php if ($_smarty_tpl->tpl_vars['obj']->value->page < $_smarty_tpl->tpl_vars['counter']->value) {?>productpagetab<?php } else { ?>disabled<?php }?>" aria-label="Next"
              id="<?php if ($_smarty_tpl->tpl_vars['obj']->value->page == '') {
echo $_smarty_tpl->tpl_vars['obj']->value->page+2;
} else {
echo $_smarty_tpl->tpl_vars['obj']->value->page+1;
}?>">
              <span aria-hidden="true">&#8250;</span>

            </a>
          </li>
          <li class="page-item">
            <a class="page-link productpagetab" aria-label="Next" id="<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>

    </div>
  </div>
  <?php }?>
</div>
<?php } else { ?>
<div class="no-product">
  <div class="error-message text-center">
    No Jobs Found!
  </div>
</div>

<?php }
}
}
