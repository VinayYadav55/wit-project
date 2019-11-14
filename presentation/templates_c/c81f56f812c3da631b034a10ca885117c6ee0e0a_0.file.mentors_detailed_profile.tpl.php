<?php
<<<<<<< HEAD
/* Smarty version 3.1.33, created on 2019-11-14 11:53:18
||||||| 33ac817
/* Smarty version 3.1.33, created on 2019-11-11 15:15:26
=======
/* Smarty version 3.1.33, created on 2019-11-14 10:44:06
>>>>>>> 590e8a25c8e15a563e216affd4186ad7c8b97a66
  from 'C:\xampp\htdocs\womenintech\presentation\templates\mentors_detailed_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
<<<<<<< HEAD
  'unifunc' => 'content_5dcd321e9e3df6_57201905',
||||||| 33ac817
  'unifunc' => 'content_5dc96cfe624ea9_45801389',
=======
  'unifunc' => 'content_5dcd21e6ef0bb5_60572738',
>>>>>>> 590e8a25c8e15a563e216affd4186ad7c8b97a66
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c81f56f812c3da631b034a10ca885117c6ee0e0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\mentors_detailed_profile.tpl',
<<<<<<< HEAD
      1 => 1573728796,
||||||| 33ac817
      1 => 1573475105,
=======
      1 => 1573718363,
>>>>>>> 590e8a25c8e15a563e216affd4186ad7c8b97a66
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:dashheader.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_5dcd321e9e3df6_57201905 (Smarty_Internal_Template $_smarty_tpl) {
||||||| 33ac817
function content_5dc96cfe624ea9_45801389 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5dcd21e6ef0bb5_60572738 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 590e8a25c8e15a563e216affd4186ad7c8b97a66
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'mentorsProfile','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);
$_smarty_tpl->_assignInScope('candidateDetail', $_smarty_tpl->tpl_vars['obj']->value->applicantDetails);
$_smarty_tpl->_assignInScope('mentorProfileData', $_smarty_tpl->tpl_vars['obj']->value->mentorData);
$_smarty_tpl->_assignInScope('menteeProfileData', $_smarty_tpl->tpl_vars['obj']->value->followerData);
$_smarty_tpl->_subTemplateRender('file:dashheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<<<<<<< HEAD
<!-- <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/mentors_folloes.js"><?php echo '</script'; ?>
> -->
||||||| 33ac817
=======

<?php if ($_smarty_tpl->tpl_vars['mentorProfileData']->value['type'] == 'Mentor') {?>
>>>>>>> 590e8a25c8e15a563e216affd4186ad7c8b97a66
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
<<<<<<< HEAD
                     <a class="btn btn-sm btn-outline-primary" href="javascript:void();" 
                     id=<?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['id'];?>
  mentorid=<?php echo $_smarty_tpl->tpl_vars['mentorProfileData']->value['id'];?>
>Follow Mentor</a>
                     <!-- <button class="btn btn-sm btn-primary px-5 py-2">Unfollow</button> -->
||||||| 33ac817
                     <button class="btn btn-sm btn-primary px-5 py-2">Follow</button>
                     <!-- <button class="btn btn-sm btn-primary px-5 py-2">Unfollow</button> -->
=======
                     <button class="btn btn-sm btn-primary px-5 py-2">Follow</button>
>>>>>>> 590e8a25c8e15a563e216affd4186ad7c8b97a66
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
<?php } else {
echo var_dump($_smarty_tpl->tpl_vars['menteeProfileData']->value);?>

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
                   <div class="text-center text-capitalize"> <h5><?php echo $_smarty_tpl->tpl_vars['menteeProfileData']->value[0]['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['menteeProfileData']->value[0]['last_name'];?>
</h5></div>
                    <div class="text-center">
                        <span class="btn btn-primary btn-sm border border-dark p-2 bg-dark">Following<span class="badge badge-primary">205</span></span>
                   </div>
                   <hr>
               </div>
               <div class="col-12 py-4">
                <div class="row">
               <div class="col-6 border border-top-0 border-bottom-0 border-left-0 border-dark"><div><b>Gender:</b> <?php echo $_smarty_tpl->tpl_vars['menteeProfileData']->value[0]['gender'];?>
</div>
               <div><b>Email id:</b> <?php echo $_smarty_tpl->tpl_vars['menteeProfileData']->value[0]['email_id'];?>
</div>
               <div><b>Functional Area:</b> <?php echo $_smarty_tpl->tpl_vars['menteeProfileData']->value[0]['functional_area'];?>
</div>
               <div><b>Industry Type:</b> <?php echo $_smarty_tpl->tpl_vars['menteeProfileData']->value[0]['industry_type'];?>
</div>
            </div>
               <div class="col-6">
                   <h6>About Mentors</h6>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, minima odit provident nemo, ullam iste corporis fugiat necessitatibus harum accusantium recusandae sequi facere, optio laborum deleniti excepturi itaque quos reiciendis?</p>
               </div>
            </div>
        </div>
                       
              
           </div>
       </div>
   </div> 
<?php }
}
}
