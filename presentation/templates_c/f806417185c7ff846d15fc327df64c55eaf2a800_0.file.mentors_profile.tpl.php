<?php
/* Smarty version 3.1.33, created on 2019-11-11 10:50:24
  from 'C:\xampp\htdocs\womenintech\presentation\templates\mentors_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc92ee0cce3e5_14047412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f806417185c7ff846d15fc327df64c55eaf2a800' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\mentors_profile.tpl',
      1 => 1573465822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:dashheader.tpl' => 1,
  ),
),false)) {
function content_5dc92ee0cce3e5_14047412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'userDashboard','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);
$_smarty_tpl->_assignInScope('candidateDetail', $_smarty_tpl->tpl_vars['obj']->value->applicantDetails);?>

<?php $_smarty_tpl->_subTemplateRender('file:dashheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="<?php echo base_url();?>
/js/mentors_folloes.js"><?php echo '</script'; ?>
>
<div class="docs-content-wrapper">
    <div class="container bg-white" style="position: sticky;top: 64px;z-index: 1;box-shadow: 0px 2px 1px 1px #ece4e4;">
        <div class="row">
            <div class="col-sm-12 bg-white py-2">
            <a href="#followedMentors" class="btn btn-sm" style="background-color: #345a00 !important;color:white !important;">Followed Mentors</a>
            <a href="#newmentor" class="btn btn-sm" style="color: #3f001e !important;">New Mentors</a>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
        <div class="col-sm-8">
            <h6 class="text-success text-center" id="newmentor" >New Mentors, You may follow</h6>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->unFollowedMentorProfiles, 'mentordata');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mentordata']->value) {
?>
        <div class="col-sm-12 mb-4 mentorListStyles py-4" >
        <div class="row">
            <div class="col-8">
                    <h6 class="text-capitalize"><?php echo $_smarty_tpl->tpl_vars['mentordata']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['mentordata']->value['last_name'];?>
</h6>
                    <div><small><b>Gender:</b> <?php echo $_smarty_tpl->tpl_vars['mentordata']->value['gender'];?>
</small></div>
                    <div><small><b>Email id:</b> <?php echo $_smarty_tpl->tpl_vars['mentordata']->value['email_id'];?>
</small></div>
                    <div class="mt-3">
                    <a class="btn btn-sm btn-outline-primary"
                    href="<?php echo base_url();?>
/mentors_detailed_profile/mentors_id=<?php echo $_smarty_tpl->tpl_vars['mentors']->value['men_id'];?>
">View Profile</a>
                    <a class="btn btn-sm btn-outline-primary followbyMentee" href="" id=<?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['id'];?>
       mentorid=<?php echo $_smarty_tpl->tpl_vars['mentordata']->value['id'];?>
>Follow</a>
                </div>
            </div>
            <div class="col-4">
                    <div class="speakerImgDivMentor">
                            <div class="imageContainerSpeakerMentor">
                                <img src="<?php echo base_url();?>
/images/avtar.png" class="main-image-speaker-mentor rounded-circle" alt="" />
                     </div>
                 </div>
            </div>
        </div>
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<hr class="w-75 bg-primary">
<h6 class="text-success text-center">Mentors, You have followed</h6>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->followedMentorProfiles, 'followmentordata');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['followmentordata']->value) {
?>
<div class="col-sm-12 mb-4 mentorListStyles py-4 " id="followedMentors">
        <div class="row">
            <div class="col-8">
                    <h6 class="text-capitalize"><?php echo $_smarty_tpl->tpl_vars['followmentordata']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['followmentordata']->value['last_name'];?>
</h6>
                    <div><small><b>Gender:</b> <?php echo $_smarty_tpl->tpl_vars['followmentordata']->value['gender'];?>
</small></div>
                    <div><small><b>Email id:</b> <?php echo $_smarty_tpl->tpl_vars['followmentordata']->value['email_id'];?>
</small></div>
                    <div class="mt-3">
                    <a class="btn btn-sm btn-outline-primary" href="<?php echo base_url();?>
/mentors_detailed_profile">View Profile</a>
                    
                    <a class="btn btn-sm btn-outline-primary" href="">Message</a>
                    <button class="btn btn-sm btn-outline-primary followUnfollow" href="">Following <i class="far fa-check-circle"></i></button>
                </div>
            </div>
            <div class="col-4">
                    <div class="speakerImgDivMentor">
                            <div class="imageContainerSpeakerMentor">
                                <img src="<?php echo base_url();?>
/images/avtar.png" class="main-image-speaker-mentor rounded-circle" alt="" />
                     </div>
                 </div>
            </div>
        </div>
    </div>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>
<div class="col-sm-4">

<div class="container  border border-dark mentorListStyles" style="position: sticky;top: 112px;">
    <div class="row">
        <div class="col-sm-12" style="overflow-y: scroll;height: 550px;">
            <h5 class="text-success text-center py-3">News Feed</h5>
            <hr>
            <h5 class="text-success text-center py-3">News Feed</h5>
            <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
            <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
            <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
            <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
            <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
            <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
            <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
            <hr>
        </div>
    </div>
</div>
</div>
</div>  
</div>
</div>
<?php echo '<script'; ?>
>
$(document).ready(function(){
    $('.followUnfollow').mouseenter(function(){
        $(this).html('Unfollow');
    });
    $('.followUnfollow').mouseleave(function(){
        $(this).html('Following').append(' <i class="far fa-check-circle"></i>');
    });
});
<?php echo '</script'; ?>
><?php }
}
