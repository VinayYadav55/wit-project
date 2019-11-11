<?php
/* Smarty version 3.1.33, created on 2019-08-22 11:51:27
  from 'C:\xampp\htdocs\djdfbf\sanjeev\presentation\templates\reset_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5e659f0bc6e5_46369646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c65a95eed9084f7e64e9ec93c3bda794039e01c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\templates\\reset_password.tpl',
      1 => 1566467484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d5e659f0bc6e5_46369646 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'resetPassword','assign'=>'obj'),$_smarty_tpl);?>


<!DOCTYPE html>
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
    <link rel="stylesheet" href="<?php echo base_url();?>
/styles/parsley.css" />
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

      type="text/javascript"
      src="<?php echo base_url();?>
/js/resetPassword.js"
    ><?php echo '</script'; ?>
>
    <title>Home|WIT|AboutUS</title>
    <style>
      .form-control:focus {
        color: #495057 !important;
        background-color: #fff !important;
        border-color: #1e3262 !important;
        outline: 0 !important;
        box-shadow: 0 0 0 0.1rem rgba(30, 50, 98, 0.25) !important;
      }
      .parsley-errors-list {
        margin: 6px 0 3px !important;
      }
      input.parsley-error,
      select.parsley-error,
      textarea.parsley-error {
        color: #b94a48;
        background-color: #8080801f !important;
        border: 1px solid #8080801f !important;
      }
    </style>
  </head>
  <body>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <div class="overlay-loader-div">
    <img src="images/pinkloader.gif" class="overlay-img-loader" alt="" />
  </div>
    <div class="container-fluid">
      <div class="container">
        <div class="row py-5 bg-light" style=" border-radius: 1rem;">
          <div
            class="col-sm-4 offset-sm-4 my-5 py-5 bg-light forgetPassword"
          >
            <h6 class="text-center">Reset Passowrd</h6>
            <div class="">
              <form id="demo-form" data-parsley-validate="">
                <div class="form-group py-3">
                  <label for="">Your email</label>
                  <input
                    type="text"
                    name="email"
                    class="email form-control"
                    placeholder="Enter email"
                    data-parsley-type="email"
                    data-parsley-trigger="keyup"
                    required
                  />
                </div>
                <div class="form-group py-3">
                  <label for="">New Password</label>
                  <input
                    type="password"
                    name="password"
                    id="newpassowrd"
                    class="password form-control"
                    placeholder="Enter new  password"
                    data-parsley-minlength="8"
                    data-parsley-uppercase="1"
                    data-parsley-lowercase="1"
                    data-parsley-number="1"
                    data-parsley-special="1"
                    parsley-required="true"
                    data-parsley-trigger="keyup"
                    required
                  />
                </div>
                <div class="form-group py-3">
                  <label for="">Confirm Passowrd</label>
                  <input
                    type="password"
                    class="form-control"
                    name="confirmPassword"
                    placeholder="enter confirm password"
                    data-parsley-equalto="#newpassowrd"
                    data-parsley-minlength="8"
                    data-parsley-uppercase="1"
                    data-parsley-lowercase="1"
                    data-parsley-number="1"
                    data-parsley-special="1"
                    parsley-required="true"
                    data-parsley-trigger="keyup"
                    required
                  />
                </div>
                <div class="form-group py-3">
                  <button
                    type="submit"
                    class="resetPasswordBtn btn btn-block btn-primary"
                  >
                    Reset Password
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>

      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ><?php echo '</script'; ?>
>
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

    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/libs/parsley/parsley.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
      $(function() {
        $('#demo-form')
          .parsley()
          .on('field:validated', function() {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
          })
          .on('form:submit', function() {
            return false; // Don't submit form for this demo
          });
        //has uppercase
        window.Parsley.addValidator('uppercase', {
          requirementType: 'number',
          validateString: function(value, requirement) {
            var uppercases = value.match(/[A-Z]/g) || [];
            return uppercases.length >= requirement;
          },
          messages: {
            en: 'Your password must contain at least (%s) uppercase letter.'
          }
        });

        //has lowercase
        window.Parsley.addValidator('lowercase', {
          requirementType: 'number',
          validateString: function(value, requirement) {
            var lowecases = value.match(/[a-z]/g) || [];
            return lowecases.length >= requirement;
          },
          messages: {
            en: 'Your password must contain at least (%s) lowercase letter.'
          }
        });

        //has number
        window.Parsley.addValidator('number', {
          requirementType: 'number',
          validateString: function(value, requirement) {
            var numbers = value.match(/[0-9]/g) || [];
            return numbers.length >= requirement;
          },
          messages: {
            en: 'Your password must contain at least (%s) number.'
          }
        });

        //has special char
        window.Parsley.addValidator('special', {
          requirementType: 'number',
          validateString: function(value, requirement) {
            var specials = value.match(/[^a-zA-Z0-9]/g) || [];
            return specials.length >= requirement;
          },
          messages: {
            en: 'Your password must contain at least (%s) special characters.'
          }
        });
      });
    <?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
