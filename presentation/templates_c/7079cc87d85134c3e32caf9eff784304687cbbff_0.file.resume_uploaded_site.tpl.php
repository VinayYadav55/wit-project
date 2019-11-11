<?php
/* Smarty version 3.1.33, created on 2019-09-13 08:36:39
  from '/home2/labiknmy/public_html/womenintech/presentation/templates/resume_uploaded_site.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7b551751b7a4_77228274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7079cc87d85134c3e32caf9eff784304687cbbff' => 
    array (
      0 => '/home2/labiknmy/public_html/womenintech/presentation/templates/resume_uploaded_site.tpl',
      1 => 1568312626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d7b551751b7a4_77228274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/womenintech/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'resumeUpload','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('message', $_smarty_tpl->tpl_vars['obj']->value);?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="<?php echo base_url();?>
/images/wit-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo base_url();?>
/styles/job_portal_styles.css?v=<?php echo jsversion();?>
" />
  <link href="<?php echo base_url();?>
/styles/user_dashboard.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
  <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/libs/jquery/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
/js/job_portal_dashboard.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>
  <title>WiT | RESUME UPLOADED</title>
</head>

<body>
  <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container-fluid">
      <div class="container">
        <div class="row py-5 my-5">
          <div class="col-sm-4 offset-sm-4 text-center py-5 my-5" style="border: 1px solid #c5c5c5;">
            <h4 class="text-success py-5 my-5"><?php echo $_smarty_tpl->tpl_vars['obj']->value->response;?>
</h4>
            <p>Please click to continue <a href="<?php echo base_url();?>
/user_dashboard">Continue...</a></p>
          </div>
        </div>
      </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
>
      $(document).ready(function () {
        $('.logOutBtn').on('click', function () {
          var baseUrl = $('.baseUrl').attr('baseUrl');

          $.ajax({
            url: 'index.php?job_portal_dashboard=true',
            dataType: 'json',
            type: 'post',
            data: {
              logOut: true
            },
            success: function (response) {
              window.location = baseUrl;
            }
          });
        });
        $('#customFile').on('change', function () {
          var fileName = $(this)
            .val()
            .replace('C:\\fakepath\\', ' ');
          $(this)
            .next('.custom-file-label')
            .html(fileName);
        });
      })
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
