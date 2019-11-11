<?php
/* Smarty version 3.1.33, created on 2019-08-02 16:07:12
  from 'C:\xampp\htdocs\sanjeev\presentation\templates\post_jobs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4443900a4858_82190138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9925261fdaa25eb5404f0b289424a8a67a9b222' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanjeev\\presentation\\templates\\post_jobs.tpl',
      1 => 1564754129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4443900a4858_82190138 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\sanjeev\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
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

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.css"
      integrity="sha256-sOzekWI0idT6INhELxtD6PppBzQpW7L8cGjCa4h7WsM="
      crossorigin="anonymous"
    /> -->
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
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/libs/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
/js/job_portal_dashboard.js"><?php echo '</script'; ?>
>
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
                <a class="nav-link" href="<?php echo base_url();?>
/job_portal_dashboard"
                  >Dashboard</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url();?>
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
                <h6 class="dropdown-header">Dicion Diclause</h6>
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
            <div class="container-fluid pb-5">
              <div class="row">
                <div
                  class="col-sm-12 bg-light"
                  style="position: sticky; top:7%; z-index:200;"
                >
                  <h4 class="">Post Jobs</h4>
                </div>
                <div class="col-sm-2 "></div>
                <div class="col-sm-8">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12">
                        <form>
                          <div
                            class="col-sm-12 py-2 bg-light"
                            style="border: 1px solid #8080802b;"
                          >
                            <div class="form-group">
                              <label for="jobtitle"
                                >Job Title/ Designation</label
                              >
                              <input
                                type="text"
                                class="form-control jobtitle"
                                id="jobtitle"
                                placeholder=""
                                required
                              />
                            </div>

                            <div class="form-group">
                              <label for="sel1">Qualification</label>
                              <select
                                class="js-example-basic-multiple qualificationInput"
                                name="qualification"
                                multiple="multiple"
                                style="width: 100% !important;"
                              >
                                <option value="10">10th</option>
                                <option value="12">12th</option>
                                <option value="bba">BBA</option>
                                <option value="bsc">B. Sc</option
                                ><option value="bca">BCA</option
                                ><option value="btech">B. Tech</option
                                ><option value="mba">MBA</option
                                ><option value="be">B.E.</option
                                ><option value="mca">MCA</option
                                ><option value="mtech">M. Tech</option
                                ><option value="phd">PHD</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="">Work Experience</label>
                              <select
                                class="js-example-basic-single form-control experienceInput"
                                name="experience"
                                style="width: 100% !important;"
                              >
                                <option selected="true" disabled>Select</option>
                                <option value="fresher">Fresher</option>
                                <option value="0-1">0-1 Year</option>
                                <option value="0-2">0-2 Year</option>
                                <option value="0-3">0-3 Year</option
                                ><option value="1-2">1-2 Year</option
                                ><option value="1-3">1-3 Year</option
                                ><option value="2-4">2-4 Year</option
                                ><option value="5">5 Year</option
                                ><option value="6">6 year</option
                                ><option value="7-8">7-8 Year</option
                                ><option value="9">9 Year</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="">Skills</label>
                              <select
                                class="skills-required-for-job skillsInput"
                                name="skills"
                                multiple="multiple"
                                style="width: 100% !important;"
                              >
                                <option value="html">HTML</option>
                                <option value="css">CSS</option>
                                <option value="js">JavaScript</option>
                                <option value="java">Java</option
                                ><option value="nodejs">NodeJs</option
                                ><option value="angular2+">Angular2+</option
                                ><option value="angularjs">AngularJs</option
                                ><option value="jquery">JQuery</option
                                ><option value="python">Python</option
                                ><option value="bigdata">Beg Data</option
                                ><option value="datascience"
                                  >Data Science</option
                                >
                              </select>
                            </div>
                          </div>
                          <div
                            class="col-sm-12 my-2 py-2 bg-light "
                            style="border: 1px solid #8080802b;"
                          >
                            <div class="form-group">
                              <div class="form-row">
                                <div class="col-sm-4">
                                  <div class="custom-control custom-switch">
                                    <input
                                      type="checkbox"
                                      class="custom-control-input"
                                      id="customSwitch1"
                                    />
                                    <label
                                      class="custom-control-label"
                                      for="customSwitch1"
                                      >Full Time</label
                                    >
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="custom-control custom-switch">
                                    <input
                                      type="checkbox"
                                      class="custom-control-input"
                                      id="customSwitch1"
                                    />
                                    <label
                                      class="custom-control-label"
                                      for="customSwitch1"
                                      >Part Time</label
                                    >
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="custom-control custom-switch">
                                    <input
                                      type="checkbox"
                                      class="custom-control-input"
                                      id="customSwitch1"
                                    />
                                    <label
                                      class="custom-control-label"
                                      for="customSwitch1"
                                      >Work fom home</label
                                    >
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="">Job Location</label>
                              <select
                                class="job-location jobLocationInput"
                                name="city"
                                style="width: 100% !important;"
                              >
                                <option selected="true" disabled
                                  >Select location</option
                                >
                                <option value="Gurgaon">Gurgaon</option>
                                <option value="Delhi NCR">Delhi NCR</option>
                                <option value="Hydrabad">Hydrabad</option>
                                <option value="Bangalore">Bangalore</option
                                ><option value="Chennai">Chennai</option
                                ><option value="Kolkatta">Kolkatta</option
                                ><option value="Mumbai">Mumbai</option
                                ><option value="Jaipur">Jaipur</option
                                ><option value="Indore">Indore</option
                                ><option value="Lucknow">Lucknow</option
                                ><option value="Goa">Goa</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="">Functional Area</label>
                              <select
                                class="functional-area jobfunctionalareaInput"
                                name="functionalarea"
                                multiple="multiple"
                                style="width: 100% !important;"
                              >
                                <option value="html"
                                  >Software Development</option
                                >
                                <option value="Management">Management</option>
                                <option value="Project Management">Project Management</option>
                              </select>
                            </div>

                            <div class="form-group">
                              <label for="">Industry Type</label>
                              <select
                                class="industry-type jobIndustryInput"
                                name="industrytype"
                                multiple="multiple"
                                style="width: 100% !important;"
                              >
                                <option value="IT">IT</option>
                                <option value="Software">Software</option>
                                <option value="Other">Other</option>
                              </select>
                            </div>
                          </div>
                          <div
                            class="col-sm-12  my-2 py-2 bg-light"
                            style="border: 1px solid #8080802b;"
                          >
                            <div class="form-group">
                              <label for="numberofopening jobNumberInput"
                                >Number of opening</label
                              >
                              <input
                                type="text"
                                class="form-control"
                                id="numberofopening"
                                placeholder="enter number of opening"
                                required
                              />
                            </div>
                            <div class="form-group">
                              <div class="form-row">
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label for="startDate"
                                      >Deadline Date</label
                                    >
                                    <input
                                      type="date"
                                      class="form-control jobStartDateInput"
                                      required
                                    />
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="numberofopening">Salary</label>
                              <input
                                type="text"
                                pattern="\d*"
                                maxlength="4"
                                class="form-control jobSalaryInput"
                                
                                placeholder="enter offer salary"
                                required
                              />
                            </div>
                          </div>
                          <div
                            class="col-sm-12 bg-light  my-2 py-2 text-center "
                            style="border: 1px solid #8080802b;"
                          >
                            <button class="btn  btn-secondary submitJob">
                              Submit
                            </button>
                          </div>
                        </form>
                      </div>
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
