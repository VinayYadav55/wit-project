<?php
/* Smarty version 3.1.33, created on 2019-08-22 12:21:31
  from 'C:\xampp\htdocs\djdfbf\sanjeev\presentation\templates\job_title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5e6cab6cde22_10394500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de50d24337879adccaf7f1c3056e74c3816aeb37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\templates\\job_title.tpl',
      1 => 1566469290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d5e6cab6cde22_10394500 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
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
/images/pinkloader.gif" class="overlay-img-loader" alt="" />
  </div>
  <div class="container-fluid bg-light p-0">
    <input type="hidden" class="applicant_id" value=<?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['id'];?>
>
    <div class="column bg-white p-0">
      <div class="col-md-12 py-2 jobTitleCont">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-lg-6 text-center">
            <p class="postName text-capitalize" job_id="<?php echo $_smarty_tpl->tpl_vars['job']->value['job_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_title'];?>
</p>
          </div>
          <div class="col-md-6 col-sm-6 col-lg-6 text-center">
            <div class="row">
              <a href="<?php echo base_url();?>
/candidate_registration" class="btn witBtn registerButton">
                Register
              </a>
              <div class="btn witBtn applyButton ml-5">Apply</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-3">
      <div class="row my-3 bg-white">
        <div class="col-md-10 py-5">
          <div class="row">
            <div class="col-md-2">
              <img class="" src="<?php echo base_url();?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['company_logo'];?>
" height="100px" width="100px" />
            </div>
            <div class="col-md-10">
              <div class="companyName py-2">
                <h4></h4>
              </div>
              <ul class="p-0 m-0 jobDescList">
                <li><i class="fas fa-map-marker"></i> <?php echo $_smarty_tpl->tpl_vars['job']->value['job_location'];?>
</li>
                <li>
                  <?php echo $_smarty_tpl->tpl_vars['job']->value['office_address'];?>

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
              <h4>Job Description</h4>
            </div>
            <hr />
            <div class="col-md-12">
              <ul>
                <li>
                  <?php echo $_smarty_tpl->tpl_vars['job']->value['job_description'];?>

                </li>

                <li style="list-style: none;">
                  <h5>EDUCATION</h5>
                </li>

                <li><?php echo $_smarty_tpl->tpl_vars['job']->value['qualifications'];?>
</li>

                <li style="list-style: none;">
                  <h5>WORK EXPERIENCE</h5>
                </li>
                <li>
                  <?php echo $_smarty_tpl->tpl_vars['job']->value['work_experience'];?>

                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-1 col-sm-1 col-lg-1"></div>
        <div class="col-sm-4 col-md-4 col-lg-4 bg-white">
          <div class="column">
            <div class="col-md-12">
              <h4>Job Type</h4>
              <hr />
              <div class=""><img src="" /><span><?php echo $_smarty_tpl->tpl_vars['job']->value['job_type'];?>
</span></div>
            </div>

            <div class="col-md-12">
              <p class="criteriaHeading">Functional Area</p>
              <p class="criteria"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_functional_area'];?>
</p>
            </div>
            <hr />
            <div class="col-md-12">
              <p class="criteriaHeading">Industry</p>
              <p class="criteria"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_industry_type'];?>
</p>
            </div>
            <hr />
            <div class="col-md-12">
              <p class="criteriaHeading">Education Required</p>
              <p class="criteria"><?php echo $_smarty_tpl->tpl_vars['job']->value['qualifications'];?>
</p>
            </div>
            <hr />
            <div class="col-md-12">
              <p class="criteriaHeading">Experience Required</p>
              <p class="criteria"><?php echo $_smarty_tpl->tpl_vars['job']->value['work_experience'];?>
</p>
            </div>
            <hr />
            <div class="col-md-12">
              <p class="criteriaHeading">Skills Required</p>
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
