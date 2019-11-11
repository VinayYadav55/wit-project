<?php
/* Smarty version 3.1.33, created on 2019-08-02 16:21:06
  from 'C:\xampp\htdocs\sanjeev\presentation\templates\posted_job.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4446d28f62b8_73675515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96cf4d28daf3fa7f03234e109c0e3493d649ce1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanjeev\\presentation\\templates\\posted_job.tpl',
      1 => 1564755664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4446d28f62b8_73675515 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\sanjeev\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'postedJob','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('jobDetail', $_smarty_tpl->tpl_vars['obj']->value->jobDetails['jobDetails']);?>
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
   
    <link rel="stylesheet" href="<?php echo base_url();?>
/styles/job_portal_styles.css" />

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
                <button class="dropdown-item" type="button">
                  Edit Profile
                </button>
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
          <div class="col-sm-12">
            <div class="container-fluid">
              <div class="row">
                <div
                  class="col-sm-12 bg-light"
                  style="position:sticky; top:7%; z-index:200;"
                >
                  <h4>Full Job Post Details</h4>
                </div>
                <div class="col-sm-12">
                  <div class="container">
                    <div class="row">
                      <div
                        class="col-sm-12 bg-light"
                        style="border: #8080802b 1px solid;"
                      >
                     
                        <h5>Job Title/ Designation</h5>
                        <p><?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['job_title'];?>
</p>
                        <h5>Qualification</h5>
                        <p><?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['qualifications'];?>
</p>
                        <h5>Work Experience</h5>
                        <p><?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['work_experience'];?>
 Year</p>
                        <h5>Skills</h5>
                        <p><?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['required_skills'];?>
</p>
                        <h5>Job Type</h5>
                        <p><?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['job_type'];?>
</p>
                        <h5>Job Location</h5>
                        <p><?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['job_location'];?>
</p>
                        <h5>Functional Area</h5>
                        <p><?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['job_functional_area'];?>
t</p>
                        <h5>Industry Type</h5>
                        <p><?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['job_industry_type'];?>
</p>
                        <h5>number of opening</h5>
                        <p><?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['total_openings'];?>
</p> 
                        <h5>End Date</h5>
                        <p><?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['deadline_date'];?>
</p>
                        <h5>Salary</h5>
                        <p><?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['salary_provide'];?>
</p>
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
