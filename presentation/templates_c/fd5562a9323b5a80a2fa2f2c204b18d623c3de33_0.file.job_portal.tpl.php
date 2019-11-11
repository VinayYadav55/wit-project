<?php
/* Smarty version 3.1.33, created on 2019-08-07 14:17:44
  from 'C:\xampp\htdocs\djdfbf\sanjeev\presentation\templates\job_portal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4ac1687ef3e8_88400707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd5562a9323b5a80a2fa2f2c204b18d623c3de33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\templates\\job_portal.tpl',
      1 => 1565180261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:listed_jobs.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d4ac1687ef3e8_88400707 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
    <link rel="stylesheet" type="text/css" href="styles/home.css" />
    <link rel="stylesheet" type="text/css" href="styles/job_portal.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/29bef62cc9.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/libs/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src=<?php echo base_url();?>
/js/jobPortal.js><?php echo '</script'; ?>
>
    <title>Home|WIT</title>
    <style>
      .btn-outline-primary {
        border: 1px solid gray !important;
        color: gray !important;
      }
      .btn-outline-primary:hover {
        background-color: slategrey !important;
        color: white !important;
      }
    </style>
  </head>
  <body>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container-fluid bg-light my-4 px-5">
      <div class="row py-4">
        <div class="col-md-3 filtersection">
          <div class="row">
            <div class="col-md-12">
              
                <div class=" row col-md-12 p-3 py-2">
                  <div class=" col-md-5 p-0 filterHeading">Filter</div>
                  <div class="col-md-2 p-0"></div>
                  <div class="col-md-4 p-0">
                    <button class="btn px-5 resetBtn "> Reset</button>
                  </div>
                  <div class="col-md-1"></div>
                </div>
                <strong><hr></hr></strong>
                <div class="input-group mb-3  mt-3">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search Job by Keyword"
                  />
                  <div class="input-group-append"></div>
                </div>
              <div class="input-group mb-3">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search Job by Company Name"
                />
                <div class="input-group-append"></div>
              </div>

              <div class="btn-group-vertical">
                <div class="btn-group">
                  <button
                    type="button"
                    class="btn btn-light dropdown-toggle"
                    data-toggle="dropdown"
                  >
                    City
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Delhi</a>
                    <a class="dropdown-item" href="#">Gurgaon</a>
                    <a class="dropdown-item" href="#">Mumbai</a>
                    <a class="dropdown-item" href="#">Bangalore</a>
                    <a class="dropdown-item" href="#">Hydrabad</a>
                    <a class="dropdown-item" href="#">Kolkatta</a>
                  </div>
                </div>
              </div>

              <hr />
              <div class="mb-2">Job Type</div>

              <div class="row my-2">
                <div class="col-md-1"></div>
                <div class="col-md-5 dark mr-2 p-2">
                  <span style="font-size:12px;">Full Time</span>
                  <span class="float-right"
                    ><input type="checkbox" name=""
                  /></span>
                </div>
                <div class="col-md-5 dark p-2">
                  <span style="font-size:12px;">Part Time</span>
                  <span class="float-right"
                    ><input type="checkbox" name=""
                  /></span>
                </div>
                <div class="col-md-1"></div>
              </div>

              <div class="row my-2">
                <div class="col-md-1"></div>
                <div class="col-md-5 dark mr-2 p-2">
                  <span style="font-size:12px;">Work From Home</span>
                  <span class="float-right"
                    ><input type="checkbox" name=""
                  /></span>
                </div>
                <div class="col-md-5 dark p-2">
                  <span style="font-size:12px;">FreeLancer Jobs</span>
                  <span class="float-right"
                    ><input type="checkbox" name=""
                  /></span>
                </div>
                <div class="col-md-1"></div>
              </div>

              <div class="row my-2 ">
                <div class="col-md-1"></div>
                <div class="col-md-5 dark mr-2 p-2">
                  <span style="font-size:12px;">Volunteer</span>
                  <span class="float-right"
                    ><input type="checkbox" name=""
                  /></span>
                </div>
                <div class="col-md-1"></div>
              </div>

              <div class="btn-group-vertical my-3">
                <div class="btn-group">
                  <button
                    type="button"
                    class="btn btn-light dropdown-toggle"
                    data-toggle="dropdown"
                  >
                    Functional Area
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">IT</a>
                    <a class="dropdown-item" href="#">FINANCE</a>
                    <a class="dropdown-item" href="#">ACCOUNTING</a>
                  </div>
                </div>
              </div>

              <hr />

              <div class="btn-group-vertical">
                <div class="btn-group">
                  <button
                    type="button"
                    class="btn btn-light dropdown-toggle"
                    data-toggle="dropdown"
                  >
                    Industries
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">IT SOFTWARE</a>
                    <a class="dropdown-item" href="#">NETWORKING</a>
                    <a class="dropdown-item" href="#">MECHANICHAL</a>
                    <a class="dropdown-item" href="#">FINANCE</a>
                    <a class="dropdown-item" href="#">ACCOUNTING</a>
                    <a class="dropdown-item" href="#">ELECTRICHAL</a>
                  </div>
                </div>
              </div>

              <hr />
              <p>Year of Experience</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="btn-group-vertical">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-light dropdown-toggle"
                        data-toggle="dropdown"
                      >
                        From Year
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">1991</a>
                        <a class="dropdown-item" href="#">1992</a>
                        <a class="dropdown-item" href="#">1993</a>
                        <a class="dropdown-item" href="#">1994</a>
                        <a class="dropdown-item" href="#">1995</a>
                        <a class="dropdown-item" href="#">1996</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="btn-group-vertical">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-light dropdown-toggle"
                        data-toggle="dropdown"
                      >
                        From Year
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">2000</a>
                        <a class="dropdown-item" href="#">2001</a>
                        <a class="dropdown-item" href="#">2002</a>
                        <a class="dropdown-item" href="#">2003</a>
                        <a class="dropdown-item" href="#">2004</a>
                        <a class="dropdown-item" href="#">2005</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mt-3 mb-3">
                <div class="col-md-12 py-5">
                  <button class="btn btn-block witBtn">REFINE</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-8 jobsSection">
           
          <div class="row">
            <div class="col-md-12 ">
              <h2 class="text-center">All Jobs</h2>
              <hr />
                 <?php $_smarty_tpl->_subTemplateRender('file:listed_jobs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
                <hr />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
  </body>
</html>
<?php }
}
