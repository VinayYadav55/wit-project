<?php
/* Smarty version 3.1.33, created on 2019-10-24 07:41:16
  from 'C:\xampp\htdocs\womenintech\presentation\templates\candidate_registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db1397c5986f6_76909000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '167433bb7f1acb609edc89d0f2182daa19c35803' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\candidate_registration.tpl',
      1 => 1571834177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db1397c5986f6_76909000 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'candidate_registration','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);?>
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
    <link rel="shortcut icon" href="images/wit-favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css"
        integrity="sha256-PIRVsaP4JdV/TIf1FR8UHy4TFh+LiRqeclYXvCPBeiw=" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/candidate_registration.css?v=<?php echo jsversion();?>
" />
    <title>WiT | JOB REGISTRATION</title>
</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="loader"></div>
    <div class="container bg-light py-5 mt-5">
        <h1 class="text-center pt-5">Update Profile</h1>
        <div class="row">
            <div class="col-md-6 offset-sm-3 py-2">
                <form action="#">
                    <div class="form-group">
                        <input type="hidden" class="applicantid" id="<?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['id'];?>
">
                    </div>
                    <div class="form-group">
                        <label for="">Preferred City<small class="text-danger">*</small></label>
                        <select class="job-location-cities preferCity" name="cities" multiple="multiple"
                            style="width: 100% !important; border:none;">
                            <option value="Gurgaon">Gurgaon</option>
                            <option value="Delhi NCR">Delhi NCR</option>
                            <option value="Hydrabad">Hydrabad</option>
                            <option value="Bangalore">Bangalore</option>
                            <option value="Chennai">Chennai</option>
                            <option value="Pune">Pune</option>
                            <option value="Kolkatta">Kolkatta</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Jaipur">Jaipur</option>
                            <option value="Indore">Indore</option>
                            <option value="Lucknow">Lucknow</option>
                            <option value="Goa">Goa</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jobtype">Preferred Job Type<small class="text-danger">*</small></label>
                        <select class="employee-job-type preferJobType" name="jobtype" multiple="multiple"
                            style="width: 100% !important; border:none;">
                            <option value="Full Time">Full Time</option>
                            <option value="Part Time">Part Time</option>
                            <option value="Remote Working">Remote Working</option>
                            <option value="Consultant">Consultant</option>
                            <option value="Volunteer">Volunteer</option>
                            <option value="Paid Internship">Paid Internship</option>
                            <option value="Unpaid Internship">Unpaid Internship</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="functionalarea">Select Functional Area<small class="text-danger">*</small></label>
                        <select class="employee-functional-area employeefunctionalArea" name="functionalarea"
                            multiple="multiple" style="width: 100% !important; border:none;">
                            <option value="Art Director / Graphic / Web Designer">Art Director / Graphic / Web Designer
                            </option>
                            <option value="Audit">Audit</option>
                            <option value="Accounting / finance">Accounting / finance</option>
                            <option value="Computer Operator / Data Entry">Computer Operator / Data Entry</option>
                            <option value="Database Administrator / Data Warehouse">Database Administrator / Data
                                Warehouse</option>
                            <option value="Digital Marketing / SEM / SEO">Digital Marketing / SEM / SEO</option>
                            <option value="HR">HR</option>
                            <option value="Management">Management</option>
                            <option value="Network Administrator">Network Administrator</option>
                            <option value="Operations">Operations</option>
                            <option value="Project Management">Project Management</option>
                            <option value="Software Development">Software Development</option>
                            <option value="Software Testing">Software Testing</option>
                            <option value="Sales / Marketing ">Sales / Marketing </option>
                            <option value="WebDesigner / UI / UX Designer">WebDesigner / UI / UX Designer</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="functionalarea">Select Industry Type<small class="text-danger">*</small></label>
                        <select class="employee-industry-type employeeIndustryType" name="functionalarea"
                            multiple="multiple" style="width: 100% !important; border:none;">
                            <option value="Accounting / Finance">Accounting / Finance</option>
                            <option value="Banking / Financial Services">Banking / Financial Services</option>
                            <option value="IT- Hardware and Networking">IT- Hardware and Networking</option>
                            <option value="Medical / Healthcare">Medical / Healthcare</option>
                            <option value="Telecom / ISP">Telecom / ISP</option>
                            <option value="Recruitment / Staffing">Recruitment / Staffing</option>
                            <option value="KPO / Research / Analytics">KPO / Research / Analytics</option>
                            <option value="Internet / E-commerce">Internet / E-commerce</option>
                            <option value="IT-Software / Software Services">IT-Software / Software Services</option>
                            <option value="Education / Teaching / Training">Education / Teaching / Training</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Year of Experience<small class="text-danger">*</small></label>
                        <div class="form-group">
                            <select class="select-experience employeeExperience" name="state"
                                style="width: 100% !important;">
                                <option disabled="disabled" selected="true">Select</option>
                                <option value="0-3">0-3 Year</option>
                                <option value="3-6">3-6 Year</option>
                                <option value="6-10">6-10 Year</option>
                                <option value="10+">10+ Year</option>
                            </select>
                        </div>
                    </div>

                    <div class="accordion py-2" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Education
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <details class="mt-3">
                                        <summary class="bg-light"
                                            style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;">
                                            10th<small class="text-danger">*</small>
                                        </summary>
                                        <div class="form-group employeehighschoolrecord">
                                            <label for="">Board Name</label>
                                            <input type="text" class="form-control employeehighschoolboardname"
                                                placeholder="C.B.S.E. etc" />
                                        </div>
                                        <div class="form-group employeehighschoolrecord">
                                            <label for="">School Name</label>
                                            <input type="text" class="form-control employeehighschoolschoolname"
                                                placeholder="D.P.S. etc" />
                                        </div>
                                        <div class="form-group employeehighschoolrecord">
                                            <label for="">Year of Complition</label>
                                            <input type="text" class="form-control employeehighschoolpassingyear"
                                                placeholder="2002 etc" />
                                        </div>
                                        <div class="form-group employeehighschoolrecord">
                                            <label for="">Percentage/ Marks</label><small> (After marks add % / cgpa /
                                                gpa)</small>
                                            <input type="text" class="form-control employeehighschoolpercentage"
                                                placeholder="95.6% etc" />
                                        </div>
                                    </details>
                                    <details class="mt-3">
                                        <summary class="bg-light"
                                            style="border: 1px solid #e6e4e4;outline: none; box-shadow: none;">
                                            12th<small class="text-danger">*</small>
                                        </summary>
                                        <div class="form-group employeehighersecondaryrecord">
                                            <label for="">Board Name</label>
                                            <input type="text" class="form-control employeehighersecondaryboardname"
                                                placeholder="C.B.S.E etc" />
                                        </div>
                                        <div class="form-group employeehighersecondaryrecord">
                                            <label for="">School Name</label>
                                            <input type="text" class="form-control employeehighersecondaryschoolname"
                                                placeholder="D.P.S. etc" />
                                        </div>
                                        <div class="form-group employeehighersecondaryrecord">
                                            <label for="">Year of Complition</label>
                                            <input type="text" class="form-control employeehighersecondarypassingyear"
                                                placeholder="2004 etc" />
                                        </div>
                                        <div class="form-group employeehighersecondaryrecord">
                                            <label for="">Percentage/ Marks</label><small> (After marks add % / cgpa /
                                                gpa)</small>
                                            <input type="text" class="form-control employeehighersecondarypercentage"
                                                placeholder="92.6% etc" />
                                        </div>
                                    </details>
                                    <!-- ************************************-->

                                    <details class="mt-3">
                                        <summary class="bg-light"
                                            style="border: 1px solid #e6e4e4;outline: none; box-shadow: none;">
                                            Graduation / Diploma<small class="text-danger">*</small></summary>
                                        <div class="form-group">
                                            <label for="">College/Institute</label>
                                            <input type="text" class="form-control employeegraduationinstitute"
                                                placeholder="IIT Delhi etc" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Course</label>
                                            <input type="text" class="form-control employeegraduationcourse"
                                                placeholder="MBA etc" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Specilization</label>
                                            <input type="text" class="form-control employeegraduationspecilization"
                                                placeholder="Finance etc" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Year of Complition</label>
                                            <input type="text" class="form-control employeegraduationpassingyear"
                                                placeholder="2011 etc" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Percentage/ CGPA/ GPA</label> <small> (After marks add % /
                                                cgpa / gpa)</small>
                                            <input type="text" class="form-control employeegraduationpercentage"
                                                placeholder="9.5 cgpa etc" />
                                        </div>
                                    </details>

                                    <!-- *************************** -->

                                    <details class="mt-3">
                                        <summary class="bg-light"
                                            style="border: 1px solid #e6e4e4;outline: none; box-shadow: none;">Post
                                            Graduation</summary>
                                        <div class="form-group">
                                            <label for="">College/Institute</label>
                                            <input type="text" class="form-control employeepostgraduationinstitute"
                                                placeholder="IIT Bombay etc" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Course</label>
                                            <input type="text" class="form-control employeepostgraduationcourse"
                                                placeholder="MTech etc" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Specilization</label>
                                            <input type="text" class="form-control employeepostgraduationspecilization"
                                                placeholder="CS etc" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Year of Complition</label>
                                            <input type="text" class="form-control employeepostgraduationpassingyear"
                                                placeholder="2011 etc" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Percentage/ CGPA/ GPA</label><small> (After marks add % / cgpa
                                                / gpa)</small>
                                            <input type="text" class="form-control employeepostgraduationpercentage"
                                                placeholder="7.5 cgpa etc" />
                                        </div>
                                    </details>

                                    <!-- ****************************************** -->

                                    <details class="mt-3">
                                        <summary class="bg-light"
                                            style="border: 1px solid #e6e4e4;outline: none; box-shadow: none;">Other
                                            Qualification <small> (If any)</small></summary>
                                        <div class="form-group">
                                            <label for="">College/Institute</label>
                                            <input type="text" class="form-control employeeotherinstitute"
                                                placeholder="NIT Surathkal etc" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Course</label>
                                            <input type="text" class="form-control employeeothercourse"
                                                placeholder="Phd etc" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Specilization</label>
                                            <input type="text" class="form-control employeeotherspecilization"
                                                placeholder="Data Science etc" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Year of Complition</label>
                                            <input type="text" class="form-control employeeotherpassingyear"
                                                placeholder="2018 etc" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Percentage/ CGPA/ GPA</label><small> (After marks add % / cgpa
                                                / gpa)</small>
                                            <input type="text" class="form-control employeeotherpercentage"
                                                placeholder="cgpa percentage etc" />
                                        </div>
                                    </details>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Skills
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="form-group">
                                        <select class="employee-skills employeeskills" name="skills" multiple="multiple"
                                            style="width: 100% !important;">
                                            <option value="HTML">HTML</option>
                                            <option value="CSS">CSS</option>
                                            <option value="JavaScript">JavaScript</option>
                                            <option value="Java">Java</option>
                                            <option value="NodeJs">NodeJs</option>
                                            <option value="Angular2+">Angular2+</option>
                                            <option value="Angularjs">AngularJs</option>
                                            <option value="JQuery">JQuery</option>
                                            <option value="Python">Python</option>
                                            <option value="BigData">Big Data</option>
                                            <option value="DataScience">Data Science</option>
                                        </select>
                                        <small>
                                            (**Type your skills and press enter or choose from list)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Projects
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <details class="mt-3">
                                        <summary class="bg-light"
                                            style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;">Project
                                            1<small> (If any)</small></summary>
                                        <div class="form-group">
                                            <label for="">Project Title</label>
                                            <input type="text" class="form-control employeeprojectonetitle"
                                                placeholder="Restaurant finder etc" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Project Description</label>
                                            <input type="text" class="form-control employeeprojectonedescription"
                                                placeholder="Project description..." />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Year of Complition</label>
                                            <input type="text" class="form-control employeeprojectoneyearcomplition"
                                                placeholder="2008 etc" />
                                        </div>
                                    </details>

                                    <details class="mt-3">
                                        <summary class="bg-light"
                                            style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;">Project
                                            2 <small> (If any)</small></summary>
                                        <div class="form-group">
                                            <label for="">Project Title</label>
                                            <input type="text" class="form-control employeeprojecttwotitle"
                                                placeholder="Indian tourism etc" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Project Description</label>
                                            <input type="text" class="form-control employeeprojecttwodescription"
                                                placeholder="Project description..." />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Year of Complition</label>
                                            <input type="text" class="form-control employeeprojecttwoyearcomplition"
                                                placeholder="2002 etc" />
                                        </div>
                                    </details>
                                    <details class="mt-3">
                                        <summary class="bg-light"
                                            style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;">Project
                                            3 <small> (If any)</small></summary>

                                        <div class="form-group">
                                            <label for="">Project Title</label>
                                            <input type="text" class="form-control employeeprojectthreetitle"
                                                placeholder="Library management system etc" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Project Description</label>
                                            <input type="text" class="form-control employeeprojectthreedescription"
                                                placeholder="Project description..." />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Year of Complition</label>
                                            <input type="text" class="form-control employeeprojectthreeyearcomplition"
                                                placeholder="2002 etc" />
                                        </div>
                                    </details>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Personal Details
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <label for="">Date of Birth</label>
                                            <input type="date" class="form-control employeedob" />
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="sel1">Marital Status</label>
                                            <select class="form-control employeemaritalstatus" id="sel1">
                                                <option selected="true" disabled="disabled">Select</option>
                                                <option>Single/Unmarried</option>
                                                <option>Married</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="comment">Permanent Address</label>
                                        <textarea class="form-control employeepermanentaddress" rows="2"
                                            id="comment"></textarea>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <label for="">HomeTown</label>
                                            <input type="text" class="form-control employeehometown" />
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="">Zip</label>
                                            <input type="text" class="form-control employeeaddresszip" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="py-2 px-4 bg-light" style="border: 1px solid #dcdcdc;">
                            <label for="" class="">Are you currently working?</label><br />
                            <label for="">Yes</label>
                            <input type="radio" class="currentJobDiv" name="workingcurrently" id="watch-me" />&nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp;
                            <label for="">No</label>
                            <input type="radio" class="currentJobDivNo" name="workingcurrently" id="jhjyg" checked />
                        </div>

                        <div class="card" id="show-me" style="display: none;">
                            <div class="card-header" id="headingSix">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Add Current Employment
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="p-1 bg-light" style="border: 1px solid #dcdcdc;">
                                        <div class="form-group">
                                            <label for="">Add Designation</label>
                                            <input type="text" class="form-control employeecurrentdesignation" />
                                        </div>
                                        <div class="form-group">
                                            <label for="sel1">Add Organization</label>
                                            <input type="text" class="form-control employeecurrentorganization" />
                                        </div>
                                        <div class="form-row">
                                            <div class="col-sm-6 form-group">
                                                <label for="sel1">Starting Working From</label>
                                                <select class="form-control employeecurrentstartingyear" id="sel1">
                                                    <option selected="true" disabled="disabled">Select Year</option>
                                                    <option>1989</option>
                                                    <option>1990</option>
                                                    <option>1991</option>
                                                    <option>1992</option>
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
                                                <select class="form-control employeecurrentstartingmonth" id="sel1">
                                                    <option selected="true" disabled="disabled">Select Month</option>
                                                    <option>Jan</option>
                                                    <option>Feb</option>
                                                    <option>Mar</option>
                                                    <option>Apr</option>
                                                    <option>May</option>
                                                    <option>Jun</option>
                                                    <option>Jul</option>
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
                                            <input type="text" class="form-control employeecurrentsalary" />
                                        </div>
                                        <div class="form-group">
                                            <label for="comment">Description of job</label>
                                            <textarea class="form-control employeecurrentjobdescription" rows="2"
                                                id="comment"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-2 px-4 bg-light" style="border: 1px solid #dcdcdc;">
                        <label for="" class="">Have you worked previously?</label><br />
                        <label for="">Yes</label>
                        <input type="radio" class="previousJobDiv" name="workedbefore"
                            id="watch-me-previous-job" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp;
                        <label for="">No</label>
                        <input type="radio" class="previousJobDivNo" name="workedbefore" id="hjh" checked />
                    </div>
                    <div class="accordion" id="accordionExampletwo">
                        <div class="card" id="show-me-previous-job" style="display: none;">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Experiences
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordionExampletwo">
                                <div class="card-body employmentDetailsDiv">
                                    <!-- *****************************-->
                                    <details class="mt-3">
                                        <summary class="bg-light"
                                            style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;">
                                            Experience
                                        </summary>

                                        <div class="p-1 bg-light" style="border: 1px solid #dcdcdc;">
                                            <div class="form-group">
                                                <label for="">Add Designation</label>
                                                <input type="text"
                                                    class="form-control employeepreviousjobonedesignation" />
                                            </div>
                                            <div class="form-group">
                                                <label for="sel1">Add Organization</label>
                                                <input type="text"
                                                    class="form-control employeepreviousjoboneorganization" />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-sm-6 form-group">
                                                    <label for="sel1">Worked From</label>
                                                    <select class="form-control employeepreviousjobonestartingyear"
                                                        id="sel1" onChange="firstjob(this.value);">
                                                        <option selected="true" disabled="disabled">Select Year</option>
                                                        <option value="1990">1990</option>
                                                        <option value="1991">1991</option>
                                                        <option value="1992">1992</option>
                                                        <option value="1993">1993</option>
                                                        <option value="1994">1994</option>
                                                        <option value="1995">1995</option>
                                                        <option value="1996">1996</option>
                                                        <option value="1997">1997</option>
                                                        <option value="1998">1998</option>
                                                        <option value="1999">1999</option>
                                                        <option value="2000">2000</option>
                                                        <option value="2001">2001</option>
                                                        <option value="2002">2002</option>
                                                        <option value="2003">2003</option>
                                                        <option value="2004">2004</option>
                                                        <option value="2005">2005</option>
                                                        <option value="2006">2006</option>
                                                        <option value="2007">2007</option>
                                                        <option value="2008">2008</option>
                                                        <option value="2009">2009</option>
                                                        <option value="2010">2010</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label for="sel1">Month</label>
                                                    <select class="form-control" id="sel1">
                                                        <option selected="true" disabled="disabled">Select Month
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
                                                    <select class="form-control employeepreviousjoboneendingyear"
                                                        id="endingyearfirstjobfill">
                                                        <option selected="true" disabled="disabled">Select Year</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label for="sel1">Month</label>
                                                    <select class="form-control" id="sel1">
                                                        <option selected="true" disabled="disabled">Select Month
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
                                                <label for="comment">Description of job</label>
                                                <textarea class="form-control employeepreviousjobonedescription"
                                                    rows="2" id="comment"></textarea>
                                            </div>
                                        </div>
                                    </details>

                                    <details class="mt-3">
                                        <summary class="bg-light"
                                            style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;">
                                            Experience
                                        </summary>

                                        <div class="p-1 bg-light" style="border: 1px solid #dcdcdc;">
                                            <div class="form-group">
                                                <label for="">Add Designation</label>
                                                <input type="text"
                                                    class="form-control employeepreviousjobtwodesignation" />
                                            </div>
                                            <div class="form-group">
                                                <label for="sel1">Add Organization</label>
                                                <input type="text"
                                                    class="form-control employeepreviousjobtwoorganization" />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-sm-6 form-group">
                                                    <label for="sel1">Worked From</label>
                                                    <select class="form-control employeepreviousjobtwostartingyear"
                                                        onChange="secondjob(this.value);" id="sel1">
                                                        <option selected="true" disabled="disabled">Select Year</option>
                                                        <option value="1990">1990</option>
                                                        <option value="1991">1991</option>
                                                        <option value="1992">1992</option>
                                                        <option value="1993">1993</option>
                                                        <option value="1994">1994</option>
                                                        <option value="1995">1995</option>
                                                        <option value="1996">1996</option>
                                                        <option value="1997">1997</option>
                                                        <option value="1998">1998</option>
                                                        <option value="1999">1999</option>
                                                        <option value="2000">2000</option>
                                                        <option value="2001">2001</option>
                                                        <option value="2002">2002</option>
                                                        <option value="2003">2003</option>
                                                        <option value="2004">2004</option>
                                                        <option value="2005">2005</option>
                                                        <option value="2006">2006</option>
                                                        <option value="2007">2007</option>
                                                        <option value="2008">2008</option>
                                                        <option value="2009">2009</option>
                                                        <option value="2010">2010</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label for="sel1">Month</label>
                                                    <select class="form-control" id="sel1">
                                                        <option selected="true" disabled="disabled">Select Month
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
                                                    <select class="form-control employeepreviousjobtwoendingyear"
                                                        id="endingyearsecondjobfill">
                                                        <option selected="true" disabled="disabled">Select Year</option>

                                                    </select>
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label for="sel1">Month</label>
                                                    <select class="form-control" id="sel1">
                                                        <option selected="true" disabled="disabled">Select Month
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
                                                <label for="comment">Description of job</label>
                                                <textarea class="form-control employeepreviousjobtwodescription"
                                                    rows="2" id="comment"></textarea>
                                            </div>
                                        </div>
                                    </details>

                                    <details class="mt-3">
                                        <summary class="bg-light"
                                            style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;">
                                            Experience
                                        </summary>

                                        <div class="p-1 bg-light" style="border: 1px solid #dcdcdc;">
                                            <div class="form-group">
                                                <label for="">Add Designation</label>
                                                <input type="text"
                                                    class="form-control employeepreviousjobthreedesignation" />
                                            </div>
                                            <div class="form-group">
                                                <label for="sel1">Add Organization</label>
                                                <input type="text"
                                                    class="form-control employeepreviousjobthreeorganization" />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-sm-6 form-group">
                                                    <label for="sel1">Worked From</label>
                                                    <select class="form-control employeepreviousjobthreestartingyear"
                                                        id="sel1" onChange="thirdjob(this.value);">
                                                        <option selected="true" disabled="disabled">Select Year</option>
                                                        <option value="1990">1990</option>
                                                        <option value="1991">1991</option>
                                                        <option value="1992">1992</option>
                                                        <option value="1993">1993</option>
                                                        <option value="1994">1994</option>
                                                        <option value="1995">1995</option>
                                                        <option value="1996">1996</option>
                                                        <option value="1997">1997</option>
                                                        <option value="1998">1998</option>
                                                        <option value="1999">1999</option>
                                                        <option value="2000">2000</option>
                                                        <option value="2001">2001</option>
                                                        <option value="2002">2002</option>
                                                        <option value="2003">2003</option>
                                                        <option value="2004">2004</option>
                                                        <option value="2005">2005</option>
                                                        <option value="2006">2006</option>
                                                        <option value="2007">2007</option>
                                                        <option value="2008">2008</option>
                                                        <option value="2009">2009</option>
                                                        <option value="2010">2010</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label for="sel1">Month</label>
                                                    <select class="form-control" id="sel1">
                                                        <option selected="true" disabled="disabled">Select Month
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
                                                    <label for="endingyearfill">Worked Till</label>
                                                    <select class="form-control employeepreviousjobthreeendingyear"
                                                        id="endingyearthirdjobfill">
                                                        <option selected="true" disabled="disabled">Select Year</option>

                                                    </select>
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label for="sel1">Month</label>
                                                    <select class="form-control" id="sel1">
                                                        <option selected="true" disabled="disabled">Select Month
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
                                                <label for="comment">Description of job</label>
                                                <textarea class="form-control employeepreviousjobthreedescription"
                                                    rows="2" id="comment"></textarea>
                                            </div>
                                        </div>
                                    </details>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group py-3">
                        <label for="contactemail">Contact Email<small class="text-danger">*</small></label>
                        <input type="text" class="form-control contactEmail" name="email" id="contactemail"
                            placeholder="Enter email" />
                    </div>
                    <div class="form-group">
                        <label for="contactphone">Contact Phone<small class="text-danger">*</small></label>
                        <input type="text" class="form-control contactPhone" name="phone" id="contactphone"
                            placeholder="Enter phone" />
                    </div>
                    <div class="py-3">
                        <button type="button" class="btn witBtn px-5 py-2 employeeJobRegistration">
                            Next
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!--       
             <div
              class="g-recaptcha form-group"
              data-sitekey="6LdZfLAUAAAAAINb8k9mD2M0A6nShj8SmEoqJ1Sb"
            ></div> -->
    <!-- <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js"><?php echo '</script'; ?>
> -->
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"
        integrity="sha256-kQ6DQtOnXtjGYnAEMZQjpsioC75ND0K9I8MyjtdLCyk=" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/candidate_registration.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
