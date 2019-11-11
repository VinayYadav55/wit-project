<?php
/* Smarty version 3.1.33, created on 2019-11-08 11:36:12
  from 'C:\xampp\htdocs\womenintech\presentation\templates\user_view_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc5451ce91490_12296321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6dcc44d54cfba1848a4aac6207cb23a30ed5997' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\user_view_profile.tpl',
      1 => 1573208482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:dashheader.tpl' => 1,
    'file:dashfooter.tpl' => 1,
  ),
),false)) {
function content_5dc5451ce91490_12296321 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),1=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\libs\\smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
$_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);
echo smarty_function_load_presentation_object(array('filename'=>'jobCandidateList','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('candidateDetail', $_smarty_tpl->tpl_vars['obj']->value->applicantDetails);
$_smarty_tpl->_subTemplateRender('file:dashheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link rel="stylesheet" href="<?php echo base_url();?>
/styles/user_view_profile.css">
  <div class="docs-content-wrapper wordingIssuesStyle forparaStyle" style="word-break:break-word;background-color: #ececec;">
  <?php if ($_smarty_tpl->tpl_vars['userSessionDetail']->value['type'] === 'Candidate') {?>  
  <div class="container">
      <div class="row">
        <div class="col-sm-9">
        <div class="col-12 bg-white my-3 p-2" id="aboutme" style="border: 1px solid #d2cccc; border-radius:0.5rem; ">
          <div class="usrdthead text-white p-2 m-3">About Me</div>
          <ul>
            <li>
              <h6>Name</h6>
              <div class="text-capitalize usrdt"><?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['last_name'];?>
</div>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
            </li>
            <li>
              <h6>Email</h6>
              <div class="usrdt"><?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['email_id'];?>
</div>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
            </li>
            <li>
              <h6>Contact</h6>
              <div class="usrdt">+91-<?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['phone_no'];?>
</div>
            </li>
          </ul>
        </div>
        <div class="col-12 mb-3 bg-white p-2" id="preferences" style="border: 1px solid #d2cccc; border-radius:0.5rem; ">
            <div class="usrdthead text-white p-2 m-3">Preferences</div>
          <ul>
            <li>
              <h6>Prefer City</h6>
              <div class="usrdt"><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['prefered_city'];?>
</div>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
            </li>
            <li>
              <h6>Prefer job type</h6>
              <div class="text-capitalize usrdt"><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['prefered_job_types'];?>
</div>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
            </li>
            <li>
              <h6>Preferred functional Area</h6>
              <div class="usrdt"><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['functional_area'];?>
</div>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
            </li>
            <li>
              <h6>Preferred Industry Type</h6>
              <div class="usrdt"><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['industry_type'];?>
</div>
            </li>
          </ul>
        </div>
        <div class="col-12 mb-3  p-0" id="skills">
          <div class="skills p-2 bg-white" style="border: 1px solid #d2cccc;border-radius:0.5rem; ">
              <div class="usrdthead text-white p-2 m-3">Skills</div>
            <ul>
              <li>
                <div class="usrdt"><?php if ($_smarty_tpl->tpl_vars['candidateDetail']->value['skill_set'] === null) {?>N/A <a class="text-dark usreditprfl" href="<?php echo base_url();?>
/user_edit_profile"><i class="fas fa-pen"></i></a><?php } else {
echo $_smarty_tpl->tpl_vars['candidateDetail']->value['skill_set'];
}?></p>
              </li>
            </ul>

          </div>
          <div class="experirnce p-2 my-2 bg-white" id="exp" style="border: 1px solid #d2cccc; border-radius:0.5rem; ">
              <div class="usrdthead text-white p-2 m-3">Experience</div>
            <ul>
              <li>
                <div class="usrdt"><?php if ($_smarty_tpl->tpl_vars['candidateDetail']->value['experience'] === '') {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['candidateDetail']->value['experience'];?>
 year<?php }?></div>
              </li>
            </ul>

          </div>
          <div class="extras p-2 bg-white" id="currentjob" style="border: 1px solid #d2cccc;border-radius:0.5rem; ">
          <div class="usrdthead text-white p-2 m-3">Current Employment</div>
            <?php if ($_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_name'] !== '') {?>
            <ul>
              <li class="py-1"><b>Company Name</b></li>
              <li class="py-1 text-capitalize">
                <div class="usrdt"><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_name'];?>
</div>
              </li>
              <li class="py-1"><b>Designation</b></li>
              <li class="py-1 text-capitalize">
              <div class="usrdt">  <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_designation'];?>
</div>
              </li>
              <li class="py-1"><b>Join Date</b></li>
              <li class="py-1">
               <div class="usrdt"> <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_month'];?>
 <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date'];?>
</div>
              </li>
              <li class="py-1"><b> About The Job</b></li>
              <li class="py-1">
              <div class="usrdt"> <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_job_descripton'];?>
</div> 
              </li>
            </ul>
            <?php }?>
          </div>
        </div>
        <div class="col-12  mb-3 bg-white p-2" id="edu" style="border: 1px solid #d2cccc;border-radius:0.5rem; ">
            <div class="usrdthead text-white p-2 m-3">Education</div>
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
             <div class="usrdt"> <?php echo $_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['schoolName'];?>
</div>
            </li>
            <li class="py-1"><b>Percentage / CGPA:</b> <div class="usrdt"><?php echo $_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['percentage'];?>
</div></li>
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
            <?php if ($_smarty_tpl->tpl_vars['bb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['course'] !== '') {?>
            <li class="py-1 text-uppercase">
              <strong><?php echo $_smarty_tpl->tpl_vars['bb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['course'];?>
-<?php echo $_smarty_tpl->tpl_vars['bb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Specilization'];?>
(<?php echo $_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Year_of_Complition'];?>
)</strong>
            </li>
            <li class="py-1 text-capitalize">
             <div class="usrdt"><?php echo $_smarty_tpl->tpl_vars['bb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['collegeName'];?>
</div>
            </li>
            <li class="py-1">
              <b> Percentage/ CGPA/ GPA:</b><div class="usrdt"> <?php echo $_smarty_tpl->tpl_vars['bb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['percentage'];?>
</div>
            </li>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
            <?php } else { ?>
            <?php }?>
            <?php
}
}
?>
          </ul>

        </div>
        <div class="col-12 mb-3 bg-white p-2" id="pjct" style="border: 1px solid #d2cccc;border-radius:0.5rem; ">
            <div class="usrdthead text-white p-2 m-3">Projects</div>
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
            <?php if ($_smarty_tpl->tpl_vars['previousProject']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['project_title'] !== '') {?>
            <li class="py-1"><strong>Project-<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</strong></li>
            <li class="py-1 text-capitalize"><div class="usrdt"><?php echo $_smarty_tpl->tpl_vars['previousProject']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['project_title'];?>

               ( <?php echo $_smarty_tpl->tpl_vars['previousProject']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_of_completion'];?>
 )</div>
            </li>
            <li class="py-1 text-capitalize"><div class="usrdt"><?php if ($_smarty_tpl->tpl_vars['previousProject']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['project_description'] == '') {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['previousProject']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['project_description'];
}?></div></li>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
            <?php }?>
            <?php
}
}
?>
          </ul>

        </div>
        <div class="col-12 mb-3 bg-white p-2" id="pemp" style="border: 1px solid #d2cccc;border-radius:0.5rem; ">
            <div class="usrdthead text-white p-2 m-3">Previous Employment</div>
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
            <?php if ($_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['designantion'] !== '') {?>
            <li class="py-1"><strong>Employment-<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</strong></li>
         
            <li class="py-1 text-capitalize"><div class="usrdt"><?php if ($_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['designantion'] == '') {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['designantion'];?>
 (<?php echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['join_date'];?>

                -<?php echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['end_date'];?>
)<?php }?></div></li>
            <li class="py-1 text-capitalize"><div class="usrdt"><?php if ($_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['organization'] == '') {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['organization'];
}?></div></li>
            <li class="py-1"><div class="usrdt text-capitalize"><?php if ($_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['description'] == '') {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['description'];
}?></div></li>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
            <?php } else { ?><span class="usrdt"></span>
            <?php }?>
            <?php
}
}
?>
          </ul>
        </div>
      </div>
      <div class="col-sm-3 d-none d-sm-block">
        <div class="container" style="position: sticky;top: 70px;">
        <div class="row">
          <div class="col-12 bg-white my-2 p-4" style="border: 1px solid #d2cccc;border-radius:0.5rem; ">
           <div class="py-2"> <a href="#aboutme">About</a></div>
           <div class="py-2"> <a href="#preferences">Preference</a></div>
           <div class="py-2"> <a href="#skills">Skills</a></div>
           <div class="py-2"> <a href="#exp">Experience</a></div>
           <div class="py-2"> <a href="#currentjob">Current Employment</a></div>
           <div class="py-2"> <a href="#edu">Education</a></div>
           <div class="py-2"> <a href="#pjct">Projects</a></div>
           <div class="py-2"> <a href="#pemp">Previous Employment</a></div>
          </div>
        </div>
      </div>
      </div></div>
  </div>
  <?php }?>
       



    <?php if ($_smarty_tpl->tpl_vars['userSessionDetail']->value['type'] === 'Mentor') {?>
    <div class="container">
        <div class="row">
          <div class="col bg-white m-3 p-3 mentorListStyles">
            <h5>About Me</h5>
            <hr class=" bg-primary align-self-start" />
            <ul>
              <li>
                <h6>Name</h6>
                <p class="text-capitalize"><?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['last_name'];?>
</p>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
              </li>
              <li>
                <h6>Email</h6>
                <p><?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['email_id'];?>
 </p>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
              </li>
              <li>
                <h6>Contact</h6>
                <p>+91-<?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['phone_no'];?>
</p>
              </li>
            </ul>
          </div>
          <div class="col bg-white m-3 p-3 mentorListStyles">
              <h5>Bio</h5>
              <hr class=" bg-primary align-self-start" />
          </div>
          <div class="w-100"></div>
          <div class="col bg-white m-3 p-3 mentorListStyles">
            <div class="skills p-4 bg-white" style="border: 1px solid #d2cccc;border-radius:0.5rem; ">
              <h5>Skills</h5>
              <hr class="bg-primary" />
              <ul>
                <li>
                  <p><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['skill_set'];?>
</p>
                </li>
              </ul>
            </div>
            <div class="experirnce p-4 my-2 bg-white" style="border: 1px solid #d2cccc; border-radius:0.5rem; ">
              <h5>Experience</h5>
              <hr class="bg-primary" />
              <?php if ($_smarty_tpl->tpl_vars['candidateDetail']->value['experience'] !== null) {?>
              <ul>
                <li>
                  <p><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['experience'];?>
 year</p>
                </li>
              </ul>
              <?php }?>
            </div>
            <div class="extras bg-white p-4 my-2" style="border: 1px solid #d2cccc; border-radius:0.5rem; ">
              <h5>Current Employment</h5>
              <hr class="bg-primary" />
              <?php if ($_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_name'] !== null || $_smarty_tpl->tpl_vars['candidateDetail']->value['current_designation'] !== null) {?>
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
                <li class="py-1"><b>About The Job</b></li>
                <li class="py-1">
                  <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_job_descripton'];?>

                </li>
              </ul>
              <?php }?>
            </div>
          </div>
          <div class="col bg-white m-3 p-3 mentorListStyles">
            <h5>Education</h5>
            <hr class="bg-primary align-self-start" />
            <ul>
              <?php $_smarty_tpl->_assignInScope('aa', $_smarty_tpl->tpl_vars['candidateDetail']->value['educationDetails']);?>
  
              <?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['aa']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_start = min(0, $__section_i_4_loop);
$__section_i_4_total = min(($__section_i_4_loop - $__section_i_4_start), 2);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = $__section_i_4_start; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
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
$__section_i_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['aa']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_5_start = min(2, $__section_i_5_loop);
$__section_i_5_total = min(($__section_i_5_loop - $__section_i_5_start), 3);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_5_total !== 0) {
for ($__section_i_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = $__section_i_5_start; $__section_i_5_iteration <= $__section_i_5_total; $__section_i_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
              <?php if ($_smarty_tpl->tpl_vars['bb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['course'] !== '') {?>
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
              <?php } else { ?>
              <?php }?>
              <?php
}
}
?>
            </ul>
  
          </div>
          <div class="w-100"></div>
          <div class="col bg-white p-3 m-3 mentorListStyles">
            <h5>Projects</h5>
            <hr class="bg-primary" />
            <ul>
              <?php $_smarty_tpl->_assignInScope('previousProject', $_smarty_tpl->tpl_vars['candidateDetail']->value['projectDetails']);?>
              <?php echo smarty_function_counter(array('start'=>0,'print'=>false),$_smarty_tpl);?>

              <?php
$__section_i_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['previousProject']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_6_total = $__section_i_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_6_total !== 0) {
for ($__section_i_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_6_iteration <= $__section_i_6_total; $__section_i_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
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
          <div class="col bg-white p-3 m-3 mentorListStyles">
            <h5>Previous Employment</h5>
            <hr class="bg-primary" />
            <ul>
              <?php $_smarty_tpl->_assignInScope('previousJobs', $_smarty_tpl->tpl_vars['candidateDetail']->value['previousJobDetails']);?>
              <?php echo smarty_function_counter(array('start'=>0,'print'=>false),$_smarty_tpl);?>

              <?php
$__section_i_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['previousJobs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_7_total = $__section_i_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_7_total !== 0) {
for ($__section_i_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_7_iteration <= $__section_i_7_total; $__section_i_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
  
              <li class="py-1"><strong>Employment-<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</strong></li>
              <?php if ($_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['designantion'] !== '') {?>
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
              <?php } else { ?>N/A
              <?php }?>
              <?php
}
}
?>
            </ul>
          </div>
      </div>
    
    <?php }?>
  </div>
  <?php $_smarty_tpl->_subTemplateRender('file:dashfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
