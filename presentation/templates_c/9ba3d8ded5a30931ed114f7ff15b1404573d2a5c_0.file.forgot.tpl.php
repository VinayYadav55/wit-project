<?php
/* Smarty version 3.1.33, created on 2019-09-12 10:08:48
  from '/home2/labiknmy/public_html/womenintech/presentation/templates/forgot.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7a19309cc964_12919761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ba3d8ded5a30931ed114f7ff15b1404573d2a5c' => 
    array (
      0 => '/home2/labiknmy/public_html/womenintech/presentation/templates/forgot.tpl',
      1 => 1568274683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d7a19309cc964_12919761 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo base_url();?>
/styles/about.css?v=<?php echo jsversion();?>
"
    />
    <title>WiT | FORGOT PASSWORD</title>
  </head>
  <body>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <div class="loader"></div>
    <div class="container-fluid mt-5">
      <div class="container">
        <div class="row py-5">
          <div
            class="col-sm-6 offset-sm-3 my-5 py-5 bg-light forgetPassword"
          
          >
            <div class="bg-light p-3">
              <h5 class="py-3">
                Please enter your email-id to reset your password
              </h5>
              <h6 class="py-3 mb-5">
                you will receive a link in your e-mail for reset password
              </h6>
              <form action="" method="">
                <div class="form-group py-3">
                  <label for="email">Enter Email</label>
                  <input
                    type="text"
                    name="email"
                    class="form-control email"
                    required
                  />
                </div>
                <button
                  type="submit"
                  class="btn btn-primary btn-block submitBtn"
                >
                  Submit
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
/js/forgot.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>

      type="text/javascript"
      src="//code.jquery.com/jquery-1.11.0.min.js"
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>

      type="text/javascript"
      src="//code.jquery.com/jquery-migrate-1.2.1.min.js"
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
/js/slick.min.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/newsinsitesslick.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>
    
  </body>
</html>
<?php }
}
