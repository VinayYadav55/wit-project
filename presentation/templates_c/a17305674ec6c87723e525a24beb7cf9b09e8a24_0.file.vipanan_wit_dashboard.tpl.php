<?php
/* Smarty version 3.1.33, created on 2019-08-19 14:57:24
  from 'C:\xampp\htdocs\djdfbf\sanjeev\presentation\templates\vipanan_wit_dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5a9cb42db039_77426089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a17305674ec6c87723e525a24beb7cf9b09e8a24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\templates\\vipanan_wit_dashboard.tpl',
      1 => 1566219338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5a9cb42db039_77426089 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'vipanan_admin','assign'=>'obj'),$_smarty_tpl);?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>RBS|Dashbaord</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two.css" rel="stylesheet" />
</head>

<body>
  <input type="hidden" baseUrl="<?php echo base_url();?>
/vipanan" class="baseUrl">
  <header class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
    <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
      data-target="#sidebar">
      <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
    </a>
    <a class="logo" href="#">WiT</a>
    <button class="navbar-toggler navbar-icon waves-effect waves-light" type="button" data-toggle="collapse"
      data-target="#navbarNav"></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav navbar-toolbar ml-auto">
        <li class="text-white mr-md-3">
          The Vipanan Company Dashboard
        </li>

        <li class="text-white logOutBtn"> Log Out </li>


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
  <div id="sidebar" class="sidenav sidenav-fixed expand-lg" style="border-right:1px solid gray;">
    <div class="mt-5 pt-5 pl-3">
      <nav class="nav flex-column nav-pills">
        <a class="nav-link  active" href="<?php echo base_url();?>
/vipanan_wit_dashboard">Dashboard</a>
        <a class="nav-link " href="<?php echo base_url();?>
/vipanan_add_companies">Add Companies</a>
      </nav>
    </div>
  </div>

  <!-- ******************************************************* -->
  <div class="docs-content-wrapper border border-dark">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <h4 class="bg-light py-1">Dashboard</h4>
                <div class="table-responsive-md">
                  <table class="table table-sm table-striped" id="example">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Register Date</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Update</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->jobRegisteredcompanies, 'companyData');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['companyData']->value) {
?>
                      <tr>
                        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['companyData']->value['id'];?>
</th>
                        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['companyData']->value['created_on'];?>
</th>
                        <td>
                          <a
                            href="<?php echo base_url();?>
/vipanan_view_company_full_detail/company_id=<?php echo $_smarty_tpl->tpl_vars['companyData']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['companyData']->value['company_name'];?>
</a>
                        </td>
                        <td>
                          <a href="<?php echo base_url();?>
/vipanan_edit_company/company_id=<?php echo $_smarty_tpl->tpl_vars['companyData']->value['id'];?>
"><i
                              class="fas fa-edit"></i> Edit</a>
                        </td>

                        <td>
                          <p class="removecompany" id=<?php echo $_smarty_tpl->tpl_vars['companyData']->value['id'];?>
>Remove</p>

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
 src="js/smoothscroll.js"><?php echo '</script'; ?>
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
    });
  <?php echo '</script'; ?>
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
  <?php echo '<script'; ?>
 type="text/javascript" src=<?php echo base_url();?>
/js/vipanan_admin.js> <?php echo '</script'; ?>
> </body> </html><?php }
}
