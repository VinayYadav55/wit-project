<?php
/* Smarty version 3.1.33, created on 2019-10-07 08:53:04
  from '/home2/labiknmy/public_html/womenintech/presentation/templates/job_application_full_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9afcf0614735_59660987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1341111a2c1e8f94552d25e17af4db2a691f26a' => 
    array (
      0 => '/home2/labiknmy/public_html/womenintech/presentation/templates/job_application_full_details.tpl',
      1 => 1570438338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9afcf0614735_59660987 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/womenintech/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),1=>array('file'=>'/home2/labiknmy/public_html/womenintech/libs/smarty/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),2=>array('file'=>'/home2/labiknmy/public_html/womenintech/libs/smarty/plugins/function.counter.php','function'=>'smarty_function_counter',),));
echo smarty_function_load_presentation_object(array('filename'=>'jobCandidateList','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('companySessionDetail', $_SESSION['companySession']);?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <link rel="shortcut icon" href="<?php echo base_url();?>
/images/wit-favicon.ico" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css"
    integrity="sha256-PIRVsaP4JdV/TIf1FR8UHy4TFh+LiRqeclYXvCPBeiw=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />

  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
    <link href="<?php echo base_url();?>
/styles/employeer_dashboard.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
  <title>DASHBOARD | APPLICANT DETAILS</title>
</head>

<body>
      <input type="hidden" class="baseUrl" baseUrl=<?php echo base_url();?>
/employer>
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
/<?php echo $_smarty_tpl->tpl_vars['companySessionDetail']->value['company_logo'];?>
" class="main-image-speaker" alt="" />
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
  <!-- ************************************************ -->
  <div class="docs-content-wrapper" style="background-color: #ececec;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 bg-white" style="position: sticky; top:65px; z-index:200;">
          <h4 class="text-center py-2 stylingLists">
            Detailed View of Application
          </h4>
        </div>
        <?php $_smarty_tpl->_assignInScope('candidateDetail', $_smarty_tpl->tpl_vars['obj']->value->applicantDetails);?>

        <div class="col-sm-12 p-4 stylingLists">
          <div class="bg-white my-2 p-4 " style="border:#8080802b 1px solid">
            <h4 class="text-capitalize py-1"><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['last_name'];?>
</h4>
            <p class="py-1 text-capitalize"><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['resident_address'];?>
</p>
            <p class="py-1"><strong>Email id:</strong> <?php if ($_smarty_tpl->tpl_vars['candidateDetail']->value['contact_email'] != '') {
echo $_smarty_tpl->tpl_vars['candidateDetail']->value['contact_email'];
} else { ?>N/A<?php }?></p>
            <p class="py-1"><strong>Contact: </strong><?php if ($_smarty_tpl->tpl_vars['candidateDetail']->value['contact_phone_no'] != '') {
echo $_smarty_tpl->tpl_vars['candidateDetail']->value['contact_phone_no'];
} else { ?>N/A<?php }?></p>
            <h6 class="py-1">Skills</h6>
            <p class="py-1"><?php if ($_smarty_tpl->tpl_vars['candidateDetail']->value['skill_set'] != '') {
echo $_smarty_tpl->tpl_vars['candidateDetail']->value['skill_set'];
} else { ?>N/A<?php }?></p>
          </div>
          <div class="bg-white my-2 p-4" style="border:#8080802b 1px solid">
            <h5>Resume</h5>
            <div class="row">
              <div class="col-2">
                <b>Education</b>
              </div>
              <div class="col-10">
                <div>
                  <ul>
                      
                    <?php $_smarty_tpl->_assignInScope('aa', $_smarty_tpl->tpl_vars['candidateDetail']->value['educationDetails']);?>

                    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['aa']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_start = min(0, $__section_i_0_loop);
$__section_i_0_total = min(($__section_i_0_loop - $__section_i_0_start), 2);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = $__section_i_0_start; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

                    <li class="py-1">
                      <strong>
                        <?php echo $_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['class'];?>

                        (<?php if ($_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['passingYear'] != '') {
echo $_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['passingYear'];
} else { ?>N/A<?php }?>)</strong>
                    </li>

                    <li class="py-1 text-capitalize">
                      <?php echo $_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['schoolName'];?>

                    </li>
                    <li class="py-1">CGPA/Percentage: <?php if ($_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['percentage'] != '') {
echo $_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['percentage'];
} else { ?>N/A<?php }?></li>
                    <hr>
                    <?php
}
}
?>

                  </ul>

                  <ul>
                    <?php $_smarty_tpl->_assignInScope('bb', $_smarty_tpl->tpl_vars['candidateDetail']->value['educationDetails']);?>
                    <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['aa']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_start = min(2, $__section_i_1_loop);
$__section_i_1_total = min(($__section_i_1_loop - $__section_i_1_start), 3);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = $__section_i_1_start; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <?php if ($_smarty_tpl->tpl_vars['bb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['course'] != '') {?>
                    <li class="py-1">
                      <strong><?php echo $_smarty_tpl->tpl_vars['bb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['course'];?>
(<?php echo $_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Year_of_Complition'];?>
)</strong>
                    </li>
                    <li class="py-1 text-capitalize">
                      <?php echo $_smarty_tpl->tpl_vars['bb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['collegeName'];?>

                    </li>
                    <li class="py-1">
                      Percentage/ CGPA/ GPA: <?php echo $_smarty_tpl->tpl_vars['bb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['percentage'];?>

                    </li>
                    
                    <hr>
                    <?php }?>
                    <?php
}
}
?>
                  </ul>

                </div>

              </div>
              <div class="col-2"><b>Previous Project</b></div>
              <div class="col-10">
                <ul>
                  <?php $_smarty_tpl->_assignInScope('previousProject', $_smarty_tpl->tpl_vars['candidateDetail']->value['projectDetails']);?>
                  <?php echo smarty_function_counter(array('start'=>0,'print'=>false),$_smarty_tpl);?>

                  <?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['previousProject']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

                  <li class="py-1"><strong>Project-<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</strong></li>
                  <?php if ($_smarty_tpl->tpl_vars['previousProject']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['project_title']) {?>
                  <li class="py-1 text-capitalize"><strong><?php echo $_smarty_tpl->tpl_vars['previousProject']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['project_title'];?>

                      (<?php echo $_smarty_tpl->tpl_vars['previousProject']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_of_completion'];?>
)</strong></li>
                  <li class="py-1"><?php echo $_smarty_tpl->tpl_vars['previousProject']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['project_description'];?>
</li>
                  <hr><?php } else { ?>N/A
                  <?php }?>
                  <?php
}
}
?>
                </ul>

                </ul>
              </div>
              <div class="col-2"><b>Previous Jobs</b></div>
              <div class="col-10">
                <ul>
                  <?php $_smarty_tpl->_assignInScope('previousJobs', $_smarty_tpl->tpl_vars['candidateDetail']->value['previousJobDetails']);?>
                  <?php echo smarty_function_counter(array('start'=>0,'print'=>false),$_smarty_tpl);?>


                  <?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['previousJobs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

                  <!-- <li class="py-1"><strong></strong></li> -->
                  <?php if ($_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['designantion'] != '') {?>
                  <li class="text-capitalize"><strong><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
-<?php echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['designantion'];?>

                      (<?php echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['join_date'];?>

                      -<?php echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['end_date'];?>
)</strong></li>
                  <li class="py-1 text-capitalize"><?php echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['organization'];?>
</li>
                  <li><?php echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['description'];?>
</li>
                  <hr>
                  <?php } else { ?>
                  N/A
                  <?php }?>
                  <?php
}
}
?>
                </ul>
              </div>
              <div class="col-2"><b>Currently Working</b></div>
              <div class="col-10">
                  <?php if ($_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_name'] != '') {?>
                <ul>
                  <li class="py-1"><b>Company Name</b></li>
                  <li class="py-1 text-capitalize">
                    <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_name'];?>

                  </li>
                  <li class="py-1"><b>Desginantion</b></li>
                  <li class="py-1  text-capitalize">
                    <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_designation'];?>

                  </li>
                 <!-- <li class="py-1"><b>Join Date</b></li>
                  <li class="py-1">
                    <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date'];?>

                  </li>-->
                  <li class="py-1"><b>Current Salary</b></li>
                  <li class="py-1"><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_salary'];?>
 INR/anum</li>
                  <li class="py-1"><b>About The Role</b></li>
                  <li class="py-1">
                    <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_job_descripton'];?>

                  </li>
                  <hr>
                </ul>
                <?php } else { ?>
                <ul>
                    <li><b>Not Working</b></li>
                </ul>
                 
                <?php }?>
              </div>
              <?php if ($_smarty_tpl->tpl_vars['candidateDetail']->value['resume_link']) {?>
              <div class="col-sm-4 offset-sm-4  text-center">
                <a class="text-white py-2 px-5 my-4 witBtn"
                  href="<?php echo base_url();?>
/job_application_full_details/candidate_id=<?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['id'];?>
?file_name=<?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['resume_link'];?>
">Download
                  Resume</a>
              </div>
              <?php }?>

              <!-- <div class="col-2"><b>Contact Details</b></div>
              <div class="col-10">
                <ul>
                  <li class="py-1">Email id:<?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['contact_email'];?>
</li>
                  <li class="py-1">Contact:<?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['contact_phone_no'];?>
</li>
                </ul>
              </div> -->
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
 src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"
    integrity="sha256-kQ6DQtOnXtjGYnAEMZQjpsioC75ND0K9I8MyjtdLCyk=" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
/js/job_portal_dashboard.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/smoothscroll.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
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
</body>

</html><?php }
}
