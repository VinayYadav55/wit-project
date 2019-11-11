<?php
/* Smarty version 3.1.33, created on 2019-08-26 17:32:29
  from '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/wit_view_company_full_detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d6417ad4da1b8_40113761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59a329fec37d65bf699eb127b501ab407b96b878' => 
    array (
      0 => '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/wit_view_company_full_detail.tpl',
      1 => 1566840746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6417ad4da1b8_40113761 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/vipananwebtest/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'jobPortalDashboard','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('jobDetail', $_smarty_tpl->tpl_vars['obj']->value->jobDetails);
$_smarty_tpl->_assignInScope('company', $_smarty_tpl->tpl_vars['obj']->value->companyDetails);?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>RBS|Dashbaord</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
 
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/wit_dashboard.css" rel="stylesheet" />
</head>

<body>
     <input type="hidden" baseUrl=<?php echo base_url();?>
 class="baseUrl">
  <header class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
    <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
      data-target="#sidebar">
      <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
    </a>
    <a class="logo bg-white" href=<?php echo base_url();?>
><img src="<?php echo base_url();?>
/images/witlogo-dashboard-logo.jpeg" width="100" height="60" tyle="max-width:100%; height:auto;
                alt="wit-logo" /></a>
    <button class="navbar-toggler navbar-icon waves-effect waves-light" type="button" data-toggle="collapse"
      data-target="#navbarNav"><i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i></button>
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

  <div class="docs-content-wrapper" style="background-color: #ececec;">
    <div class="container">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 borderStyle bg-white my-2" style="position: sticky; top:64px; z-index:1;">
          <h4 class="text-capitalize text-center  py-1">Full Details of <?php echo $_smarty_tpl->tpl_vars['company']->value['company_name'];?>
</h4>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-12 bg-white borderStyle">
        <div class="row">
        <div class="col-sm-6 px-4 bg-white py-4 my-2" style="border-right:1px solid gray;">
          <h6 class="headingStyles">Company Name :</h6>
          <p class="text-capitalize paragraphStyles"><?php echo $_smarty_tpl->tpl_vars['company']->value['company_name'];?>
</p>
          <h6 class="pt-2 headingStyles ">Contact Person</h6>
          <p class="text-capitalize paragraphStyles"><?php echo $_smarty_tpl->tpl_vars['company']->value['contact_person_name'];?>
</p>
          <h6 class="pt-2 headingStyles">Email</h6>
          <p class="paragraphStyles"><?php echo $_smarty_tpl->tpl_vars['company']->value['email_id'];?>
</p>
             <h6 class="headingStyles pt-2">Contact Number</h6>
          <p class="paragraphStyles"><?php echo $_smarty_tpl->tpl_vars['company']->value['mobile_no'];?>
</p>
         
        </div>
       
        <div class="col-sm-6 px-4 py-4 bg-white my-2">
          <h6 class="headingStyles">Number of Job Posted</h6>
          <p class="paragraphStyles"><?php echo $_smarty_tpl->tpl_vars['company']->value['totalJobPosted'];?>
</p>
        <h6 class="pt-2 headingStyles">Office Number</h6>
          <p class="paragraphStyles"><?php echo $_smarty_tpl->tpl_vars['company']->value['office_no'];?>
</p>
          <h6 class="headingStyles pt-2">GST Number</h6>
          <p class="paragraphStyles"><?php echo $_smarty_tpl->tpl_vars['company']->value['gst_number'];?>
</p>
        </div>
        
        </div>
        
        </div>
        
        </div>
        <div class="row">
        <div class="col-sm-12 pt-3 bg-white my-4 borderStyle">
          <h4 class="py-2 text-capitalize text-center">List of Jobs Posted by <?php echo $_smarty_tpl->tpl_vars['company']->value['company_name'];?>
</h4>
          <hr class="w-75 bg-success">
          <div class="table-responsive-md">
            <table class="table table-sm table-striped" id="example">
              <thead>
                <tr>
                  <th scope="col">Date</th>
                  <th scope="col">Profile</th>
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
</th>
                  <td class="text-capitalize">
                    <a href="<?php echo base_url();?>
/job_full_detail/job_id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_title'];?>
</a>
                  </td>
                  <td><?php echo $_smarty_tpl->tpl_vars['job']->value['active_status'];?>
</td>
                  <td>
                    <a href="<?php echo base_url();?>
/job_applicants/job_id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
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
  </div>
</div>


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
 type="text/javascript" src="<?php echo base_url();?>
/js/wit_admin_login.js"><?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    $(document).ready(function () {
      $('#example').DataTable();
    });
  <?php echo '</script'; ?>
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

</body>

</html><?php }
}
