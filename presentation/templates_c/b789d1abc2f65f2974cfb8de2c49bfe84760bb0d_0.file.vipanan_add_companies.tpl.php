<?php
/* Smarty version 3.1.33, created on 2019-08-23 09:04:04
  from '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/vipanan_add_companies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5fac04759648_84174657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b789d1abc2f65f2974cfb8de2c49bfe84760bb0d' => 
    array (
      0 => '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/vipanan_add_companies.tpl',
      1 => 1566551040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5fac04759648_84174657 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="shortcut icon"
      href="images/wit-favicon.ico"
      type="image/x-icon"
    />
    <title>RBS|Dashbaord</title>
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css" />
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
    <link rel="stylesheet" href="<?php echo base_url();?>
/styles/parsley.css" />
    <link href="<?php echo base_url();?>
/styles/wit_job_dashboard.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url();?>
/styles/vipanan_add_companies.css" />
    <style>
      .form-control:focus {
        color: #495057 !important;
        background-color: #fff !important;
        border-color: #1e3262 !important;
        outline: 0 !important;
        box-shadow: 0 0 0 0.1rem rgba(30, 50, 98, 0.25) !important;
      }
      .parsley-errors-list {
        margin: 6px 0 3px !important;
      }
      input.parsley-error,
      select.parsley-error,
      textarea.parsley-error {
        color: #b94a48;
        background-color: #8080801f !important;
        border: 1px solid #8080801f !important;
      }
    </style>
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
              type="button"
              class="btn rounded-circle dropdown-toggle btn-primary"
              data-toggle="dropdown"
              data-display="static"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i
                class="fas fa-user-tie"
                style="font-size: 20px; color:white;"
              ></i>
            </button>
            <div
              class="dropdown-menu dropdown-menu-right dropdown-menu-lg-right"
            >
              <h6 class="dropdown-header">TheVipananCompany</h6>
              <h6 class="dropdown-header">
                TheVipananCompanyRbsWiT
              </h6>
              <div class="dropdown-divider"></div>
              <div class="dropdown-divider"></div>
              <button class="dropdown-item" type="button">
                Logout
              </button>
            </div>
          </div>
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
          <a class="nav-link" href="<?php echo base_url();?>
/vipanan_wit_dashboard">Dashboard</a>
          <a class="nav-link active" href="<?php echo base_url();?>
/vipanan_add_companies"
            >Add Companies</a
          >
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
                      <form id="demo-form" data-parsley-validate="">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="fname"
                              >FirstName<span class="text-danger"
                                >*</span
                              ></label
                            >
                            <input
                              type="text"
                              class="form-control fname"
                              id="fname"
                              name="fname"
                              data-parsley-pattern="^[a-zA-Z]+$"
                              data-parsley-trigger="keyup"
                              required
                            />
                          </div>
                          <div class="form-group col-md-6">
                            <label for="lname"
                              >LastName<span class="text-danger">*</span></label
                            >
                            <input
                              type="text"
                              class="form-control lname"
                              id="lname"
                              name="lname"
                              data-parsley-pattern="^[a-zA-Z]+$"
                              data-parsley-trigger="keyup"
                              required
                            />
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputEmail4"
                              >Email<span class="text-danger">*</span></label
                            >
                            <input
                              type="email"
                              class="form-control email"
                              id="inputEmail4"
                              name="email"
                              data-parsley-type="email"
                              data-parsley-trigger="keyup"
                              required
                            />
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4"
                              >Password<span class="text-danger">*</span></label
                            >
                            <input
                              type="password"
                              class="form-control password"
                              id="inputPassword4"
                              name="passowrd"
                              data-parsley-minlength="8"
                              data-parsley-uppercase="1"
                              data-parsley-lowercase="1"
                              data-parsley-number="1"
                              data-parsley-special="1"
                              data-parsley-trigger="keyup"
                              required
                            />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="designation"
                            >Designation<span class="text-danger"
                              >*</span
                            ></label
                          >
                          <input
                            type="text"
                            class="form-control designation"
                            id="designation"
                            required
                          />
                        </div>

                        <div class="form-row">
                          <div class="form-group col-sm-6">
                            <label for="inputAddress"
                              >Alternate Email<span class="text-danger"
                                >*</span
                              ></label
                            >
                            <input
                              type="email"
                              class="form-control alternateemail"
                              id="inputAddress"
                              data-parsley-type="email"
                              data-parsley-trigger="keyup"
                              required
                            />
                          </div>
                          <div class="col-sm-6">
                            <label for="contact"
                              >Contact<span class="text-danger">*</span></label
                            >
                            <div class="input-group mb-5">
                              <div class="input-group-prepend">
                                <span class="input-group-text px-3 py-0"
                                  >+ 91</span
                                >
                              </div>
                              <input
                                type="text"
                                class="form-control contact"
                                id="contact"
                                name="contact"
                                minlength="10"
                                data-parsley-type="digits"
                                data-parsley-trigger="keyup"
                                required
                              />
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="organizationnname"
                            >Organization Name<span class="text-danger"
                              >*</span
                            ></label
                          >
                          <input
                            type="text"
                            class="form-control orgname"
                            id="organizationnname"
                            required
                          />
                        </div>
                        <div class="form-group">
                          <label for="organizationdes"
                            >Organization Description<span class="text-danger"
                              >*</span
                            ></label
                          >
                          <textarea
                            class="form-control orgdes"
                            rows="3"
                            id="organizationdes"
                            required
                          ></textarea>
                        </div>
                        <div class="form-group">
                          <label for="gstnumber"
                            >GST Number<span class="text-danger">*</span></label
                          >
                          <input
                            type="text"
                            class="form-control orggstnum"
                            id="gstnumber"
                            required
                          />
                        </div>
                        
                          <div class="form-group">
                            <label for="organizationnumber"
                              >Office Number<span class="text-danger"
                                >*</span
                              ></label
                            >
                            <input
                              type="text"
                              class="form-control orgnum"
                              id="organizationnumber"
                              required
                            />
                          </div>
                         
                        

                        <div class="form-group">
                          <label for="orgnizationaddress"
                            >Organization Address<span class="text-danger"
                              >*</span
                            ></label
                          >
                          <textarea
                            class="form-control orgaddress"
                            rows="2"
                            id="orgnizationaddress"
                            required
                          ></textarea>
                        </div>
                        <div class="form-row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="state"
                                >State<span class="text-danger">*</span></label
                              >
                              <select
                                class="form-control orgstate"
                                id="state"
                                required
                              >
                                <option
                                  value=""
                                  selected="true"
                                  disabled="disabled"
                                  >Select State</option
                                >
                                <option value="Andaman and Nicobar Islands"
                                  >Andaman and Nicobar Islands</option
                                >
                                <option value="Andhra Pradesh"
                                  >Andhra Pradesh</option
                                >
                                <option value="Arunachal Pradesh"
                                  >Arunachal Pradesh</option
                                >
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh"
                                  >Chhattisgarh</option
                                >
                                <option value="Dadra and Nagar Haveli"
                                  >Dadra and Nagar Haveli</option
                                >
                                <option value="Daman and Diu"
                                  >Daman and Diu</option
                                >
                                <option value="Delhi">Delhi</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh"
                                  >Himachal Pradesh</option
                                >
                                <option value="Jammu and Kashmir"
                                  >Jammu and Kashmir</option
                                >
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Madhya Pradesh"
                                  >Madhya Pradesh</option
                                >
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Orissa">Orissa</option>
                                <option value="Pondicherry">Pondicherry</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttaranchal">Uttaranchal</option>
                                <option value="Uttar Pradesh"
                                  >Uttar Pradesh</option
                                >
                                <option value="West Bengal">West Bengal</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="city"
                                >City<span class="text-danger">*</span></label
                              >
                              <select
                                class="form-control orgcity"
                                id="city"
                                required
                              >
                                <option
                                  value=""
                                  selected="true"
                                  disabled="disabled"
                                  >Select City</option
                                >
                                <option value="Gurgaon">Gurgaon</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Bangalore">Bangalore</option>
                                <option value="Hydrabad">Hydrabad</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Kolkatta">Kolkatta</option>
                                <option value="Indore">Indore</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="zip"
                                >Zip<span class="text-danger">*</span></label
                              >
                              <input
                                type="text"
                                class="form-control orgpin"
                                id="zip"
                                data-parsley-type="digits"
                                data-parsley-trigger="keyup"
                                required
                              />
                            </div>
                          </div>
                        </div>

                        <button
                          type="submit"
                          class="btn btn-primary  waves-effect waves-light vipananaddcompanyDetails"
                        >
                          ADD 
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
            <a href="#">WiT</a>
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
    <!-- <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"><?php echo '</script'; ?>
> -->
    <?php echo '<script'; ?>

      src="https://cdnjs.cloudflare.com/ajax/libs/validate-js/2.0.1/validate.min.js"
      integrity="sha256-FtvY52LIDZ2/QHmDNay6PTYvLlRsZICHak0iJEAIBuM="
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
      // $('#customFile').on('change', function() {
      // var fileName = $(this)
      // .val()
      // .replace('C:\\\\', ' ');
      //replace the "Choose a file" label
      //     $(this)
      //       .next('.custom-file-label')
      //       .html(fileName);
      //   });
      //
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      // Add the following code if you want the name of the file appear on select
      $('.custom-file-input').on('change', function() {
        var fileName = $(this)
          .val()
          .split('\\')
          .pop();
        $(this)
          .siblings('.custom-file-label')
          .addClass('selected')
          .html(fileName);
      });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/vipanan_add_companies.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
      // Disable form submissions if there are invalid fields
      // (function() {
      // 'use strict';
      // window.addEventListener(
      // 'load',
      // function() {
      // Get the forms we want to add validation styles to
      // var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      //         var validation = Array.prototype.filter.call(forms, function(form) {
      //           form.addEventListener(
      //             'submit',
      //             function(event) {
      //               if (form.checkValidity() === false) {
      //                 event.preventDefault();
      //                 event.stopPropagation();
      //               }
      //               form.classList.add('was-validated');
      //             },
      //             false
      //           );
      //         });
      //       },
      //       false
      //     );
      //   })();
      //
    <?php echo '</script'; ?>
>
   
    <?php echo '<script'; ?>
 src="libs/parsley/parsley.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
      $(function() {
        $('#demo-form')
          .parsley()
          .on('field:validated', function() {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
          })
          .on('form:submit', function() {
            return false; // Don't submit form for this demo
          });
        //has uppercase
        window.Parsley.addValidator('uppercase', {
          requirementType: 'number',
          validateString: function(value, requirement) {
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
          validateString: function(value, requirement) {
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
          validateString: function(value, requirement) {
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
          validateString: function(value, requirement) {
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
</html>
<?php }
}
