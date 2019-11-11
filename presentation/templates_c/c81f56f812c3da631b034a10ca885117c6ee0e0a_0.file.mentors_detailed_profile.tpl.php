<?php
/* Smarty version 3.1.33, created on 2019-11-07 12:47:57
  from 'C:\xampp\htdocs\womenintech\presentation\templates\mentors_detailed_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc4046d8118c7_37336256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c81f56f812c3da631b034a10ca885117c6ee0e0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\mentors_detailed_profile.tpl',
      1 => 1573121545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:dashheader.tpl' => 1,
  ),
),false)) {
function content_5dc4046d8118c7_37336256 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'userDashboard','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);
$_smarty_tpl->_assignInScope('candidateDetail', $_smarty_tpl->tpl_vars['obj']->value->applicantDetails);
echo var_dump($_smarty_tpl->tpl_vars['obj']->value);?>

<?php $_smarty_tpl->_subTemplateRender('file:dashheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="docs-content-wrapper">
    <!-- <div class="container">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->unFollowedMentorProfiles, 'mentordata');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mentordata']->value) {
?>
        <div class="col-sm-12 mb-4 mentorListStyles py-4">
        <div class="row">
            <div class="col-8">
                    <h5><?php echo $_smarty_tpl->tpl_vars['mentordata']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['mentordata']->value['last_name'];?>
</h5>
                    <p><b>Gender:</b> <?php echo $_smarty_tpl->tpl_vars['mentordata']->value['gender'];?>
</p>
                    <p><b>Email id:</b> <?php echo $_smarty_tpl->tpl_vars['mentordata']->value['email_id'];?>
</p>
                    <button class="btn btn-sm btn-primary">View Profile</button>
                    <button class="btn btn-sm btn-primary">Follow</button>
                    <button class="btn btn-sm btn-primary">Message</button>
            </div>
            <div class="col-4">
                    <div class="speakerImgDiv">
                            <div class="imageContainerSpeaker">
                                <img src="<?php echo base_url();?>
/images/avtar_women.jpg" class="main-image-speaker rounded-circle" alt="" />
                     </div>
                 </div>
            </div>
        </div>
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>   -->

<div class="container">
  <div class="row">
    <div class="col-sm-10">
        <h5>Name: Sanjeev Kumar Gupta</h5>
         <div>Email Id: sanjeev@gmail.com</div> 
         <div>Email Id: sanjeev@gmail.com</div> 
         <div>Contact: +91-8585656525</div> 
         <div>Education: Phd.</div> 
         <div>Word Experience: 15Years</div> 
         <div>Company: Macafee</div> 
         <div>Current Employment: Director Engineer</div> 
  
    </div>
    <div class="col-sm-2"> <div class="speakerImgDiv">
        <div class="imageContainerSpeaker">
            <img src="<?php echo base_url();?>
/images/nishant_rao_coo.jpg" class="main-image-speaker rounded-circle" alt="" />
            <h5>Sanjeev Gupta</h5>
 </div></div>
  </div>
</div>
</div>
<?php }
}
