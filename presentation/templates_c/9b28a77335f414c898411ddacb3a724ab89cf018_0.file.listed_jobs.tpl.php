<?php
/* Smarty version 3.1.33, created on 2019-10-22 11:11:15
  from '/home2/labiknmy/public_html/womenintech/presentation/templates/listed_jobs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5daee3d36d6fb7_20382025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b28a77335f414c898411ddacb3a724ab89cf018' => 
    array (
      0 => '/home2/labiknmy/public_html/womenintech/presentation/templates/listed_jobs.tpl',
      1 => 1571742657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5daee3d36d6fb7_20382025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/womenintech/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),1=>array('file'=>'/home2/labiknmy/public_html/womenintech/libs/smarty/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
 <?php echo smarty_function_load_presentation_object(array('filename'=>'jobPortal','assign'=>'obj'),$_smarty_tpl);?>

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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<!-- <?php if ($_smarty_tpl->tpl_vars['obj']->value->jobDetails) {?>
   <div class="pagination">
        <?php if ($_smarty_tpl->tpl_vars['obj']->value->totalJobs > 10) {?>
        <div class="page">
            <div class="row">
                <?php $_smarty_tpl->_assignInScope('totalpage', $_smarty_tpl->tpl_vars['obj']->value->totalJobs/ceil(10));?>            
                <?php
$__section_foo_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['totalpage']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_foo_0_total = $__section_foo_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_foo'] = new Smarty_Variable(array());
if ($__section_foo_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] <= $__section_foo_0_total; $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index']++){
?> 
                    <?php $_smarty_tpl->_assignInScope('counter', (isset($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] : null));?>               
                    <div class="col">
                        <span id="<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
" class="productpagetab <?php if ($_smarty_tpl->tpl_vars['obj']->value->page == 0 && $_smarty_tpl->tpl_vars['counter']->value == 1) {?>activepagetab<?php } elseif ($_smarty_tpl->tpl_vars['obj']->value->page == $_smarty_tpl->tpl_vars['counter']->value) {?>activepagetab<?php }?>"><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
</span>
                    </div>
                <?php
}
}
?>
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
    
<?php }?>-->

<?php if ($_smarty_tpl->tpl_vars['obj']->value->jobDetails) {?>
<div class="pagination">
  <?php if ($_smarty_tpl->tpl_vars['obj']->value->totalJobs > 10) {?>
  <div class="page">
    <div class="row">
      <?php $_smarty_tpl->_assignInScope('totalpage', $_smarty_tpl->tpl_vars['obj']->value->totalJobs/ceil(10));?>
      <?php $_smarty_tpl->_assignInScope('counter', (isset($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] : null));?>
      <!-- <div class="col">
        <span id="<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
"
          class="productpagetab <?php if ($_smarty_tpl->tpl_vars['obj']->value->page == 0 && $_smarty_tpl->tpl_vars['counter']->value == 1) {?>activepagetab<?php } elseif ($_smarty_tpl->tpl_vars['obj']->value->page == $_smarty_tpl->tpl_vars['counter']->value) {?>activepagetab<?php }?>"><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
</span>
      </div> -->
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a href = '<?php echo base_url();?>
/job_portal' class="page-link productpagetab" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
           
          <?php $_smarty_tpl->_assignInScope('counter', (isset($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] : null));?>
          <li class="page-item">
            <a class="page-link <?php if ($_smarty_tpl->tpl_vars['obj']->value->page >= 2) {?>productpagetab<?php } else { ?>disabled<?php }?>" aria-label="Next" id="<?php if ($_smarty_tpl->tpl_vars['obj']->value->page >= 2) {
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
            <a class="page-link <?php if ($_smarty_tpl->tpl_vars['obj']->value->page < $_smarty_tpl->tpl_vars['counter']->value) {?>productpagetab<?php } else { ?>disabled<?php }?>" aria-label="Next" id="<?php if ($_smarty_tpl->tpl_vars['obj']->value->page == '') {
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
