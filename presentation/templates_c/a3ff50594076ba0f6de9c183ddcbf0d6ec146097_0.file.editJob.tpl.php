<?php
/* Smarty version 3.1.33, created on 2019-08-30 20:51:27
  from '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/editJob.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d698c4f177f15_57355155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3ff50594076ba0f6de9c183ddcbf0d6ec146097' => 
    array (
      0 => '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/editJob.tpl',
      1 => 1567198111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d698c4f177f15_57355155 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/vipananwebtest/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),1=>array('file'=>'/home2/labiknmy/public_html/vipananwebtest/libs/smarty/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
echo smarty_function_load_presentation_object(array('filename'=>'postedJob','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('companySessionDetail', $_SESSION['companySession']);
$_smarty_tpl->_assignInScope('jobDetail', $_smarty_tpl->tpl_vars['obj']->value->jobDetails['jobDetails']);?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css"
    integrity="sha256-PIRVsaP4JdV/TIf1FR8UHy4TFh+LiRqeclYXvCPBeiw=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />

  <link rel="stylesheet" href="<?php echo base_url();?>
/styles/job_portal_styles.css" />

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
    <img src="<?php echo base_url();?>
/images/pinkloader.gif" width="100" height="100" class="overlay-img-loader" alt="" />
  </div>
 <input type="hidden" class="baseUrl" baseUrl=<?php echo base_url();?>
/employeer>
  <header class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
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
          <img src="<?php echo base_url();?>
/images/microsoft.png" class="main-image-speaker" alt="" />
        </div>
      </div>
    </div>
    <div class="mt-3  pl-3">
      <nav class="nav flex-column nav-pills">
        <a class="nav-link active" href="<?php echo base_url();?>
/job_portal_dashboard">Dashboard</a>
        <a class="nav-link" href="<?php echo base_url();?>
/post_jobs">Post Jobs</a>
      </nav>
    </div>
  </div>


  <!-- ******************************************* -->

  <div class="docs-content-wrapper" style="background-color: #ececec;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 offset-sm-2 my-2" style="position: sticky; top:64px; z-index:200;">
                  <div class="container">
                <h4 class="text-center p-2  bg-white" style=" border: 1px solid #0000003d;">Edit Job</h4>
                </div>
              </div>
              <div class="col-sm-8 offset-sm-2 mb-5">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <form>
                        <input type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['job_id'];?>
 class="job_id">
                        <div class="col-sm-12 p-4 bg-white" style="border: 1px solid #0000003d;">
                          <div class="form-group">
                            <label for="jobtitle">Job Title / Designation<span class="text-danger">*</span></label>
                            <input type="text" class="form-control jobtitle" id="jobtitle" placeholder="" required
                              value="<?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['job_title'];?>
" />
                          </div>

                          <div class="form-group">
                            <label for="sel1">Qualification<span class="text-danger">*</span></label>
                            <select class="js-example-basic-multiple qualificationInput" name="qualification"
                              multiple="multiple" style="width: 100% !important;">
                              <option value="10" <?php if (in_array('10',$_smarty_tpl->tpl_vars['jobDetail']->value['qualificationArray'])) {?>selected<?php }?>>10th
                                </option> <option value="12" <?php if (in_array('12',$_smarty_tpl->tpl_vars['jobDetail']->value['qualificationArray'])) {?>selected<?php }?>>12th </option> <option
                                value="BBA" <?php if (in_array('BBA',$_smarty_tpl->tpl_vars['jobDetail']->value['qualificationArray'])) {?>selected<?php }?>>BBA
                                </option> <option value="BSc" <?php if (in_array('BSc',$_smarty_tpl->tpl_vars['jobDetail']->value['qualificationArray'])) {?>selected<?php }?>>B. Sc</option> <option
                                value="BCA" <?php if (in_array('BCA',$_smarty_tpl->tpl_vars['jobDetail']->value['qualificationArray'])) {?>selected<?php }?>>BCA
                                </option> <option value="BTech" <?php if (in_array('BTech',$_smarty_tpl->tpl_vars['jobDetail']->value['qualificationArray'])) {?>selected<?php }?>>B. Tech</option> <option
                                value="MBA" <?php if (in_array('MBA',$_smarty_tpl->tpl_vars['jobDetail']->value['qualificationArray'])) {?>selected<?php }?>>MBA
                                </option> <option value="BE" <?php if (in_array('BE',$_smarty_tpl->tpl_vars['jobDetail']->value['qualificationArray'])) {?>selected<?php }?>>B.E. </option> <option
                                value="MCA" <?php if (in_array('MCA',$_smarty_tpl->tpl_vars['jobDetail']->value['qualificationArray'])) {?>selected<?php }?>>MCA
                                </option> <option value="MTech" <?php if (in_array('MTech',$_smarty_tpl->tpl_vars['jobDetail']->value['qualificationArray'])) {?>selected<?php }?>>M. Tech</option> <option
                                value="PHD" <?php if (in_array('PHD',$_smarty_tpl->tpl_vars['jobDetail']->value['qualificationArray'])) {?>selected<?php }?>>PHD
                                </option> </select> </div> <div class="form-group">
                                <label for="">Work Experience<span class="text-danger">*</span></label>
                                <select class="js-example-basic-single form-control experienceInput" name="experience"
                                  style="width: 100% !important;">

                                  <option selected="true" disabled>Select</option>
                                  <option value="<?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['work_experience'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['work_experience'];?>

                                  </option>
                                  <option value="fresher">Fresher</option>
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

                              <option value="HTML" <?php if (in_array('HTML',$_smarty_tpl->tpl_vars['jobDetail']->value['required_skills_array'])) {?>selected<?php }?>>HTML </option> <option
                                value="CSS" <?php if (in_array('CSS',$_smarty_tpl->tpl_vars['jobDetail']->value['required_skills_array'])) {?>selected<?php }?>>CSS
                                </option> <option value="JavaScript" <?php if (in_array('JavaScript',$_smarty_tpl->tpl_vars['jobDetail']->value['required_skills_array'])) {?>selected<?php }?>>JavaScript </option>
                                <option value="Java" <?php if (in_array('Java',$_smarty_tpl->tpl_vars['jobDetail']->value['required_skills_array'])) {?>selected<?php }?>>Java </option> <option
                                value="NodeJs" <?php if (in_array('NodeJs',$_smarty_tpl->tpl_vars['jobDetail']->value['required_skills_array'])) {?>selected<?php }?>>NodeJs </option>
                                <option value="Angular2+" <?php if (in_array('Angular2+',$_smarty_tpl->tpl_vars['jobDetail']->value['required_skills_array'])) {?>selected<?php }?>>Angular2+ </option>
                                <option value="Angularjs" <?php if (in_array('Angularjs',$_smarty_tpl->tpl_vars['jobDetail']->value['required_skills_array'])) {?>selected<?php }?>>AngularJs </option>
                                <option value="JQuery" <?php if (in_array('JQuery',$_smarty_tpl->tpl_vars['jobDetail']->value['required_skills_array'])) {?>selected<?php }?>>JQuery </option>
                                <option value="Python" <?php if (in_array('Python',$_smarty_tpl->tpl_vars['jobDetail']->value['required_skills_array'])) {?>selected<?php }?>>Python </option>
                                <option value="BigData" <?php if (in_array('BigData',$_smarty_tpl->tpl_vars['jobDetail']->value['required_skills_array'])) {?>selected<?php }?>>Big Data</option>
                                <option value="DataScience" <?php if (in_array('DataScience',$_smarty_tpl->tpl_vars['jobDetail']->value['required_skills_array'])) {?>selected<?php }?>>Data Science
                                </option> </select> </div> </div> <div class="col-sm-12 my-2 py-2 bg-white p-4"
                                style="border: 1px solid #0000003d;">
                                <div class="form-group">
                                  <div class="form-row">
                                    <div class="col-sm-4">
                                      <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input cb" id="customSwitch1"
                                          name="companyjobtype" value="full_time" onchange="cbChange(this)" <?php if ($_smarty_tpl->tpl_vars['jobDetail']->value['job_type'] == 'full_time') {?>checked<?php }?> />
                                        <label class="custom-control-label" for="customSwitch1">Full Time</label>
                                      </div>
                                    </div>
                                    <div class="col-sm-4 text-center">
                                      <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input cb" id="customSwitch2"
                                          name="companyjobtype" value="part_time" onchange="cbChange(this)" <?php if ($_smarty_tpl->tpl_vars['jobDetail']->value['job_type'] == 'part_time') {?>checked<?php }?> />
                                        <label class="custom-control-label" for="customSwitch2">Part Time</label>
                                      </div>
                                    </div>
                                    <div class="col-sm-4 text-right">
                                      <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input cb" id="customSwitch3"
                                          name="companyjobtype" value="work_from_home" onchange="cbChange(this)" <?php if ($_smarty_tpl->tpl_vars['jobDetail']->value['job_type'] == 'work_from_home') {?>checked<?php }?> />
                                        <label class="custom-control-label" for="customSwitch3">Work From Home</label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="">Job Location<span class="text-danger">*</span></label>
                                  <select class="job-location jobLocationInput" name="city"
                                    style="width: 100% !important;">
                                    <option selected="true" disabled>Select location</option>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['job_location'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['job_location'];?>

                                    </option>
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

                                    <option value="Software Development" <?php if (in_array('Software Development',$_smarty_tpl->tpl_vars['jobDetail']->value['job_functional_area_array'])) {?>selected<?php }?>>Software
                                      Development</option>
                                      <option value="Management" <?php if (in_array('Management',$_smarty_tpl->tpl_vars['jobDetail']->value['job_functional_area_array'])) {?>selected<?php }?>>Management
                                      </option> <option value="Project Management" <?php if (in_array('Project
                                      Management',$_smarty_tpl->tpl_vars['jobDetail']->value['job_functional_area_array'])) {?>selected<?php }?>>Project
                                      Management</option> </select>
                                      </div>
                                      
                                      
                                      <div class="form-group">
                                      <label for="">Industry Type<span class="text-danger">*</span></label>
                                      <select class="industry-type jobIndustryInput" name="industrytype"
                                        multiple="multiple" style="width: 100% !important;">
                                        
                                        <option value="IT" <?php if (in_array('IT',$_smarty_tpl->tpl_vars['jobDetail']->value['job_industry_array'])) {?>selected<?php }?>>IT</option>
                                        <option value="Software" <?php if (in_array('Software',$_smarty_tpl->tpl_vars['jobDetail']->value['job_industry_array'])) {?>selected<?php }?>>Software</option>
                                        <option value="Other" <?php if (in_array('Other',$_smarty_tpl->tpl_vars['jobDetail']->value['job_industry_array'])) {?>selected<?php }?>>Other</option>
                                      </select>
                                </div>
                          </div>
                          <div class="col-sm-12  my-2 py-2 bg-white p-4" style="border: 1px solid #0000003d;">
                            <div class="form-group">
                              <label for="numberofopening jobNumberInput">Number of opening<span class="text-danger">*</span></label>

                              <input type="text" class="form-control" id="numberofopening"
                                placeholder="enter number of opening" value="<?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['total_openings'];?>
" required />
                            </div>
                    
                              <div class="form-row">
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label for="startDate">Deadline Date<span class="text-danger">*</span></label>
                                    <input type="date" name="somedate" class="form-control jobStartDateInput"
                                      value="<?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['deadline_date'];?>
" required />
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                     <div class="form-group">
                              <label for="numberofopening">Salary<span class="text-danger">*</span></label>
                              <input type="number" pattern="\d*" maxlength="10" class="form-control jobSalaryInput"
                                value="<?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['salary_provide'];?>
" placeholder="enter offer salary" required />
                            </div> 
                                </div>
                              </div>
                    </div>
                          <div class="col-sm-12 bg-white my-2 py-2 text-center " style="border: 1px solid #0000003d;">
                            <button class="btn witBtn px-5 updateJob">
                              UPDATE
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
 type="text/javascript" src="<?php echo base_url();?>
/js/editJob.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    $(document).ready(function () {
      $('.js-example-basic-multiple').select2({
        tags: true,
        placeholder: 'Enter Required Qualification',
        allowClear: true
      });
      $('.skills-required-for-job').select2({
        tags: true,
        placeholder: 'Enter Required Skills',
        allowClear: true
      });
      $('.functional-area').select2({
        tags: true,
        placeholder: 'Enter Required functional Area',
        allowClear: true
      });
      $('.industry-type').select2({
        tags: true,
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
       $('.logOutBtn').on('click', function() {
    var baseUrl = $('.baseUrl').attr('baseUrl');

    $.ajax({
      url: 'index.php?job_portal_dashboard=true',
      dataType: 'json',
      type: 'post',
      data: {
        logOut: true
      },
      success: function(response) {
        window.location = baseUrl;
      }
    });
  });
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
