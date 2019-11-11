<?php
/* Smarty version 3.1.33, created on 2019-10-10 13:47:34
  from '/home2/labiknmy/public_html/womenintech/presentation/templates/company_changepassword.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9f3676c5ada1_93743547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19a7d4656cc71ac10fd0a81a9161bca79091510e' => 
    array (
      0 => '/home2/labiknmy/public_html/womenintech/presentation/templates/company_changepassword.tpl',
      1 => 1570715252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9f3676c5ada1_93743547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/womenintech/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),1=>array('file'=>'/home2/labiknmy/public_html/womenintech/libs/smarty/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
echo smarty_function_load_presentation_object(array('filename'=>'jobPortalDashboard','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('companySessionDetail', $_SESSION['companySession']);
$_smarty_tpl->_assignInScope('jobDetail', $_smarty_tpl->tpl_vars['obj']->value->jobDetails);?>
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
/styles/normalize.css?v=<?php echo jsversion();?>
" />
  <link rel="stylesheet" href="<?php echo base_url();?>
/styles/stylesheet.css?v=<?php echo jsversion();?>
" />
  <!-- <link rel="stylesheet" href="<?php echo base_url();?>
/styles/job_portal_styles.css" /> -->
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/employeer_dashboard.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url();?>
/styles/parsley.css?v=<?php echo jsversion();?>
" />
  <title>DASHBOARD | CHANGE PASSWORD</title>
</head>

<body>
  <div class="loader"></div>
  <input type="hidden" class="baseUrl" baseUrl=<?php echo base_url();?>
/employer> <header
    class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
  <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
    data-target="#sidebar">
    <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
  </a>
  <a class="logo" href="<?php echo base_url();?>
"><img src="<?php echo base_url();?>
/images/witlogo-dashboard-logo.jpeg" width="100"
      height="60" /></a>
  <button class="navbar-toggler navbar-icon waves-effect waves-light" type="button" data-toggle="collapse"
    data-target="#navbarNav"> <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i></button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav navbar-toolbar ml-auto">
      <li class="text-white mr-md-3 p-2 waves-effect waves-light"
        style="color: #E94161 !important; border: #E94161 1px solid">
        <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['companySessionDetail']->value['company_name']);?>

      </li>
      <li>
        <div class="dropDownMain btn-group">
          <button type="button " class="btn rounded-circle dropdown-toggle"
            style="color: #E94161 !important; border: #E94161 1px solid" data-toggle="dropdown" data-display="static"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-tie" style="font-size: 20px;"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-right dropDownMainContent mb-5">
            <h6 class="dropdown-header"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['companySessionDetail']->value['company_name']);?>
</h6>
            <h6 class="dropdown-header">
              <?php echo $_smarty_tpl->tpl_vars['companySessionDetail']->value['email_id'];?>

            </h6>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" type="button">
              <a href='<?php echo base_url();?>
/edit/company_id=<?php echo $_smarty_tpl->tpl_vars['companySessionDetail']->value['id'];?>
'> Edit Profile</a>
            </button>
            <button class="dropdown-item" type="button">
             <a href='<?php echo base_url();?>
/changepassword'>Change Password</a>
            </button>
            <button class="dropdown-item logOutBtn">
              <a href=""> Logout</a>
            </button>
          </div>
        </div>
  </div>
  </li>
  </ul>
  </div>
  </header>
  <div id="sidebar" class="sidenav sidenav-fixed expand-lg" style="border-right:1px solid gray;">

    <div class="userImg pt-5 mt-3 text-center" style="box-shadow: 1px 1px 1px 1px gray;">
      <div class="speakerImgDiv text-center">
        <div class="imageContainerSpeaker text-center">
          <img src="<?php echo base_url();?>
/<?php echo $_smarty_tpl->tpl_vars['companySessionDetail']->value['company_logo'];?>
" class="main-image-speaker" alt="" />
        </div>
      </div>
    </div>
    <div class="mt-3  pl-3">
      <nav class="nav flex-column nav-pills">
        <a class="nav-link active" href="<?php echo base_url();?>
/job_portal_dashboard">Dashboard</a>
        <a class="nav-link" href="<?php echo base_url();?>
/post_jobs">Post Jobs</a>
      </nav>
    </div>
  </div>

  <div class="docs-content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-sm-12" style="position: sticky; top:64px; z-index:200;">
          <h4 class="bg-light py-2 text-center">Chnage Password</h4>
        </div>
        <div class="col-sm-6 offset-sm-3 bg-light mt-5 py-5">
          <form id="demo-form" data-parsley-validate="">
            <div class="form-group">
              <label for="">Old Password<span class="text-danger">*</span></label>
              <input type="text" class="form-control eoldpassword" placeholder="Enter old password">
            </div>
            <div class="form-group">
              <label for="">New Password<span class="text-danger">*</span></label>
              <input type="password" class="form-control enewpassword" placeholder="Enter new password" data-parsley-minlength="8" id="newpassowrd"
                data-parsley-uppercase="1" data-parsley-lowercase="1" data-parsley-number="1" data-parsley-special="1"
                parsley-required="true" data-parsley-trigger="keyup" required>
            </div>
            <div class="form-group">
              <label for="">Confirm Password<span class="text-danger">*</span></label>
              <input type="password" class="form-control econfirmpassword" placeholder="Enter confirm password"
                data-parsley-equalto="#newpassowrd" data-parsley-minlength="8" data-parsley-uppercase="1"
                data-parsley-lowercase="1" data-parsley-number="1" data-parsley-special="1" parsley-required="true"
                data-parsley-trigger="keyup" required>
            </div>
            <div class="form-group my-4">
              <button class="btn witBtn submitemployeerpassword">Submit</button>
            </div>
          </form>
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
 src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/sweetalert2@8"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/promise-polyfill"><?php echo '</script'; ?>
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
 type="text/javascript" src="<?php echo base_url();?>
/js/companychnagepassword.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/libs/parsley/parsley.min.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
      $(function () {
        $('#demo-form')
          .parsley()
          .on('field:validated', function () {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
          })
          .on('form:submit', function () {
            return false; // Don't submit form for this demo
          });
        //has uppercase
        window.Parsley.addValidator('uppercase', {
          requirementType: 'number',
          validateString: function (value, requirement) {
            var uppercases = value.match(/[A-Z]/g) || [];
            return uppercases.length >= requirement;
          },
          messages: {
            en: 'Your password must contain at least (%s) uppercase letter.'
          }
        });

        //has lowercase
        window.Parsley.addValidator('lowercase', {
          requirementType: 'number',
          validateString: function (value, requirement) {
            var lowecases = value.match(/[a-z]/g) || [];
            return lowecases.length >= requirement;
          },
          messages: {
            en: 'Your password must contain at least (%s) lowercase letter.'
          }
        });

        //has number
        window.Parsley.addValidator('number', {
          requirementType: 'number',
          validateString: function (value, requirement) {
            var numbers = value.match(/[0-9]/g) || [];
            return numbers.length >= requirement;
          },
          messages: {
            en: 'Your password must contain at least (%s) number.'
          }
        });

        //has special char
        window.Parsley.addValidator('special', {
          requirementType: 'number',
          validateString: function (value, requirement) {
            var specials = value.match(/[^a-zA-Z0-9]/g) || [];
            return specials.length >= requirement;
          },
          messages: {
            en: 'Your password must contain at least (%s) special characters.'
          }
        });
      });
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
