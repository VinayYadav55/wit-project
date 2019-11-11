<?php
/* Smarty version 3.1.33, created on 2019-08-31 11:42:09
  from '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/deligate_registration_for_event.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d6a5d11a7acc6_18635303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '930dd7180c0ae1470b26e732ec08bcd98537ded8' => 
    array (
      0 => '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/deligate_registration_for_event.tpl',
      1 => 1567179443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d6a5d11a7acc6_18635303 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/vipananwebtest/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'event_deligate_registration','assign'=>'obj'),$_smarty_tpl);?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <title>WiT | Event</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/pastspecificevent.css" />

</head>

<body>
  <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div style="margin-top:10rem !important">
          <div class="container right2leftGrad">
            <div class="row">
              <div class="col-sm-6 offset-sm-3 pb-5">
                  <h4 class="text-center py-2">Registration</h4>
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
                  <button   class="btn witBtn text-white eventRegistrationCandidate px-5 my-3 ">Submit</button>
                  </div>
                  </form>
              </div>
            </div>
          </div>
      </div>
   


  <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/event_candidate_registration.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
