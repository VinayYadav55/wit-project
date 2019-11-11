<?php
/* Smarty version 3.1.33, created on 2019-08-11 13:47:07
  from 'C:\xampp\htdocs\djdfbf\sanjeev\presentation\templates\vipanan_view_company_job_applicant_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d50003bdd38a2_87328376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '358635ca94dec98b1e9c71517eed7c1aae503659' => 
    array (
      0 => 'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\templates\\vipanan_view_company_job_applicant_list.tpl',
      1 => 1565523975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d50003bdd38a2_87328376 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'jobCandidateList','assign'=>'obj'),$_smarty_tpl);?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css"
      integrity="sha256-PIRVsaP4JdV/TIf1FR8UHy4TFh+LiRqeclYXvCPBeiw="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"
    />
    <link rel="stylesheet" href="styles/normalize.css" />
    <link rel="stylesheet" href="styles/stylesheet.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>
/styles/job_portal_styles.css" />
    <link href="<?php echo base_url();?>
/styles/wit_job_dashboard.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two.css" rel="stylesheet" />

    <title>WIT|PORTAL|DASHBOARD</title>
  </head>
  <body>
    <header
      class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled"
    >
      <a
        href="javascript:;"
        class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
        data-target="#sidebar"
      >
        <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
      </a>
      <a class="logo" href="#">WiT</a>
      <button
        class="navbar-toggler navbar-icon waves-effect waves-light"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
      ></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav navbar-toolbar ml-auto">
          <li>
            <div class="btn-group">
              <button
                type="button "
                class="btn rounded-circle dropdown-toggle"
                data-toggle="dropdown"
                data-display="static"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="fas fa-user-tie" style="font-size: 20px;"></i>
              </button>
              <div
                class="dropdown-menu dropdown-menu-right dropdown-menu-lg-right"
              >
                <h6 class="dropdown-header">Diction Diclause</h6>
                <h6 class="dropdown-header">
                  thevipanancompany@high.com
                </h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="?company_edit_profile=true">
                  Edit Profile
                </a>

                <button class="dropdown-item" type="button">
                  Change Password
                </button>
                <div class="dropdown-divider"></div>
                <button class="dropdown-item" type="button">
                  Logout
                </button>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </header>
    <div
      id="sidebar"
      class="sidenav sidenav-fixed expand-lg"
      style="border-right:1px solid gray;"
    >
      <div class="mt-5 pt-5 pl-3">
        <nav class="nav flex-column nav-pills">
          <a class="nav-link active" href="?job_portal_dashboard=true"
            >Dashboard</a
          >
          <a class="nav-link" href="?post_jobs=true">Post Jobs</a>
        </nav>
      </div>
    </div>

    <div class="docs-content-wrapper border border-dark">
      <div class="container-fluid">
        <div class="row">
          <div
            class="col-sm-12 my-2 bg-light"
            style="position: sticky; top:7%; z-index: 200;border: 1px solid #8080802b;"
          >
            <h1>Number of application</h1>
          </div>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->candidateList, 'list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
?>
          <div
            class="col-sm-12 my-2 py-2 bg-light"
            style="border: 1px solid #8080802b;"
          >
            <h4><?php echo ucfirst($_smarty_tpl->tpl_vars['list']->value['first_name']);?>
 <?php echo ucfirst($_smarty_tpl->tpl_vars['list']->value['last_name']);?>
</h4>
            <p><?php echo ucfirst($_smarty_tpl->tpl_vars['list']->value['permanent_address']);?>
</p>
            <h6>Education:</h6>
            
            <p>
              <?php echo $_smarty_tpl->tpl_vars['list']->value['post_graduation_details']['course'];?>
 (<?php echo $_smarty_tpl->tpl_vars['list']->value['post_graduation_details']['Year_of_Complition'];?>
),  <?php echo $_smarty_tpl->tpl_vars['list']->value['post_graduation_details']['collegeName'];?>
 
            </p>
            
            <h6>Skills</h6>
            <p><?php echo $_smarty_tpl->tpl_vars['list']->value['skill_set'];?>
</p>
            <a
              href="<?php echo base_url();?>
/candidate_profile/candidate_id=<?php echo $_smarty_tpl->tpl_vars['list']->value['applicant_id'];?>
"
              class="btn btn-sm btn-secondary"
              >View Full Application</a
            >
          </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
            <a href="#">Wit</a>
            <a href="#">Wit</a>
            <a href="#">Wit</a>
            <a href="#">Wit</a>
            <a href="#">Wit</a>
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
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>

      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>

      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>

      src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"
      integrity="sha256-kQ6DQtOnXtjGYnAEMZQjpsioC75ND0K9I8MyjtdLCyk="
      crossorigin="anonymous"
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/smoothscroll.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
      $(document).ready(function() {
        $('.js-example-basic-multiple').select2({
          tags: true,
          tokenSeparators: [',', ' '],
          placeholder: 'Enter Required Qualification',
          allowClear: true
        });
        $('.skills-required-for-job').select2({
          tags: true,
          tokenSeparators: [',', ' '],
          placeholder: 'Enter Required Skills',
          allowClear: true
        });
        $('.functional-area').select2({
          tags: true,
          tokenSeparators: [',', ' '],
          placeholder: 'Enter Required functional Area',
          allowClear: true
        });
        $('.industry-type').select2({
          tags: true,
          tokenSeparators: [',', ' '],
          placeholder: 'Enter Required Industry Type',
          allowClear: true
        });

        $('.job-location').select2({
          placeholder: 'Enter job location'
        });

        $('.js-example-basic-single').select2({
          placeholder: 'Enter Required Experience'
        });
      });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      $(document).ready(function() {
        $('#example').DataTable();
      });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
      $(window).on('load resize', function() {
        if ($(this).outerWidth() < 992) {
          //768
          $('body')
            .removeClass('sidebar-collapsed')
            .addClass('drawer-sidebar');
        } else {
          $('body').removeClass('drawer-sidebar');
        }
      });

      $(function() {
        $('.js-sidebar-toggler').click(function(e) {
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
  </body>
</html>
<?php }
}
