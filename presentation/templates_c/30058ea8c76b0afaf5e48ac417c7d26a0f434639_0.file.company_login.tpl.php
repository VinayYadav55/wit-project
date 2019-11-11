<?php
/* Smarty version 3.1.33, created on 2019-08-30 15:08:13
  from '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/company_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d693bddd8d380_80691520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30058ea8c76b0afaf5e48ac417c7d26a0f434639' => 
    array (
      0 => '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/company_login.tpl',
      1 => 1567175089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d693bddd8d380_80691520 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/vipananwebtest/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'jobPortalDashboard','assign'=>'obj'),$_smarty_tpl);?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="shortcut icon"
      href="images/wit-favicon.ico"
      type="image/x-icon"
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
    <link rel="stylesheet" href="<?php echo base_url();?>
/styles/normalize.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>
/styles/stylesheet.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>
/styles/wit_admin_login.css" />
    <link href="<?php echo base_url();?>
/styles/wit_job_dashboard.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two.css" rel="stylesheet" />
    <title>WIT|PORTAL|DASHBOARD</title>
  </head>
  <body>
      <div class="overlay-loader-div">
    <img src="images/pinkloader.gif" width="100" height="100" class="overlay-img-loader" alt="" />
  </div>
    <header
      class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled"
    >
      <a class="logo" href="<?php echo base_url();?>
"
        ><img src="images/witlogo-dashboard-logo.jpeg" width="100" height="60" alt=""
      /></a>
      <button
        class="navbar-toggler navbar-icon waves-effect waves-light"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
      ></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav navbar-toolbar ml-auto">
          <li class="py-5">
            <a href="#" class="nav-link waves-effect waves-light"
              >Employeer</a
            >
          </li>
          <li>
            
          </li>
        </ul>
      </div>
    </header>

    <div class="docs-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="container-fluid">
              <div class="row">
                <div
                  class="col-sm-12 bg-light py-2 text-center"
                  style="position: sticky; top:65px; z-index:200;"
                >
                  <h4 class="py-2">Employeer Login</h4>
                </div>
                <div class="col-sm-6 offset-sm-3 py-5" style="border: 1px solid #dadada; background-color: #EFFAFD;box-shadow: 2px 1px 6px -2px grey;">
                  <div class="container">
                    <div class="row">
                      <div
                        class="col-sm-6 offset-sm-3  py-5 mt-5">
                        <form>
                          <div class="form-group">
                            <label for="email">Email<span class="text-danger">*</span></label>
                            <input
                              type="email"
                              name="email"
                              id="email"
                              class="form-control email"
                            />
                          </div>
                          <div class="form-group">
                            <label for="pwd">Password<span class="text-danger">*</span></label>
                            <input
                              type="password"
                              name="pwd"
                              id="pwd"
                              class="form-control pwd"
                            />
                          </div>
                           <a href="" class="float-right">Forgot password</a>
                          <div class="form-group mt-5 py-2 text-center">
                            <div class="btn witBtn companylogin px-5">
                              Login
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
 src="https://cdn.jsdelivr.net/npm/sweetalert2@8"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/promise-polyfill"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/job_portal_dashboard.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}