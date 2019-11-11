<?php
/* Smarty version 3.1.33, created on 2019-08-22 11:48:39
  from 'C:\xampp\htdocs\djdfbf\sanjeev\presentation\templates\forgot.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5e64f7795f35_41443488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bb2d0c7fedb1d9385bb396b0df0c88eeaae0d2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\templates\\forgot.tpl',
      1 => 1566467318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d5e64f7795f35_41443488 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="shortcut icon"
      href="images/wit-favicon.ico"
      type="image/x-icon"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo base_url();?>
/styles/slick.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo base_url();?>
/styles/slick-theme.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo base_url();?>
/styles/about.css"
    />
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/libs/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
/js/forgot.js"><?php echo '</script'; ?>
>
    <title>Home|WIT|AboutUS</title>
  </head>
  <body>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <div class="overlay-loader-div">
    <img src="images/pinkloader.gif" class="overlay-img-loader" alt="" />
  </div>
    <div class="container-fluid">
      <div class="container">
        <div class="row py-5">
          <div
            class="col-sm-6 offset-sm-3 my-5 py-5 bg-light forgetPassword"
          
          >
            <div class="bg-light p-3">
              <h5 class="py-3">
                Enter your email for reset passowrd
              </h5>
              <h6 class="py-3 mb-5">
                you will receive a link in your e-mail for reset passowrd
              </h6>
              <form action="" method="">
                <div class="form-group py-3">
                  <label for="email">Enter Email</label>
                  <input
                    type="text"
                    name="email"
                    class="form-control email"
                    placeholder="Enter your email"
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

      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>

      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/sweetalert2@8"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/promise-polyfill"><?php echo '</script'; ?>
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
/js/slick.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/newsinsitesslick.js"><?php echo '</script'; ?>
>
    
  </body>
</html>
<?php }
}
