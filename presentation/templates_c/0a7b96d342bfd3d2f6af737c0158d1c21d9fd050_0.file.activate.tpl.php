<?php
/* Smarty version 3.1.33, created on 2019-09-23 08:20:21
  from '/home2/labiknmy/public_html/womenintech/presentation/templates/activate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d888045c810f5_16700563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a7b96d342bfd3d2f6af737c0158d1c21d9fd050' => 
    array (
      0 => '/home2/labiknmy/public_html/womenintech/presentation/templates/activate.tpl',
      1 => 1569226812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d888045c810f5_16700563 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/womenintech/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'activate','assign'=>'obj'),$_smarty_tpl);?>


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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/slick.css?v=<?php echo jsversion();?>
" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/slick-theme.css?v=<?php echo jsversion();?>
" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/about.css?v=<?php echo jsversion();?>
" />

  <title>WiT | Activate </title>
  <style>
    .textStyles {
      background-image: linear-gradient(to right, #1E3262, #E94161);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
    }
  </style>
</head>

<body>
  <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="container-fluid text-center mt-5 pt-5">
    <div class="row">
      <div class="col-sm-4 offset-sm-4 my-5 py-5 border border-dark"  style="box-shadow: 1px 2px 2px 1px !important;">
        <div class="mt-5 pt-5  text-center">
          <?php $_smarty_tpl->_assignInScope('message', $_smarty_tpl->tpl_vars['obj']->value->message);?>
          <h2 class="text-white animated infinite pulse delay-2s textStyles"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h2>
          <h6 class="py-5 text-center">Please&nbsp;&nbsp;<a href="<?php echo base_url();?>
/login" style="text-decoration: underline;"><em>Login</em></a>&nbsp;&nbsp; Now</h6>
           <p>For any further queries about login details or errors, please write to us at <a
              href="https://mail.google.com/mail/?view=cm&fs=1&to=info@womenintech.co.in" target="_blank">
              info@womenintech.com</a></p>
        </div>
      </div>
    </div>
  </div>

  <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php echo '<script'; ?>
 type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"><?php echo '</script'; ?>
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

</html><?php }
}
