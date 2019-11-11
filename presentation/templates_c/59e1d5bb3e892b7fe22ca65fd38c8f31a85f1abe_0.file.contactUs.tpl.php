<?php
/* Smarty version 3.1.33, created on 2019-09-12 08:36:20
  from '/home2/labiknmy/public_html/womenintech/presentation/templates/contactUs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7a0384e20c81_13706092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59e1d5bb3e892b7fe22ca65fd38c8f31a85f1abe' => 
    array (
      0 => '/home2/labiknmy/public_html/womenintech/presentation/templates/contactUs.tpl',
      1 => 1568274360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d7a0384e20c81_13706092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/womenintech/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'contact_us','assign'=>'obj'),$_smarty_tpl);?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=UA-147066526-1"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
 window.dataLayer = window.dataLayer || [];
 function gtag(){
     dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-147066526-1');
<?php echo '</script'; ?>
>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="<?php echo base_url();?>
/images/wit-favicon.ico" type="image/x-icon">
  <link rel="stylesheet"  href="<?php echo base_url();?>
/styles/contact.css?v=<?php echo jsversion();?>
" />

  <title>WiT | CONTACT US</title>
</head>

<body>
  <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <div class="loader"></div>
  <div class="contactTopStyle" style="margin-top:7.7rem;">
  <div class="container-fluid">
    <div class="container">
      <div class="row my-5 no-gutters ">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <h6 class="Heading text-center py-3">CONTACT US</h6>
          <form>
            <div class="form-group">
              <label for="uname">First Name</label>
              <input type="text" class="form-control fname" id="uname" placeholder="Enter First Name" name="uname" required />
            </div>
            <div class="form-group">
              <label for="lname">Last Name</label>
              <input type="text" class="form-control lname" id="lname" placeholder="Enter Last Name" name="lname" required />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control email" id="email" placeholder="Enter Email" name="email" required />
            </div>

            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="text" class="form-control contact" id="phone" placeholder="Enter Number" name="phone" required />
            </div>

            <div class="form-group">
              <label for="pwd">Company Name</label>
              <input type="text" class="form-control companyname" id="company" placeholder="Enter Company Name" name="company"
                required />
            </div>
            <div class="form-group">
              <label for="purpose">Reason of Enquiry</label>
              <select class="form-control enquiryreason" id="purpose">
                <option selected="true" disabled="disabled"> Select</option>
                <option>Volunteer to Join WiT</option>
                <option>Schools & Colleges</option>
                <option>Sponsorship</option>
                <option>Mentoring</option>
                <option>Second Careers</option>
                <option>Others</option>
              </select>
            </div>

            <div class="form-group">
              <label for="comment">Your Message</label>
              <textarea class="form-control message" rows="5" id="comment"></textarea>
            </div>
            <div class="text-center">
              <a type="submit" class="text-center btn  witBtn px-3 contactusdata">
                SUBMIT
              </a>
            </div>
          </form>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </div>

</div>
  <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/contactus.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
