<?php
/* Smarty version 3.1.33, created on 2019-08-22 08:55:54
  from 'C:\xampp\htdocs\djdfbf\sanjeev\presentation\templates\resumeUpload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5e3c7a2cd1e8_86546359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '572304a6ac236c3c486ab2be38cb89d8ce2e3420' => 
    array (
      0 => 'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\templates\\resumeUpload.tpl',
      1 => 1566455924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5e3c7a2cd1e8_86546359 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css"
    integrity="sha256-PIRVsaP4JdV/TIf1FR8UHy4TFh+LiRqeclYXvCPBeiw=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />

  <link rel="stylesheet" href="<?php echo base_url();?>
/styles/job_portal_styles.css" />

  <title>WIT|PORTAL|DASHBOARD</title>
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/user_dashboard.css" rel="stylesheet" />
</head>

<body>
  <input type="hidden" baseUrl=<?php echo base_url();?>
 class="baseUrl">
  <header class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
    <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
      data-target="#sidebar">
      <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
    </a>
    <a class="logo bg-white" href="#"><img src="images/witlogo-logo.png" width="100" height="50" alt="wit-logo" /></a>
    <button class="navbar-toggler navbar-icon waves-effect waves-light" type="button" data-toggle="collapse"
      data-target="#navbarNav"></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav navbar-toolbar ml-auto">
        <li>
          <div class="nav-link waves-effect waves-light logOutBtn">LogOut</div>
        </li>
      </ul>
    </div>
  </header>
  <div id="sidebar" class="sidenav sidenav-fixed expand-lg" style="border-right:1px solid gray;">
    <div class="userImg pt-5 mt-3 border border-dark ">
      <div class="speakerImgDiv">
        <div class="imageContainerSpeaker">
          <img src="images/Manikandan Thangarathnam.jpeg" class="main-image-speaker rounded-circle" alt="" />
        </div>
      </div>
      <h5 class="text-center p-3 text-capitalize"><?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['last_name'];?>
</h5>
    </div>
    <div class="mt-3  pl-3">
      <nav class="nav flex-column nav-pills">
        <a class="nav-link" href="<?php echo base_url();?>
/user_dashboard">Dashboard</a>
        <a class="nav-link" href="<?php echo base_url();?>
/applied_jobs">Applied jobs</a>
        <a class="nav-link" href="<?php echo base_url();?>
/user_view_profile">View Profile</a>
        <a class="nav-link active" href="<?php echo base_url();?>
/user_edit_profile">Edit Profile</a>
      </nav>
    </div>
  </div>

  <div class="docs-content-wrapper border border-dark">
    <div class="container-fluid">
      <div class="container">
        <div class="row py-5 my-5">
          <div class="col-sm-4 offset-sm-4 py-5 my-5 bg-light " style="border: 1px solid #c5c5c5;">
            <form action="<?php echo base_url();?>
/resumeUploaded" method="post" enctype="multipart/form-data">
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
  </div>
  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6"></div>
        <div class="col-lg-7 col-md-6"></div>
      </div>
      <div class="d-flex justify-content-center">
        <div class="footer-links">
          <a href="#">Wit</a>
        </div>
      </div>
      <div class="text-center font-14 pb-5">
        ©Copyright 2019 - TheVipananCompany. All Rights Reserved.
      </div>
    </div>
  </footer>
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
 src="<?php echo base_url();?>
/js/smoothscroll.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript">
    $(window).on('load resize', function () {
      if ($(this).outerWidth() < 992) {
        //768
        $('body')
          .removeClass('sidebar-collapsed')
          .addClass('drawer-sidebar');
      } else {
        $('body').removeClass('drawer-sidebar');
      }
    });

    $(function () {
      $('.js-sidebar-toggler').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        if ($('body').hasClass('drawer-sidebar')) {
          $('#sidebar').backdrop();
        } else {
          $('body').toggleClass('sidebar-collapsed');
        }
      });

      var scroll = new SmoothScroll('a[href*="#"][scroll-href]');

      $('select.md-select').formSelect();
    });
  <?php echo '</script'; ?>
>
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
