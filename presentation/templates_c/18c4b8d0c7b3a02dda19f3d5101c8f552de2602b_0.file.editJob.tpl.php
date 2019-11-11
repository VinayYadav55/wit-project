<?php
/* Smarty version 3.1.33, created on 2019-08-21 20:11:05
  from 'C:\xampp\htdocs\djdfbf\sanjeev\presentation\templates\editJob.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5d893914b5e9_22797791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18c4b8d0c7b3a02dda19f3d5101c8f552de2602b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\templates\\editJob.tpl',
      1 => 1566298242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5d893914b5e9_22797791 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),1=>array('file'=>'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\libs\\smarty\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
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
  <title>WIT|PORTAL|DASHBOARD</title>
</head>

<body>
  <header class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
    <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
      data-target="#sidebar">
      <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
    </a>
    <a class="logo" href="#">WiT</a>
    <button class="navbar-toggler navbar-icon waves-effect waves-light" type="button" data-toggle="collapse"
      data-target="#navbarNav"></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav navbar-toolbar ml-auto">
        <li class="text-white mr-md-3">
          <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['companySessionDetail']->value['company_name']);?>

        </li>
        <li>
          <div class="btn-group">
            <button type="button " class="btn rounded-circle dropdown-toggle btn-primary" data-toggle="dropdown"
              data-display="static" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-tie" style="font-size: 20px;"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-right">
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
              <div class="dropdown-divider"></div>
              <div class="logOutBtn pl-4">
                Logout
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </header>
  <div id="sidebar" class="sidenav sidenav-fixed expand-lg" style="border-right:1px solid gray;">
    <div class="mt-5 pt-5 pl-3">
      <nav class="nav flex-column nav-pills">
        <a class="nav-link active"
          href="<?php echo base_url();?>
/job_portal_dashboard/company_id=<?php echo $_smarty_tpl->tpl_vars['companySessionDetail']->value['id'];?>
">Dashboard</a>
        <a class="nav-link" href="<?php echo base_url();?>
/post_jobs">Post Jobs</a>
      </nav>
    </div>
  </div>



  <!-- ******************************************* -->

  <div class="docs-content-wrapper border border-dark">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="container-fluid pb-5">
            <div class="row">
              <div class="col-sm-12 bg-light" style="position: sticky; top:64px; z-index:200;">
                <h4 class="">Edit Jobs</h4>
              </div>
              <div class="col-sm-2 "></div>
              <div class="col-sm-8">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <form>
                        <input type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['job_id'];?>
 class="job_id">
                        <div class="col-sm-12 py-2 bg-light" style="border: 1px solid #8080802b;">
                          <div class="form-group">
                            <label for="jobtitle">Job Title/ Designation</label>
                            <input type="text" class="form-control jobtitle" id="jobtitle" placeholder="" required
                              value="<?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['job_title'];?>
" />
                          </div>

                          <div class="form-group">
                            <label for="sel1">Qualification</label>
                            <select class="js-example-basic-multiple qualificationInput" name="qualification"
                              multiple="multiple" style="width: 100% !important;">
                              <option value="10" <?php if (in_array('10',$_smarty_tpl->tpl_vars['jobDetail']->value['qualificationArray'])) {?>selected<?php }?>>10th
                                </option> <option value="12" <?php if (in_array('12',$_smarty_tpl->tpl_vars['jobDetail']->value['qualificationArray'])) {?>selected<?php }?>>12th </option> <option
                                value="bba" <?php if (in_array('bba',$_smarty_tpl->tpl_vars['jobDetail']->value['qualificationArray'])) {?>selected<?php }?>>BBA
                                </option> <option value="bsc" <?php if (in_array('bsc',$_smarty_tpl->tpl_vars['jobDetail']->value['qualificationArray'])) {?>selected<?php }?>>B. Sc</option> <option
                                value="bca" <?php if (in_array('bca',$_smarty_tpl->tpl_vars['jobDetail']->value['qualificationArray'])) {?>selected<?php }?>>BCA
                                </option> <option value="btech" <?php if (in_array('btech',$_smarty_tpl->tpl_vars['jobDetail']->value['qualificationArray'])) {?>selected<?php }?>>B. Tech</option> <option
                                value="mba" <?php if (in_array('mba',$_smarty_tpl->tpl_vars['jobDetail']->value['qualificationArray'])) {?>selected<?php }?>>MBA
                                </option> <option value="be" <?php if (in_array('be',$_smarty_tpl->tpl_vars['jobDetail']->value['qualificationArray'])) {?>selected<?php }?>>B.E. </option> <option
                                value="mca" <?php if (in_array('mca',$_smarty_tpl->tpl_vars['jobDetail']->value['qualificationArray'])) {?>selected<?php }?>>MCA
                                </option> <option value="mtech" <?php if (in_array('mtech',$_smarty_tpl->tpl_vars['jobDetail']->value['qualificationArray'])) {?>selected<?php }?>>M. Tech</option> <option
                                value="phd" <?php if (in_array('phd',$_smarty_tpl->tpl_vars['jobDetail']->value['qualificationArray'])) {?>selected<?php }?>>PHD
                                </option> </select> </div> <div class="form-group">
                                <label for="">Work Experience</label>
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
                            <label for="">Skills</label>
                            <select class="skills-required-for-job skillsInput" name="skills" multiple="multiple"
                              style="width: 100% !important;">

                              <option value="html" <?php if (in_array('html',$_smarty_tpl->tpl_vars['jobDetail']->value['required_skills_array'])) {?>selected<?php }?>>HTML </option> <option
                                value="css" <?php if (in_array('css',$_smarty_tpl->tpl_vars['jobDetail']->value['required_skills_array'])) {?>selected<?php }?>>CSS
                                </option> <option value="js" <?php if (in_array('js',$_smarty_tpl->tpl_vars['jobDetail']->value['required_skills_array'])) {?>selected<?php }?>>JavaScript </option>
                                <option value="java" <?php if (in_array('java',$_smarty_tpl->tpl_vars['jobDetail']->value['required_skills_array'])) {?>selected<?php }?>>Java </option> <option
                                value="nodejs" <?php if (in_array('nodejs',$_smarty_tpl->tpl_vars['jobDetail']->value['required_skills_array'])) {?>selected<?php }?>>NodeJs </option>
                                <option value="angular2+" <?php if (in_array('angular2',$_smarty_tpl->tpl_vars['jobDetail']->value['required_skills_array'])) {?>selected<?php }?>>Angular2+ </option>
                                <option value="angularjs" <?php if (in_array('angularjs',$_smarty_tpl->tpl_vars['jobDetail']->value['required_skills_array'])) {?>selected<?php }?>>AngularJs </option>
                                <option value="jquery" <?php if (in_array('jquery',$_smarty_tpl->tpl_vars['jobDetail']->value['required_skills_array'])) {?>selected<?php }?>>JQuery </option>
                                <option value="python" <?php if (in_array('python',$_smarty_tpl->tpl_vars['jobDetail']->value['required_skills_array'])) {?>selected<?php }?>>Python </option>
                                <option value="bigdata" <?php if (in_array('bigdata',$_smarty_tpl->tpl_vars['jobDetail']->value['required_skills_array'])) {?>selected<?php }?>>Big Data</option>
                                <option value="datascience" <?php if (in_array('datascience',$_smarty_tpl->tpl_vars['jobDetail']->value['required_skills_array'])) {?>selected<?php }?>>Data Science
                                </option> </select> </div> </div> <div class="col-sm-12 my-2 py-2 bg-light "
                                style="border: 1px solid #8080802b;">
                                <div class="form-group">
                                  <div class="form-row">
                                    <div class="col-sm-4">
                                      <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input cb" id="customSwitch1"
                                          name="companyjobtype" value="full_time" onchange="cbChange(this)" <?php if ($_smarty_tpl->tpl_vars['jobDetail']->value['job_type'] == 'full_time') {?>checked<?php }?> />
                                        <label class="custom-control-label" for="customSwitch1">Full Time</label>
                                      </div>
                                    </div>
                                    <div class="col-sm-4">
                                      <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input cb" id="customSwitch2"
                                          name="companyjobtype" value="part_time" onchange="cbChange(this)" <?php if ($_smarty_tpl->tpl_vars['jobDetail']->value['job_type'] == 'part_time') {?>checked<?php }?> />
                                        <label class="custom-control-label" for="customSwitch2">Part Time</label>
                                      </div>
                                    </div>
                                    <div class="col-sm-4">
                                      <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input cb" id="customSwitch3"
                                          name="companyjobtype" value="work_from_home" onchange="cbChange(this)" <?php if ($_smarty_tpl->tpl_vars['jobDetail']->value['job_type'] == 'work_from_home') {?>checked<?php }?> />
                                        <label class="custom-control-label" for="customSwitch3">Work From Home</label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="">Job Location</label>
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
                                  <label for="">Functional Area</label>
                                  <select class="functional-area jobfunctionalareaInput" name="functionalarea"
                                    multiple="multiple" style="width: 100% !important;">

                                    <option value="Software Development" <?php if (in_array('Software
                                      Development',$_smarty_tpl->tpl_vars['jobDetail']->value['job_functional_area_array'])) {?>selected<?php }?>>Software
                                      Development</option> <option value="Management" <?php if (in_array('Management',$_smarty_tpl->tpl_vars['jobDetail']->value['job_functional_area_array'])) {?>selected<?php }?>>Management
                                      </option> <option value="Project Management" <?php if (in_array('Project
                                      Management',$_smarty_tpl->tpl_vars['jobDetail']->value['job_functional_area_array'])) {?>selected<?php }?>>Project
                                      Management</option> </select> </div> <div class="form-group">
                                      <label for="">Industry Type</label>
                                      <select class="industry-type jobIndustryInput" name="industrytype"
                                        multiple="multiple" style="width: 100% !important;">
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['job_industry_type'];?>
" selected>
                                          <?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['job_industry_type'];?>

                                        </option>
                                        <option value="IT">IT</option>
                                        <option value="Software">Software</option>
                                        <option value="Other">Other</option>
                                      </select>
                                </div>
                          </div>
                          <div class="col-sm-12  my-2 py-2 bg-light" style="border: 1px solid #8080802b;">
                            <div class="form-group">
                              <label for="numberofopening jobNumberInput">Number of opening</label>

                              <input type="text" class="form-control" id="numberofopening"
                                placeholder="enter number of opening" value="<?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['total_openings'];?>
" required />
                            </div>
                            <div class="form-group">
                              <div class="form-row">
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label for="startDate">Deadline Date</label>
                                    <input type="date" class="form-control jobStartDateInput"
                                      value="<?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['deadline_date'];?>
" required />
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="numberofopening">Salary</label>
                              <input type="number" pattern="\d*" maxlength="10" class="form-control jobSalaryInput"
                                value="<?php echo $_smarty_tpl->tpl_vars['jobDetail']->value['salary_provide'];?>
" placeholder="enter offer salary" required />
                            </div>
                          </div>
                          <div class="col-sm-12 bg-light  my-2 py-2 text-center " style="border: 1px solid #8080802b;">
                            <button class="btn  btn-secondary updateJob">
                              UPDATE
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
 type="text/javascript" src="<?php echo base_url();?>
/js/editJob.js"><?php echo '</script'; ?>
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
</body>

</html><?php }
}
