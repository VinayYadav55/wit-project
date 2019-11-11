<?php
/* Smarty version 3.1.33, created on 2019-10-22 09:53:58
  from '/home2/labiknmy/public_html/womenintech/presentation/templates/user_edit_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5daed1b6ad08c3_05710022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83cc357028cb829680db1729f8c1756039202935' => 
    array (
      0 => '/home2/labiknmy/public_html/womenintech/presentation/templates/user_edit_profile.tpl',
      1 => 1571737537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5daed1b6ad08c3_05710022 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/womenintech/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
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

 gtag('config', 'UA-147066526-1');c
<?php echo '</script'; ?>
>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
      <link rel="shortcut icon" href="<?php echo base_url();?>
/images/wit-favicon.ico" type="image/x-icon">
    <title>DASHBOARD | EDIT PROFILE</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css"
      integrity="sha256-PIRVsaP4JdV/TIf1FR8UHy4TFh+LiRqeclYXvCPBeiw="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"
    />
    <link href="<?php echo base_url();?>
/styles/wit_job_dashboard.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
    <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
    <link href="<?php echo base_url();?>
/styles/user_dashboard.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
  </head>
  <body>
      <input type="hidden" baseUrl=<?php echo base_url();?>
 class="baseUrl">
   <div class="loader"></div>
    <header
      class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled"
    >
      <a
        href="javascript:;"
        class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
        data-target="#sidebar"
      >
        <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
      </a>
      <a class="logo bg-white" href="<?php echo base_url();?>
"
        ><img
          src="images/witlogo-dashboard-logo.jpeg" width="100" height="60"
          alt="wit-logo"
      /></a>
      <button
        class="navbar-toggler navbar-icon waves-effect waves-light"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
      ></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav navbar-toolbar ml-auto">
          <li>
            <div class="nav-link waves-effect waves-light logOutBtn">LOGOUT</div>
        </li>
        </ul>
      </div>
    </header>
    <div
      id="sidebar"
      class="sidenav sidenav-fixed expand-lg"
      style="border-right:1px solid gray;"
    >
      <div class="userImg pt-5 mt-3"  style="box-shadow:1px 1px 1px 1px gray;">
        <div class="speakerImgDiv">
          <div class="imageContainerSpeaker">
            <img
              src="images/avtar_women.png"
              class="main-image-speaker rounded-circle"
              alt=""
            />
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
          <a class="nav-link" href="<?php echo base_url();?>
/user_view_profile">View Profile</a>
          <a class="nav-link active" href="<?php echo base_url();?>
/user_edit_profile"
            >Edit Profile</a
          >
        </nav>
      </div>
    </div>

    <div class="docs-content-wrapper">
      <div class="container-fluid"  style="background-color: #ececec;">
        <div class="row">
          <div class="col-sm-12">
            <div class="container bg-white py-5">
              <h1 class="text-center ">Edit Profile</h1>
              <div class="row">
                <div class="col-md-6 offset-sm-3 py-2">
                  <form action="#">
                    <div class="form-group">
                      <label for="">Preferred City</label>
                      
                      <?php $_smarty_tpl->_assignInScope('preferedCity', $_smarty_tpl->tpl_vars['candidateDetail']->value['prefered_city_array']);?>
                      <select
                        class="job-location-cities preferCity"
                        name="cities"
                        multiple="multiple"
                        style="width: 100% !important; border:none;"
                      >
                        <option value="Gurgaon" <?php if (in_array('Gurgaon',$_smarty_tpl->tpl_vars['preferedCity']->value)) {?>selected<?php }?>>Gurgaon</option>
                        <option value="Delhi NCR" <?php if (in_array('DelhiNCR',$_smarty_tpl->tpl_vars['preferedCity']->value)) {?>selected<?php }?>>Delhi NCR</option>
                        <option value="Hydrabad" <?php if (in_array('Hydrabad',$_smarty_tpl->tpl_vars['preferedCity']->value)) {?>selected<?php }?>>Hydrabad</option>
                        <option value="Bangalore" <?php if (in_array('Bangalore',$_smarty_tpl->tpl_vars['preferedCity']->value)) {?>selected<?php }?>>Bangalore</option
                        ><option value="Chennai" <?php if (in_array('Chennai',$_smarty_tpl->tpl_vars['preferedCity']->value)) {?>selected<?php }?>>Chennai</option>
                        <option value="Pune" <?php if (in_array('Pune',$_smarty_tpl->tpl_vars['preferedCity']->value)) {?>selected<?php }?>>Pune</option>
                        <option value="Kolkatta" <?php if (in_array('Kolkatta',$_smarty_tpl->tpl_vars['preferedCity']->value)) {?>selected<?php }?>>Kolkatta</option
                        ><option value="Mumbai" <?php if (in_array('Mumbai',$_smarty_tpl->tpl_vars['preferedCity']->value)) {?>selected<?php }?>>Mumbai</option
                        ><option value="Jaipur" <?php if (in_array('Jaipur',$_smarty_tpl->tpl_vars['preferedCity']->value)) {?>selected<?php }?>>Jaipur</option
                        ><option value="Indore" <?php if (in_array('Indore',$_smarty_tpl->tpl_vars['preferedCity']->value)) {?>selected<?php }?>>Indore</option
                        ><option value="Lucknow" <?php if (in_array('Lucknow',$_smarty_tpl->tpl_vars['preferedCity']->value)) {?>selected<?php }?>>Lucknow</option
                        ><option value="Goa" <?php if (in_array('Goa',$_smarty_tpl->tpl_vars['preferedCity']->value)) {?>selected<?php }?>>Goa</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="jobtype">Preferred Job Type</label>
                      <select
                        class="employee-job-type preferJobType"
                        name="jobtype"
                        multiple="multiple"
                        style="width: 100% !important; border:none;"
                      >
                      <?php $_smarty_tpl->_assignInScope('prefered_job_types', $_smarty_tpl->tpl_vars['candidateDetail']->value['prefered_job_types_array']);?>
                        <option value="Full Time" <?php if (in_array('Full Time',$_smarty_tpl->tpl_vars['prefered_job_types']->value)) {?>selected<?php }?>>Full Time</option>
                        <option value="Part Time" <?php if (in_array('Part Time',$_smarty_tpl->tpl_vars['prefered_job_types']->value)) {?>selected<?php }?>>Part Time</option>
                        <option value="Remote Working" <?php if (in_array('Remote Working',$_smarty_tpl->tpl_vars['prefered_job_types']->value)) {?>selected<?php }?>>Remote Working</option>
                        <option value="Consultant" <?php if (in_array('Consultant',$_smarty_tpl->tpl_vars['prefered_job_types']->value)) {?>selected<?php }?>>Consultant</option
                        ><option value="Volunteer" <?php if (in_array('Volunteer',$_smarty_tpl->tpl_vars['prefered_job_types']->value)) {?>selected<?php }?>>Volunteer</option>
                        <option value="Paid Internship" <?php if (in_array('Paid Internship',$_smarty_tpl->tpl_vars['prefered_job_types']->value)) {?>selected<?php }?>>Paid Internship</option>
                        <option value="Unpaid Internship" <?php if (in_array('Unpaid Internship',$_smarty_tpl->tpl_vars['prefered_job_types']->value)) {?>selected<?php }?>>Unpaid Internship</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="functionalarea">Select Functional Area</label>
                      <select
                        class="employee-functional-area employeefunctionalArea"
                        name="functionalarea"
                        multiple="multiple"
                        style="width: 100% !important; border:none;">
                          <?php $_smarty_tpl->_assignInScope('functional_area', $_smarty_tpl->tpl_vars['candidateDetail']->value['functional_area_array']);?>
                        <option value="Art Director / Graphic / Web Designer" <?php if (in_array('Art Director / Graphic / Web Designer',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>>Art Director / Graphic / Web Designer</option>
                        <option value="Audit" <?php if (in_array('Audit',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>>Audit</option>
                        <option value="Accounting / finance" <?php if (in_array('Accounting / finance',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>>Accounting / finance</option>
                        <option value="Computer Operator / Data Entry" <?php if (in_array('Computer Operator / Data Entry',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>>Computer Operator / Data Entry</option>
                        <option value="Database Administrator / Data Warehouse" <?php if (in_array('Database Administrator / Data Warehouse',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>>Database Administrator/Data Warehouse</option>
                        <option value="Digital Marketing / SEM / SEO" <?php if (in_array('Digital Marketing / SEM / SEO',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>>Digital Marketing / SEM / SEO</option>
                        <option value="HR" <?php if (in_array('HR',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>>HR</option>
                        <option value="Management" <?php if (in_array('Management',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>>Management</option>
                        <option value="Network Administrator" <?php if (in_array('Network Administrator',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>>Network Administrator</option>
                        <option value="Operations" <?php if (in_array('Operations',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>>Operations</option>
                        <option value="Project Management" <?php if (in_array('Project Management',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>>Project Management</option>
                        <option value="WebDesigner / UI / UX Designer" <?php if (in_array('WebDesigner / UI / UX Designer',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>>WebDesigner / UI / UX Designer</option>
                        <option value="Software Testing" <?php if (in_array('Software Testing',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>>Software Testing</option>
                        <option value="Sales / Marketing" <?php if (in_array('Sales / Marketing',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>>Sales / Marketing </option>
                        <option value="Software Development" <?php if (in_array('Software Development',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>>Software Development</option>
                        <option value="Others" <?php if (in_array('Others',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>>Others</option>
                      </select>
                    </div>
                    <?php $_smarty_tpl->_assignInScope('industry_type', $_smarty_tpl->tpl_vars['candidateDetail']->value['industry_type_array']);?>
                    <div class="form-group">
                      <label for="functionalarea">Select Industry Type</label>
                      <select
                        class="employee-industry-type employeeIndustryType"
                        name="functionalarea"
                        multiple="multiple"
                        style="width: 100% !important; border:none;"
                      >
                    <option value="Accounting / Finance" <?php if (in_array('Accounting / Finance',$_smarty_tpl->tpl_vars['industry_type']->value)) {?>selected<?php }?>>Accounting / Finance</option>
                    <option value="Banking / Financial Services" <?php if (in_array('Banking / Financial Services',$_smarty_tpl->tpl_vars['industry_type']->value)) {?>selected<?php }?>>Banking / Financial Services</option>
                    <option value="IT- Hardware and Networking" <?php if (in_array('IT- Hardware and Networking',$_smarty_tpl->tpl_vars['industry_type']->value)) {?>selected<?php }?>>IT- Hardware and Networking</option>
                    <option value="Medical / Healthcare" <?php if (in_array('Medical / Healthcare',$_smarty_tpl->tpl_vars['industry_type']->value)) {?>selected<?php }?>>Medical / Healthcare</option>
                    <option value="Telecom / ISP" <?php if (in_array('Telecom / ISP',$_smarty_tpl->tpl_vars['industry_type']->value)) {?>selected<?php }?>>Telecom / ISP</option>
                    <option value="Recruitment / Staffing" <?php if (in_array('Recruitment / Staffing',$_smarty_tpl->tpl_vars['industry_type']->value)) {?>selected<?php }?>>Recruitment / Staffing</option>
                    <option value="KPO, Research, Analytics" <?php if (in_array('KPO, Research, Analytics',$_smarty_tpl->tpl_vars['industry_type']->value)) {?>selected<?php }?>>KPO, Research, Analytics</option>
                    <option value="Internet, E-commerce" <?php if (in_array('Internet, E-commerce',$_smarty_tpl->tpl_vars['industry_type']->value)) {?>selected<?php }?>>Internet, E-commerce</option>
                    <option value="IT-Software, Software Services" 
                    <?php if (in_array('IT-Software, Software Services',$_smarty_tpl->tpl_vars['industry_type']->value)) {?>selected<?php }?>>IT-Software, Software Services</option>
                    <option value="Education, Teaching, Training" <?php if (in_array('Education, Teaching, Training',$_smarty_tpl->tpl_vars['industry_type']->value)) {?>selected<?php }?>>Education, Teaching, Training</option>
                    <option value="Others" <?php if (in_array('Others',$_smarty_tpl->tpl_vars['industry_type']->value)) {?>selected<?php }?>>Others</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="" >Year of Experience</label>
                      <div class="form-group">
                        <select
                          class="select-experience employeeExperience"
                          name="state"
                          style="width: 100% !important;"
                        ><?php $_smarty_tpl->_assignInScope('experience', $_smarty_tpl->tpl_vars['candidateDetail']->value['experience']);?>
                          <option disabled="disabled" selected="true"
                            >Select</option
                          >
                          <option value="0-3" <?php if ('0-3' == $_smarty_tpl->tpl_vars['experience']->value) {?>selected<?php }?>>0-3 Year</option>
                          <option value="3-6" <?php if ('3-6' == $_smarty_tpl->tpl_vars['experience']->value) {?>selected<?php }?>>3-6 Year</option>
                          <option value="6-10" <?php if ('6-10' == $_smarty_tpl->tpl_vars['experience']->value) {?>selected<?php }?>>6-10 Year</option>
                          <option value="10+" <?php if ('10+' == $_smarty_tpl->tpl_vars['experience']->value) {?>selected<?php }?>>10+ Year</option>
                        </select>
                      </div>
                    </div>

                    <div class="accordion py-5" id="accordionExample">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button
                              class="btn btn-link"
                              type="button"
                              data-toggle="collapse"
                              data-target="#collapseOne"
                              aria-expanded="true"
                              aria-controls="collapseOne"
                            >
                              Education
                            </button>
                          </h2>
                        </div>

                        <div
                          id="collapseOne"
                          class="collapse"
                          aria-labelledby="headingOne"
                          data-parent="#accordionExample"
                        >
                          <div class="card-body">
                            <details class="mt-3">
                              <summary
                                class="bg-light"
                                style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;"
                                >10th</summary
                              >
                              <?php $_smarty_tpl->_assignInScope('class_10_details', $_smarty_tpl->tpl_vars['candidateDetail']->value['educationDetails'][0]);?>
                             
                              <div class="form-group employeehighschoolrecord">
                                <label for="">Board Name</label>
                                <input
                                  type="text"
                                  class="form-control employeehighschoolboardname"
                                  placeholder="C.B.S.E. etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['class_10_details']->value['BoardName'];?>
"

                                />
                              </div>
                              <div class="form-group employeehighschoolrecord">
                                <label for="">School Name</label>
                                <input
                                  type="text"
                                  class="form-control employeehighschoolschoolname"
                                  placeholder="DPS etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['class_10_details']->value['schoolName'];?>
"
                                />
                              </div>
                              <div class="form-group employeehighschoolrecord">
                                <label for="">Year of Complition</label>
                                <input
                                  type="text"
                                  class="form-control employeehighschoolpassingyear"
                                  placeholder="2002 etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['class_10_details']->value['passingYear'];?>
"
                                />
                              </div>
                              <div class="form-group employeehighschoolrecord">
                                <label for="">Percentage / Marks</label>
                                <input
                                  type="text"
                                  class="form-control employeehighschoolpercentage"
                                  placeholder="95.6% or 9.5CGPA or 4.5GPA etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['class_10_details']->value['percentage'];?>
"
                                />
                              </div>
                            </details>
                            <details class="mt-3">
                              <summary
                                class="bg-light"
                                style="border: 1px solid #e6e4e4;outline: none; box-shadow: none;"
                                >12th</summary
                              >
                              <?php $_smarty_tpl->_assignInScope('class_12_details', $_smarty_tpl->tpl_vars['candidateDetail']->value['educationDetails'][1]);?>
                              <div
                                class="form-group employeehighersecondaryrecord"
                              >
                                <label for="">Board Name</label>
                                <input
                                  type="text"
                                  class="form-control employeehighersecondaryboardname"
                                  placeholder="C.B.S.E etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['class_12_details']->value['BoardName'];?>
"
                                />
                              </div>
                              <div
                                class="form-group employeehighersecondaryrecord"
                              >
                                <label for="">School Name</label>
                                <input
                                  type="text"
                                  class="form-control employeehighersecondaryschoolname"
                                  placeholder="DPS etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['class_12_details']->value['schoolName'];?>
"
                                />
                              </div>
                              <div
                                class="form-group employeehighersecondaryrecord"
                              >
                                <label for="">Year of Complition</label>
                                <input
                                  type="text"
                                  class="form-control employeehighersecondarypassingyear"
                                  placeholder="2002 etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['class_12_details']->value['passingYear'];?>
"
                                />
                              </div>
                              <div
                                class="form-group employeehighersecondaryrecord"
                              >
                                <label for="">Percentage/ Marks</label>
                                <input
                                  type="text"
                                  class="form-control employeehighersecondarypercentage"
                                  placeholder="95.6% or 9.5CGPA or 4.5GPA etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['class_12_details']->value['percentage'];?>
"
                                />
                              </div>
                            </details>
                            <!-- ************************************-->

                            <details class="mt-3">
                              <?php $_smarty_tpl->_assignInScope('grd_details', $_smarty_tpl->tpl_vars['candidateDetail']->value['educationDetails'][2]);?>
                              <summary
                                class="bg-light"
                                style="border: 1px solid #e6e4e4;outline: none; box-shadow: none;"
                                >Graduation / Diploma</summary
                              >
                              <div class="form-group">
                                <label for="">College/Institute</label>
                                <input
                                  type="text"
                                  class="form-control employeegraduationinstitute"
                                  placeholder="IIT Delhi etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['grd_details']->value['collegeName'];?>
"
                                />
                              </div>
                              <div class="form-group">
                                <label for="">Course</label>
                                <input
                                  type="text"
                                  class="form-control employeegraduationcourse"
                                  placeholder="MBA etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['grd_details']->value['course'];?>
"
                                />
                              </div>
                              <div class="form-group">
                                <label for="">Specilization</label>
                                <input
                                  type="text"
                                  class="form-control employeegraduationspecilization"
                                  placeholder="Finance etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['grd_details']->value['Specilization'];?>
"
                                />
                              </div>
                              <div class="form-group">
                                <label for="">Year of Complition</label>
                                <input
                                  type="text"
                                  class="form-control employeegraduationpassingyear"
                                  placeholder="2011 etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['grd_details']->value['Year_of_Complition'];?>
"
                                />
                              </div>
                              <div class="form-group">
                                <label for="">Percentage / CGPA / GPA</label>
                                <input
                                  type="text"
                                  class="form-control employeegraduationpercentage"
                                  placeholder="95% or 9.5CGPA or 4.5GPA etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['grd_details']->value['percentage'];?>
"
                                />
                              </div>
                            </details>

                            

                            <details class="mt-3">
                              <?php $_smarty_tpl->_assignInScope('pg_details', $_smarty_tpl->tpl_vars['candidateDetail']->value['educationDetails'][3]);?>
                              <summary
                                class="bg-light"
                                style="border: 1px solid #e6e4e4;outline: none; box-shadow: none;"
                                >Post Graduation</summary
                              >
                              <div class="form-group">
                                <label for="">College/Institute</label>
                                <input
                                  type="text"
                                  class="form-control employeepostgraduationinstitute"
                                  placeholder="IIT Delhi etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['pg_details']->value['collegeName'];?>
"
                                />
                              </div>
                              <div class="form-group">
                                <label for="">Course</label>
                                <input
                                  type="text"
                                  class="form-control employeepostgraduationcourse"
                                  placeholder="MBA etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['pg_details']->value['course'];?>
"
                                />
                              </div>
                              <div class="form-group">
                                <label for="">Specilization</label>
                                <input
                                  type="text"
                                  class="form-control employeepostgraduationspecilization"
                                  placeholder="Finance etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['pg_details']->value['Specilization'];?>
"
                                />
                              </div>
                              <div class="form-group">
                                <label for="">Year of Complition</label>
                                <input
                                  type="text"
                                  class="form-control employeepostgraduationpassingyear"
                                  placeholder="2011 etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['pg_details']->value['Year_of_Complition'];?>
"
                                />
                              </div>
                              <div class="form-group">
                                <label for="">Percentage / CGPA/ GPA</label>
                                <input
                                  type="text"
                                  class="form-control employeepostgraduationpercentage"
                                  placeholder="95% or 9.5CGPA or 4.5GPA etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['pg_details']->value['percentage'];?>
"
                                />
                              </div>
                            </details>

                            <!-- ****************************************** -->

                            <details class="mt-3">
                              <?php $_smarty_tpl->_assignInScope('other_class_details', $_smarty_tpl->tpl_vars['candidateDetail']->value['educationDetails'][4]);?>
                              <summary
                                class="bg-light"
                                style="border: 1px solid #e6e4e4;outline: none; box-shadow: none;"
                                >Other Qualification <small>(If any)</small></summary
                              >
                              <div class="form-group">
                                <label for="">College/Institute</label>
                                <input
                                  type="text"
                                  class="form-control employeeotherinstitute"
                                  placeholder="IIT Bombay etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['other_class_details']->value['collegeName'];?>
"
                                />
                              </div>
                              <div class="form-group">
                                <label for="">Course</label>
                                <input
                                  type="text"
                                  class="form-control employeeothercourse"
                                  placeholder="Phd etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['other_class_details']->value['course'];?>
"
                                />
                              </div>
                              <div class="form-group">
                                <label for="">Specilization</label>
                                <input
                                  type="text"
                                  class="form-control employeeotherspecilization"
                                  placeholder="Data science etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['other_class_details']->value['Specilization'];?>
"
                                />
                              </div>
                              <div class="form-group">
                                <label for="">Year of Complition</label>
                                <input
                                  type="text"
                                  class="form-control employeeotherpassingyear"
                                  placeholder="2018 etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['other_class_details']->value['Year_of_Complition'];?>
"
                                />
                              </div>
                              <div class="form-group">
                                <label for="">Percentage/ CGPA/ GPA</label>
                                <input
                                  type="text"
                                  class="form-control employeeotherpercentage"
                                  placeholder="95% or 9.5CGPA or 4.5GPA etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['other_class_details']->value['percentage'];?>
"
                                />
                              </div>
                            </details>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h2 class="mb-0">
                            <button
                              class="btn btn-link collapsed"
                              type="button"
                              data-toggle="collapse"
                              data-target="#collapseTwo"
                              aria-expanded="false"
                              aria-controls="collapseTwo"
                            >
                              Skills
                            </button>
                          </h2>
                        </div>
                        <div
                          id="collapseTwo"
                          class="collapse"
                          aria-labelledby="headingTwo"
                          data-parent="#accordionExample"
                        >
                          <div class="card-body">
                            <div class="form-group">
                              <select
                                class="employee-skills employeeskills"
                                name="skills"
                                multiple="multiple"
                                style="width: 100% !important;"
                              >
                              <?php $_smarty_tpl->_assignInScope('skillset', $_smarty_tpl->tpl_vars['candidateDetail']->value['skill_set_array']);?>
                                <option value="HTML" <?php if (in_array('HTML',$_smarty_tpl->tpl_vars['skillset']->value)) {?>selected<?php }?>>HTML</option>
                                <option value="CSS" <?php if (in_array('CSS',$_smarty_tpl->tpl_vars['skillset']->value)) {?>selected<?php }?>>CSS</option>
                                <option value="JavaScript" <?php if (in_array('JavaScript',$_smarty_tpl->tpl_vars['skillset']->value)) {?>selected<?php }?>>JavaScript</option>
                                <option value="Java" <?php if (in_array('Java',$_smarty_tpl->tpl_vars['skillset']->value)) {?>selected<?php }?>>Java</option
                                ><option value="NodeJs" <?php if (in_array('NodeJs',$_smarty_tpl->tpl_vars['skillset']->value)) {?>selected<?php }?>>NodeJs</option
                                ><option value="Angular2+" <?php if (in_array('Angular2',$_smarty_tpl->tpl_vars['skillset']->value)) {?>selected<?php }?>>Angular2+</option
                                ><option value="AngularJs" <?php if (in_array('AngularJs',$_smarty_tpl->tpl_vars['skillset']->value)) {?>selected<?php }?>>AngularJs</option
                                ><option value="JQuery" <?php if (in_array('JQuery',$_smarty_tpl->tpl_vars['skillset']->value)) {?>selected<?php }?>>JQuery</option
                                ><option value="Python" <?php if (in_array('Python',$_smarty_tpl->tpl_vars['skillset']->value)) {?>selected<?php }?>>Python</option
                                ><option value="BigData" <?php if (in_array('BigData',$_smarty_tpl->tpl_vars['skillset']->value)) {?>selected<?php }?>>Big Data</option
                                ><option value="DataScience" <?php if (in_array('DataScience',$_smarty_tpl->tpl_vars['skillset']->value)) {?>selected<?php }?>
                                  >Data Science</option
                                >
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <h2 class="mb-0">
                            <button
                              class="btn btn-link collapsed"
                              type="button"
                              data-toggle="collapse"
                              data-target="#collapseThree"
                              aria-expanded="false"
                              aria-controls="collapseThree"
                            >
                              Projects
                            </button>
                          </h2>
                        </div>
                        <div
                          id="collapseThree"
                          class="collapse"
                          aria-labelledby="headingThree"
                          data-parent="#accordionExample"
                        >
                          <div class="card-body">
                            <details class="mt-3">
                              <summary
                                class="bg-light"
                                style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;"
                                >Project 1</summary
                              >
                              <?php $_smarty_tpl->_assignInScope('project_1_details', $_smarty_tpl->tpl_vars['candidateDetail']->value['projectDetails'][0]);?>
                              <div class="form-group">
                                <label for="">Project Title</label>
                                <input
                                  type="text"
                                  class="form-control employeeprojectonetitle"
                                  value="<?php echo $_smarty_tpl->tpl_vars['project_1_details']->value['project_title'];?>
"

                                />
                              </div>
                              <div class="form-group">
                                <label for="">Project Description</label>
                                <input
                                  type="text"
                                  class="form-control employeeprojectonedescription"
                                  value="<?php echo $_smarty_tpl->tpl_vars['project_1_details']->value['project_description'];?>
"
                                />
                              </div>
                              <div class="form-group">
                                <label for="">Year of Complition</label>
                                <input
                                  type="text"
                                  class="form-control employeeprojectoneyearcomplition"
                                  value="<?php echo $_smarty_tpl->tpl_vars['project_1_details']->value['year_of_completion'];?>
"
                                />
                              </div>
                            </details>

                            <details class="mt-3">
                              <summary
                                class="bg-light"
                                style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;"
                                >Project 2</summary
                              ><?php $_smarty_tpl->_assignInScope('project_2_details', $_smarty_tpl->tpl_vars['candidateDetail']->value['projectDetails'][1]);?>
                              <div class="form-group">
                                <label for="">Project Title</label>
                                <input
                                  type="text"
                                  class="form-control employeeprojecttwotitle"
                                  placeholder="Library management system etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['project_2_details']->value['project_title'];?>
"
                                />
                              </div>
                              <div class="form-group">
                                <label for="">Project Description</label>
                                <input
                                  type="text"
                                  class="form-control employeeprojecttwodescription"
                                  placeholder="Project description..."
                                  value="<?php echo $_smarty_tpl->tpl_vars['project_2_details']->value['project_description'];?>
"
                                />
                              </div>
                              <div class="form-group">
                                <label for="">Year of Complition</label>
                                <input
                                  type="text"
                                  class="form-control employeeprojecttwoyearcomplition"
                                  placeholder="2002 etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['project_2_details']->value['year_of_completion'];?>
"
                                />
                              </div>
                            </details>
                            <details class="mt-3">
                              <summary
                                class="bg-light"
                                style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;"
                                >Project 3</summary
                              >
                              <?php $_smarty_tpl->_assignInScope('project_3_details', $_smarty_tpl->tpl_vars['candidateDetail']->value['projectDetails'][2]);?>

                              <div class="form-group">
                                <label for="">Project Title</label>
                                <input
                                  type="text"
                                  class="form-control employeeprojectthreetitle"
                                  placeholder="Indian tourism etc"
                                  value='<?php echo $_smarty_tpl->tpl_vars['project_3_details']->value['project_title'];?>
'
                                />
                              </div>
                              <div class="form-group">
                                <label for="">Project Description</label>
                                <input
                                  type="text"
                                  class="form-control employeeprojectthreedescription"
                                  placeholder="Project description..."
                                  value="<?php echo $_smarty_tpl->tpl_vars['project_3_details']->value['project_description'];?>
"
                                />
                              </div>
                              <div class="form-group">
                                <label for="">Year of Complition</label>
                                <input
                                  type="text"
                                  class="form-control employeeprojectthreeyearcomplition"
                                  placeholder="2002 etc"
                                  value="<?php echo $_smarty_tpl->tpl_vars['project_3_details']->value['year_of_completion'];?>
"
                                />
                              </div>
                            </details>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" id="headingFour">
                          <h2 class="mb-0">
                            <button
                              class="btn btn-link collapsed"
                              type="button"
                              data-toggle="collapse"
                              data-target="#collapseFour"
                              aria-expanded="false"
                              aria-controls="collapseFour"
                            >
                              Personal Details
                            </button>
                          </h2>
                        </div>
                        <div
                          id="collapseFour"
                          class="collapse"
                          aria-labelledby="headingFour"
                          data-parent="#accordionExample"
                        >
                          <div class="card-body">
                              <div class="form-row">
                                <div class="form-group col-6">
                              <label for="">Date of Birth</label>
                              <input
                                type="date"
                                class="form-control employeedob"
                                value=<?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['date_of_Birth'];?>

                              />
                            </div>
                            <div class="form-group col-6">
                              <label for="sel1">Marital Status</label>
                              <select
                                class="form-control employeemaritalstatus"
                                id="sel1"
                              >
                                <option selected="true" disabled="disabled"
                                  >Select</option
                                >

                                <option value="Single/Unmarried" <?php if ('Single/Unmarried' == $_smarty_tpl->tpl_vars['candidateDetail']->value['martial_status']) {?>selected<?php }?>>Single/Unmarried</option>
                                <option value="Married" <?php if ('Married' == $_smarty_tpl->tpl_vars['candidateDetail']->value['martial_status']) {?>selected<?php }?>>Married</option>
                              </select>
                            </div>      
                              </div>
                            
                            <div class="form-group">
                              <label for="comment">Permanent Address</label>
                              <textarea
                                class="form-control employeepermanentaddress"
                                rows="2"
                                id="comment"

                                
                              ><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['permanent_address'];?>
</textarea>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-6">
                              <label for="">HomeTown</label>
                              <input
                                type="text"
                                class="form-control employeehometown"
                                 value = <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['resident_address'];?>

                              />
                            </div>
                            <div class="form-group col-6">
                              <label for="">Zip</label>
                              <input
                                type="text"
                                class="form-control employeeaddresszip"
                                value = <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['pin_code'];?>

                              />
                            </div>    
                            </div>
                            
                          </div>
                        </div>
                      </div>

                      <div
                        class="py-2 px-4 bg-light"
                        style="border: 1px solid #dcdcdc;"
                      >
                        <label for="" class="">Are you currently working?</label
                        ><br />
                        <label for="" >Yes</label>
                        <input
                          type="radio"
                          class="currentJobDiv"
                          name="workingcurrently"
                          id="watch-me"
                          value = 'Yes' <?php if ('Yes' == $_smarty_tpl->tpl_vars['candidateDetail']->value['currently_working_status']) {?>checked<?php }?>}
                        />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp;
                        <label for="">No</label>
                        <input
                          type="radio"
                          class="currentJobDivNo"
                          name="workingcurrently"
                          id="jhjyg"
                          value = 'No' <?php if ('Yes' == $_smarty_tpl->tpl_vars['candidateDetail']->value['currently_working_status']) {?>checked<?php }?>}
                          checked
                        />
                      </div>

                      <div class="card" id="show-me" style="display: none;">
                        <div class="card-header" id="headingSix">
                          <h2 class="mb-0">
                            <button
                              class="btn btn-link collapsed"
                              type="button"
                              data-toggle="collapse"
                              data-target="#collapseSix"
                              aria-expanded="false"
                              aria-controls="collapseSix"
                            >
                              Add Current Employment
                            </button>
                          </h2>
                        </div>
                        <div
                          id="collapseSix"
                          class="collapse"
                          aria-labelledby="headingSix"
                          data-parent="#accordionExample"
                        >
                          <div class="card-body">
                            <div
                              class="p-1 bg-light"
                              style="border: 1px solid #dcdcdc;"
                            >
                              <div class="form-group">
                                <label for="">Add Designation</label>
                                <input
                                  type="text"
                                  class="form-control employeecurrentdesignation"
                                  value ="<?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_designation'];?>
"
                                />
                              </div>
                              <div class="form-group">
                                <label for="sel1">Add Organization</label>
                                <input
                                  type="text"
                                  class="form-control employeecurrentorganization"
                                  value = "<?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_name'];?>
"
                                  
                                />
                              </div>
                         <div class="form-row">
                        <div class="col-sm-6 form-group">
                          <label for="sel1">Starting Working From</label>
                          <select class="form-control employeecurrentstartingyear"
                            id="sel1">
                              <option selected="true" disabled="disabled">Select Year</option>
                            <option value="1990"
                              <?php if ('1990' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>1990
                              </option> <option value="1991"
                              <?php if ('1991' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>1991
                              </option> <option value="1992"
                              <?php if ('1992' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>1992
                              </option> <option value="1993"
                              <?php if ('1993' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>1993
                              </option> <option value="1994"
                              <?php if ('1994' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>1994
                              </option> <option value="1995"
                              <?php if ('1995' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>1995
                              </option> <option value="1996"
                              <?php if ('1996' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>1996
                              </option> <option value="1997"
                              <?php if ('1997' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>1997
                              </option> <option value="1998"
                              <?php if ('1998' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>1998
                              </option> <option value="1999"
                              <?php if ('1999' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>1999
                              </option> <option value="2000"
                              <?php if ('2000' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>2000
                              </option> <option value="2001"
                              <?php if ('2001' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>2001
                              </option> <option value="2002"
                              <?php if ('2002' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>2002
                              </option> <option value="2003"
                              <?php if ('2003' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>2003
                              </option> <option value="2004"
                              <?php if ('2004' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>2004
                              </option> <option value="2005"
                              <?php if ('2005' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>2005
                              </option> <option value="2006"
                              <?php if ('2006' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>2006
                              </option> <option value="2007"
                              <?php if ('2007' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>2007
                              </option> <option value="2008"
                              <?php if ('2008' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>2008
                              </option> <option value="2009"
                              <?php if ('2009' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>2009
                              </option> <option value="2010"
                              <?php if ('2010' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>2010
                              </option> <option value="2011"
                              <?php if ('2011' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>2011
                              </option> <option value="2012"
                              <?php if ('2012' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>2012
                              </option> <option value="2013"
                              <?php if ('2013' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>2013
                              </option> <option value="2014"
                              <?php if ('2014' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>2014
                              </option> <option value="2015"
                              <?php if ('2015' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>2015
                              </option> <option value="2016"
                              <?php if ('2016' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>2016
                              </option> <option value="2017"
                              <?php if ('2017' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>2017
                              </option> <option value="2018"
                              <?php if ('2018' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>2018
                              </option> <option value="2019"
                              <?php if ('2019' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date']) {?>selected<?php }?>>2019
                              </option> </select> </div> <div
                              class="col-sm-6 form-group">
                              <label for="sel1">Month</label>
                              <select
                                class="form-control employeecurrentstartingmonth"
                                id="sel1">
                                  <option selected="true" disabled="disabled">Select Month</option>
                                <option value="Jan"
                                  <?php if ('Jan' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_month']) {?>selected<?php }?>>Jan
                                  </option> <option value="Feb"
                                  <?php if ('Feb' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_month']) {?>selected<?php }?>>Feb
                                  </option> <option value="Mar"
                                  <?php if ('Mar' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_month']) {?>selected<?php }?>>Mar
                                  </option> <option value="Apr"
                                  <?php if ('Apr' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_month']) {?>selected<?php }?>>Apr
                                  </option> <option value="May"
                                  <?php if ('May' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_month']) {?>selected<?php }?>>May
                                  </option> <option value="Jun"
                                  <?php if ('Jun' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_month']) {?>selected<?php }?>>Jun
                                  </option> <option value="Jul"
                                  <?php if ('Jul' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_month']) {?>selected<?php }?>>Jul
                                  </option> <option value="Aug"
                                  <?php if ('Aug' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_month']) {?>selected<?php }?>>Aug
                                  </option> <option value="Sep"
                                  <?php if ('Sep' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_month']) {?>selected<?php }?>>Sep
                                  </option> <option value="Oct"
                                  <?php if ('Oct' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_month']) {?>selected<?php }?>>Oct
                                  </option> <option value="Nov"
                                  <?php if ('Nov' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_month']) {?>selected<?php }?>>Nov
                                  </option> <option value="Dec"
                                  <?php if ('Dec' == $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_month']) {?>selected<?php }?>>Dec
                                  </option> </select> </div> </div> 
                              <div class="form-group">
                                <label for="">Current Salary</label>
                                <input
                                  type="text"
                                  class="form-control employeecurrentsalary"
                                  value = "<?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_salary'];?>
"
                                />
                              </div>
                              <div class="form-group">
                                <label for="comment">Description of job</label>
                                <textarea
                                  class="form-control employeecurrentjobdescription"
                                  rows="2"
                                  id="comment" 
                                ><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_job_descripton'];?>
</textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="py-2 px-4 bg-light"
                      style="border: 1px solid #dcdcdc;"
                    >
                      <label for="" class="">Have you worked previously?</label
                      ><br />
                      <label for="">Yes</label>
                      <input
                        type="radio"
                        class="previousJobDiv"
                        name="workedbefore"
                        id="watch-me-previous-job"
                      />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                      &nbsp; &nbsp;
                      <label for="">No</label>
                      <input
                        type="radio"
                        class="previousJobDivNo"
                        name="workedbefore"
                        id="hjh"
                        checked
                      />
                    </div>
                    <div class="accordion" id="accordionExampletwo">
                      <div
                        class="card"
                        id="show-me-previous-job"
                        style="display: none;"
                      >
                        <div class="card-header" id="headingFive">
                          <h2 class="mb-0">
                            <button
                              class="btn btn-link collapsed"
                              type="button"
                              data-toggle="collapse"
                              data-target="#collapseFive"
                              aria-expanded="false"
                              aria-controls="collapseFive"
                            >
                              Add Employment
                            </button>
                          </h2>
                        </div>
                        <div
                          id="collapseFive"
                          class="collapse"
                          aria-labelledby="headingFive"
                          data-parent="#accordionExampletwo"
                        >
                          <div class="card-body employmentDetailsDiv">
                            <!-- *****************************-->
                            <details class="mt-3">
                              <summary
                                class="bg-light"
                                style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;"
                                >job1</summary
                              ><?php $_smarty_tpl->_assignInScope('job_1_details', $_smarty_tpl->tpl_vars['candidateDetail']->value['previousJobDetails'][0]);?>
                             

                              <div
                                class="p-1 bg-light"
                                style="border: 1px solid #dcdcdc;"
                              >
                                <div class="form-group">
                                  <label for="">Add Designation</label>
                                  <input
                                    type="text"
                                    class="form-control employeepreviousjobonedesignation"
                                     value="<?php echo $_smarty_tpl->tpl_vars['job_1_details']->value['designantion'];?>
"
                                  />
                                </div>
                                <div class="form-group">
                                  <label for="sel1">Add Organization</label>
                                  <input
                                    type="text"
                                    class="form-control employeepreviousjoboneorganization"
                                     value="<?php echo $_smarty_tpl->tpl_vars['job_1_details']->value['organization'];?>
"
                                  />
                                </div>
                                  <div class="form-row">
                                  <div class="col-sm-6 form-group">
                                    <label for="experiencefirst">Worked From</label>
                                    <select
                                      class="form-control employeepreviousjobonestartingyear"
                                      id="experiencefirst" onChange="firstjob(this.value);">
                                        <option selected="true" disabled="disabled">Select Year</option>
                                      <option value="1990"
                                        <?php if ('1990' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>1990
                                        </option> <option value="1991"
                                        <?php if ('1991' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>1991
                                        </option> <option value="1992"
                                        <?php if ('1992' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>1992
                                        </option> <option value="1993"
                                        <?php if ('1993' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>1993
                                        </option> <option value="1994"
                                        <?php if ('1994' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>1994
                                        </option> <option value="1995"
                                        <?php if ('1995' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>1995
                                        </option> <option value="1996"
                                        <?php if ('1996' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>1996
                                        </option> <option value="1997"
                                        <?php if ('1997' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>1997
                                        </option> <option value="1998"
                                        <?php if ('1998' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>1998
                                        </option> <option value="1999"
                                        <?php if ('1999' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>1999
                                        </option> <option value="2000"
                                        <?php if ('2000' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>2000
                                        </option> <option value="2001"
                                        <?php if ('2001' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>2001
                                        </option> <option value="2002"
                                        <?php if ('2002' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>2002
                                        </option> <option value="2003"
                                        <?php if ('2003' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>2003
                                        </option> <option value="2004"
                                        <?php if ('2004' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>2004
                                        </option> <option value="2005"
                                        <?php if ('2005' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>2005
                                        </option> <option value="2006"
                                        <?php if ('2006' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>2006
                                        </option> <option value="2007"
                                        <?php if ('2007' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>2007
                                        </option> <option value="2008"
                                        <?php if ('2008' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>2008
                                        </option> <option value="2009"
                                        <?php if ('2009' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>2009
                                        </option> <option value="2010"
                                        <?php if ('2010' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>2010
                                        </option> <option value="2011"
                                        <?php if ('2011' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>2011
                                        </option> <option value="2012"
                                        <?php if ('2012' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>2012
                                        </option> <option value="2013"
                                        <?php if ('2013' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>2013
                                        </option> <option value="2014"
                                        <?php if ('2014' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>2014
                                        </option> <option value="2015"
                                        <?php if ('2015' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>2015
                                        </option> <option value="2016"
                                        <?php if ('2016' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>2016
                                        </option> <option value="2017"
                                        <?php if ('2017' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>2017
                                        </option> <option value="2018"
                                        <?php if ('2018' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>2018
                                        </option> <option value="2019"
                                        <?php if ('2019' == $_smarty_tpl->tpl_vars['job_1_details']->value['join_date']) {?>selected<?php }?>>2019
                                        </option> </select> </div> <div
                                        class="col-sm-6 form-group">
                                        <label for="sel1">Month</label>
                                        <select class="form-control" id="sel1">
                                          <option selected="true" disabled="disabled">Select
                                            Month
                                          </option>
                                          <option>Jan</option>
                                          <option>Feb</option>
                                          <option>Mar</option>
                                          <option>Apr</option>
                                          <option>May</option>
                                          <option>June</option>
                                          <option>July</option>
                                          <option>Aug</option>
                                          <option>Sep</option>
                                          <option>Oct</option>
                                          <option>Nov</option>
                                          <option>Dec</option>
                                        </select>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="col-sm-6 form-group">
                                    <label for="sel1">Worked Till</label>
                                    <select
                                      class="form-control employeepreviousjoboneendingyear"
                                      id="endingyearfirstjobfill">
                                      <option selected="true" disabled="disabled">Select
                                        Year
                                      </option>
                                      <option value="1990"
                                        <?php if ('1990' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>1990
                                        </option> <option value="1991"
                                        <?php if ('1991' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>1991
                                        </option> <option value="1992"
                                        <?php if ('1992' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>1992
                                        </option> <option value="1993"
                                        <?php if ('1993' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>1993
                                        </option> <option value="1994"
                                        <?php if ('1994' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>1994
                                        </option> <option value="1995"
                                        <?php if ('1995' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>1995
                                        </option> <option value="1996"
                                        <?php if ('1996' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>1996
                                        </option> <option value="1997"
                                        <?php if ('1997' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>1997
                                        </option> <option value="1998"
                                        <?php if ('1998' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>1998
                                        </option> <option value="1999"
                                        <?php if ('1999' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>1999
                                        </option> <option value="2000"
                                        <?php if ('2000' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>2000
                                        </option> <option value="2001"
                                        <?php if ('2001' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>2001
                                        </option> <option value="2002"
                                        <?php if ('2002' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>2002
                                        </option> <option value="2003"
                                        <?php if ('2003' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>2003
                                        </option> <option value="2004"
                                        <?php if ('2004' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>2004
                                        </option> <option value="2005"
                                        <?php if ('2005' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>2005
                                        </option> <option value="2006"
                                        <?php if ('2006' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>2006
                                        </option> <option value="2007"
                                        <?php if ('2007' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>2007
                                        </option> <option value="2008"
                                        <?php if ('2008' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>2008
                                        </option> <option value="2009"
                                        <?php if ('2009' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>2009
                                        </option> <option value="2010"
                                        <?php if ('2010' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>2010
                                        </option> <option value="2011"
                                        <?php if ('2011' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>2011
                                        </option> <option value="2012"
                                        <?php if ('2012' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>2012
                                        </option> <option value="2013"
                                        <?php if ('2013' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>2013
                                        </option> <option value="2014"
                                        <?php if ('2014' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>2014
                                        </option> <option value="2015"
                                        <?php if ('2015' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>2015
                                        </option> <option value="2016"
                                        <?php if ('2016' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>2016
                                        </option> <option value="2017"
                                        <?php if ('2017' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>2017
                                        </option> <option value="2018"
                                        <?php if ('2018' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>2018
                                        </option> <option value="2019"
                                        <?php if ('2019' == $_smarty_tpl->tpl_vars['job_1_details']->value['end_date']) {?>selected<?php }?>>2019
                                        </option> </select> </div> <div
                                        class="col-sm-6 form-group">
                                        <label for="sel1">Month</label>
                                        <select class="form-control" id="sel1">
                                          <option selected="true" disabled="disabled">Select
                                            Month
                                          </option>
                                          <option>Jan</option>
                                          <option>Feb</option>
                                          <option>Mar</option>
                                          <option>Apr</option>
                                          <option>May</option>
                                          <option>June</option>
                                          <option>July</option>
                                          <option>Aug</option>
                                          <option>Sep</option>
                                          <option>Oct</option>
                                          <option>Nov</option>
                                          <option>Dec</option>
                                        </select>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="comment"
                                    >Description of job</label
                                  >
                                  <textarea
                                    class="form-control employeepreviousjobonedescription"
                                    rows="2"
                                    id="comment"
                                  > <?php echo $_smarty_tpl->tpl_vars['job_1_details']->value['description'];?>
</textarea>
                                </div>
                              </div>
                            </details>

                            <details class="mt-3">
                              <summary
                                class="bg-light"
                                style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;"
                                >job2</summary
                              ><?php $_smarty_tpl->_assignInScope('job_2_details', $_smarty_tpl->tpl_vars['candidateDetail']->value['previousJobDetails'][1]);?>

                              <div
                                class="p-1 bg-light"
                                style="border: 1px solid #dcdcdc;"
                              >
                                <div class="form-group">
                                  <label for="">Add Designation</label>
                                  <input
                                    type="text"
                                    class="form-control employeepreviousjobtwodesignation"
                                    value="<?php echo $_smarty_tpl->tpl_vars['job_2_details']->value['designantion'];?>
"
                                  />
                                </div>
                                <div class="form-group">
                                  <label for="sel1">Add Organization</label>
                                  <input
                                    type="text"
                                    class="form-control employeepreviousjobtwoorganization"
                                    value="<?php echo $_smarty_tpl->tpl_vars['job_2_details']->value['organization'];?>
"
                                  />
                                </div>
                            <div class="form-row">
                              <div class="col-sm-6 form-group">
                                <label for="experiencefirst">Worked From</label>
                                <select
                                  class="form-control employeepreviousjobtwostartingyear"
                                  id="experiencefirst"
                                  onChange="secondjob(this.value);">
                                    <option selected="true" disabled="disabled">Select Year</option>
                                  <option value="1990"
                                    <?php if ('1990' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>1990
                                    </option> <option value="1991"
                                    <?php if ('1991' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>1991
                                    </option> <option value="1992"
                                    <?php if ('1992' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>1992
                                    </option> <option value="1993"
                                    <?php if ('1993' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>1993
                                    </option> <option value="1994"
                                    <?php if ('1994' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>1994
                                    </option> <option value="1995"
                                    <?php if ('1995' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>1995
                                    </option> <option value="1996"
                                    <?php if ('1996' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>1996
                                    </option> <option value="1997"
                                    <?php if ('1997' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>1997
                                    </option> <option value="1998"
                                    <?php if ('1998' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>1998
                                    </option> <option value="1999"
                                    <?php if ('1999' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>1999
                                    </option> <option value="2000"
                                    <?php if ('2000' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>2000
                                    </option> <option value="2001"
                                    <?php if ('2001' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>2001
                                    </option> <option value="2002"
                                    <?php if ('2002' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>2002
                                    </option> <option value="2003"
                                    <?php if ('2003' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>2003
                                    </option> <option value="2004"
                                    <?php if ('2004' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>2004
                                    </option> <option value="2005"
                                    <?php if ('2005' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>2005
                                    </option> <option value="2006"
                                    <?php if ('2006' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>2006
                                    </option> <option value="2007"
                                    <?php if ('2007' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>2007
                                    </option> <option value="2008"
                                    <?php if ('2008' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>2008
                                    </option> <option value="2009"
                                    <?php if ('2009' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>2009
                                    </option> <option value="2010"
                                    <?php if ('2010' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>2010
                                    </option> <option value="2011"
                                    <?php if ('2011' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>2011
                                    </option> <option value="2012"
                                    <?php if ('2012' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>2012
                                    </option> <option value="2013"
                                    <?php if ('2013' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>2013
                                    </option> <option value="2014"
                                    <?php if ('2014' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>2014
                                    </option> <option value="2015"
                                    <?php if ('2015' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>2015
                                    </option> <option value="2016"
                                    <?php if ('2016' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>2016
                                    </option> <option value="2017"
                                    <?php if ('2017' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>2017
                                    </option> <option value="2018"
                                    <?php if ('2018' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>2018
                                    </option> <option value="2019"
                                    <?php if ('2019' == $_smarty_tpl->tpl_vars['job_2_details']->value['join_date']) {?>selected<?php }?>>2019
                                    </option> </select> </div> <div
                                    class="col-sm-6 form-group">
                                    <label for="sel1">Month</label>
                                    <select class="form-control" id="sel1">
                                      <option selected="true" disabled="disabled">Select
                                        Month
                                      </option>
                                      <option>Jan</option>
                                      <option>Feb</option>
                                      <option>Mar</option>
                                      <option>Apr</option>
                                      <option>May</option>
                                      <option>June</option>
                                      <option>July</option>
                                      <option>Aug</option>
                                      <option>Sep</option>
                                      <option>Oct</option>
                                      <option>Nov</option>
                                      <option>Dec</option>
                                    </select>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="col-sm-6 form-group">
                                <label for="sel1">Worked Till</label>
                                <select
                                  class="form-control employeepreviousjobtwoendingyear"
                                  id="endingyearsecondjobfill">
                                  <option selected="true" disabled="disabled">Select
                                    Year
                                  </option>
                                  <option value="1990"
                                    <?php if ('1990' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>1990
                                    </option> <option value="1991"
                                    <?php if ('1991' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>1991
                                    </option> <option value="1992"
                                    <?php if ('1992' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>1992
                                    </option> <option value="1993"
                                    <?php if ('1993' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>1993
                                    </option> <option value="1994"
                                    <?php if ('1994' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>1994
                                    </option> <option value="1995"
                                    <?php if ('1995' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>1995
                                    </option> <option value="1996"
                                    <?php if ('1996' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>1996
                                    </option> <option value="1997"
                                    <?php if ('1997' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>1997
                                    </option> <option value="1998"
                                    <?php if ('1998' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>1998
                                    </option> <option value="1999"
                                    <?php if ('1999' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>1999
                                    </option> <option value="2000"
                                    <?php if ('2000' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>2000
                                    </option> <option value="2001"
                                    <?php if ('2001' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>2001
                                    </option> <option value="2002"
                                    <?php if ('2002' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>2002
                                    </option> <option value="2003"
                                    <?php if ('2003' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>2003
                                    </option> <option value="2004"
                                    <?php if ('2004' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>2004
                                    </option> <option value="2005"
                                    <?php if ('2005' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>2005
                                    </option> <option value="2006"
                                    <?php if ('2006' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>2006
                                    </option> <option value="2007"
                                    <?php if ('2007' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>2007
                                    </option> <option value="2008"
                                    <?php if ('2008' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>2008
                                    </option> <option value="2009"
                                    <?php if ('2009' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>2009
                                    </option> <option value="2010"
                                    <?php if ('2010' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>2010
                                    </option> <option value="2011"
                                    <?php if ('2011' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>2011
                                    </option> <option value="2012"
                                    <?php if ('2012' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>2012
                                    </option> <option value="2013"
                                    <?php if ('2013' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>2013
                                    </option> <option value="2014"
                                    <?php if ('2014' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>2014
                                    </option> <option value="2015"
                                    <?php if ('2015' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>2015
                                    </option> <option value="2016"
                                    <?php if ('2016' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>2016
                                    </option> <option value="2017"
                                    <?php if ('2017' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>2017
                                    </option> <option value="2018"
                                    <?php if ('2018' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>2018
                                    </option> <option value="2019"
                                    <?php if ('2019' == $_smarty_tpl->tpl_vars['job_2_details']->value['end_date']) {?>selected<?php }?>>2019
                                    </option> </select> </div> <div
                                    class="col-sm-6 form-group">
                                    <label for="sel1">Month</label>
                                    <select class="form-control" id="sel1">
                                      <option selected="true" disabled="disabled">Select
                                        Month
                                      </option>
                                      <option>Jan</option>
                                      <option>Feb</option>
                                      <option>Mar</option>
                                      <option>Apr</option>
                                      <option>May</option>
                                      <option>June</option>
                                      <option>July</option>
                                      <option>Aug</option>
                                      <option>Sep</option>
                                      <option>Oct</option>
                                      <option>Nov</option>
                                      <option>Dec</option>
                                    </select>
                              </div>
                            </div>
                                
                                
                                
                                
                                
                                
                                <div class="form-group">
                                  <label for="comment"
                                    >Description of job</label
                                  >
                                  <textarea
                                    class="form-control employeepreviousjobtwodescription"
                                    rows="2"
                                    id="comment"
                                  > <?php echo $_smarty_tpl->tpl_vars['job_2_details']->value['description'];?>
</textarea>
                                </div>
                              </div>
                            </details>

                            <details class="mt-3">
                              <summary
                                class="bg-light"
                                style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;"
                                >job3</summary
                              ><?php $_smarty_tpl->_assignInScope('job_3_details', $_smarty_tpl->tpl_vars['candidateDetail']->value['previousJobDetails'][2]);?>

                              <div
                                class="p-1 bg-light"
                                style="border: 1px solid #dcdcdc;"
                              >
                                <div class="form-group">
                                  <label for="">Add Designation</label>
                                  <input
                                    type="text"
                                    class="form-control employeepreviousjobthreedesignation"
                                     value="<?php echo $_smarty_tpl->tpl_vars['job_3_details']->value['designantion'];?>
"
                                  />
                                </div>
                                <div class="form-group">
                                  <label for="sel1">Add Organization</label>
                                  <input
                                    type="text"
                                    class="form-control employeepreviousjobthreeorganization"
                                     value="<?php echo $_smarty_tpl->tpl_vars['job_3_details']->value['organization'];?>
"
                                  />
                                </div>
                                
                                
                                
                         <div class="form-row">
                          <div class="col-sm-6 form-group">
                            <label for="experiencefirst">Worked From</label>
                            <select
                              class="form-control employeepreviousjobthreestartingyear"
                              id="experiencefirst" onChange="thirdjob(this.value);">
                                <option selected="true" disabled="disabled">Select Year</option>
                              <option value="1990"
                                <?php if ('1990' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>1990
                                </option> <option value="1991"
                                <?php if ('1991' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>1991
                                </option> <option value="1992"
                                <?php if ('1992' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>1992
                                </option> <option value="1993"
                                <?php if ('1993' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>1993
                                </option> <option value="1994"
                                <?php if ('1994' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>1994
                                </option> <option value="1995"
                                <?php if ('1995' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>1995
                                </option> <option value="1996"
                                <?php if ('1996' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>1996
                                </option> <option value="1997"
                                <?php if ('1997' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>1997
                                </option> <option value="1998"
                                <?php if ('1998' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>1998
                                </option> <option value="1999"
                                <?php if ('1999' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>1999
                                </option> <option value="2000"
                                <?php if ('2000' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>2000
                                </option> <option value="2001"
                                <?php if ('2001' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>2001
                                </option> <option value="2002"
                                <?php if ('2002' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>2002
                                </option> <option value="2003"
                                <?php if ('2003' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>2003
                                </option> <option value="2004"
                                <?php if ('2004' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>2004
                                </option> <option value="2005"
                                <?php if ('2005' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>2005
                                </option> <option value="2006"
                                <?php if ('2006' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>2006
                                </option> <option value="2007"
                                <?php if ('2007' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>2007
                                </option> <option value="2008"
                                <?php if ('2008' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>2008
                                </option> <option value="2009"
                                <?php if ('2009' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>2009
                                </option> <option value="2010"
                                <?php if ('2010' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>2010
                                </option> <option value="2011"
                                <?php if ('2011' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>2011
                                </option> <option value="2012"
                                <?php if ('2012' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>2012
                                </option> <option value="2013"
                                <?php if ('2013' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>2013
                                </option> <option value="2014"
                                <?php if ('2014' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>2014
                                </option> <option value="2015"
                                <?php if ('2015' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>2015
                                </option> <option value="2016"
                                <?php if ('2016' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>2016
                                </option> <option value="2017"
                                <?php if ('2017' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>2017
                                </option> <option value="2018"
                                <?php if ('2018' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>2018
                                </option> <option value="2019"
                                <?php if ('2019' == $_smarty_tpl->tpl_vars['job_3_details']->value['join_date']) {?>selected<?php }?>>2019
                                </option> </select> </div> <div
                                class="col-sm-6 form-group">
                                <label for="sel1">Month</label>
                                <select class="form-control" id="sel1">
                                  <option selected="true" disabled="disabled">Select
                                    Month
                                  </option>
                                  <option>Jan</option>
                                  <option>Feb</option>
                                  <option>Mar</option>
                                  <option>Apr</option>
                                  <option>May</option>
                                  <option>June</option>
                                  <option>July</option>
                                  <option>Aug</option>
                                  <option>Sep</option>
                                  <option>Oct</option>
                                  <option>Nov</option>
                                  <option>Dec</option>
                                </select>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col-sm-6 form-group">
                            <label for="sel1">Worked Till</label>
                            <select
                              class="form-control employeepreviousjobthreeendingyear"
                              id="endingyearthirdjobfill">
                              <option selected="true" disabled="disabled">Select
                                Year
                              </option>
                              <option value="1990"
                                <?php if ('1990' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>1990
                                </option> <option value="1991"
                                <?php if ('1991' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>1991
                                </option> <option value="1992"
                                <?php if ('1992' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>1992
                                </option> <option value="1993"
                                <?php if ('1993' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>1993
                                </option> <option value="1994"
                                <?php if ('1994' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>1994
                                </option> <option value="1995"
                                <?php if ('1995' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>1995
                                </option> <option value="1996"
                                <?php if ('1996' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>1996
                                </option> <option value="1997"
                                <?php if ('1997' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>1997
                                </option> <option value="1998"
                                <?php if ('1998' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>1998
                                </option> <option value="1999"
                                <?php if ('1999' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>1999
                                </option> <option value="2000"
                                <?php if ('2000' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>2000
                                </option> <option value="2001"
                                <?php if ('2001' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>2001
                                </option> <option value="2002"
                                <?php if ('2002' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>2002
                                </option> <option value="2003"
                                <?php if ('2003' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>2003
                                </option> <option value="2004"
                                <?php if ('2004' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>2004
                                </option> <option value="2005"
                                <?php if ('2005' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>2005
                                </option> <option value="2006"
                                <?php if ('2006' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>2006
                                </option> <option value="2007"
                                <?php if ('2007' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>2007
                                </option> <option value="2008"
                                <?php if ('2008' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>2008
                                </option> <option value="2009"
                                <?php if ('2009' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>2009
                                </option> <option value="2010"
                                <?php if ('2010' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>2010
                                </option> <option value="2011"
                                <?php if ('2011' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>2011
                                </option> <option value="2012"
                                <?php if ('2012' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>2012
                                </option> <option value="2013"
                                <?php if ('2013' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>2013
                                </option> <option value="2014"
                                <?php if ('2014' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>2014
                                </option> <option value="2015"
                                <?php if ('2015' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>2015
                                </option> <option value="2016"
                                <?php if ('2016' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>2016
                                </option> <option value="2017"
                                <?php if ('2017' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>2017
                                </option> <option value="2018"
                                <?php if ('2018' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>2018
                                </option> <option value="2019"
                                <?php if ('2019' == $_smarty_tpl->tpl_vars['job_3_details']->value['end_date']) {?>selected<?php }?>>2019
                                </option> </select> </div> <div
                                class="col-sm-6 form-group">
                                <label for="sel1">Month</label>
                                <select class="form-control" id="sel1">
                                  <option selected="true" disabled="disabled">Select
                                    Month
                                  </option>
                                  <option>Jan</option>
                                  <option>Feb</option>
                                  <option>Mar</option>
                                  <option>Apr</option>
                                  <option>May</option>
                                  <option>June</option>
                                  <option>July</option>
                                  <option>Aug</option>
                                  <option>Sep</option>
                                  <option>Oct</option>
                                  <option>Nov</option>
                                  <option>Dec</option>
                                </select>
                          </div>
                        </div>
                                
                                
                                
                                <div class="form-group">
                                  <label for="comment"
                                    >Description of job</label
                                  >
                                  <textarea
                                    class="form-control employeepreviousjobthreedescription"
                                    rows="2"
                                    id="comment"
                                  ><?php echo $_smarty_tpl->tpl_vars['job_3_details']->value['description'];?>
</textarea>
                                </div>
                              </div>
                            </details>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button
                      type="button"
                      class="userProfileUpdate btn witBtn px-5 my-5"
                    >
                      Next
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

 

    <?php echo '<script'; ?>

      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>

      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>

      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>

      src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"
      integrity="sha256-kQ6DQtOnXtjGYnAEMZQjpsioC75ND0K9I8MyjtdLCyk="
      crossorigin="anonymous"
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/sweetalert2@8"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/promise-polyfill"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/smoothscroll.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
      $(window).on('load resize', function() {
        if ($(this).outerWidth() < 992) {
          //768
          $('body')
            .removeClass('sidebar-collapsed')
            .addClass('drawer-sidebar');
        } else {
          $('body').removeClass('drawer-sidebar');
        }
      });

      $(function() {
        $('.js-sidebar-toggler').click(function(e) {
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
 src="<?php echo base_url();?>
/js/user_edit_profile.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    var yearByOrders = {
      1990: ["1990", "1991", "1992", "1994", "1995", "1996", "1997", "1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      1991: ["1991", "1992", "1994", "1995", "1996", "1997", "1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      1992: ["1992", "1994", "1995", "1996", "1997", "1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      1993: ["1993", "1994", "1995", "1996", "1997", "1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      1994: ["1994", "1995", "1996", "1997", "1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      1995: ["1995", "1996", "1997", "1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      1996: ["1996", "1997", "1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      1997: ["1997", "1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      1998: ["1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      1999: ["1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2000: ["2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2001: ["2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2002: ["2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2003: ["2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2004: ["2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2005: ["2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2006: ["2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2007: ["2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2008: ["2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2009: ["2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2010: ["2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2011: ["2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2012: ["2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2013: ["2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2014: ["2014", "2015", "2016", "2017", "2018", "2019"],
      2015: ["2015", "2016", "2017", "2018", "2019"],
      2016: ["2016", "2017", "2018", "2019"],
      2017: ["2017", "2018", "2019"],
      2018: ["2018", "2019"],
      2019: ["2019"]
    }


    function firstjob(value) {
      if (value.length == 0) {
        document.getElementById("endingyearfirstjobfill").innerHTML = "<option></option>";
      }
      else {
        var yearOptions = "";
        for (yearId in yearByOrders[value]) {
          yearOptions += "<option>" + yearByOrders[value][yearId] + "</option>";
        }
        document.getElementById("endingyearfirstjobfill").innerHTML = yearOptions;
      }
    }
    function secondjob(value) {
      if (value.length == 0) {
        document.getElementById("endingyearsecondjobfill").innerHTML = "<option></option>";
      }
      else {
        var yearOptions = "";
        for (yearId in yearByOrders[value]) {
          yearOptions += "<option>" + yearByOrders[value][yearId] + "</option>";
        }
        document.getElementById("endingyearsecondjobfill").innerHTML = yearOptions;
      }
    }
    function thirdjob(value) {
      if (value.length == 0) {
        document.getElementById("endingyearthirdjobfill").innerHTML = "<option></option>";
      }
      else {
        var yearOptions = "";
        for (yearId in yearByOrders[value]) {
          yearOptions += "<option>" + yearByOrders[value][yearId] + "</option>";
        }
        document.getElementById("endingyearthirdjobfill").innerHTML = yearOptions;
      }
    }

  <?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
