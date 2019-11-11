<?php
/* Smarty version 3.1.33, created on 2019-08-30 20:50:44
  from '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/post_jobs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d698c24a7f401_24827729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da505fb08dda3ae4d3d72f72be25b6eb5b8c8312' => 
    array (
      0 => '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/post_jobs.tpl',
      1 => 1567198034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d698c24a7f401_24827729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/vipananwebtest/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),1=>array('file'=>'/home2/labiknmy/public_html/vipananwebtest/libs/smarty/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
echo smarty_function_load_presentation_object(array('filename'=>'jobPortalDashboard','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('companySessionDetail', $_SESSION['companySession']);?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css"
    integrity="sha256-PIRVsaP4JdV/TIf1FR8UHy4TFh+LiRqeclYXvCPBeiw=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />

  
  <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/libs/jquery/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
/js/job_portal_dashboard.js"><?php echo '</script'; ?>
>
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>
/styles/employeer_dashboard.css" rel="stylesheet" />
  <title>WIT|PORTAL|DASHBOARD</title>
</head>

<body>
     <div class="overlay-loader-div">
    <img src="images/pinkloader.gif" width="100" height="100" class="overlay-img-loader" alt="" />
  </div>
  <input type="hidden" class="baseUrl" baseUrl=<?php echo base_url();?>
/employeer> <header
    class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
  <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
    data-target="#sidebar">
    <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
  </a>
   <a class="logo" href="<?php echo base_url();?>
"><img src="<?php echo base_url();?>
/images/witlogo-dashboard-logo.jpeg" width="100" height="60" /></a>
  <button class="navbar-toggler navbar-icon waves-effect waves-light" type="button" data-toggle="collapse"
    data-target="#navbarNav"><i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i></button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav navbar-toolbar ml-auto">
      <li class="text-white mr-md-3 p-2 waves-effect waves-light"
        style="color: #E94161 !important; border: #E94161 1px solid">
        <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['companySessionDetail']->value['company_name']);?>

      </li>
      <li>
        <div class="dropDownMain btn-group">
          <button type="button " class="btn rounded-circle dropdown-toggle"
            style="color: #E94161 !important; border: #E94161 1px solid" data-toggle="dropdown" data-display="static"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-tie" style="font-size: 20px;"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-right dropDownMainContent mb-5">
            <h6 class="dropdown-header"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['companySessionDetail']->value['company_name']);?>
</h6>
            <h6 class="dropdown-header">
              <?php echo $_smarty_tpl->tpl_vars['companySessionDetail']->value['email_id'];?>

            </h6>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" type="button">
              <a href='<?php echo base_url();?>
/edit/company_id=<?php echo $_smarty_tpl->tpl_vars['companySessionDetail']->value['id'];?>
'> Edit Profile</a>
            </button>
            <button class="dropdown-item" type="button">
             <a href='<?php echo base_url();?>
/changepassword'>Change Password</a>
            </button>
            <button class="dropdown-item logOutBtn">
              <a href=""> Logout</a>
            </button>
          </div>
        </div>
  </div>
  </li>
  </ul>
  </div>
  </header>
 <div id="sidebar" class="sidenav sidenav-fixed expand-lg" style="border-right:1px solid gray;">

    <div class="userImg pt-5 mt-3 text-center" style="box-shadow: 1px 1px 1px 1px gray;">
      <div class="speakerImgDiv text-center">
        <div class="imageContainerSpeaker text-center">
          <img src="images/microsoft.png" class="main-image-speaker" alt="" />
        </div>
      </div>
    </div>
    <div class="mt-3  pl-3">
      <nav class="nav flex-column nav-pills">
        <a class="nav-link" href="<?php echo base_url();?>
/job_portal_dashboard">Dashboard</a>
        <a class="nav-link active" href="<?php echo base_url();?>
/post_jobs">Post Jobs</a>
      </nav>
    </div>
  </div>

  <div class="docs-content-wrapper" style="background-color: #ececec;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="container-fluid pb-5">
            <div class="row">
              <div class="col-sm-8 offset-sm-2 my-2" style="position: sticky; top:65px; z-index:200;">
                  <div class="container">
                <h4 class="p-2 text-center  bg-white"  style=" border: 1px solid #0000004d;">Post Jobs</h4>
                </div>
              </div>
              <div class="col-sm-8 offset-sm-2 my-4">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <form>
                        <div class="col-sm-12 p-4 bg-white" style="border: 1px solid #0000004d;">
                          <div class="form-group">
                            <label for="jobtitle">Job Title/ Designation<span class="text-danger">*</span></label>
                            <input type="text" class="form-control jobtitle" id="jobtitle" placeholder="" required />
                          </div>
                          <div class="form-group">
                            <label for="comment">Describe Something About Job<span class="text-danger">*</span></label>
                            <textarea class="form-control descriptionjob" rows="3" id="comment"></textarea>
                          </div>

                          <div class="form-group">
                            <label for="sel1">Qualification<span class="text-danger">*</span></label>
                            <select class="js-example-basic-multiple qualificationInput" name="qualification"
                              multiple="multiple" style="width: 100% !important;">
                              <option value="10th">10th</option>
                              <option value="12th">12th</option>
                              <option value="BBA">BBA</option>
                              <option value="BSc">B. Sc</option>
                              <option value="BCA">BCA</option>
                              <option value="BTech">B. Tech</option>
                              <option value="MBA">MBA</option>
                              <option value="BE">B.E.</option>
                              <option value="MCA">MCA</option>
                              <option value="MTech">M. Tech</option>
                              <option value="PHD">PHD</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="">Work Experience<span class="text-danger">*</span></label>
                            <select class="js-example-basic-single form-control experienceInput" name="experience"
                              style="width: 100% !important;">
                              <option selected="true" disabled>Select</option>
                              <option value="freshers">Freshers</option>
                              <option value="0-1">0-1 Year</option>
                              <option value="0-2">0-2 Year</option>
                              <option value="0-3">0-3 Year</option>
                              <option value="1-2">1-2 Year</option>
                              <option value="1-3">1-3 Year</option>
                              <option value="2-4">2-4 Year</option>
                              <option value="5">5 Year</option>
                              <option value="6">6 year</option>
                              <option value="7-8">7-8 Year</option>
                              <option value="9">9 Year</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="">Skills<span class="text-danger">*</span></label>
                            <select class="skills-required-for-job skillsInput" name="skills" multiple="multiple"
                              style="width: 100% !important;">
                              <option value="HTML">HTML</option>
                              <option value="CSS">CSS</option>
                              <option value="JavaScript">JavaScript</option>
                              <option value="Java">Java</option>
                              <option value="NodeJs">NodeJs</option>
                              <option value="Angular2+">Angular2+</option>
                              <option value="AngularJs">AngularJs</option>
                              <option value="JQuery">JQuery</option>
                              <option value="Python">Python</option>
                              <option value="BigData">Big Data</option>
                              <option value="DataScience">Data Science</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-12 my-2 p-4 bg-white" style="border: 1px solid #0000004d;">
                          <div class="form-group">
                            <div class="form-row">
                              <div class="col-sm-4">
                                <div class="custom-control custom-switch">
                                  <input type="checkbox" class="custom-control-input cb" id="customSwitch1"
                                    name="companyjobtype" value="full_time" onchange="cbChange(this)" checked />
                                  <label class="custom-control-label" for="customSwitch1">Full Time</label>
                                </div>
                              </div>
                              <div class="col-sm-4 text-center">
                                <div class="custom-control custom-switch">
                                  <input type="checkbox" class="custom-control-input cb" id="customSwitch2"
                                    name="companyjobtype" value="part_time" onchange="cbChange(this)" />
                                  <label class="custom-control-label" for="customSwitch2">Part Time</label>
                                </div>
                              </div>
                              <div class="col-sm-4 text-right">
                                <div class="custom-control custom-switch">
                                  <input type="checkbox" class="custom-control-input cb" id="customSwitch3"
                                    name="companyjobtype" value="work_from_home" onchange="cbChange(this)" />
                                  <label class="custom-control-label" for="customSwitch3">Work fom home</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="">Job Location<span class="text-danger">*</span></label>
                            <select class="job-location jobLocationInput" name="city" style="width: 100% !important;">
                              <option selected="true" disabled>Select location</option>
                              <option value="Gurgaon">Gurgaon</option>
                              <option value="Delhi NCR">Delhi NCR</option>
                              <option value="Hydrabad">Hydrabad</option>
                              <option value="Bangalore">Bangalore</option>
                              <option value="Chennai">Chennai</option>
                              <option value="Kolkatta">Kolkatta</option>
                              <option value="Mumbai">Mumbai</option>
                              <option value="Jaipur">Jaipur</option>
                              <option value="Indore">Indore</option>
                              <option value="Lucknow">Lucknow</option>
                              <option value="Goa">Goa</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="">Functional Area<span class="text-danger">*</span></label>
                            <select class="functional-area jobfunctionalareaInput" name="functionalarea"
                              multiple="multiple" style="width: 100% !important;">
                              <option value="Software Development">Software Development</option>
                              <option value="Management">Management</option>
                              <option value="Project Management">Project Management</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="">Industry Type<span class="text-danger">*</span></label>
                            <select class="industry-type jobIndustryInput" name="industrytype" multiple="multiple"
                              style="width: 100% !important;">
                              <option value="IT">IT</option>
                              <option value="Software">Software</option>
                              <option value="Other">Other</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-12  my-2 p-4 bg-white" style="border: 1px solid #0000004d;">
                          <div class="form-group">
                            <label for="numberofopening jobNumberInput">Number of opening<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="numberofopening"
                              placeholder="Enter number of opening" required />
                          </div>
                          <div class="form-group">
                            <div class="form-row">
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="startDate">Deadline Date<span class="text-danger">*</span></label>
                                  <input type="date" name="somedate" class="form-control jobStartDateInput" required />
                                </div>
                              </div>
                              
                              <div class="col-sm-6">
                                  <div class="form-group">
                            <label for="numberofopening">Salary<span class="text-danger">*</span></label>
                            <input type="text" pattern="\d*" maxlength="10" class="form-control jobSalaryInput"
                              placeholder="Enter offer salary" required />
                          </div>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                        <div class="col-sm-12 bg-white  my-2 py-2 text-center " style="border: 1px solid #0000004d;">
                          <button class="btn  witBtn px-5 submitJob">
                            Submit
                          </button>
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
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"><?php echo '</script'; ?>
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
 src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"
    integrity="sha256-kQ6DQtOnXtjGYnAEMZQjpsioC75ND0K9I8MyjtdLCyk=" crossorigin="anonymous"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/sweetalert2@8"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/promise-polyfill"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    $(document).ready(function () {
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
  <?php echo '<script'; ?>
>
    function cbChange(obj) {
      var cbs = document.getElementsByClassName('cb');
      for (var i = 0; i < cbs.length; i++) {
        cbs[i].checked = false;
      }
      obj.checked = true;
    }
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("somedate")[0].setAttribute('min', today);
  <?php echo '</script'; ?>
>


</body>

</html><?php }
}