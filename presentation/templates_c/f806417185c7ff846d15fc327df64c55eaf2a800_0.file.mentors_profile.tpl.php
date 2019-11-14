<?php
/* Smarty version 3.1.33, created on 2019-11-14 13:08:30
  from 'C:\xampp\htdocs\womenintech\presentation\templates\mentors_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcd43be477275_53963887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f806417185c7ff846d15fc327df64c55eaf2a800' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\mentors_profile.tpl',
      1 => 1573733305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:dashheader.tpl' => 1,
  ),
),false)) {
function content_5dcd43be477275_53963887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'userDashboard','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);
$_smarty_tpl->_assignInScope('candidateDetail', $_smarty_tpl->tpl_vars['obj']->value->applicantDetails);
$_smarty_tpl->_subTemplateRender('file:dashheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="<?php echo base_url();?>
/js/mentors_folloes.js"><?php echo '</script'; ?>
>
<div class="docs-content-wrapper">
    <div class="container mt-2">
        <div class="row">
            <div class="col-sm-8 ">
            <ul class="nav nav-pills mb-3 nav-tabs  py-2 px-5 someStyleinList" id="pills-tab"  role="tablist" style="position: sticky;top: 64px;z-index: 1;">
                    <li class="nav-item someStyleinListone">
                      <a class="nav-link active someStyleinListtwo newmen" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">New Mentor</a>
                    </li>
                    <li class="nav-item someStyleinListone">
                      <a class="nav-link someStyleinListtwo folloemen" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Followed Mentor</a>
                    </li>
                    <li class="nav-item someStyleinListone pendingRequestAjax">
                            <a class="nav-link someStyleinListtwo penmen" id="pills-pending-tab" data-toggle="pill" href="#pills-pending" role="tab" aria-controls="pills-pending" aria-selected="false">Pending Request</a>
                          </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">    <h6 class="text-success text-center" id="newmentor" >New Mentors, You may follow</h6>
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
/mentors_detailed_profile/mentors_id=<?php echo $_smarty_tpl->tpl_vars['mentordata']->value['id'];?>
">View Profile</a>
                                    <a class="btn btn-sm btn-outline-primary followbyMentee followbyMneteeDisablesdd" href="javascript:void();" 
                                     id=<?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['id'];?>
  mentorid=<?php echo $_smarty_tpl->tpl_vars['mentordata']->value['id'];?>
>Follow Mentor</a>
                                   
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><h6 class="text-success text-center">Mentors, You have followed</h6>
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
                                            <a class="btn btn-sm btn-outline-primary"  
                                            href="<?php echo base_url();?>
/mentors_detailed_profile/mentors_id=<?php echo $_smarty_tpl->tpl_vars['followmentordata']->value['id'];?>
">View Profile</a>
                                            
                                            <a class="btn btn-sm btn-outline-primary" href="javascript:void();">Message</a>
                                            <a class="btn btn-sm btn-success followUnfollow followUnfollowBtn"
                                            id=<?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['id'];?>
  mentorid=<?php echo $_smarty_tpl->tpl_vars['followmentordata']->value['id'];?>
  href="javascript:void();">Following <i class="far fa-check-circle"></i></a>
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
                        <div class="tab-pane fade" id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab">
                            <h6 class="text-center text-success">Pending request</h6>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->sentRequestData, 'pendingData');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pendingData']->value) {
?>
                            <div class="col-sm-12 mb-4 mentorListStyles py-4 " id="followedMentors">
                                    <div class="row">
                                        <div class="col-8">
                                                <h6 class="text-capitalize"><?php echo $_smarty_tpl->tpl_vars['pendingData']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['pendingData']->value['last_name'];?>
</h6>
                                                <div><small><b>Gender:</b> <?php echo $_smarty_tpl->tpl_vars['pendingData']->value['gender'];?>
</small></div>
                                                <div><small><b>Email id:</b> <?php echo $_smarty_tpl->tpl_vars['pendingData']->value['email_id'];?>
</small></div>
                                                <div class="mt-3">
                                                <a class="btn btn-sm btn-outline-primary"  
                                                href="<?php echo base_url();?>
/mentors_detailed_profile/mentors_id=<?php echo $_smarty_tpl->tpl_vars['pendingData']->value['id'];?>
">View Profile</a>
                                                <a class="btn btn-danger btn-outline-danger 
                                                btn-sm cancelRequest" href="javascript:void();"
                                                 id=<?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['id'];?>
   mentorid=<?php echo $_smarty_tpl->tpl_vars['pendingData']->value['id'];?>
>Cancel Request</a>
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
                  </div>
    </div>
    <div class="col-sm-4">
            <div class="container" style="position: sticky;top: 112px;">
                    <div class="row">
                        <div class="col-sm-12 border border-secondary" style="overflow-y: scroll;height: 550px;">
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
        $(this).text('Unfollow');
        $(this).addClass('px-3');
    });
    $('.followUnfollow').mouseleave(function(){
        $(this).text('Following').append(' <i class="far fa-check-circle"></i>');
        $(this).removeClass('px-3');
    });
    // $('.followbyMneteeDisablesdd').click(function(){
        // var thisDiv = $(this);
        // $(this).html('').append('<i class="fas fa-spinner fa-spin checkIt"></i>');
        // $(this).addClass('px-5 py-2');
        // setTimeout(function(){
        //     $('.checkIt').hide();
        //     thisDiv.html('').append('<i class="far fa-check-circle text-white"></i>');
        //     thisDiv.addClass('bg-success');
        // },3000);
    // });
});
<?php echo '</script'; ?>
><?php }
}
