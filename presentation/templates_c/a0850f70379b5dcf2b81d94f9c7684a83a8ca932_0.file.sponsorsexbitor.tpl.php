<?php
/* Smarty version 3.1.33, created on 2019-09-13 11:12:49
  from '/home2/labiknmy/public_html/womenintech/presentation/templates/sponsorsexbitor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7b79b13c4278_79444135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0850f70379b5dcf2b81d94f9c7684a83a8ca932' => 
    array (
      0 => '/home2/labiknmy/public_html/womenintech/presentation/templates/sponsorsexbitor.tpl',
      1 => 1568355232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d7b79b13c4278_79444135 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/womenintech/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'event_deligate_registration','assign'=>'obj'),$_smarty_tpl);?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="<?php echo base_url();?>
/images/wit-favicon.ico" type="image/x-icon">
  <title>WiT | EVENT REGISTRATION</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/pastspecificevent.css?v=<?php echo jsversion();?>
" />

</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <input type="hidden" name="" class="siteUrl" value=<?php echo base_url();?>
/wit_growth_summit_2019>
  <div class="loader"></div>
  <div class="mainBlock">
    <div class="container right2leftGrad">
      <div class="forTemoraryImg text-center">
        <img src="<?php echo base_url();?>
/images/witlogo-logo.png" height="70" width="120" />
      </div>
      <div class="row">
        <div class="col-sm-6 offset-sm-3 pb-5">
          <h4 class="text-center pt-2">Sponsors / Exhibitor Inquiry</h4>
          <div class="text-center p-0 m-0">
            <small class="text-center justify-content-center">(Event Partner The Vipanan Company)</small>
          </div>
          <form action method>
            <div class="form-group">
              <label for="">First Name<span class="text-danger">*</span></label>
              <input type="text" class="form-control firstName" required>
            </div>
            <div class="form-group">
              <label for="">Last Name<span class="text-danger">*</span></label>
              <input type="text" class="form-control lastName" required>
            </div>
            <div class="form-group">
              <label for="">Email<span class="text-danger">*</span></label>
              <input type="text" class="form-control email" required>
            </div>
            <div class="form-group">
              <label for="">Contact<span class="text-danger">*</span></label>
              <input type="text" class="form-control phoneNo" required>
            </div>
            <div class="form-group">
              <label for="">Designation<span class="text-danger">*</span></label>
              <input type="text" class="form-control designation" required>
            </div>
            <div class="form-group">
              <label for="">Organisation Name<span class="text-danger">*</span></label>
              <input type="text" class="form-control organisationName" required>
            </div>
            <div class="form-group text-center">
              <button class="btn witBtn text-white sponsorsInquerySubmitData px-5 my-3 ">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/sponsorexibitor.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
