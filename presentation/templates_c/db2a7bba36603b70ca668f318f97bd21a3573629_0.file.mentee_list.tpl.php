<?php
/* Smarty version 3.1.33, created on 2019-11-07 13:01:12
  from 'C:\xampp\htdocs\womenintech\presentation\templates\mentee_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc40788e45404_89472240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db2a7bba36603b70ca668f318f97bd21a3573629' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\mentee_list.tpl',
      1 => 1573128037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:dashheader.tpl' => 1,
  ),
),false)) {
function content_5dc40788e45404_89472240 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'userDashboard','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);
$_smarty_tpl->_assignInScope('candidateDetail', $_smarty_tpl->tpl_vars['obj']->value->applicantDetails);?>

<?php $_smarty_tpl->_subTemplateRender('file:dashheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="docs-content-wrapper">
    <div class="container bg-white" style="position: sticky;top: 64px;z-index: 1;box-shadow: 0px 2px 1px 1px #ece4e4;">
        <div class="row">
            <div class="col-sm-12 bg-white py-2">
            <a href="#yourfollowers" class="btn btn-sm btn-warning">Your Followers</a>
            <a href="#newrequest" class="btn btn-sm btn-warning">New Request</a>
            <a href="#newpending" class="btn btn-sm btn-warning">Pending Request</a>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
        <div class="col-sm-8">
            <h6 class="text-success text-center" id="newrequest" >New Request</h6>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->dfdf, 'mentordata');
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
                    <a class="btn btn-sm btn-default" href="<?php echo base_url();?>
/mentors_detailed_profile">View Profile</a>
                    <a class="btn btn-sm btn-default" href="">Follow</a>
                    <a class="btn btn-sm btn-default" href="">Message</a>
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
<h6 class="text-success text-center" id="yourfollowers">Your Followers</h6>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->fdfdfdfdfdfd, 'followmentordata');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['followmentordata']->value) {
?>
<div class="col-sm-12 mb-4 mentorListStyles py-4" >
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
                    <a class="btn btn-sm btn-default" href="<?php echo base_url();?>
/mentors_detailed_profile">View Profile</a>
                    <a class="btn btn-sm btn-default" href="">Follow</a>
                    <a class="btn btn-sm btn-default" href="">Message</a>
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
<h6 class="text-success text-center" id="newpending">Pending Request</h6>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->dfdfdfd, 'followmentordata');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['followmentordata']->value) {
?>
<div class="col-sm-12 mb-4 mentorListStyles py-4 ">
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
                    <a class="btn btn-sm btn-default" href="<?php echo base_url();?>
/mentors_detailed_profile">View Profile</a>
                    <a class="btn btn-sm btn-default" href="">Follow</a>
                    <a class="btn btn-sm btn-default" href="">Message</a>
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

<div class="container  border border-dark mentorListStyles" style="position: sticky;top: 120px;">
    <div class="row">
        <div class="col-sm-12" style="overflow-y: scroll;height: 500px;">
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
            <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
            <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
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
<?php }
}
