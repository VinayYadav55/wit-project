<?php
/* Smarty version 3.1.33, created on 2019-08-26 07:50:14
  from '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/job_title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d638f36c691a3_66428499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e87cdc0b0776db4acb4be67db5de9430030a3cbd' => 
    array (
      0 => '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/job_title.tpl',
      1 => 1566805793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d638f36c691a3_66428499 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/vipananwebtest/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'postedJob','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);
$_smarty_tpl->_assignInScope('job', $_smarty_tpl->tpl_vars['obj']->value->JobIdDetails);?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"
    /> -->

  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/job_title.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
  <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/29bef62cc9.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/libs/jquery/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
/js/jobApply.js"><?php echo '</script'; ?>
>
  <title>Home|WIT</title>
</head>

<body>
  <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="overlay-loader-div">
    <img src="<?php echo base_url();?>
/images/pinkloader.gif" width="100" height="100" class="overlay-img-loader" alt="" />
  </div>
  <div class="container-fluid bg-light p-0">
    <input type="hidden" class="applicant_id" value=<?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['id'];?>
>
    <div class="column  p-0">
      <div class="col-md-12 py-2 jobTitleCont">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-lg-6 text-center">
          </div>
          <div class="col-md-6 col-sm-6 col-lg-6 text-center">
            <div class="row">
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
    </div>
    <div class="container mb-3">
      <div class="row my-3 bg-white">
        <div class="col-md-10 py-2">
          <div class="row">
             
            <div class="col-md-2">
                
              <img class="" src="<?php echo base_url();?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['company_logo'];?>
" height="150" width="150" />
            </div>
            <div class="col-md-10 pt-4">
                 <p class="postName text-capitalize pt-2" job_id="<?php echo $_smarty_tpl->tpl_vars['job']->value['job_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_title'];?>
</p>
              <div class="companyName py-1">
                <h6 class="text-capitalize"><?php echo $_smarty_tpl->tpl_vars['job']->value['company_name'];?>
</h6>
              </div>
              <ul class="p-0 m-0 jobDescList">
                <li><i class="fas fa-map-marker"></i> <?php echo $_smarty_tpl->tpl_vars['job']->value['job_location'];?>
,   <?php echo $_smarty_tpl->tpl_vars['job']->value['office_address'];?>
</li>
                <li>
                 
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-2 py-5">
          <div class="column">
            <div class="col-md-12 p-0">
              <p class="postedDate">POSTED ON - <?php echo $_smarty_tpl->tpl_vars['job']->value['posted_date'];?>
</p>
            </div>
            <div class="col-md-12 p-0">
              <button class="btn btn-block totalApplicant">
                <?php echo $_smarty_tpl->tpl_vars['job']->value['applicant_count'];?>
 Applicants
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-3 ">
        <div class="col-sm-7 col-md-7 col-lg-7 bg-white p-0 ">
          <div class="column">
            <div class="col-md-12">
              <h4 class="py-2">Job Description</h4>
            </div>
            <hr />
            <div class="col-md-12">
              <ul>
                  <li><b>About the job</b></li>
                <li class="pb-4">
                  <?php echo $_smarty_tpl->tpl_vars['job']->value['job_description'];?>

                </li>

                <li style="list-style: none;">
                 <b>EDUCATION</b>
                </li>

                <li class="pb-4"><?php echo $_smarty_tpl->tpl_vars['job']->value['qualifications'];?>
</li>

                <li style="list-style: none;">
                  <b>WORK EXPERIENCE</b>
                </li>
                <li class="pb-4">
                  <?php echo $_smarty_tpl->tpl_vars['job']->value['work_experience'];?>

                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-1 col-sm-1 col-lg-1"></div>
        <div class="col-sm-4 col-md-4 col-lg-4 bg-white">
          <div class="column py-4">
            <div class="col-md-12">
              <h6>Job Type</h6>
              
              <div class=""><img src="" /><span><?php echo $_smarty_tpl->tpl_vars['job']->value['job_type'];?>
</span></div>
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
              <p class="criteria"><?php echo $_smarty_tpl->tpl_vars['job']->value['work_experience'];?>
</p>
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
 src="https://cdn.jsdelivr.net/npm/sweetalert2@8"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/promise-polyfill"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
