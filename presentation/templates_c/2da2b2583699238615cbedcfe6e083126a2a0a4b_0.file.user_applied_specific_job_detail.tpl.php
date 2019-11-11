<?php
/* Smarty version 3.1.33, created on 2019-08-26 13:13:45
  from '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/user_applied_specific_job_detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d63db09a8f6e8_69192145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2da2b2583699238615cbedcfe6e083126a2a0a4b' => 
    array (
      0 => '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/user_applied_specific_job_detail.tpl',
      1 => 1566825158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d63db09a8f6e8_69192145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/vipananwebtest/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'userDashboard','assign'=>'obj'),$_smarty_tpl);?>
 <?php $_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);
echo smarty_function_load_presentation_object(array('filename'=>'postedJob','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('job', $_smarty_tpl->tpl_vars['obj']->value->JobIdDetails);?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="images/wit-favicon.ico" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/job_title.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/user_dashboard.css" rel="stylesheet" />
  <title>Home|WIT</title>
</head>

<body>
    <input type="hidden" baseUrl=<?php echo base_url();?>
 class="baseUrl">
  <header class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
    <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
      data-target="#sidebar">
      <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
    </a>
    <a class="logo bg-white" href="<?php echo base_url();?>
"><img src="<?php echo base_url();?>
/images/witlogo-dashboard-logo.jpeg" width="100" height="60"
        alt="wit-logo" /></a>
    <button class="navbar-toggler navbar-icon waves-effect waves-light" type="button" data-toggle="collapse"
      data-target="#navbarNav"></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav navbar-toolbar ml-auto">
         <li>
                    <div class="nav-link waves-effect waves-light logOutBtn">LOGOUT</div>
                </li>
      </ul>
    </div>
  </header>
  <div id="sidebar" class="sidenav sidenav-fixed expand-lg" style="border-right:1px solid gray;">
    <div class="userImg pt-5 mt-3"  style="box-shadow:1px 1px 1px 1px gray;">
      <div class="speakerImgDiv">
        <div class="imageContainerSpeaker">
          <img src="<?php echo base_url();?>
/images/avtar_women.png" class="main-image-speaker rounded-circle"
            alt="" />
        </div>
      </div>
      <h5 class="text-center p-3 text-capitalize">
        <?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['last_name'];?>

      </h5>
    </div>
    <div class="mt-3  pl-3">
      <nav class="nav flex-column nav-pills">
        <a class="nav-link" href="<?php echo base_url();?>
/user_dashboard">Dashboard</a>
        <a class="nav-link  active" href="<?php echo base_url();?>
/applied_jobs">Applied jobs</a>
        <a class="nav-link" href="<?php echo base_url();?>
/user_view_profile">View Profile</a>
        <a class="nav-link" href="<?php echo base_url();?>
/user_edit_profile">Edit Profile</a>
      </nav>
    </div>
  </div>
  <div class="docs-content-wrapper">
    <div class="container-fluid py-5"  style="background-color: #ececec;">
      <div class="container mb-3">
        <div class="row my-3 bg-white">
          <div class="col-md-10 py-4">
            <div class="row">
              <div class="col-md-2">
                <img class="" src="<?php echo base_url();?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['company_logo'];?>
" height="100px" width="100px" />
              </div>
              <div class="col-md-10">
                <div class="companyName py-2">
                  <h4 class="text-capitalize"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_title'];?>
</h4>
                  <h6><?php echo $_smarty_tpl->tpl_vars['job']->value['company_name'];?>
</h6>
                </div>
                
                <ul class="p-0 m-0 jobDescList">
                  <li>
                    <i class="fas fa-map-marker"></i> <?php echo $_smarty_tpl->tpl_vars['job']->value['job_location'];?>
,   <?php echo $_smarty_tpl->tpl_vars['job']->value['office_address'];?>

                  </li>
                  <li>
                   
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-2 p-0">
            <div class="column">
              <div class="col-md-12 py-4">
                <p class="postedDate">POSTED ON - <?php echo $_smarty_tpl->tpl_vars['job']->value['posted_date'];?>
</p>
              </div>
              <div class="col-md-12 pb-4">
                <button class="btn btn-block totalApplicant">
                  <?php echo $_smarty_tpl->tpl_vars['job']->value['applicant_count'];?>
 Applicants
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="row my-3 ">
          <div class="col-sm-7 col-md-7 col-lg-7 bg-white p-0 ">
            <div class="column">
              <div class="col-md-12">
                <h4 class="py-2">Job Description</h4>
              </div>
              <hr />
              <div class="col-md-12">
                <ul>
                    <li class=""><b>About the job</b></li>
                  <li class="pb-4">
                    <?php echo $_smarty_tpl->tpl_vars['job']->value['job_description'];?>

                  </li>

                  <li style="list-style: none;">
                    <b>EDUCATION</b>
                  </li>

                  <li class="pb-4"><?php echo $_smarty_tpl->tpl_vars['job']->value['qualifications'];?>
</li>

                  <li style="list-style: none;">
                    <b>WORK EXPERIENCE</b>
                  </li>
                  <li>
                    <?php echo $_smarty_tpl->tpl_vars['job']->value['work_experience'];?>

                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-1 col-sm-1 col-lg-1"></div>
          <div class="col-sm-4 col-md-4 col-lg-4 bg-white">
            <div class="column py-4">
              <div class="col-md-12">
                <h6 class="py-2">Job Type</h6>
                
                <div class=""><img src="" /><span><?php echo $_smarty_tpl->tpl_vars['job']->value['job_type'];?>
</span></div>
              </div>
                <hr />
              <div class="col-md-12">
                <h6 class="criteriaHeading">Functional Area</h6>
                <p class="criteria"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_functional_area'];?>
</p>
              </div>
              <hr />
              <div class="col-md-12">
                <h6 class="criteriaHeading">Industry</h6>
                <p class="criteria"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_industry_type'];?>
</p>
              </div>
              <hr />
              <div class="col-md-12">
                <h6 class="criteriaHeading">Education Required</h6>
                <p class="criteria"><?php echo $_smarty_tpl->tpl_vars['job']->value['qualifications'];?>
</p>
              </div>
              <hr />
              <div class="col-md-12">
                <h6 class="criteriaHeading">Experience Required</h6>
                <p class="criteria"><?php echo $_smarty_tpl->tpl_vars['job']->value['work_experience'];?>
</p>
              </div>
              <hr />
              <div class="col-md-12">
                <h6 class="criteriaHeading">Skills Required</h6>
                <p class="criteria"><?php echo $_smarty_tpl->tpl_vars['job']->value['required_skills'];?>
</p>
              </div>
              <hr />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
 src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    $(document).ready(function () {
      $('#example').DataTable();
       $('.logOutBtn').on('click', function() {
    var baseUrl = $('.baseUrl').attr('baseUrl');

    $.ajax({
      url: 'index.php?login',
      dataType: 'json',
      type: 'post',
      data: {
        logOut: true
      },
      success: function(response) {
        window.location = baseUrl;
      }
    });
  });
    });
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    $('#customFile').on('change', function () {
      //get the file name
      // var fileName = $(this).val();
      // var fileName = $(this).val();
      var fileName = $(this)
        .val()
        .replace('C:\\fakepath\\', ' ');
      //replace the "Choose a file" label
      $(this)
        .next('.custom-file-label')
        .html(fileName);
    });
  <?php echo '</script'; ?>
>
</body>

</html><?php }
}
