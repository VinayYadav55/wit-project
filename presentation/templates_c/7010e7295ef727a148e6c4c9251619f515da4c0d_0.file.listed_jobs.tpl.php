<?php
/* Smarty version 3.1.33, created on 2019-08-07 16:12:08
  from 'C:\xampp\htdocs\djdfbf\sanjeev\presentation\templates\listed_jobs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4adc38ad6042_46133012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7010e7295ef727a148e6c4c9251619f515da4c0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\templates\\listed_jobs.tpl',
      1 => 1565187126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4adc38ad6042_46133012 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
?>
 <?php echo smarty_function_load_presentation_object(array('filename'=>'jobPortal','assign'=>'obj'),$_smarty_tpl);?>

 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->jobDetails, 'job');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['job']->value) {
?>

  <div class="row">
    <div class="col-md-2">
      <img
        class=""
        src="<?php echo base_url();?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['company_logo'];?>
"
        height="100px"
        width="100px"
      />
    </div>
    <div class="col-md-10">
      <div>
        <a href="<?php echo base_url();?>
/job_title/job_id=<?php echo $_smarty_tpl->tpl_vars['job']->value['job_id'];?>
" class="jobTitle"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_title'];?>
</a>
      </div>
      <div class="companyName py-2"><?php echo $_smarty_tpl->tpl_vars['job']->value['company_name'];?>
</div>
      <ul class="nav">
        <li class="nav-item listBorder pr-2">
          <i class="fas fa-map-marker"></i> <?php echo $_smarty_tpl->tpl_vars['job']->value['job_location'];?>

        </li>
        <li class="nav-item listBorder pr-2">
          &nbsp; <i class="fas fa-briefcase"></i> <?php echo $_smarty_tpl->tpl_vars['job']->value['work_experience'];?>
 years
        </li>
      </ul>
    </div>
  </div>
    <hr />
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php if ($_smarty_tpl->tpl_vars['obj']->value->jobDetails) {?>
    <div class="pagination">
        <?php if ($_smarty_tpl->tpl_vars['obj']->value->totalJobs > 10) {?>
        <div class="page">
            <ul>
                <?php $_smarty_tpl->_assignInScope('totalpage', $_smarty_tpl->tpl_vars['obj']->value->totalJobs/ceil(10));?>            
                <?php
$__section_foo_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['totalpage']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_foo_0_total = $__section_foo_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_foo'] = new Smarty_Variable(array());
if ($__section_foo_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] <= $__section_foo_0_total; $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index']++){
?> 
                    <?php $_smarty_tpl->_assignInScope('counter', (isset($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] : null));?>               
                    <li>
                        <span id="<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
" class="productpagetab <?php if ($_smarty_tpl->tpl_vars['obj']->value->page == 0 && $_smarty_tpl->tpl_vars['counter']->value == 1) {?>activepagetab<?php } elseif ($_smarty_tpl->tpl_vars['obj']->value->page == $_smarty_tpl->tpl_vars['counter']->value) {?>activepagetab<?php }?>"><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
</span>
                    </li>
                <?php
}
}
?>
            </ul>
        </div>
        <?php }?>
    </div>
<?php } else { ?>
    <div class="no-product">
        <div class="error-message">
            No Product Found!;
        </div>
    </div>
    
<?php }
}
}
