<?php
/* Smarty version 3.1.33, created on 2019-09-14 08:54:26
  from '/home2/labiknmy/public_html/womenintech/presentation/templates/wit_view_specific_job_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7caac2639e96_89804494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ef61784bc490b7a7c0421fb6164acc72f08c005' => 
    array (
      0 => '/home2/labiknmy/public_html/womenintech/presentation/templates/wit_view_specific_job_profile.tpl',
      1 => 1568441266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d7caac2639e96_89804494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/womenintech/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'postedJob','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('jobData', $_smarty_tpl->tpl_vars['obj']->value->jobDetails['jobDetails']);?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="<?php echo base_url();?>
/images/wit-favicon.ico" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css"
    integrity="sha256-PIRVsaP4JdV/TIf1FR8UHy4TFh+LiRqeclYXvCPBeiw=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>
/styles/normalize.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>
/styles/stylesheet.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>
/styles/job_portal_styles.css?v=<?php echo jsversion();?>
" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
  <title>WiT | JOB PROFILE DETAILS | DASHBOARD</title>
</head>

<body>
     <input type="hidden" baseUrl=<?php echo base_url();?>
 class="baseUrl">
  <header class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
    <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
      data-target="#sidebar">
      <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
    </a> 
   <a href="<?php echo base_url();?>
"><img src="<?php echo base_url();?>
/images/witlogo-dashboard-logo.jpeg" width="100" height="60" /></a>
    <button class="navbar-toggler navbar-icon waves-effect waves-light" type="button" data-toggle="collapse"
      data-target="#navbarNav"></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav navbar-toolbar ml-auto">
       <li><div class="logout nav-link  waves-effect waves-light">LOGOUT
        </div></li>
      </ul>
    </div>
  </header>
  <div id="sidebar" class="sidenav sidenav-fixed expand-lg" style="border-right:1px solid gray;">
    <div class="mt-5 pt-5 pl-3">
      <nav class="nav flex-column nav-pills">
        <a class="nav-link active" href="<?php echo base_url();?>
/dashboard">Dashboard</a>
      </nav>
    </div>
  </div>

  <div class="docs-content-wrapper wordingIssuesStyle" style="background-color: #ececec;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 bg-white" style="position:sticky; top:64px; z-index:200;border: #0505053b 1px solid;">
                <h4 class="py-2 text-center">Full Job Post Details</h4>
              </div>
              <div class="col-sm-12 p-4">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12 bg-white p-4" style="border: #0505053b 1px solid;">
                      <h5 class="py-1">Number of Application On this Job</h5>
                      <p class="py-1"><?php echo $_smarty_tpl->tpl_vars['jobData']->value['applicant_count'];?>
</p>
                      <h5 class="py-1">Job Title/ Designation</h5>
                      <p class="py-1"><?php echo $_smarty_tpl->tpl_vars['jobData']->value['job_title'];?>
</p>
                      <h5 class="py-1">Qualification</h5>
                      <p class="py-1"><?php echo $_smarty_tpl->tpl_vars['jobData']->value['qualifications'];?>
</p>
                      <h5 class="py-1">Work Experience</h5>
                      <p class="py-1"><?php echo $_smarty_tpl->tpl_vars['jobData']->value['work_experience'];?>
 Year</p>
                      <h5 class="py-1">Skills</h5>
                      <p class="py-1"><?php echo $_smarty_tpl->tpl_vars['jobData']->value['required_skills'];?>
</p>
                      </div>
                       <div class="col-sm-12 bg-white p-4 mt-2" style="border: #0505053b 1px solid;">
                      <h5 class="py-1">Job Type</h5>
                      <p class="py-1"><?php echo $_smarty_tpl->tpl_vars['jobData']->value['job_type'];?>
</p>
                      <h5 class="py-1">Job Location</h5>
                      <p class="py-1"><?php echo $_smarty_tpl->tpl_vars['jobData']->value['job_location'];?>
</p>
                      <h5 class="py-1">Functional Area</h5>
                      <p class="py-1"><?php echo $_smarty_tpl->tpl_vars['jobData']->value['job_functional_area'];?>
</p>
                      <h5 class="py-1">Industry Type</h5>
                      <p class="py-1"><?php echo $_smarty_tpl->tpl_vars['jobData']->value['job_industry_type'];?>
</p>
                      <h5 class="py-1">Number of Opening</h5>
                      <p class="py-1"><?php echo $_smarty_tpl->tpl_vars['jobData']->value['total_openings'];?>
</p>
                      <h5 class="py-1">End Date</h5>
                      <p class="py-1"><?php echo $_smarty_tpl->tpl_vars['jobData']->value['deadline_date'];?>
</p>
                      <h5 class="py-1">Salary</h5>
                      <p class="py-1"><?php echo $_smarty_tpl->tpl_vars['jobData']->value['salary_provide'];?>
/ anum</p>
                      </div>
                      <div class="col-sm-12 bg-white p-4 mt-2" style="border: #0505053b 1px solid;">
                       <h5 class="py-1">Job Description</h5>
                      <p class="py-1"><?php echo $_smarty_tpl->tpl_vars['jobData']->value['job_description'];?>
/ anum</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
 src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"
    integrity="sha256-kQ6DQtOnXtjGYnAEMZQjpsioC75ND0K9I8MyjtdLCyk=" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/smoothscroll.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    $(document).ready(function () {
      $('#example').DataTable();
    });
  <?php echo '</script'; ?>
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
 type="text/javascript" src="<?php echo base_url();?>
/js/wit_admin_login.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
