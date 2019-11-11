<?php
/* Smarty version 3.1.33, created on 2019-11-06 11:26:31
  from 'C:\xampp\htdocs\womenintech\presentation\templates\user_applied_specific_job_detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc29fd7726fc0_87871497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b00e939d255dcfa9c4583d94315a6a1a66657fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\user_applied_specific_job_detail.tpl',
      1 => 1573035989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:dashheader.tpl' => 1,
  ),
),false)) {
function content_5dc29fd7726fc0_87871497 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'userDashboard','assign'=>'obj'),$_smarty_tpl);?>
 <?php $_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);
echo smarty_function_load_presentation_object(array('filename'=>'postedJob','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender('file:dashheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_assignInScope('job', $_smarty_tpl->tpl_vars['obj']->value->JobIdDetails);?>

  <div class="docs-content-wrapper">
    <div class="container-fluid py-5"  style="background-color: #ececec;">
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
            <div class="column">
              <div class="col-md-12">
                <h4 class="pt-3">Job Description</h4>
              </div>
              <hr />
              <div class="col-md-12">
                <ul>
                    <li class=""><b>About the job</b></li>
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
                  <li>
                    <?php echo $_smarty_tpl->tpl_vars['job']->value['work_experience'];?>
 Years
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-1 col-sm-1 col-lg-1"></div>
          <div class="col-sm-4 col-md-4 col-lg-4 bg-white">
            <div class="column py-4">
              <div class="col-md-12">
                <h6 class="py-2">Job Type</h6>
                
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
 Years</p>
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
  </div>

<?php }
}
