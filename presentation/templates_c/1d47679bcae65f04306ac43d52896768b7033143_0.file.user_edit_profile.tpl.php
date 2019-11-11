<?php
/* Smarty version 3.1.33, created on 2019-08-22 10:01:19
  from 'C:\xampp\htdocs\djdfbf\sanjeev\presentation\templates\user_edit_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5e4bcf449773_04856437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d47679bcae65f04306ac43d52896768b7033143' => 
    array (
      0 => 'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\templates\\user_edit_profile.tpl',
      1 => 1566460640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5e4bcf449773_04856437 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
$_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);
echo smarty_function_load_presentation_object(array('filename'=>'jobCandidateList','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('candidateDetail', $_smarty_tpl->tpl_vars['obj']->value->applicantDetails);?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>RBS|Dashbaord</title>
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
/styles/wit_job_dashboard.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>
/styles/user_dashboard.css" rel="stylesheet" />
  </head>
  <body>
      <input type="hidden" baseUrl=<?php echo base_url();?>
 class="baseUrl">
   <div class="overlay-loader-div">
    <img src="images/pinkloader.gif" class="overlay-img-loader" alt="" />
  </div>
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
      <a class="logo bg-white" href="#"
        ><img
          src="images/witlogo-logo.png"
          width="100"
          height="50"
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
            <div class="nav-link waves-effect waves-light logOutBtn">LogOut</div>
        </li>
        </ul>
      </div>
    </header>
    <div
      id="sidebar"
      class="sidenav sidenav-fixed expand-lg"
      style="border-right:1px solid gray;"
    >
      <div class="userImg pt-5 mt-3 border border-dark ">
        <div class="speakerImgDiv">
          <div class="imageContainerSpeaker">
            <img
              src="images/Manikandan Thangarathnam.jpeg"
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

    <div class="docs-content-wrapper border border-dark">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="container bg-light py-5">
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
                        ><option value="Chennai" <?php if (in_array('Chennai',$_smarty_tpl->tpl_vars['preferedCity']->value)) {?>selected<?php }?>>Chennai</option
                        ><option value="Kolkatta" <?php if (in_array('Kolkatta',$_smarty_tpl->tpl_vars['preferedCity']->value)) {?>selected<?php }?>>Kolkatta</option
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
                        <option value="fulltime" <?php if (in_array('fulltime',$_smarty_tpl->tpl_vars['prefered_job_types']->value)) {?>selected<?php }?>>Full Time</option>
                        <option value="parttime" <?php if (in_array('parttime',$_smarty_tpl->tpl_vars['prefered_job_types']->value)) {?>selected<?php }?>>Part Time</option>
                        <option value="workfromhome" <?php if (in_array('workfromhome',$_smarty_tpl->tpl_vars['prefered_job_types']->value)) {?>selected<?php }?>>Work From Home</option>
                        <option value="freelancer" <?php if (in_array('freelancer',$_smarty_tpl->tpl_vars['prefered_job_types']->value)) {?>selected<?php }?>>Freelancer</option
                        ><option value="volunteer" <?php if (in_array('volunteer',$_smarty_tpl->tpl_vars['prefered_job_types']->value)) {?>selected<?php }?>>Volunteer</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="functionalarea">Select Functional Area</label>
                      <select
                        class="employee-functional-area employeefunctionalArea"
                        name="functionalarea"
                        multiple="multiple"
                        style="width: 100% !important; border:none;"
                      ><?php $_smarty_tpl->_assignInScope('functional_area', $_smarty_tpl->tpl_vars['candidateDetail']->value['functional_area_array']);?>
                        <option value="Art Director/Graphic/Web Designer" <?php if (in_array('Art Director/Graphic/Web Designer',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>
                          >Art Director/Graphic/Web Designer</option
                        >
                        <option value="Computer Operator / Data Entry" <?php if (in_array('Computer Operator / Data Entry',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>
                          >Computer Operator / Data Entry</option
                        >
                        <option value="Database Administrator/Data Warehouse" <?php if (in_array('Database Administrator/Data Warehouse',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>
                          >Database Administrator/Data Warehouse</option
                        >
                        <option value="Digital Marketing/SEM/SEO" <?php if (in_array('Digital Marketing/SEM/SEO',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>
                          >Digital Marketing/SEM/SEO</option
                        ><option value="Network Administrator" <?php if (in_array('Network Administrator',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>
                          >Network Administrator</option
                        >
                        <option value="WebDesigner/UI/UX Designer" <?php if (in_array('WebDesigner/UI/UX Designer',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>
                          >WebDesigner/UI/UX Designer</option
                        >
                        <option value="Software Development" <?php if (in_array('Software Development',$_smarty_tpl->tpl_vars['functional_area']->value)) {?>selected<?php }?>
                          >Software Development</option
                        >
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
                      
                        <option value="IT Software/ Software Services" <?php if (in_array('IT Software/ Software Services',$_smarty_tpl->tpl_vars['industry_type']->value)) {?>selected<?php }?>
                          >IT Software/ Software Services</option
                        >
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
                            >From Year</option
                          >
                          <option value="freshers" <?php if ('freshers' == $_smarty_tpl->tpl_vars['experience']->value) {?>selected<?php }?>>Freshers</option>
                          <option value="1" <?php if ('1' == $_smarty_tpl->tpl_vars['experience']->value) {?>selected<?php }?>>1 Year</option>
                          <option value="2" <?php if ('2' == $_smarty_tpl->tpl_vars['experience']->value) {?>selected<?php }?>>2 Year</option>
                          <option value="3" <?php if ('3' == $_smarty_tpl->tpl_vars['experience']->value) {?>selected<?php }?>>3 Year</option>
                          <option value="4" <?php if ('4' == $_smarty_tpl->tpl_vars['experience']->value) {?>selected<?php }?>>4 Year</option>
                          <option value="5" <?php if ('5' == $_smarty_tpl->tpl_vars['experience']->value) {?>selected<?php }?>>5 Year</option>
                          <option value="6" <?php if ('6' == $_smarty_tpl->tpl_vars['experience']->value) {?>selected<?php }?>>6 Year</option>
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
                                  placeholder="eg:Up Board"
                                  value=<?php echo $_smarty_tpl->tpl_vars['class_10_details']->value['BoardName'];?>


                                />
                              </div>
                              <div class="form-group employeehighschoolrecord">
                                <label for="">School Name</label>
                                <input
                                  type="text"
                                  class="form-control employeehighschoolschoolname"
                                  placeholder="eg:DPS"
                                  value=<?php echo $_smarty_tpl->tpl_vars['class_10_details']->value['schoolName'];?>

                                />
                              </div>
                              <div class="form-group employeehighschoolrecord">
                                <label for="">Year of Complition</label>
                                <input
                                  type="text"
                                  class="form-control employeehighschoolpassingyear"
                                  placeholder="eg:2002"
                                  value=<?php echo $_smarty_tpl->tpl_vars['class_10_details']->value['passingYear'];?>

                                />
                              </div>
                              <div class="form-group employeehighschoolrecord">
                                <label for="">Percentage/ Marks</label>
                                <input
                                  type="text"
                                  class="form-control employeehighschoolpercentage"
                                  placeholder="eg:95.6%"
                                  value=<?php echo $_smarty_tpl->tpl_vars['class_10_details']->value['percentage'];?>

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
                                  placeholder="eg:Up Board"
                                  value=<?php echo $_smarty_tpl->tpl_vars['class_12_details']->value['BoardName'];?>

                                />
                              </div>
                              <div
                                class="form-group employeehighersecondaryrecord"
                              >
                                <label for="">School Name</label>
                                <input
                                  type="text"
                                  class="form-control employeehighersecondaryschoolname"
                                  placeholder="eg:DPS"
                                  value=<?php echo $_smarty_tpl->tpl_vars['class_12_details']->value['schoolName'];?>

                                />
                              </div>
                              <div
                                class="form-group employeehighersecondaryrecord"
                              >
                                <label for="">Year of Complition</label>
                                <input
                                  type="text"
                                  class="form-control employeehighersecondarypassingyear"
                                  placeholder="eg:2002"
                                  value=<?php echo $_smarty_tpl->tpl_vars['class_12_details']->value['passingYear'];?>

                                />
                              </div>
                              <div
                                class="form-group employeehighersecondaryrecord"
                              >
                                <label for="">Percentage/ Marks</label>
                                <input
                                  type="text"
                                  class="form-control employeehighersecondarypercentage"
                                  placeholder="eg:95.6%"
                                  value=<?php echo $_smarty_tpl->tpl_vars['class_12_details']->value['percentage'];?>

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
                                  placeholder="eg:IIT Delhi"
                                  value=<?php echo $_smarty_tpl->tpl_vars['grd_details']->value['collegeName'];?>

                                />
                              </div>
                              <div class="form-group">
                                <label for="">Course</label>
                                <input
                                  type="text"
                                  class="form-control employeegraduationcourse"
                                  placeholder="eg:MBA"
                                  value=<?php echo $_smarty_tpl->tpl_vars['grd_details']->value['course'];?>

                                />
                              </div>
                              <div class="form-group">
                                <label for="">Specilization</label>
                                <input
                                  type="text"
                                  class="form-control employeegraduationspecilization"
                                  placeholder="eg:Finance"
                                  value=<?php echo $_smarty_tpl->tpl_vars['grd_details']->value['Specilization'];?>

                                />
                              </div>
                              <div class="form-group">
                                <label for="">Year of Complition</label>
                                <input
                                  type="text"
                                  class="form-control employeegraduationpassingyear"
                                  placeholder="eg:2011"
                                  value=<?php echo $_smarty_tpl->tpl_vars['grd_details']->value['Year_of_Complition'];?>

                                />
                              </div>
                              <div class="form-group">
                                <label for="">Percentage/ CGPA/ GPA</label>
                                <input
                                  type="text"
                                  class="form-control employeegraduationpercentage"
                                  placeholder="eg:9.5 cgpa"
                                  value=<?php echo $_smarty_tpl->tpl_vars['grd_details']->value['percentage'];?>

                                />
                              </div>
                            </details>

                            <!-- *************************** -->

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
                                  placeholder="eg:IIT Delhi"
                                  value=<?php echo $_smarty_tpl->tpl_vars['pg_details']->value['collegeName'];?>

                                />
                              </div>
                              <div class="form-group">
                                <label for="">Course</label>
                                <input
                                  type="text"
                                  class="form-control employeepostgraduationcourse"
                                  placeholder="eg:MBA"
                                  value=<?php echo $_smarty_tpl->tpl_vars['pg_details']->value['course'];?>

                                />
                              </div>
                              <div class="form-group">
                                <label for="">Specilization</label>
                                <input
                                  type="text"
                                  class="form-control employeepostgraduationspecilization"
                                  placeholder="eg:Finance"
                                  value=<?php echo $_smarty_tpl->tpl_vars['pg_details']->value['Specilization'];?>

                                />
                              </div>
                              <div class="form-group">
                                <label for="">Year of Complition</label>
                                <input
                                  type="text"
                                  class="form-control employeepostgraduationpassingyear"
                                  placeholder="eg:2011"
                                  value=<?php echo $_smarty_tpl->tpl_vars['pg_details']->value['Year_of_Complition'];?>

                                />
                              </div>
                              <div class="form-group">
                                <label for="">Percentage/ CGPA/ GPA</label>
                                <input
                                  type="text"
                                  class="form-control employeepostgraduationpercentage"
                                  placeholder="eg:9.5 cgpa"
                                  value=<?php echo $_smarty_tpl->tpl_vars['pg_details']->value['percentage'];?>

                                />
                              </div>
                            </details>

                            <!-- ****************************************** -->

                            <details class="mt-3">
                              <?php $_smarty_tpl->_assignInScope('other_class_details', $_smarty_tpl->tpl_vars['candidateDetail']->value['educationDetails'][4]);?>
                              <summary
                                class="bg-light"
                                style="border: 1px solid #e6e4e4;outline: none; box-shadow: none;"
                                >Other Qualification</summary
                              >
                              <div class="form-group">
                                <label for="">College/Institute</label>
                                <input
                                  type="text"
                                  class="form-control employeeotherinstitute"
                                  placeholder="eg:IIT Delhi"
                                  value=<?php echo $_smarty_tpl->tpl_vars['other_class_details']->value['collegeName'];?>

                                />
                              </div>
                              <div class="form-group">
                                <label for="">Course</label>
                                <input
                                  type="text"
                                  class="form-control employeeothercourse"
                                  placeholder="eg:MBA"
                                  value=<?php echo $_smarty_tpl->tpl_vars['other_class_details']->value['course'];?>

                                />
                              </div>
                              <div class="form-group">
                                <label for="">Specilization</label>
                                <input
                                  type="text"
                                  class="form-control employeeotherspecilization"
                                  placeholder="eg:Finance"
                                  value=<?php echo $_smarty_tpl->tpl_vars['other_class_details']->value['Specilization'];?>

                                />
                              </div>
                              <div class="form-group">
                                <label for="">Year of Complition</label>
                                <input
                                  type="text"
                                  class="form-control employeeotherpassingyear"
                                  placeholder="eg:2011"
                                  value=<?php echo $_smarty_tpl->tpl_vars['other_class_details']->value['Year_of_Complition'];?>

                                />
                              </div>
                              <div class="form-group">
                                <label for="">Percentage/ CGPA/ GPA</label>
                                <input
                                  type="text"
                                  class="form-control employeeotherpercentage"
                                  placeholder="eg:9.5 cgpa"
                                  value=<?php echo $_smarty_tpl->tpl_vars['other_class_details']->value['percentage'];?>

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
                                  placeholder="eg:Up Board"
                                  value="<?php echo $_smarty_tpl->tpl_vars['project_2_details']->value['project_title'];?>
"
                                />
                              </div>
                              <div class="form-group">
                                <label for="">Project Description</label>
                                <input
                                  type="text"
                                  class="form-control employeeprojecttwodescription"
                                  placeholder="eg:DPS"
                                  value="<?php echo $_smarty_tpl->tpl_vars['project_2_details']->value['project_description'];?>
"
                                />
                              </div>
                              <div class="form-group">
                                <label for="">Year of Complition</label>
                                <input
                                  type="text"
                                  class="form-control employeeprojecttwoyearcomplition"
                                  placeholder="eg:2002"
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
                                  placeholder="eg:Up Board"
                                  value='<?php echo $_smarty_tpl->tpl_vars['project_3_details']->value['project_title'];?>
'
                                />
                              </div>
                              <div class="form-group">
                                <label for="">Project Description</label>
                                <input
                                  type="text"
                                  class="form-control employeeprojectthreedescription"
                                  placeholder="eg:DPS"
                                  value="<?php echo $_smarty_tpl->tpl_vars['project_3_details']->value['project_description'];?>
"
                                />
                              </div>
                              <div class="form-group">
                                <label for="">Year of Complition</label>
                                <input
                                  type="text"
                                  class="form-control employeeprojectthreeyearcomplition"
                                  placeholder="eg:2002"
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
                            <div class="form-group">
                              <label for="">Date of Birth</label>
                              <input
                                type="date"
                                class="form-control employeedob"
                                value=<?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['date_of_Birth'];?>

                              />
                            </div>
                            <div class="form-group">
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
                            <div class="form-group">
                              <label for="comment">Permanent Address</label>
                              <textarea
                                class="form-control employeepermanentaddress"
                                rows="2"
                                id="comment"

                                
                              ><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['permanent_address'];?>
</textarea>
                            </div>
                            <div class="form-group">
                              <label for="">HomeTown</label>
                              <input
                                type="text"
                                class="form-control employeehometown"
                                 value = <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['resident_address'];?>

                              />
                            </div>
                            <div class="form-group">
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
                                  value = <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_designation'];?>

                                />
                              </div>
                              <div class="form-group">
                                <label for="sel1">Add Organization</label>
                                <input
                                  type="text"
                                  class="form-control employeecurrentorganization"
                                  value = <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_name'];?>

                                  
                                />
                              </div>
                              <div class="form-row">
                                <div class="col-sm-6 form-group">
                                  <label for="sel1"
                                    >Starting Working From</label
                                  >
                                  <select
                                    class="form-control employeecurrentstartingyear"
                                    id="sel1"
                                  >
                                  <option>1993</option>
                                  <option>1994</option>
                                  <option>1995</option>
                                  <option>1996</option>
                                  <option>1997</option>
                                  <option>1998</option>
                                  <option>1999</option>
                                  <option>2000</option>
                                  <option>2001</option>
                                  <option>2002</option>
                                  <option>2003</option>
                                  <option>2004</option>
                                  <option>2005</option>
                                  <option>2006</option>
                                  <option>2007</option>
                                  <option>2008</option>
                                  <option>2009</option>
                                  <option>2010</option>
                                  <option>2011</option>
                                  <option>2012</option>
                                  <option>2013</option>
                                  <option>2014</option>
                                  <option>2015</option>
                                  <option>2016</option>
                                  <option>2017</option>
                                  <option>2018</option>
                                  <option>2019</option>
                                  </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                  <label for="sel1">Month</label>
                                  <select class="form-control" id="sel1">
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
                                <label for="">Current Salary</label>
                                <input
                                  type="text"
                                  class="form-control employeecurrentsalary"
                                  value = <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_salary'];?>

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
                                    <label for="sel1"
                                      >Starting Working From</label
                                    >
                                    <select
                                      class="form-control employeepreviousjobonestartingyear"
                                      id="sel1"
                                    >
                                    <option>1993</option>
                                    <option>1994</option>
                                    <option>1995</option>
                                    <option>1996</option>
                                    <option>1997</option>
                                    <option>1998</option>
                                    <option>1999</option>
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    </select>
                                  </div>
                                  <div class="col-sm-6 form-group">
                                    <label for="sel1">Month</label>
                                    <select class="form-control" id="sel1">
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
                                    <label for="sel1">Wokred Till</label>
                                    <select
                                      class="form-control employeepreviousjoboneendingyear"
                                      id="sel1"
                                    >
                                    <option>1993</option>
                                    <option>1994</option>
                                    <option>1995</option>
                                    <option>1996</option>
                                    <option>1997</option>
                                    <option>1998</option>
                                    <option>1999</option>
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    </select>
                                  </div>
                                  <div class="col-sm-6 form-group">
                                    <label for="sel1">Month</label>
                                    <select class="form-control" id="sel1">
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
                                    <label for="sel1"
                                      >Starting Working From</label
                                    >
                                    <select
                                      class="form-control employeepreviousjobtwostartingyear"
                                      id="sel1"
                                    >
                                    <option>1993</option>
                                    <option>1994</option>
                                    <option>1995</option>
                                    <option>1996</option>
                                    <option>1997</option>
                                    <option>1998</option>
                                    <option>1999</option>
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    </select>
                                  </div>
                                  <div class="col-sm-6 form-group">
                                    <label for="sel1">Month</label>
                                    <select class="form-control" id="sel1">
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
                                    <label for="sel1">Wokred Till</label>
                                    <select
                                      class="form-control employeepreviousjobtwoendingyear"
                                      id="sel1"
                                    >
                                      <option>1993</option>
                                      <option>1994</option>
                                      <option>1995</option>
                                      <option>1996</option>
                                      <option>1997</option>
                                      <option>1998</option>
                                      <option>1999</option>
                                      <option>2000</option>
                                      <option>2001</option>
                                      <option>2002</option>
                                      <option>2003</option>
                                      <option>2004</option>
                                      <option>2005</option>
                                      <option>2006</option>
                                      <option>2007</option>
                                      <option>2008</option>
                                      <option>2009</option>
                                      <option>2010</option>
                                      <option>2011</option>
                                      <option>2012</option>
                                      <option>2013</option>
                                      <option>2014</option>
                                      <option>2015</option>
                                      <option>2016</option>
                                      <option>2017</option>
                                      <option>2018</option>
                                      <option>2019</option>
                                    </select>
                                  </div>
                                  <div class="col-sm-6 form-group">
                                    <label for="sel1">Month</label>
                                    <select class="form-control" id="sel1">
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
                                    <label for="sel1"
                                      >Starting Working From</label
                                    >
                                    <select
                                      class="form-control employeepreviousjobthreestartingyear"
                                      id="sel1"
                                    >
                                    <option>1993</option>
                                    <option>1994</option>
                                    <option>1995</option>
                                    <option>1996</option>
                                    <option>1997</option>
                                    <option>1998</option>
                                    <option>1999</option>
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    </select>
                                  </div>
                                  <div class="col-sm-6 form-group">
                                    <label for="sel1">Month</label>
                                    <select class="form-control" id="sel1">
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
                                    <label for="sel1">Wokred Till</label>
                                    <select
                                      class="form-control employeepreviousjobthreeendingyear"
                                      id="sel1"
                                    >
                                    <option>1993</option>
                                    <option>1994</option>
                                    <option>1995</option>
                                    <option>1996</option>
                                    <option>1997</option>
                                    <option>1998</option>
                                    <option>1999</option>
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    </select>
                                  </div>
                                  <div class="col-sm-6 form-group">
                                    <label for="sel1">Month</label>
                                    <select class="form-control" id="sel1">
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
                      class="userProfileUpdate btn btn-secondary my-3"
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

    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-6"></div>
          <div class="col-lg-7 col-md-6"></div>
        </div>
        <div class="d-flex justify-content-center">
          <div class="footer-links">
            <a href="#">Wit</a>
          </div>
        </div>
        <div class="text-center font-14 pb-5">
          ©Copyright 2019 - TheVipananCompany. All Rights Reserved.
        </div>
      </div>
    </footer>

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
 src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      $(document).ready(function() {
        $('#example').DataTable();
      });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      $('#customFile').on('change', function() {
        //get the file name
        // var fileName = $(this).val();
        // var fileName = $(this).val();
        var fileName = $(this)
          .val()
          .replace('C:\\fakepath\\', ' ');
        //replace the "Choose a file" label
        $(this)
          .next('.custom-file-label')
          .html(fileName);
      });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/user_edit_profile.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
