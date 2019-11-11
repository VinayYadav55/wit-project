<?php
/* Smarty version 3.1.33, created on 2019-08-29 10:43:27
  from 'C:\xampp\htdocs\vipananwebtest\presentation\templates\user_dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d67902f872990_39434190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba21ba8fd7b8d347ec531597463c7406df428c10' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vipananwebtest\\presentation\\templates\\user_dashboard.tpl',
      1 => 1566825112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d67902f872990_39434190 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vipananwebtest\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'userDashboard','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);
$_smarty_tpl->_assignInScope('candidateDetail', $_smarty_tpl->tpl_vars['obj']->value->applicantDetails);?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>RBS|Dashbaord</title>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/libs/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo base_url();?>
/libs/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />

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
    <input type="hidden" userId=<?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['id'];?>
 class="usedId">
    <header class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
        <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
            data-target="#sidebar">
            <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
        </a>
        <a class="logo bg-white" href=<?php echo base_url();?>
><img src="images/witlogo-dashboard-logo.jpeg" width="100" height="60" tyle="max-width:100%; height:auto;
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

        <div class="userImg pt-5 mt-3" style="box-shadow:1px 1px 1px 1px gray;">
            <div class="speakerImgDiv">
                <div class="imageContainerSpeaker">
                    <img src="images/avtar_women.png" class="main-image-speaker rounded-circle" alt="" />
                </div>
            </div>
            <h5 class="text-center p-3 text-capitalize"><?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['last_name'];?>

            </h5>
        </div>
        <div class="mt-3  pl-3">
            <nav class="nav flex-column nav-pills">
                <a class="nav-link active" href="<?php echo base_url();?>
/user_dashboard">Dashboard</a>
                <a class="nav-link" href="<?php echo base_url();?>
/applied_jobs">Applied jobs</a>
                <a class="nav-link" href="<?php echo base_url();?>
/user_view_profile">View Profile</a>
                <a class="nav-link" href="<?php echo base_url();?>
/user_edit_profile">Edit Profile</a>
            </nav>
        </div>
    </div>

    <!-- ******************************************************* -->
    <div class="docs-content-wrapper">
        <div class="container-fluid"  style="background-color: #ececec; height:100vh; padding:100px;">
            <div class="row py-5">
                <div class="col-sm-1"></div>
                <div class="col-sm-10 text-center py-5 my-5">
                    <a href="<?php echo base_url();?>
/job_portal" class="p-3 bg-secondary"style="border: 2px solid white !important;
    color: white;
    background-image: linear-gradient(45deg, #1c1b3a, transparent);
    outline: 1px solid gray;">Search Jobs</a>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </div>

   

    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/smoothscroll.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/user_dashboard.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $('#customFile').on('change', function () {
            var fileName = $(this)
                .val()
                .replace('C:\\fakepath\\', ' ');
            $(this)
                .next('.custom-file-label')
                .html(fileName);
        });
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
