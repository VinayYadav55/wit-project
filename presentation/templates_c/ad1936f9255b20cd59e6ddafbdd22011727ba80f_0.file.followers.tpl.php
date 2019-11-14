<?php
/* Smarty version 3.1.33, created on 2019-11-14 07:56:45
  from 'C:\xampp\htdocs\womenintech\presentation\templates\followers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dccfaadd6ed25_80259721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad1936f9255b20cd59e6ddafbdd22011727ba80f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\followers.tpl',
      1 => 1573714052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dccfaadd6ed25_80259721 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="vinay">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->mentorFollowersRequest, 'pendingRequest');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pendingRequest']->value) {
?>
	<div class="col-sm-12 mb-4 mentorListStyles py-4" >
			<div class="row">
					<div class="col-8">
									<h6 class="text-capitalize"><?php echo $_smarty_tpl->tpl_vars['pendingRequest']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['pendingRequest']->value['last_name'];?>
</h6>
									<div><small><b>Gender:</b> <?php echo $_smarty_tpl->tpl_vars['pendingRequest']->value['gender'];?>
</small></div>
									<div><small><b>Email id:</b> <?php echo $_smarty_tpl->tpl_vars['pendingRequest']->value['email_id'];?>
</small></div>
									<div class="mt-3">
									<a class="btn btn-sm btn-outline-primary"
									href="<?php echo base_url();?>
/mentors_detailed_profile/request_id=<?php echo $_smarty_tpl->tpl_vars['pendingRequest']->value['id'];?>
">View Profile</a>
									
									<a class="btn btn-sm btn-outline-primary acceptrequest" href="javascript:void();" id=<?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['id'];?>
 
									requestid=<?php echo $_smarty_tpl->tpl_vars['pendingRequest']->value['id'];?>
 >Accept Request</a>
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

<?php echo '<script'; ?>
>

<?php echo '</script'; ?>
><?php }
}
