<?php
/* Smarty version 3.1.33, created on 2019-08-14 13:56:48
  from 'C:\xampp\htdocs\djdfbf\sanjeev\presentation\templates\vipanan_view_company_full_detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d53f700123403_92262752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bebf3531f55777ac27e97847655680d3a5f2562b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\templates\\vipanan_view_company_full_detail.tpl',
      1 => 1565765477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d53f700123403_92262752 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'jobPortalDashboard','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('jobDetail', $_smarty_tpl->tpl_vars['obj']->value->jobDetails);
$_smarty_tpl->_assignInScope('company', $_smarty_tpl->tpl_vars['obj']->value->companyDetails);?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>RBS|Dashbaord</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
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
    <link href="<?php echo base_url();?>
/styles/wit_job_dashboard.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url();?>
/styles/job_portal_styles.css" />

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
            <a href="#" class="nav-link waves-effect waves-light"
              >TheVipananCompany WiT Dashboard</a
            >
          </li>
          <div class="btn-group">
            <button
              type="button "
              class="btn rounded-circle dropdown-toggle btn-primary"
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
              <h6 class="dropdown-header">TheVipananCompany</h6>
              <h6 class="dropdown-header">
                TheVipananCompany_RBS_WIT
              </h6>
              <div class="dropdown-divider"></div>
              <div class="dropdown-divider"></div>
              <button class="dropdown-item" type="button">
                Logout
              </button>
            </div>
          </div>
          <!--  <li>
            <a href="#" class="nav-link waves-effect waves-light">Help</a>
          </li>
          <li>
            <a href="#" class="nav-link waves-effect waves-light">Forum</a>
          </li>
          <li>
            <a href="#" class="nav-link waves-effect waves-light">Services</a>
          </li>
          <li>
            <a href="#" class="nav-link waves-effect waves-light">Contact</a>
          </li> -->
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
          <a class="nav-link  active" href="<?php echo base_url();?>
/vipanan_wit_dashboard"
            >Dashboard</a
          >
          <a class="nav-link " href="<?php echo base_url();?>
/vipanan_add_companies"
            >Add Companies</a
          >
          <!-- <a class="nav-link" href="?wit_added_companies_list=true"
            >List Companies</a
          > -->
        </nav>
      </div>
    </div>

    <!-- ******************************************************* -->
    <div class="docs-content-wrapper border border-dark">
      <div class="container">
        <div class="row">
          <div
            class="col-sm-12 py-5"
            style="position: sticky; top:20px; z-index:1;"
          >
            <h4 class="bg-light">Full Details of Microsoft</h4>
          </div>
          <div class="col-sm-6">
            <h4>Compnay Name</h4>
            <h6><?php echo $_smarty_tpl->tpl_vars['company']->value['company_name'];?>
</h6>
            <h4 class="pt-2">Compnay Person</h4>
            <h6><?php echo $_smarty_tpl->tpl_vars['company']->value['contact_person_name'];?>
</h6>
            <h4 class="pt-2">Email</h4>
            <h6><?php echo $_smarty_tpl->tpl_vars['company']->value['email_id'];?>
</h6>
            <h4 class="pt-2">Contact Number</h4>
            <h6><?php echo $_smarty_tpl->tpl_vars['company']->value['office_no'];?>
</h6>
          </div>
          <div class="col-sm-6">
            <h4>Number of Job Posted</h4>
            <h6><?php echo $_smarty_tpl->tpl_vars['company']->value['totalJobPosted'];?>
</h6>
          </div>
          <div class="col-sm-12 pt-3">
            <h4 class="py-3">List of Jobs Posted by Microsoft</h4>
            <div class="table-responsive-md">
              <table class="table table-sm table-striped" id="example">
                <thead>
                  <tr>
                    <th scope="col">Posted Date</th>
                    <th scope="col">Job Profile</th>
                    <th scope="col">Status</th>
                    <th scope="col">Applications</th>
                    <th scope="col">Application Deadline</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jobDetail']->value['jobDetails'], 'job');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['job']->value) {
?>
                  <tr>
                    <th scope="row"><?php echo $_smarty_tpl->tpl_vars['job']->value['posted_date'];?>
</</th>
                    <td>
                      <a href="<?php echo base_url();?>
/vipanan_view_company_job_full_detail/job_id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_title'];?>
</a>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['job']->value['active_status'];?>
</td>
                    <td>
                      <a href="<?php echo base_url();?>
/vipanan_view_company_job_applicant_list/job_id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['job']->value['applicant_count'];?>
&nbsp;(view)</a>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['job']->value['deadline_date'];?>
</td>
                    
                  </tr>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
              </table>
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

      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
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
 src="js/smoothscroll.js"><?php echo '</script'; ?>
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
