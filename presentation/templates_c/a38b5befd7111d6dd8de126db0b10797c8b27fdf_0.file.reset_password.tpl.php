<?php
/* Smarty version 3.1.33, created on 2019-07-31 18:00:16
  from 'C:\xampp\htdocs\sanjeev\presentation\templates\reset_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d41bb107415c3_38212685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a38b5befd7111d6dd8de126db0b10797c8b27fdf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanjeev\\presentation\\templates\\reset_password.tpl',
      1 => 1564588654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d41bb107415c3_38212685 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\sanjeev\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'resetPassword','assign'=>'obj'),$_smarty_tpl);?>


<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/about.css" />
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/libs/jquery/jquery.min.js"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
/js/resetPassword.js"><?php echo '</script'; ?>
>
    <title>Home|WIT|AboutUS</title>
  </head>
  <body>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div>
      <input type="text" name="email" class="email" placeholder="Enter Email">
      <input type="text" name="password" class="password" placeholder="Enter Password">
      <input type="text" name="confirmPassword" placeholder="Confirm Password">
      <button type="submit" class="resetPasswordBtn">Reset Password</button>
      
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
