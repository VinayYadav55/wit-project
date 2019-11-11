<?php
/* Smarty version 3.1.33, created on 2019-10-17 10:45:02
  from '/home2/labiknmy/public_html/womenintech/presentation/templates/job_portal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da8462e664b36_84667377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb7facbf3bc1e997db3ee1ca63a24724eb4cd7e9' => 
    array (
      0 => '/home2/labiknmy/public_html/womenintech/presentation/templates/job_portal.tpl',
      1 => 1571309099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:listed_jobs.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5da8462e664b36_84667377 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/womenintech/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),1=>array('file'=>'/home2/labiknmy/public_html/womenintech/libs/smarty/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
echo smarty_function_load_presentation_object(array('filename'=>'jobCompaniesList','assign'=>'obj'),$_smarty_tpl);?>

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
/images/wit-favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/job_portal.css?v=<?php echo jsversion();?>
" />

  <title>WiT | JOB PORTAL</title>
</head>

<body>
  <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="loader"></div>
  <div class="jobPortalTopStyles">
    <div class="container-fluid bg-light mt-5 px-4 px-sm-5">
      <div class="row py-4 mt-5">
        <div class="col-md-3 filtersection mt-5">
          <div class="container-fluid">
            <div class="row">
              <div class="col-6 py-2">
                Filter
              </div>
              <div class="col-6 text-right py-2"><a href="<?php echo base_url();?>
/job_portal" class="btn btn-light">Reset</a></div>
              <div class="col-sm-12 mb-3">
                <div class="input-group">
                  <div class="input-group-prepend prePendBtn">
                    <button class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                  <input type="text" class="form-control inuttBoxBoostrapStyle"
                    placeholder="Search jobs by company name" id="myInput" onkeyup="myFunction()">
                </div>
                <ul id="myUL" class=" listStylesCompany mt-2 p-2">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->jobCompanies, 'company');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
?>
                  <?php $_smarty_tpl->_assignInScope('find', array(' ','.'));?>
                  <?php $_smarty_tpl->_assignInScope('repl', array('',''));?>
                  
                  <li><input type="checkbox" name="company_name[]" class="filter" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['company_name'];?>
"
                      id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['company']->value['company_name'],$_smarty_tpl->tpl_vars['find']->value,$_smarty_tpl->tpl_vars['repl']->value);?>
">
                    <!-- <span> <?php echo $_smarty_tpl->tpl_vars['company']->value['company_name'];?>
</span> -->
                    <span class="CompanyTypeStyles"><?php echo $_smarty_tpl->tpl_vars['company']->value['company_name'];?>
</span>

                  </li>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
              </div>
              <div class="col-sm-12 mb-3 d-none">
                <div class="input-group">
                  <div class="input-group-prepend" style="border: 1px solid #ced4da;">
                    <button class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                  <input type="text" class="form-control inuttBoxBoostrapStyle" placeholder="Search jobs by keywords">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Preferred City</label>
                  <div class="dropdownwithcheckbox">
                    <h6 class="maincontent p-2 m-0 filtersHeading"> Select Prefer City
                    </h6>
                    <ul class="listofcity listStyles m-0 p-2">
                      <li><input type="checkbox" name="city[]" id="Gurgaon" value="Gurgaon" class="filter"> Gurgaon</li>
                      <li><input type="checkbox" name="city[]" value="Delhi NCR" id="DelhiNCR" class="filter"> Delhi NCR
                      </li>
                      <li><input type="checkbox" name="city[]" value="Hydrabad" id="Hydrabad" class="filter"> Hydrabad
                      </li>
                      <li><input type="checkbox" name="city[]" value="Bangalore" id="Bangalore" class="filter">
                        Bangalore
                      </li>
                      <li><input type="checkbox" name="city[]" value="Chennai" id="Chennai" class="filter"> Chennai</li>
                      <li><input type="checkbox" name="city[]" value="Pune" id="Pune" class="filter"> Pune</li>
                      <li><input type="checkbox" name="city[]" value="Kolkatta" id="Kolkatta" class="filter"> Kolkatta
                      </li>
                      <li><input type="checkbox" name="city[]" value="Mumbai" id="Mumbai" class="filter"> Mumbai</li>
                      <li><input type="checkbox" name="city[]" value="Jaipur" id="Jaipur" class="filter"> Jaipur</li>
                      <li><input type="checkbox" name="city[]" value="Indore" id="Indore" class="filter"> Indore</li>
                      <li><input type="checkbox" name="city[]" value="Lucknow" id="Lucknow" class="filter"> Lucknow</li>
                      <li><input type="checkbox" name="city[]" value="Goa" id="Goa" class="filter"> Goa</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 mb-3">
                <div class="form-group">
                  <label for="">Job Type</label>
                  <div class="dropdownwithcheckbox">
                    <h6 class="maincontent p-2 m-0 filtersHeading"> Select Job Type
                    </h6>
                    <ul class="listofarea listStyles m-0 p-2">
                      <li>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" name="job_type[]" class="form-check-input filter" value="full time"
                              id='fulltime'>
                            <span class="jobTypeStyles">Full Time</span>
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" name="job_type[]" class="form-check-input filter" value="part time"
                              id="parttime">
                            <span class="jobTypeStyles">Part Time</span>
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" name="job_type[]" class="form-check-input filter"
                              value="remote working" id="remoteworking">
                            <span class="jobTypeStyles">Remote Working</span>
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" name="job_type[]" class="form-check-input filter" value="volunteer"
                              id="volunteer">
                            <span class="jobTypeStyles">Volunteer</span>
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" name="job_type[]" class="form-check-input filter" value="consultant"
                              id="consultant">
                            <span class="jobTypeStyles">Consultant</span>
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" name="job_type[]" class="form-check-input filter"
                              value="unpaid internship" id="unpaidinternship">
                            <span class="jobTypeStyles">Unpaid Internship</span>
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" name="job_type[]" class="form-check-input filter"
                              value="paid internship" id="paidinternship">
                            <span class="jobTypeStyles">Paid Internship</span>
                          </label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Functional Area</label>
                  <div class="dropdownwithcheckboxfunctional">
                    <h6 class="maincontent p-2 m-0 filtersHeading"> Select Functional Area</h6>
                    <ul class="listofarea listStyles m-0 p-2">
                      <li><input type="checkbox" name="functional_area[]" id="ArtDirectorGraphicWebDesigner"
                          value="Art Director / Graphic / Web Designer" class="filter"> Art Director
                        / Graphic / Web Designer</li>
                      <li><input type="checkbox" name="functional_area[]" id="Audit" value="Audit" class="filter">
                        Audit
                      </li>
                      <li><input type="checkbox" name="functional_area[]" id="Accountingfinance"
                          value="Accounting / finance" class="filter"> Accounting / finance</li>
                      <li><input type="checkbox" name="functional_area[]" id="ComputerOperatorDataEntry"
                          value="Computer Operator / Data Entry" class="filter"> Computer Operator / Data Entry
                      </li>
                      <li><input type="checkbox" name="functional_area[]" id="DatabaseAdministratorDataWarehouse"
                          value="Database Administrator / Data Warehouse" class="filter"> Database Administrator /
                        Data
                        Warehouse</li>
                      <li><input type="checkbox" name="functional_area[]" id="DigitalMarketingSEMSEO"
                          value="Digital Marketing / SEM / SEO" class="filter"> Digital Marketing / SEM / SEO</li>
                      <li><input type="checkbox" name="functional_area[]" id="HR" value="HR" class="filter"> HR</li>
                      <li><input type="checkbox" name="functional_area[]" id="Management" value="Management"
                          class="filter"> Management</li>
                      <li><input type="checkbox" name="functional_area[]" id="NetworkAdministrator"
                          value="Network Administrator" class="filter"> Network Administrator</li>
                      <li><input type="checkbox" name="functional_area[]" id="Operations" value="Operations"
                          class="filter"> Operations</li>
                      <li><input type="checkbox" name="functional_area[]" id="ProjectManagement"
                          value="Project Management" class="filter"> Project Management</li>
                      <li><input type="checkbox" name="functional_area[]" id="SoftwareDevelopment"
                          value="Software Development" class="filter"> Software Development</li>
                      <li><input type="checkbox" name="functional_area[]" id="SoftwareTesting" value="Software Testing"
                          class="filter"> Software Testing</li>
                      <li><input type="checkbox" name="functional_area[]" id="SalesMarketing" value="Sales / Marketing"
                          class="filter"> Sales / Marketing</li>
                      <li><input type="checkbox" name="functional_area[]" id="WebDesignerUIUXDesigner"
                          value="WebDesigner / UI / UX Designer" class="filter"> WebDesigner / UI / UX Designer</li>
                      <li><input type="checkbox" name="functional_area[]" id="Others" value="Others" class="filter">
                        Others</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Industry Type </label>
                  <div class="dropdownwithcheckboxindustry">
                    <h6 class="maincontent p-2 m-0 filtersHeading"> Select Industry Type
                    </h6>
                    <ul class="listofindustry listStyles m-0 p-2">
                      <li><input type="checkbox" name="industry_type[]" id="AccountingFinance"
                          value="Accounting / Finance" class="filter"> Accounting / Finance</li>
                      <li><input type="checkbox" name="industry_type[]" id="BankingFinancialServices"
                          value="Banking / Financial Services" class="filter"> Banking / Financial Services</li>
                      <li><input type="checkbox" name="industry_type[]" id="IT-HardwareandNetworking"
                          value="IT-Hardware and Networking" class="filter"> IT-Hardware and Networking</li>
                      <li><input type="checkbox" name="industry_type[]" id="MedicalHealthcare"
                          value="Medical / Healthcare" class="filter"> Medical / Healthcare</li>
                      <li><input type="checkbox" name="industry_type[]" id="TelecomISP" value="Telecom / ISP"
                          class="filter"> Telecom / ISP</li>
                      <li><input type="checkbox" name="industry_type[]" id="RecruitmentStaffing"
                          value="Recruitment / Staffing" class="filter"> Recruitment / Staffing</li>
                      <li><input type="checkbox" name="industry_type[]" id="KPOResearchAnalytics"
                          value="KPO, Research, Analytics" class="filter"> KPO, Research, Analytics</li>
                      <li><input type="checkbox" name="industry_type[]" id="InternetE-commerce"
                          value="Internet, E-commerce" class="filter"> Internet, E-commerce</li>
                      <li><input type="checkbox" name="industry_type[]" id="IT-SoftwareSoftwareServices"
                          value="IT-Software, Software Services" class="filter"> IT-Software, Software Services</li>
                      <li><input type="checkbox" name="industry_type[]" id="EducationTeachingTraining"
                          value="Education, Teaching, Training" class="filter"> Education, Teaching, Training</li>
                      <li><input type="checkbox" name="industry_type[]" id="Others" value="Others" class="filter">
                        Others</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Experience </label>
                  <div class="dropdownwithcheckboxexperiences">
                    <h6 class="maincontent p-2 m-0 filtersHeading"> Select Experience
                    </h6>
                    <ul class="listofecperiences listStylesExp m-0 p-2">
                      <li><input type="checkbox" name="experience[]" id="freshers" value="freshers" class="filter">
                        Freshers</li>
                      <li><input type="checkbox" name="experience[]" id="0-3" value="0-3" class="filter">
                        0-3 years</li>
                      <li><input type="checkbox" name="experience[]" id="3-6" value="3-6" class="filter">
                        3-6 years</li>
                      <li><input type="checkbox" name="experience[]" id="6-10" value="6-10" class="filter">
                        6-10 years</li>
                      <li><input type="checkbox" name="experience[]" id="10-" value="10+" class="filter">
                        10+ years</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-8 jobsSection mt-5">
          <div class="row">
            <div class="col-md-12 ">
              <h5 class="text-center pt-3">All Jobs</h5>
              <hr />
              <?php $_smarty_tpl->_subTemplateRender('file:listed_jobs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <hr />
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
/js/jobPortal.js?v=<?php echo jsversion();?>
"> <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
/js/search.js?v=<?php echo jsversion();?>
"> <?php echo '</script'; ?>
>
  <!-- <?php echo '<script'; ?>
>
    $('.dropdownwithcheckbox').click(function () {
      $('.listofcity').slideToggle();
    });
    $('.dropdownwithcheckboxfunctional').click(function () {
      $('.listofarea').slideToggle();
    });
    $('.dropdownwithcheckboxindustry').click(function () {
      $('.listofindustry').slideToggle();
    });
    $('.dropdownwithcheckboxexperiences').click(function () {
      $('.listofecperiences').slideToggle();
    });

  <?php echo '</script'; ?>
> -->
  <?php echo '<script'; ?>
>
    function myFunction() {
      var input, filter, ul, li, span, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      ul = document.getElementById("myUL");
      li = ul.getElementsByTagName("li");
      for (i = 0; i < li.length; i++) {
        span = li[i].getElementsByTagName("span")[0];
        txtValue = span.textContent || span.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
        }
      }
    }
  <?php echo '</script'; ?>
>
</body>

</html><?php }
}
