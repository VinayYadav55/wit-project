<?php
/* Smarty version 3.1.33, created on 2019-10-22 11:01:31
  from '/home2/labiknmy/public_html/womenintech/presentation/templates/user_view_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5daee18bd6ae90_95436251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3352824d222d23c8a32ec7dcf4fd1680604dadad' => 
    array (
      0 => '/home2/labiknmy/public_html/womenintech/presentation/templates/user_view_profile.tpl',
      1 => 1571742090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5daee18bd6ae90_95436251 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/womenintech/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),1=>array('file'=>'/home2/labiknmy/public_html/womenintech/libs/smarty/plugins/function.counter.php','function'=>'smarty_function_counter',),));
$_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);
echo smarty_function_load_presentation_object(array('filename'=>'jobCandidateList','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('candidateDetail', $_smarty_tpl->tpl_vars['obj']->value->applicantDetails);?>
<!DOCTYPE html>
<html lang="en">

<head>
        <?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=UA-147066526-1"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
 window.dataLayer = window.dataLayer || [];
 function gtag(){
     dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-147066526-1');
<?php echo '</script'; ?>
>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="<?php echo base_url();?>
/images/wit-favicon.ico" type="image/x-icon">
  <title>DASHBOARD | VIEW PROFILE</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
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
/styles/user_dashboard.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
   <link href="<?php echo base_url();?>
/styles/user_view_profile.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
  <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/libs/jquery/jquery.min.js"><?php echo '</script'; ?>
>
</head>

<body>
  <input type="hidden" baseUrl=<?php echo base_url();?>
 class="baseUrl">
  <header class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
    <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
      data-target="#sidebar">
      <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
    </a>
    <a class="logo bg-white" href="<?php echo base_url();?>
"><img src="images/witlogo-dashboard-logo.jpeg" width="100" height="60" alt="wit-logo" /></a>
    <button class="navbar-toggler navbar-icon waves-effect waves-light" type="button" data-toggle="collapse"
      data-target="#navbarNav"></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav navbar-toolbar ml-auto">
        <li>
          <div class="nav-link waves-effect waves-light logOutBtn">LOGOUT</div>
        </li>
      </ul>
    </div>
  </header>
  <div id="sidebar" class="sidenav sidenav-fixed expand-lg" style="border-right:1px solid gray;">
    <div class="userImg pt-5 mt-3"  style="box-shadow:1px 1px 1px 1px gray;">
      <div class="speakerImgDiv">
        <div class="imageContainerSpeaker">
          <img src="images/avtar_women.png" class="main-image-speaker rounded-circle" alt="" />
        </div>
      </div>
      <h5 class="text-center p-3 text-capitalize"><?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['last_name'];?>
</h5>
    </div>
    <div class="mt-3  pl-3">
      <nav class="nav flex-column nav-pills">
        <a class="nav-link" href="<?php echo base_url();?>
/user_dashboard">Dashboard</a>
        <a class="nav-link" href="<?php echo base_url();?>
/applied_jobs">Applied jobs</a>
        <a class="nav-link active" href="<?php echo base_url();?>
/user_view_profile">View Profile</a>
        <a class="nav-link" href="<?php echo base_url();?>
/user_edit_profile">Edit Profile</a>
      </nav>
    </div>
  </div>

  <div class="docs-content-wrapper wordingIssuesStyle forparaStyle" style="word-break:break-word;">
    <div class="container-fluid" style="background-color: #ececec;">
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-5 my-3 bg-white  p-4" style="border: 1px solid #d2cccc; border-radius:1rem; ">

          <h5>About Me</h5>
          <hr class=" bg-secondary align-self-start" />
          <ul>
             <li> <h5>Name</h5>
          <p class="text-capitalize"><?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['last_name'];?>
</p>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" /></li>
             <li>  <h5>Email</h5>
          <p><?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['email_id'];?>
 </p>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" /></li>
             <li>   <h5>Contact</h5>
          <p>+91-<?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['phone_no'];?>
</p></li>
          </ul>
        </div>
        <div class="col-sm-5 my-3 ml-3 bg-white p-4" style="border: 1px solid #d2cccc; border-radius:1rem; ">
             <h5>Preferences</h5>
          <hr class=" bg-secondary align-self-start" />
            <ul>
                <li> <h5>Prefer City</h5>
          <p><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['prefered_city'];?>
</p>
           <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
          </li>
          <li>  <h5>Prefer job type</h5>
         
          <p class="text-capitalize"><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['prefered_job_types'];?>
</p> <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" /></li>
          <li>
          <h5>Preferred functional Area</h5>
          <p><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['functional_area'];?>
</p> <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" /></li>
          <li> <h5>Preferred Industry Type</h5>
          <p><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['industry_type'];?>
</p></li>
            </ul>
        </div>
        <div class="col-sm-1"></div>
      </div>
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-5 my-3  p-0">
          <div class="skills p-4 bg-white" style="border: 1px solid #d2cccc;border-radius:1rem; ">
            <h5>Skills</h5>
            <hr class="bg-secondary" />
            <ul>
                <li> <p><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['skill_set'];?>
</p></li>
            </ul>
           
          </div>
          <div class="experirnce p-4 my-2 bg-white" style="border: 1px solid #d2cccc; border-radius:1rem; ">
            <h5>Experience</h5>
            <hr class="bg-secondary" />
            <ul>
                <li>  <p><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['experience'];?>
 year</p></li>
            </ul>
          
          </div>
          <div class="extras p-4 bg-white" style="border: 1px solid #d2cccc;border-radius:1rem; ">
            <h5>Current Employment</h5>
            <hr class="bg-secondary" />
            <ul>
              <li class="py-1"><b>Company Name</b></li>
              <li class="py-1 text-capitalize">
                <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_name'];?>

              </li>
              <li class="py-1"><b>Desginantion</b></li>
              <li class="py-1 text-capitalize">
                <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_designation'];?>

              </li>
              <li class="py-1"><b>Join Date</b></li>
              <li class="py-1">
                <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_month'];?>
        <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date'];?>

              </li>
              <li class="py-1"><b> About The Job</b></li>
              <li class="py-1">
                <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_job_descripton'];?>

              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-5 my-3 ml-3 bg-white p-4" style="border: 1px solid #d2cccc;border-radius:1rem; ">
          <h5>Education</h5>
          <hr class="bg-secondary align-self-start" />
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

                (<?php echo $_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['passingYear'];?>
)</strong>
            </li>

            <li class="py-1 text-capitalize">
              <?php echo $_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['schoolName'];?>

            </li>
            <li class="py-1"><b>Percentage / CGPA:</b> <?php echo $_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['percentage'];?>
</li>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
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
            <li class="py-1 text-capitalize">
              <strong><?php echo $_smarty_tpl->tpl_vars['bb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['course'];?>
(<?php echo $_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Year_of_Complition'];?>
)</strong>
            </li>
            <li class="py-1 text-capitalize">
              <?php echo $_smarty_tpl->tpl_vars['bb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['collegeName'];?>

            </li>
            <li class="py-1">
             <b> Percentage/ CGPA/ GPA:</b> <?php echo $_smarty_tpl->tpl_vars['bb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['percentage'];?>

            </li>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
            <?php
}
}
?>
          </ul>

        </div>
        <div class="col-sm-1"></div>
      </div>
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-5 bg-white p-4" style="border: 1px solid #d2cccc;border-radius:1rem; ">
          <h5>Projects</h5>
          <hr class="bg-secondary" />
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
            <li class="py-1 text-capitalize"><strong><?php echo $_smarty_tpl->tpl_vars['previousProject']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['project_title'];?>

                  <?php echo $_smarty_tpl->tpl_vars['previousProject']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_of_completion'];?>
</strong>
            </li>
            <li class="py-1 text-capitalize"><?php if ($_smarty_tpl->tpl_vars['previousProject']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['project_description'] == '') {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['previousProject']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['project_description'];
}?></li>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
            <?php
}
}
?>
          </ul>

        </div>
        <div class="col-sm-5 ml-3 bg-white p-4" style="border: 1px solid #d2cccc;border-radius:1rem; ">
          <h5>Previous Employment</h5>
          <hr class="bg-secondary" />
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
       
            <li class="py-1"><strong>Employment-<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</strong></li>
            <li class="py-1 text-capitalize"><strong><?php if ($_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['designantion'] == '') {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['designantion'];?>
 (<?php echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['join_date'];?>

                -<?php echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['end_date'];?>
)<?php }?></strong></li>
            <li class="py-1 text-capitalize"><?php if ($_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['organization'] == '') {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['organization'];
}?></li>
            <li class="py-1"><?php if ($_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['description'] == '') {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['description'];
}?></li>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
            
            <?php
}
}
?>
            
            
          </ul>
        </div>
        <div class="col-sm-1"></div>
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
  <?php echo '<script'; ?>
>
    $(document).ready(function () {
      $('.logOutBtn').on('click', function () {
        var baseUrl = $('.baseUrl').attr('baseUrl');

        $.ajax({
          url: 'index.php?login=true',
          dataType: 'json',
          type: 'post',
          data: {
            logOut: true
          },
          success: function (response) {
            window.location = baseUrl;
          }
        });
      });
      $('#customFile').on('change', function () {
        var fileName = $(this)
          .val()
          .replace('C:\\fakepath\\', ' ');
        $(this)
          .next('.custom-file-label')
          .html(fileName);
      });
    })
  <?php echo '</script'; ?>
>

</body>

</html><?php }
}
