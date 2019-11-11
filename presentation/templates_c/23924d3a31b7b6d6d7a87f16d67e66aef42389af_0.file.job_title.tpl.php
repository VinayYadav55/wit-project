<?php
/* Smarty version 3.1.33, created on 2019-10-23 12:50:49
  from 'C:\xampp\htdocs\womenintech\presentation\templates\job_title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db0308954dc96_61093419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23924d3a31b7b6d6d7a87f16d67e66aef42389af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\job_title.tpl',
      1 => 1569929174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db0308954dc96_61093419 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),1=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\libs\\smarty\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
echo smarty_function_load_presentation_object(array('filename'=>'postedJob','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);
$_smarty_tpl->_assignInScope('job', $_smarty_tpl->tpl_vars['obj']->value->JobIdDetails);?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=UA-147066526-1"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-147066526-1');
  <?php echo '</script'; ?>
>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="<?php echo base_url();?>
/images/wit-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/job_title.css?v=<?php echo jsversion();?>
" />
  <title>WiT | JOB PROFILE DETAILS</title>

</head>

<body>
  <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="loader"></div>
  <div class="jobtitleTopStyles">
    <div class="container-fluid bg-light p-0">
      <input type="hidden" class="applicant_id" value=<?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['id'];?>
>
      <div class="column  p-0 bg-white stiktoTopBtns">
        <div class="col-md-12 py-2 jobTitleCont">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 text-center py-0 py-sm-1">
              <?php if ($_smarty_tpl->tpl_vars['obj']->value->userStatusForJob['isRegisteredForJob'] == 0) {?>
              <?php if (!$_smarty_tpl->tpl_vars['userSessionDetail']->value) {?>
              <a href="<?php echo base_url();?>
/login" class="btn witBtn registerButton">
                Register
              </a>
              <?php } else { ?>
              <a href="<?php echo base_url();?>
/candidate_registration" class="btn witBtn registerButton">
                Register
              </a>
              <?php }?>
              <?php } else { ?>
              <?php }?>
              <div class="btn witBtn applyButton ml-5">Apply</div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mb-3">
        <div class="row my-3 bg-white p-4">
          <div class="col-md-2">
            <div class="speakerImgDivHome p-2" style="border: 1px solid #ded4d4;">
              <div class="imageContainerSpeakerHome">
                <img class="main-image-speakerHome" src="<?php echo base_url();?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['company_logo'];?>
" />
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="text-capitalize pt-2" job_id="<?php echo $_smarty_tpl->tpl_vars['job']->value['job_id'];?>
">
              <h5><?php echo $_smarty_tpl->tpl_vars['job']->value['job_title'];?>
</h5>
            </div>
            <div class="pt-2">
              <h6 class="text-capitalize"><?php echo $_smarty_tpl->tpl_vars['job']->value['company_name'];?>
</h6>
            </div>
            <div class="pt-2"><i class="fas fa-map-marker"></i> <?php echo $_smarty_tpl->tpl_vars['job']->value['job_location'];?>

            </div>
          </div>

          <div class="col-md-2 text-center">
            <div class="mt-4">
              <p class="postedDate">Posted on -<br><span class="text-success"><?php echo $_smarty_tpl->tpl_vars['job']->value['posted_date'];?>
</span> </p>
              <button class="btn btn-block totalApplicant">
                <?php echo $_smarty_tpl->tpl_vars['job']->value['applicant_count'];?>
 Applicants
              </button>
            </div>
          </div>
        </div>

        <div class="row my-3 ">
          <div class="col-sm-7 col-md-7 col-lg-7 bg-white">
            <h4 class="pt-3 px-3">Job Description</h4>
            <hr />
            <div class="px-5">
              <div><b>About the job</b></div>
              <div class="">
                <?php echo $_smarty_tpl->tpl_vars['job']->value['job_description'];?>

              </div>
            </div>
            <div class="px-5 py-4">
              <h6 class="font-weight-bold">Education</h6>
              <p> <?php echo $_smarty_tpl->tpl_vars['job']->value['qualifications'];?>
</p>
              <h6 class="font-weight-bold">Work Experience</h6>
              <p> <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['job']->value['work_experience']);?>
 <?php if ($_smarty_tpl->tpl_vars['job']->value['work_experience'] == 'freshers') {?>
                <?php } else { ?> Years <?php }?></p>
              <h6 class="font-weight-bold">Workplace Location</h6>
              <p><?php echo $_smarty_tpl->tpl_vars['job']->value['job_location'];?>
</p>
            </div>
          </div>
          <div class="col-md-1 col-sm-1 col-lg-1"></div>
          <div class="col-sm-4 col-md-4 col-lg-4 bg-white" style="word-break: break-word;">
            <div class="column py-4">
              <div class="col-md-12">
                <h6 class="criteriaHeading">Job Type</h6>
                <p class="criteria"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_type'];?>
</p>
              </div>
              <hr />
              <div class="col-md-12">
                <h6 class="criteriaHeading">Functional Area</h6>
                <p class="criteria"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_functional_area'];?>
</p>
              </div>
              <hr />
              <div class="col-md-12">
                <h6 class="criteriaHeading">Industry</h6>
                <p class="criteria"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_industry_type'];?>
</p>
              </div>
              <hr />
              <div class="col-md-12">
                <h6 class="criteriaHeading">Education Required</h6>
                <p class="criteria"><?php echo $_smarty_tpl->tpl_vars['job']->value['qualifications'];?>
</p>
              </div>
              <hr />
              <div class="col-md-12">
                <h6 class="criteriaHeading">Experience Required</h6>
                <p class="criteria"> <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['job']->value['work_experience']);?>
 <?php if ($_smarty_tpl->tpl_vars['job']->value['work_experience'] == 'freshers') {?> <?php } else { ?>
                  Years <?php }?></p>
              </div>
              <hr />
              <div class="col-md-12">
                <h6 class="criteriaHeading">Skills Required</h6>
                <p class="criteria"><?php echo $_smarty_tpl->tpl_vars['job']->value['required_skills'];?>
</p>
              </div>
              <hr />
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
/js/jobApply.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
