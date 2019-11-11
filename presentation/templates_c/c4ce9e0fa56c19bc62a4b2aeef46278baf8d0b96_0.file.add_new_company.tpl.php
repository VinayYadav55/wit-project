<?php
/* Smarty version 3.1.33, created on 2019-08-14 08:02:46
  from 'C:\xampp\htdocs\djdfbf\sanjeev\presentation\templates\add_new_company.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d53a4064bd435_45152558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4ce9e0fa56c19bc62a4b2aeef46278baf8d0b96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\templates\\add_new_company.tpl',
      1 => 1565180227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d53a4064bd435_45152558 (Smarty_Internal_Template $_smarty_tpl) {
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
            <a href="#" class="nav-link waves-effect waves-light">WiT</a>
          </li>
          <li>
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
          <a class="nav-link" href="?wit_job_portal_dashboard=true"
            >Dashboard</a
          >
          <a class="nav-link active " href="?wit_post_companies=true"
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="container">
              <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                  <div class="row">
                    <div class="col-sm-12 py-4">
                      <form>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="fname">FirstName</label>
                            <input
                              type="text"
                              class="form-control"
                              id="fname"
                              placeholder="fname"
                            />
                          </div>
                          <div class="form-group col-md-6">
                            <label for="lname">LastName</label>
                            <input
                              type="text"
                              class="form-control"
                              id="lname"
                              placeholder="lname"
                            />
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input
                              type="email"
                              class="form-control"
                              id="inputEmail4"
                              placeholder="Email"
                            />
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input
                              type="password"
                              class="form-control"
                              id="inputPassword4"
                              placeholder="Password"
                            />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="designation">Designation</label>
                          <input
                            type="text"
                            class="form-control"
                            id="designation"
                            placeholder="designation"
                          />
                        </div>

                        <div class="form-row">
                          <div class="form-group col-sm-6">
                            <label for="inputAddress">Alternate Email</label>
                            <input
                              type="text"
                              class="form-control"
                              id="inputAddress"
                              placeholder="alternate email"
                            />
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputState">Contact</label>
                            <input
                              type="text"
                              class="form-control"
                              id="inputAddress"
                              placeholder="enter contact"
                            />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="organizationnname"
                            >Organization Name</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id="organizationnname"
                            placeholder="organization name"
                          />
                        </div>
                        <div class="form-group">
                          <label for="comment">Organization Description</label>
                          <textarea
                            class="form-control"
                            rows="3"
                            id="comment"
                          ></textarea>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-sm-6">
                            <label for="organizationnumber"
                              >Organization Number</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="organizationnumber"
                              placeholder="organizationnumber"
                            />
                          </div>
                          <div class="form-group col-sm-6">
                            <label for="organizationnumber"
                              >Organization Logo</label
                            >
                            <div class="custom-file">
                              <input
                                type="file"
                                accept=".pdf ,.docx, .doc"
                                class="custom-file-input"
                                id="customFile"
                              />
                              <label class="custom-file-label" for="customFile"
                                >Choose file</label
                              >
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="organizationaddress"
                            >Organization Address</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id="designation"
                            placeholder="organizationaddress"
                          />
                        </div>

                        <div class="form-row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="sel1">Country</label>
                              <select
                                class="form-control"
                                id="countySel"
                                size="1"
                              >
                                <option
                                  value=""
                                  selected="true"
                                  disabled="disabled"
                                  >Select Country</option
                                >
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="sel1">State</label>
                              <select
                                class="form-control"
                                id="stateSel"
                                size="1"
                              >
                                <option
                                  value=""
                                  selected="true"
                                  disabled="disabled"
                                  >Select State</option
                                >
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="sel1">City</label>
                              <select
                                class="form-control"
                                id="citySel"
                                size="1"
                              >
                                <option
                                  value=""
                                  selected="true"
                                  disabled="disabled"
                                  >Select City</option
                                >
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="sel1">Zip</label>
                              <select class="form-control" id="zipSel" size="1">
                                <option
                                  value=""
                                  selected="true"
                                  disabled="disabled"
                                  >Select Zip</option
                                >
                              </select>
                            </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                          Update
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-sm-2"></div>
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
