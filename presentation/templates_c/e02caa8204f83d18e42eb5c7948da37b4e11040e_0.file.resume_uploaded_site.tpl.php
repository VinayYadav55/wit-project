<?php
/* Smarty version 3.1.33, created on 2019-08-26 08:05:57
  from '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/resume_uploaded_site.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d6392e52aba79_08912359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e02caa8204f83d18e42eb5c7948da37b4e11040e' => 
    array (
      0 => '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/resume_uploaded_site.tpl',
      1 => 1566541360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d6392e52aba79_08912359 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/vipananwebtest/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'resumeUpload','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('message', $_smarty_tpl->tpl_vars['obj']->value);?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css"
    integrity="sha256-PIRVsaP4JdV/TIf1FR8UHy4TFh+LiRqeclYXvCPBeiw=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />


  <link rel="stylesheet" href="<?php echo base_url();?>
/styles/job_portal_styles.css" />
  <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/libs/jquery/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
/js/job_portal_dashboard.js"><?php echo '</script'; ?>
>
  <title>WIT|PORTAL|DASHBOARD</title>

  <link href="<?php echo base_url();?>
/styles/user_dashboard.css" rel="stylesheet" />
</head>

<body>
  <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="docs-content-wrapper border border-dark">
    <div class="container-fluid">
      <div class="container">
        <div class="row py-5 my-5">
          <div class="col-sm-4 offset-sm-4 text-center py-5 my-5" style="border: 1px solid #c5c5c5;">
            <h4 class="text-success py-5 my-5"><?php echo $_smarty_tpl->tpl_vars['obj']->value->response;?>
</h4>
            <p>Please click to continue <a href="<?php echo base_url();?>
/user_dashbaord">Continue...</a></p>
          </div>
        </div>
      </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"><?php echo '</script'; ?>
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
