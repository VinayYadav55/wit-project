<?php
/* Smarty version 3.1.33, created on 2019-10-23 13:06:03
  from 'C:\xampp\htdocs\womenintech\presentation\templates\resumeUploadSite.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db0341bb23107_01503783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c4c430facb4e678f39669e7469c3407c908c2a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\resumeUploadSite.tpl',
      1 => 1568276191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db0341bb23107_01503783 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <link rel="shortcut icon" href="<?php echo base_url();?>
/images/wit-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo base_url();?>
/styles/job_portal_styles.css?v=<?php echo jsversion();?>
" />

  <title>WiT | RESUME UPLOAD</title>

  <link href="<?php echo base_url();?>
/styles/user_dashboard.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
</head>

<body>
  <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <!-- // <input type="hidden" baseUrl=<?php echo base_url();?>
 class="baseUrl"> -->

  <div class="container-fluid">
    <div class="container">
      <div class="row py-5 my-5">
        <div class="col-sm-4 offset-sm-4 py-5 my-5 bg-light " style="border: 1px solid #c5c5c5;">
          <form action="<?php echo base_url();?>
/resumeUploadedSite" method="post" enctype="multipart/form-data">
            <h4 class="py-4">UPDATE RESUME</h4>
            <div class="form-group">
              <input type="file" name="myfile[]" multiple="" class="form-control-file border" required> <br>
            </div>
            <button type="submit" class="btn btn-primary" name="save">Upload</button>
          </form>
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
          url: 'index.php?login=true',
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
