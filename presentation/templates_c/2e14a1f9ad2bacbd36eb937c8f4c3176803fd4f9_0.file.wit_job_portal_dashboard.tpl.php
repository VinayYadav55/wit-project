<?php
/* Smarty version 3.1.33, created on 2019-08-08 08:51:55
  from 'C:\xampp\htdocs\djdfbf\sanjeev\presentation\templates\wit_job_portal_dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4bc68b3941e7_16793961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e14a1f9ad2bacbd36eb937c8f4c3176803fd4f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\templates\\wit_job_portal_dashboard.tpl',
      1 => 1565076980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4bc68b3941e7_16793961 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
    <link href="styles/wit_job_dashboard.css" rel="stylesheet" />
    <link href="styles/wit_job_dashboard_two.css" rel="stylesheet" />
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
              >WiT Dashboard</a
            >
          </li>

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
              <h6 class="dropdown-header">Women In Technology</h6>
              <h6 class="dropdown-header">
                RBS_WIT_
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
          <a class="nav-link  active" href="?wit_job_portal_dashboard=true"
            >Dashboard</a
          >
          <a class="nav-link " href="?wit_post_companies=true">Add Companies</a>
          <!-- <a class="nav-link" href="?wit_added_companies_list=true"
            >List Companies</a
          > -->
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
                          <th scope="col">Date</th>
                          <th scope="col">Company Name</th>
                          <th scope="col">Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <th scope="row">24 july, 19</th>
                          <td>
                            <a href="?wit_view_company_full_detail=true"
                              >Microsoft</a
                            >
                          </td>
                          <td>
                            <a href="?wit_edit_company=true"
                              ><i class="fas fa-edit"></i> Edit</a
                            >
                          </td>
                        </tr>
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

      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
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
>
      $('#customFile').on('change', function() {
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
</html>
<?php }
}
