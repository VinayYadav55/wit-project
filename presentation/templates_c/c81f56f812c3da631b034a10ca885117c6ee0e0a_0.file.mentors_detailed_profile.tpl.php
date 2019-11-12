<?php
/* Smarty version 3.1.33, created on 2019-11-12 13:12:46
  from 'C:\xampp\htdocs\womenintech\presentation\templates\mentors_detailed_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcaa1be691b09_14347010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c81f56f812c3da631b034a10ca885117c6ee0e0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\mentors_detailed_profile.tpl',
      1 => 1573560763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:dashheader.tpl' => 1,
  ),
),false)) {
function content_5dcaa1be691b09_14347010 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'mentorsProfile','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);
$_smarty_tpl->_assignInScope('candidateDetail', $_smarty_tpl->tpl_vars['obj']->value->applicantDetails);
$_smarty_tpl->_assignInScope('mentorProfileData', $_smarty_tpl->tpl_vars['obj']->value->mentorData);
$_smarty_tpl->_subTemplateRender('file:dashheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="docs-content-wrapper">
     <div class="container p-3">
        <div class="col-sm-12">
        <div class="row">
            <div class="col-12 bgImageForCover">
                    <div class="speakerImgDiv">
                            <div class="imageContainerSpeaker">
                                <img src="<?php echo base_url();?>
/images/avtar.png" class="main-image-speaker rounded-circle" alt="" />
                     </div>
                 </div>
                <div class="text-center"> <h5><?php echo $_smarty_tpl->tpl_vars['mentorProfileData']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['mentorProfileData']->value['last_name'];?>
</h5></div>
                 <div class="text-center">
                     <span class="btn btn-primary btn-sm border border-dark p-2 bg-dark">Followers  <span class="badge badge-primary"> 150</span></span>
                     <button class="btn btn-sm btn-primary px-5 py-2">Follow</button>
                     <!-- <button class="btn btn-sm btn-primary px-5 py-2">Unfollow</button> -->
                </div>
                <hr>
            </div>
            <div class="col-6 border border-top-0 border-bottom-0 border-left-0 border-dark"><div><b>Gender:</b> <?php echo $_smarty_tpl->tpl_vars['mentorProfileData']->value['gender'];?>
</div>
            <div><b>Email id:</b> <?php echo $_smarty_tpl->tpl_vars['mentorProfileData']->value['email_id'];?>
</div></div>
            <div class="col-6">
                <h6>About Mentors</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, minima odit provident nemo, ullam iste corporis fugiat necessitatibus harum accusantium recusandae sequi facere, optio laborum deleniti excepturi itaque quos reiciendis?</p>
            </div>
                    
           
        </div>
    </div>
</div>  
<?php }
}
