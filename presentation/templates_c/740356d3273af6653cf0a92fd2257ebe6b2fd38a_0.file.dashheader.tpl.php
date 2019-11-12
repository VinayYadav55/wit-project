<?php
/* Smarty version 3.1.33, created on 2019-11-12 07:46:08
  from 'C:\xampp\htdocs\womenintech\presentation\templates\dashheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dca5530deff54_93278018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '740356d3273af6653cf0a92fd2257ebe6b2fd38a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\dashheader.tpl',
      1 => 1573540783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dca5530deff54_93278018 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=UA-147066526-1"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-147066526-1');
  <?php echo '</script'; ?>
>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="<?php echo base_url();?>
/images/wit-favicon.ico" type="image/x-icon">
  <title>DASHBOARD | WiT</title>
  <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/libs/jquery/jquery.min.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="<?php echo base_url();?>
/libs/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
  <link rel="stylesheet"
    href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css">
  <link rel="stylesheet" href="https://unpkg.com/filepond/dist/filepond.min.css">
  <link href="<?php echo base_url();?>
/styles/uploadImage.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css"
    integrity="sha256-PIRVsaP4JdV/TIf1FR8UHy4TFh+LiRqeclYXvCPBeiw=" crossorigin="anonymous" />

  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/user_dashboard.css?v=<?php echo jsversion();?>
" rel="stylesheet" />

  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"><?php echo '</script'; ?>
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
 src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"
    integrity="sha256-kQ6DQtOnXtjGYnAEMZQjpsioC75ND0K9I8MyjtdLCyk=" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/sweetalert2@8"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/promise-polyfill"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/exif-js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/user_dashboard.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/smoothscroll.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="https://unpkg.com/jquery-filepond/filepond.jquery.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://unpkg.com/filepond/dist/filepond.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>

    src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.min.js"><?php echo '</script'; ?>
>


  <?php echo '<script'; ?>

    src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.css" />
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/imageUpload.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>
</head>


<body onload="startTime()">
  <div class="loader"></div>
  <input type="hidden" baseUrl=<?php echo base_url();?>
 class="baseUrl">
  <input type="hidden" userId=<?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['id'];?>
 class="usedId">
  <header class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
    <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
      data-target="#sidebar">
      <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
    </a>
    <a class="logo bg-white" href=<?php echo base_url();?>
><img src="<?php echo base_url();?>
/images/witlogo-dashboard-logo.jpeg" width="100"
        height="60" /></a>
    <button class="navbar-toggler navbar-icon waves-effect waves-light" type="button" data-toggle="collapse"
      data-target="#navbarNav"></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav navbar-toolbar ml-auto">
        <?php if ($_smarty_tpl->tpl_vars['userSessionDetail']->value['type'] === 'Candidate') {?> <li>
          <div class="nav-link waves-effect waves-light">
            <a href="<?php echo base_url();?>
/job_portal" style="color: #E94161 !important;">Search Jobs</a></div>
        </li><?php }?>
        <li>.</li>
        <li>
          <div class="nav-link waves-effect waves-light"><span class=" clockDiv"></span></div>
        </li>
        <li><div id="txt" class="nav-link waves-effect waves-light"></div></li>
        <li>
          <div class="nav-link waves-effect waves-light dropDwonForLog logOutBtn">Logout</div>
          <div class="mainmaincontent" style="z-index: 100;">
            dffgdf
          </div>
        </li>
      </ul>
    </div>
  </header>
  <div id="sidebar" class="sidenav sidenav-fixed expand-lg" style="border-right:1px solid gray;">

    <div class="userImg pt-5 mt-3" style="box-shadow:1px 1px 1px 1px gray;">
      <div class="speakerImgDiv">
        <div class="imageContainerSpeaker" style="position: relative;">
          <a data-toggle="modal" data-target="#myModal" class="text-center m-auto imageUploadStyles">
            <img src="<?php echo base_url();?>
/images/avtar_women.jpg" class="main-image-speaker rounded-circle" alt="" />
            <span class="txtOverProfile text-dark">Update Profile</span></a>
        </div>
      </div>
      <h5 class="text-center p-3 text-capitalize"><?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['last_name'];?>

      </h5>
    </div>
    <div class="mt-3  pl-3">
      <nav class="nav flex-column nav-pills">
        <a class="nav-link usrdash navnav" href="<?php echo base_url();?>
/user_dashboard">Dashboard</a>
        <?php if ($_smarty_tpl->tpl_vars['userSessionDetail']->value['type'] === 'Candidate') {?> <a class="nav-link usrappliedjob navnav"
          href="<?php echo base_url();?>
/applied_jobs">Applied jobs</a><?php }?>
        <a class="nav-link usrviewprofile navnav" href="<?php echo base_url();?>
/user_view_profile">View Profile</a>
        <a class="nav-link usreditprofile navnav" href="<?php echo base_url();?>
/user_edit_profile">Edit Profile</a>
        <?php if ($_smarty_tpl->tpl_vars['userSessionDetail']->value['type'] === 'Candidate') {?>
        <a class="nav-link usrmentor navnav" href="<?php echo base_url();?>
/mentors_profile">Mentors</a><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['userSessionDetail']->value['type'] === 'Mentor') {?>
        <a class="nav-link mentee navnav" href="<?php echo base_url();?>
/mentee_list">Mentee List</a><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['userSessionDetail']->value['type'] === 'Mentor') {?> <a class="nav-link messages navnav"
          href="<?php echo base_url();?>
/messages">Messages</a><?php }?>
      </nav>
    </div>
  </div>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Upload Image</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 text-center">
              <input type="file" name="upload_image" id="upload_image" accept="image/*" class="border border-dark" />
            </div>
            <div class="col-12 text-center">
              <div id="uploaded_image"></div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="uploadimageModal" class="modal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Upload & Crop Image</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 text-center">
                <div id="image_demo" style="width:350px; margin-top:30px"></div>
              </div>
              <div class="col-md-12" style="padding-top:30px;">
                <button class="btn btn-success crop_image">Crop & Upload Image</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <?php echo '<script'; ?>
>
    $(document).ready(function () {
      $image_crop = $('#image_demo').croppie({
        enableExif: true,
        viewport: {
          width: 200,
          height: 200,
          type: 'circle' //circle
        },
        boundary: {
          width: 300,
          height: 300
        }
      });

      $('#upload_image').on('change', function () {
        var reader = new FileReader();
        reader.onload = function (event) {
          $image_crop.croppie('bind', {
            url: event.target.result
          }).then(function () {
            console.log('jQuery bind complete');
          });
        }
        reader.readAsDataURL(this.files[0]);
        $('#myModal').modal('hide');
        $('#uploadimageModal').modal('show');
      });

      $('.crop_image').click(function (event) {
        $image_crop.croppie('result', {
          type: 'canvas',
          size: 'viewport'
        }).then(function (response) {
          $.ajax({
            url: "presentation/upload.php",
            type: "POST",
            data: { "image": response },
            success: function (data) {
              $('#uploadimageModal').modal('hide');
              $('#uploaded_image').html(data);
              $('.main-image-speaker.rounded-circle').replaceWith(data);
            }
          });
        })
      });
      // var time= new Date();
      // var time= new Date($.now());
      // var start = new Date;
        setInterval(function() {
          var time= new Date();
    $('.clockDiv').html(time.toLocaleTimeString());
    // $('.clockDiv').text((new Date - start) / 1000 + " Seconds");
}, 1000);
      
    });  
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    function startTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('txt').innerHTML =
      h + ":" + m + ":" + s;
      var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
      if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
      return i;
    }
    <?php echo '</script'; ?>
>
  <?php }
}
