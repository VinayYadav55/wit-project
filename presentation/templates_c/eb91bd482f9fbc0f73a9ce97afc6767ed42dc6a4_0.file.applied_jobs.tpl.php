<?php
/* Smarty version 3.1.33, created on 2019-09-12 09:00:15
  from '/home2/labiknmy/public_html/womenintech/presentation/templates/applied_jobs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7a091f2d0906_16784251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb91bd482f9fbc0f73a9ce97afc6767ed42dc6a4' => 
    array (
      0 => '/home2/labiknmy/public_html/womenintech/presentation/templates/applied_jobs.tpl',
      1 => 1568273470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d7a091f2d0906_16784251 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/womenintech/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'userDashboard','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);?>
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
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="<?php echo base_url();?>
/images/wit-favicon.ico" type="image/x-icon">
  <title>WiT | APPLIED JOB</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/user_dashboard.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
</head>

<body>
    <?php $_smarty_tpl->_assignInScope('total_applied_jobs', count($_smarty_tpl->tpl_vars['obj']->value->appliedJobsList));?>
   
    <input type="hidden" baseUrl=<?php echo base_url();?>
 class="baseUrl">
  <header class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
    <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
      data-target="#sidebar">
      <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
    </a>
    <a class="logo bg-white" href="<?php echo base_url();?>
"><img src="images/witlogo-dashboard-logo.jpeg" width="100" height="60" alt="wit-logo" /></a>
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
          <img src="images/avtar_women.png" class="main-image-speaker rounded-circle" alt="" />
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
        <a class="nav-link active" href="<?php echo base_url();?>
/applied_jobs">Applied jobs<span class="badge badge-info float-right"><?php echo $_smarty_tpl->tpl_vars['total_applied_jobs']->value;?>
</span></a>
        <a class="nav-link" href="<?php echo base_url();?>
/user_view_profile">View Profile</a>
        <a class="nav-link" href="<?php echo base_url();?>
/user_edit_profile">Edit Profile</a>
      </nav>
    </div>
  </div>

  <div class="docs-content-wrapper">
    <div class="container-fluid" style="background-color: #ececec;">
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10 my-4 bg-white">
          <h3 class="py-2 text-center">Applied Job</h3>
          <hr class="bg-secondary" />
        </div>
        <div class="col-sm-1"></div>
      </div>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->appliedJobsList, 'jobList');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['jobList']->value) {
?>
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10 bg-light p-4 appliedJobMain" style="border: 1px solid #d2cccc;">
          <h4><?php echo $_smarty_tpl->tpl_vars['jobList']->value['company_name'];?>
</h4>
          <p class="text-capitalize">Profile: <?php echo $_smarty_tpl->tpl_vars['jobList']->value['job_title'];?>
</p>
          <p><?php echo $_smarty_tpl->tpl_vars['jobList']->value['job_description'];?>
</p>
          <span class="btn p-2 appliedStatusBtn disabled">
            Applied <i class='far fa-check-circle'></i>
          </span>
          <span class="ml-md-5 float-right viewFullDetails"><a class="text-white"
              href="<?php echo base_url();?>
/job_details/job_id=<?php echo $_smarty_tpl->tpl_vars['jobList']->value['job_id'];?>
">View
              Details</a></span>
        </div>
        <div class="col-sm-1"></div>
      </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <div class="col-sm-1"></div>
    </div>
  </div>
  </div>

  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://rawgit.com/kswedberg/jquery-smooth-scroll/master/jquery.smooth-scroll.js"><?php echo '</script'; ?>
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
/js/smoothscroll.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
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
    $(document).ready(function(){
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
      })
  <?php echo '</script'; ?>
>
</body>

</html><?php }
}
