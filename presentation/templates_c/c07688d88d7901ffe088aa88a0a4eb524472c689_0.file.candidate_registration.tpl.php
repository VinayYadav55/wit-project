<?php
/* Smarty version 3.1.33, created on 2019-08-27 17:04:55
  from '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/candidate_registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d6562b70110c2_65162741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c07688d88d7901ffe088aa88a0a4eb524472c689' => 
    array (
      0 => '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/candidate_registration.tpl',
      1 => 1566925490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d6562b70110c2_65162741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/vipananwebtest/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'candidate_registration','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="images/wit-favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css"
        integrity="sha256-PIRVsaP4JdV/TIf1FR8UHy4TFh+LiRqeclYXvCPBeiw=" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/job_title.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
    <title>Home|WIT</title>
</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="overlay-loader-div">
        <img src="images/pinkloader.gif" width="100" height="100" class="overlay-img-loader" alt="" />
    </div>
    <div class="container bg-light py-5">
        <h1 class="text-center ">Update Profile</h1>
        <div class="row">
            <div class="col-md-6 offset-sm-3 py-2">
                <form action="#">

                    <div class="form-group">
                        <input type="hidden" class="applicantid" id="<?php echo $_smarty_tpl->tpl_vars['userSessionDetail']->value['id'];?>
">
                    </div>

                    <div class="form-group">
                        <label for="">Preferred City</label>
                        <select class="job-location-cities preferCity" name="cities" multiple="multiple"
                            style="width: 100% !important; border:none;">
                            <option value="Gurgaon">Gurgaon</option>
                            <option value="Delhi NCR">Delhi NCR</option>
                            <option value="Hydrabad">Hydrabad</option>
                            <option value="Bangalore">Bangalore</option>
                            <option value="Chennai">Chennai</option>
                            <option value="Kolkatta">Kolkatta</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Jaipur">Jaipur</option>
                            <option value="Indore">Indore</option>
                            <option value="Lucknow">Lucknow</option>
                            <option value="Goa">Goa</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jobtype">Preferred Job Type</label>
                        <select class="employee-job-type preferJobType" name="jobtype" multiple="multiple"
                            style="width: 100% !important; border:none;">
                            <option value="fulltime">Full Time</option>
                            <option value="parttime">Part Time</option>
                            <option value="workfromhome">Work From Home</option>
                            <option value="freelancer">Freelancer</option>
                            <option value="volunteer">Volunteer</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="functionalarea">Select Functional Area</label>
                        <select class="employee-functional-area employeefunctionalArea" name="functionalarea"
                            multiple="multiple" style="width: 100% !important; border:none;">
                            <option value="Art Director/Graphic/Web Designer">Art Director/Graphic/Web Designer</option>
                            <option value="Computer Operator / Data Entry">Computer Operator / Data Entry</option>
                            <option value="Database Administrator/Data Warehouse">Database Administrator/Data Warehouse
                            </option>
                            <option value="Digital Marketing/SEM/SEO">Digital Marketing/SEM/SEO</option>
                            <option value="Network Administrator">Network Administrator</option>
                            <option value="WebDesigner/UI/UX Designer">WebDesigner/UI/UX Designer</option>
                            <option value="Software Development">Software Development</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="functionalarea">Select Industry Type</label>
                        <select class="employee-industry-type employeeIndustryType" name="functionalarea"
                            multiple="multiple" style="width: 100% !important; border:none;">
                            <option value="IT Software/ Software Services">IT Software/ Software Services</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Year of Experience</label>
                        <div class="form-group">
                            <select class="select-experience employeeExperience" name="state"
                                style="width: 100% !important;">
                                <option disabled="disabled" selected="true">From Year</option>
                                <option value="freshers">Freshers</option>
                                <option value="1">1 Year</option>
                                <option value="2">2 Year</option>
                                <option value="3">3 Year</option>
                                <option value="4">4 Year</option>
                                <option value="5">5 Year</option>
                                <option value="6">6 Year</option>
                            </select>
                        </div>
                    </div>

                    <!-- <div class="form-group my-4 py-4 bg-light" style="border: 1px solid #c3c3c3;">
                        <label for="">Upload Resume</label>

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" />
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div> -->
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
                                            style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;">10th
                                        </summary>
                                        <div class="form-group employeehighschoolrecord">
                                            <label for="">Board Name</label>
                                            <input type="text" class="form-control employeehighschoolboardname"
                                                placeholder="eg:Up Board" />
                                        </div>
                                        <div class="form-group employeehighschoolrecord">
                                            <label for="">School Name</label>
                                            <input type="text" class="form-control employeehighschoolschoolname"
                                                placeholder="eg:DPS" />
                                        </div>
                                        <div class="form-group employeehighschoolrecord">
                                            <label for="">Year of Complition</label>
                                            <input type="text" class="form-control employeehighschoolpassingyear"
                                                placeholder="eg:2002" />
                                        </div>
                                        <div class="form-group employeehighschoolrecord">
                                            <label for="">Percentage/ Marks</label>
                                            <input type="text" class="form-control employeehighschoolpercentage"
                                                placeholder="eg:95.6%" />
                                        </div>
                                    </details>
                                    <details class="mt-3">
                                        <summary class="bg-light"
                                            style="border: 1px solid #e6e4e4;outline: none; box-shadow: none;">12th
                                        </summary>
                                        <div class="form-group employeehighersecondaryrecord">
                                            <label for="">Board Name</label>
                                            <input type="text" class="form-control employeehighersecondaryboardname"
                                                placeholder="eg:Up Board" />
                                        </div>
                                        <div class="form-group employeehighersecondaryrecord">
                                            <label for="">School Name</label>
                                            <input type="text" class="form-control employeehighersecondaryschoolname"
                                                placeholder="eg:DPS" />
                                        </div>
                                        <div class="form-group employeehighersecondaryrecord">
                                            <label for="">Year of Complition</label>
                                            <input type="text" class="form-control employeehighersecondarypassingyear"
                                                placeholder="eg:2002" />
                                        </div>
                                        <div class="form-group employeehighersecondaryrecord">
                                            <label for="">Percentage/ Marks</label>
                                            <input type="text" class="form-control employeehighersecondarypercentage"
                                                placeholder="eg:95.6%" />
                                        </div>
                                    </details>
                                    <!-- ************************************-->

                                    <details class="mt-3">
                                        <summary class="bg-light"
                                            style="border: 1px solid #e6e4e4;outline: none; box-shadow: none;">
                                            Graduation / Diploma</summary>
                                        <div class="form-group">
                                            <label for="">College/Institute</label>
                                            <input type="text" class="form-control employeegraduationinstitute"
                                                placeholder="eg:IIT Delhi" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Course</label>
                                            <input type="text" class="form-control employeegraduationcourse"
                                                placeholder="eg:MBA" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Specilization</label>
                                            <input type="text" class="form-control employeegraduationspecilization"
                                                placeholder="eg:Finance" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Year of Complition</label>
                                            <input type="text" class="form-control employeegraduationpassingyear"
                                                placeholder="eg:2011" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Percentage/ CGPA/ GPA</label>
                                            <input type="text" class="form-control employeegraduationpercentage"
                                                placeholder="eg:9.5 cgpa" />
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
                                                placeholder="eg:IIT Delhi" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Course</label>
                                            <input type="text" class="form-control employeepostgraduationcourse"
                                                placeholder="eg:MBA" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Specilization</label>
                                            <input type="text" class="form-control employeepostgraduationspecilization"
                                                placeholder="eg:Finance" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Year of Complition</label>
                                            <input type="text" class="form-control employeepostgraduationpassingyear"
                                                placeholder="eg:2011" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Percentage/ CGPA/ GPA</label>
                                            <input type="text" class="form-control employeepostgraduationpercentage"
                                                placeholder="eg:9.5 cgpa" />
                                        </div>
                                    </details>

                                    <!-- ****************************************** -->

                                    <details class="mt-3">
                                        <summary class="bg-light"
                                            style="border: 1px solid #e6e4e4;outline: none; box-shadow: none;">Other
                                            Qualification</summary>
                                        <div class="form-group">
                                            <label for="">College/Institute</label>
                                            <input type="text" class="form-control employeeotherinstitute"
                                                placeholder="eg:IIT Delhi" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Course</label>
                                            <input type="text" class="form-control employeeothercourse"
                                                placeholder="eg:MBA" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Specilization</label>
                                            <input type="text" class="form-control employeeotherspecilization"
                                                placeholder="eg:Finance" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Year of Complition</label>
                                            <input type="text" class="form-control employeeotherpassingyear"
                                                placeholder="eg:2011" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Percentage/ CGPA/ GPA</label>
                                            <input type="text" class="form-control employeeotherpercentage"
                                                placeholder="eg:9.5 cgpa" />
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
                                            1</summary>
                                        <div class="form-group">
                                            <label for="">Project Title</label>
                                            <input type="text" class="form-control employeeprojectonetitle"
                                                placeholder="eg:restaurant finder" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Project Description</label>
                                            <input type="text" class="form-control employeeprojectonedescription"
                                                placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Year of Complition</label>
                                            <input type="text" class="form-control employeeprojectoneyearcomplition"
                                                placeholder="eg:2002" />
                                        </div>
                                    </details>

                                    <details class="mt-3">
                                        <summary class="bg-light"
                                            style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;">Project
                                            2</summary>
                                        <div class="form-group">
                                            <label for="">Project Title</label>
                                            <input type="text" class="form-control employeeprojecttwotitle"
                                                placeholder="eg:indian tourism" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Project Description</label>
                                            <input type="text" class="form-control employeeprojecttwodescription"
                                                placeholder="eg:project description" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Year of Complition</label>
                                            <input type="text" class="form-control employeeprojecttwoyearcomplition"
                                                placeholder="eg:2002" />
                                        </div>
                                    </details>
                                    <details class="mt-3">
                                        <summary class="bg-light"
                                            style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;">Project
                                            3</summary>

                                        <div class="form-group">
                                            <label for="">Project Title</label>
                                            <input type="text" class="form-control employeeprojectthreetitle"
                                                placeholder="eg:project title" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Project Description</label>
                                            <input type="text" class="form-control employeeprojectthreedescription"
                                                placeholder="eg:project description" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Year of Complition</label>
                                            <input type="text" class="form-control employeeprojectthreeyearcomplition"
                                                placeholder="eg:2002" />
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
                                    <div class="form-group">
                                        <label for="">Date of Birth</label>
                                        <input type="date" class="form-control employeedob" />
                                    </div>
                                    <div class="form-group">
                                        <label for="sel1">Marital Status</label>
                                        <select class="form-control employeemaritalstatus" id="sel1">
                                            <option selected="true" disabled="disabled">Select</option>
                                            <option>Single/Unmarried</option>
                                            <option>Married</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="comment">Permanent Address</label>
                                        <textarea class="form-control employeepermanentaddress" rows="2"
                                            id="comment"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">HomeTown</label>
                                        <input type="text" class="form-control employeehometown" />
                                    </div>
                                    <div class="form-group">
                                        <label for="">Zip</label>
                                        <input type="text" class="form-control employeeaddresszip" />
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
                                                    <option selected="true" disabled="disabled">select year</option>
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
                                        Add Employment
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordionExampletwo">
                                <div class="card-body employmentDetailsDiv">
                                    <!-- *****************************-->
                                    <details class="mt-3">
                                        <summary class="bg-light"
                                            style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;">job1
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
                                                    <label for="sel1">Starting Working From</label>
                                                    <select class="form-control employeepreviousjobonestartingyear"
                                                        id="sel1" onChange="firstjob(this.value);">
                                                        <option selected="true" disabled="disabled">select year</option>
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
                                                    <select class="form-control employeepreviousjoboneendingyear"
                                                        id="endingyearfirstjobfill">
                                                        <option selected="true" disabled="disabled">select year</option>
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
                                                <label for="comment">Description of job</label>
                                                <textarea class="form-control employeepreviousjobonedescription"
                                                    rows="2" id="comment"></textarea>
                                            </div>
                                        </div>
                                    </details>

                                    <details class="mt-3">
                                        <summary class="bg-light"
                                            style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;">job2
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
                                                    <label for="sel1">Starting Working From</label>
                                                    <select class="form-control employeepreviousjobtwostartingyear"
                                                    onChange="secondjob(this.value);"
                                                        id="sel1">
                                                        <option selected="true" disabled="disabled">select year</option>
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
                                                    <select class="form-control employeepreviousjobtwoendingyear"
                                         id="endingyearsecondjobfill">
                                                        <option selected="true" disabled="disabled">select year</option>
                                                        
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
                                                <label for="comment">Description of job</label>
                                                <textarea class="form-control employeepreviousjobtwodescription"
                                                    rows="2" id="comment"></textarea>
                                            </div>
                                        </div>
                                    </details>

                                    <details class="mt-3">
                                        <summary class="bg-light"
                                            style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;">job3
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
                                                    <label for="sel1">Starting Working From</label>
                                                    <select class="form-control employeepreviousjobthreestartingyear"
                                                        id="sel1" onChange="thirdjob(this.value);">
                                                        <option selected="true" disabled="disabled">Select year</option>
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
                                                        <option selected="true" disabled="disabled">Select year</option>
                                                    
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
                        <label for="contactemail">Contact Email</label>
                        <input type="text" class="form-control contactEmail" name="email" id="contactemail"
                            placeholder="enter email" />
                    </div>
                    <div class="form-group">
                        <label for="contactphone">Contact Phone</label>
                        <input type="text" class="form-control contactPhone" name="phone" id="contactphone"
                            placeholder="enter phone" />
                    </div>
                    <div class="py-1">
                        <button type="button" class="btn witBtn px-3 py-2 employeeJobRegistration">
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <?php echo '<script'; ?>
 src="libs/jquery/jquery.js"><?php echo '</script'; ?>
> -->
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
    <!-- <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js"><?php echo '</script'; ?>
> -->
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"
        integrity="sha256-kQ6DQtOnXtjGYnAEMZQjpsioC75ND0K9I8MyjtdLCyk=" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/candidate_registration.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
