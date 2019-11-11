<?php
/* Smarty version 3.1.33, created on 2019-08-02 16:36:42
  from 'C:\xampp\htdocs\sanjeev\presentation\templates\job_application.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d444a7accbc49_99918994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd91bfd0a5e06a4ef5bc0ca6ddfdca9c9b7365d32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanjeev\\presentation\\templates\\job_application.tpl',
      1 => 1564756409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d444a7accbc49_99918994 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
    <link rel="stylesheet" href="styles/job_portal_styles.css" />

    <title>WIT|PORTAL|DASHBOARD</title>
  </head>
  <body>
    <div class="sidenav">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 py-4">
            <div class="compnayLogo">
              <div class="maincompanyImg">
                <img
                  src="images/microsoft.png"
                  class="img-fluid"
                  class="main-image"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <ul class="nav flex-column nav-pills">
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url();?>
/job_portal_dashboard"
                  >Dashboard</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>
/post_jobs">Post Jobs</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="main">
      <div
        class="container-fluid bg-white "
        style="position: sticky;top:0;z-index: 300;"
      >
        <div class="row">
          <div class="col-sm-2 pb-1">
            <img src="images/witlogo-logo-dashboard.png" alt="" />
          </div>
          <div class="col-sm-9"></div>
          <div class="col-sm-1 py-1">
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
                <div id="v-pills-tab" role="tablist">
                  <a
                    class="dropdown-item"
                    id="v-pills-profile-edit-tab"
                    data-toggle="pill"
                    href="#v-pills-profile-edit"
                    role="tab"
                    aria-controls="v-pills-profile-edit"
                    aria-selected="false"
                  >
                    Edit Profile
                  </a>
                </div>

                <button class="dropdown-item" type="button">
                  Change Password
                </button>
                <div class="dropdown-divider"></div>
                <button class="dropdown-item" type="button">
                  Logout
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div
            class="col-sm-12 my-2 bg-light"
            style="position: sticky; top:7%; z-index: 200;border: 1px solid #8080802b;"
          >
            <h1>Number of application</h1>
          </div>
          <div
            class="col-sm-12 my-2 py-2 bg-light"
            style="border: 1px solid #8080802b;"
          >
            <h4>Sam Johnson</h4>
            <p>Delhi</p>
            <h6>Education:</h6>
            <p>
              Computer SCience(2020), BM Intitute of technology Delhi
            </p>
            <h6>Skills</h6>
            <p>html, css, javascript,jquery php</p>
            <h6>Ans:1</h6>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores
              distinctio deserunt aliquid voluptatem dicta, earum maiores quo
              suscipit sed recusandae animi velit a praesentium porro similique
              provident vero. Sunt enim quidem quam aut consequatur aliquam qui,
              veritatis voluptate magnam! Nam.
            </p>
            <h6>Ans:2</h6>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores
              distinctio deserunt aliquid voluptatem dicta, earum maiores quo
              suscipit sed recusandae animi velit a praesentium porro similique
              provident vero. Sunt enim quidem quam aut consequatur aliquam qui,
              veritatis voluptate magnam! Nam.
            </p>
            <a
              href="<?php echo base_url();?>
/job_application_full_details"
              class="btn btn-sm btn-secondary"
              >View Full Application</a
            >
          </div>
        </div>
      </div>
    </div>

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
  </body>
</html>
<?php }
}
