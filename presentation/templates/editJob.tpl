{load_presentation_object filename='postedJob' assign='obj'}
{assign var = 'companySessionDetail' value=$smarty.session.companySession}
{assign var="jobDetail" value=$obj->jobDetails.jobDetails}
<!DOCTYPE html>
<html lang="en">

<head>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147066526-1"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){
     dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-147066526-1');
</script>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <link rel="shortcut icon" href="{base_url()}/images/wit-favicon.ico" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css"
    integrity="sha256-PIRVsaP4JdV/TIf1FR8UHy4TFh+LiRqeclYXvCPBeiw=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
  <link rel="stylesheet" href="{base_url()}/styles/job_portal_styles.css?v={jsversion()}" />
  <link href="{base_url()}/styles/wit_job_dashboard.css?v={jsversion()}" rel="stylesheet" />
  <link href="{base_url()}/styles/wit_job_dashboard_two.css?v={jsversion()}" rel="stylesheet" />
    <link href="{base_url()}/styles/employeer_dashboard.css?v={jsversion()}" rel="stylesheet" />
  <title>DASHBOARD | EDIT JOB</title>
</head>

<body>
     <div class="loader"></div>
 <input type="hidden" class="baseUrl" baseUrl={base_url()}/employer>
  <header class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
    <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
      data-target="#sidebar">
      <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
    </a>
     <a class="logo" href="{base_url()}"><img src="{base_url()}/images/witlogo-dashboard-logo.jpeg" width="100" height="60" /></a>
    <button class="navbar-toggler navbar-icon waves-effect waves-light" type="button" data-toggle="collapse"
      data-target="#navbarNav"><i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i></button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav navbar-toolbar ml-auto">
      <li class="text-white mr-md-3 p-2 waves-effect waves-light"
        style="color: #E94161 !important; border: #E94161 1px solid">
        {$companySessionDetail.company_name|@capitalize}
      </li>
      <li>
        <div class="dropDownMain btn-group">
          <button type="button " class="btn rounded-circle dropdown-toggle"
            style="color: #E94161 !important; border: #E94161 1px solid" data-toggle="dropdown" data-display="static"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-tie" style="font-size: 20px;"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-right dropDownMainContent mb-5">
            <h6 class="dropdown-header">{$companySessionDetail.company_name|@capitalize}</h6>
            <h6 class="dropdown-header">
              {$companySessionDetail.email_id}
            </h6>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" type="button">
              <a href='{base_url()}/edit/company_id={$companySessionDetail.id}'> Edit Profile</a>
            </button>
            <button class="dropdown-item" type="button">
             <a href='{base_url()}/changepassword'>Change Password</a>
            </button>
            <button class="dropdown-item logOutBtn">
              <a href=""> Logout</a>
            </button>
          </div>
        </div>
  </div>
  </li>
  </ul>
    </div>
  </header>
    <div id="sidebar" class="sidenav sidenav-fixed expand-lg" style="border-right:1px solid gray;">

    <div class="userImg pt-5 mt-3 text-center" style="box-shadow: 1px 1px 1px 1px gray;">
      <div class="speakerImgDiv text-center">
        <div class="imageContainerSpeaker text-center">
          <img src="{base_url()}/{$companySessionDetail.company_logo}" class="main-image-speaker" alt="" />
        </div>
      </div>
    </div>
    <div class="mt-3  pl-3">
      <nav class="nav flex-column nav-pills">
        <a class="nav-link active" href="{base_url()}/job_portal_dashboard">Dashboard</a>
        <a class="nav-link" href="{base_url()}/post_jobs">Post Jobs</a>
      </nav>
    </div>
  </div>


  <div class="docs-content-wrapper" style="background-color: #ececec;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 offset-sm-2 my-2" style="position: sticky; top:64px; z-index:200;">
                  <div class="container">
                <h4 class="text-center p-2  bg-white" style=" border: 1px solid #0000003d;">Edit Job</h4>
                </div>
              </div>
              <div class="col-sm-8 offset-sm-2 mb-5">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <form>
                        <input type="hidden" value={$jobDetail.job_id} class="job_id">
                        <div class="col-sm-12 p-4 bg-white" style="border: 1px solid #0000003d;">
                          <div class="form-group">
                            <label for="jobtitle">Job Title / Designation<span class="text-danger">*</span></label>
                            <input type="text" class="form-control jobtitle" id="jobtitle" placeholder="" required
                              value="{$jobDetail.job_title}" />
                          </div>


                          <div class="form-group">
                            <label for="comment">Describe Something About Job<span class="text-danger">*</span></label>
                            <textarea class="form-control jobdesc" rows="3"  name="content" id="editor">{$jobDetail.job_description}</textarea>
                          </div>

                          <div class="form-group">
                            <label for="sel1">Qualification<span class="text-danger">*</span></label>
                            <select class="js-example-basic-multiple qualificationInput" name="qualification"
                              multiple="multiple" style="width: 100% !important;">
                              <option value="10th" {if in_array('10th',$jobDetail.qualificationArray)}selected{/if}>10th
                                </option> <option value="12th" {if
                                in_array('12th',$jobDetail.qualificationArray)}selected{/if}>12th </option> <option
                                value="BBA" {if in_array('BBA',$jobDetail.qualificationArray)}selected{/if}>BBA
                                </option> <option value="BSc" {if
                                in_array('BSc',$jobDetail.qualificationArray)}selected{/if}>B. Sc</option> <option
                                value="BCA" {if in_array('BCA',$jobDetail.qualificationArray)}selected{/if}>BCA
                                </option> <option value="BTech" {if
                                in_array('BTech',$jobDetail.qualificationArray)}selected{/if}>B. Tech</option> <option
                                value="MBA" {if in_array('MBA',$jobDetail.qualificationArray)}selected{/if}>MBA
                                </option> <option value="BE" {if
                                in_array('BE',$jobDetail.qualificationArray)}selected{/if}>B.E. </option> <option
                                value="MCA" {if in_array('MCA',$jobDetail.qualificationArray)}selected{/if}>MCA
                                </option> <option value="MTech" {if
                                in_array('MTech',$jobDetail.qualificationArray)}selected{/if}>M. Tech</option> <option
                                value="PHD" {if in_array('PHD',$jobDetail.qualificationArray)}selected{/if}>PHD
                                </option> </select> </div> <div class="form-group">
                                <label for="">Work Experience<span class="text-danger">*</span></label>
                                <select class="js-example-basic-single form-control experienceInput" name="experience"
                                  style="width: 100% !important;">

                                  <option selected="true" disabled>Select</option>
                                  <option value="{$jobDetail.work_experience}" selected>{$jobDetail.work_experience}
                                  </option>
                                  <option value="freshers">Freshers</option>
                                  <option value="0-3">0-3 Year</option>
                                  <option value="3-6">3-6 Year</option>
                                  <option value="6-10">6-10 Year</option>
                                  <option value="10+">10+ Year</option>
                                </select>
                          </div>
                          <div class="form-group">
                            <label for="">Skills<span class="text-danger">*</span></label>
                            <select class="skills-required-for-job skillsInput" name="skills" multiple="multiple"
                              style="width: 100% !important;">

                              <option value="HTML" {if
                                in_array('HTML',$jobDetail.required_skills_array)}selected{/if}>HTML </option> <option
                                value="CSS" {if in_array('CSS',$jobDetail.required_skills_array)}selected{/if}>CSS
                                </option> <option value="JavaScript" {if
                                in_array('JavaScript',$jobDetail.required_skills_array)}selected{/if}>JavaScript </option>
                                <option value="Java" {if
                                in_array('Java',$jobDetail.required_skills_array)}selected{/if}>Java </option> <option
                                value="NodeJs" {if
                                in_array('NodeJs',$jobDetail.required_skills_array)}selected{/if}>NodeJs </option>
                                <option value="Angular2+" {if
                                in_array('Angular2+',$jobDetail.required_skills_array)}selected{/if}>Angular2+ </option>
                                <option value="Angularjs" {if
                                in_array('Angularjs',$jobDetail.required_skills_array)}selected{/if}>AngularJs </option>
                                <option value="JQuery" {if
                                in_array('JQuery',$jobDetail.required_skills_array)}selected{/if}>JQuery </option>
                                <option value="Python" {if
                                in_array('Python',$jobDetail.required_skills_array)}selected{/if}>Python </option>
                                <option value="BigData" {if
                                in_array('BigData',$jobDetail.required_skills_array)}selected{/if}>Big Data</option>
                                <option value="DataScience" {if
                                in_array('DataScience',$jobDetail.required_skills_array)}selected{/if}>Data Science
                                </option> </select> </div> </div>
                                <div class="col-sm-12 my-2 py-2 bg-white p-4" style="border: 1px solid #0000003d;">
                                    <label for="">Job Type<span class="text-danger">*</span></label>
                                <div class="form-group">
                                  <div class="form-row">
                                    <div class="col-sm-4 py-2">
                                      <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input cb" id="customSwitch1"
                                          name="companyjobtype" value="Full Time" onchange="cbChange(this)" {if
                                          $jobDetail.job_type=='Full Time' }checked{/if} />
                                        <label class="custom-control-label" for="customSwitch1">Full Time</label>
                                      </div>
                                    </div>
                                    <div class="col-sm-4 text-left py-2">
                                      <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input cb" id="customSwitch2"
                                          name="companyjobtype" value="Part Time" onchange="cbChange(this)" {if
                                          $jobDetail.job_type=='Part Time' }checked{/if} />
                                        <label class="custom-control-label" for="customSwitch2">Part Time</label>
                                      </div>
                                    </div>
                                    <div class="col-sm-4 text-left py-2">
                                      <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input cb" id="customSwitch3"
                                          name="companyjobtype" value="Remote Working" onchange="cbChange(this)" {if
                                          $jobDetail.job_type=='Remote Working' }checked{/if} />
                                        <label class="custom-control-label" for="customSwitch3">Remote Working</label>
                                      </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="col-sm-4 py-2">
                                      <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input cb" id="customSwitch4"
                                          name="companyjobtype" value="Paid Internship" onchange="cbChange(this)" {if
                                          $jobDetail.job_type=='Paid Internship' }checked{/if} />
                                        <label class="custom-control-label" for="customSwitch4">Paid Internship</label>
                                      </div>
                                    </div>
                                    <div class="col-sm-4 text-left py-2">
                                      <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input cb" id="customSwitch5"
                                          name="companyjobtype" value="Unpaid Internship" onchange="cbChange(this)" {if
                                          $jobDetail.job_type=='Unpaid Internship' }checked{/if} />
                                        <label class="custom-control-label" for="customSwitch5">Unpaid Internship</label>
                                      </div>
                                    </div>
                                    <div class="col-sm-4 text-left py-2">
                                      <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input cb" id="customSwitch6"
                                          name="companyjobtype" value="volunteer" onchange="cbChange(this)" {if
                                          $jobDetail.job_type=='volunteer' }checked{/if} />
                                        <label class="custom-control-label" for="customSwitch6">Volunteer</label>
                                      </div>
                                    </div>
                                    
                                    <div class="col-sm-4 offset-sm-4 text-left py-2">
                                      <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input cb" id="customSwitch7"
                                          name="companyjobtype" value="Consultant" onchange="cbChange(this)" {if
                                          $jobDetail.job_type=='Consultant' }checked{/if} />
                                        <label class="custom-control-label" for="customSwitch7">Consultant</label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </div>
                                 <div class="col-sm-12 my-2 py-2 bg-white p-4" style="border: 1px solid #0000003d;">
                                <div class="form-group">
                                  <label for="">Job Location<span class="text-danger">*</span></label>
                                  <select class="job-location jobLocationInput" name="city"
                                    style="width: 100% !important;">
                                    <option selected="true" disabled>Select location</option>
                                    <option value="{$jobDetail.job_location}" selected>{$jobDetail.job_location}
                                    </option>
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
                                  <label for="">Functional Area<span class="text-danger">*</span></label>
                                  <select class="functional-area jobfunctionalareaInput" name="functionalarea"
                                    multiple="multiple" style="width: 100% !important;">
<option value="Art Director / Graphic / Web Designer" {if in_array('Art Director / Graphic / Web Designer',$jobDetail.job_functional_area_array)}selected{/if}>Art Director / Graphic / Web Designer</option>
<option value="Audit" {if in_array('Audit',$jobDetail.job_functional_area_array)}selected{/if}>Audit</option>
<option value="Accounting / finance" {if in_array('Accounting / finance',$jobDetail.job_functional_area_array)}selected{/if}>Accounting / finance</option>
<option value="Computer Operator / Data Entry" {if in_array('Computer Operator / Data Entry',$jobDetail.job_functional_area_array)}selected{/if}>Computer Operator / Data Entry</option>
<option value="Database Administrator / Data Warehouse" {if in_array('Database Administrator / Data Warehouse',$jobDetail.job_functional_area_array)}selected{/if}>Database Administrator / Data Warehouse</option>
<option value="Digital Marketing / SEM / SEO" {if in_array('Digital Marketing / SEM / SEO',$jobDetail.job_functional_area_array)}selected{/if}>Digital Marketing / SEM / SEO</option>
<option value="HR" {if in_array('HR',$jobDetail.job_functional_area_array)}selected{/if}>HR</option>
<option value="Management" {if in_array('Management',$jobDetail.job_functional_area_array)}selected{/if}>Management</option> 
<option value="Network Administrator" {if in_array('Network Administrator',$jobDetail.job_functional_area_array)}selected{/if}>Network Administrator</option>
<option value="Operations" {if in_array('Operations',$jobDetail.job_functional_area_array)}selected{/if}>Operations</option>
<option value="Project Management" {if in_array('Project Management',$jobDetail.job_functional_area_array)}selected{/if}>Project Management</option> 
<option value="Software Development" {if in_array('Software Development',$jobDetail.job_functional_area_array)}selected{/if}>Software Development</option>
<option value="Software Testing" {if in_array('Software Testing',$jobDetail.job_functional_area_array)}selected{/if}>Software Testing</option>
<option value="Sales / Marketing" {if in_array('Sales / Marketing',$jobDetail.job_functional_area_array)}selected{/if}>Sales / Marketing </option>
<option value="WebDesigner / UI / UX Designer" {if in_array('WebDesigner / UI / UX Designer',$jobDetail.job_functional_area_array)}selected{/if}>WebDesigner / UI / UX Designer</option>
<option value="Others" {if in_array('Others',$jobDetail.job_functional_area_array)}selected{/if}>Others</option>
                                      </select>
                                      </div>
                                      <div class="form-group">
                                      <label for="">Industry Type<span class="text-danger">*</span></label>
                                      <select class="industry-type jobIndustryInput" name="industrytype"
                                        multiple="multiple" style="width: 100% !important;">
                                        
                              <option value="Accounting / Finance" {if in_array('Accounting / Finance',$jobDetail.job_industry_array)}selected{/if}>Accounting / Finance</option>
                              <option value="Banking / Financial Services" {if in_array('Banking / Financial Services',$jobDetail.job_industry_array)}selected{/if}>Banking / Financial Services</option>
                              <option value="IT-Hardware and Networking" {if in_array('IT-Hardware and Networking',$jobDetail.job_industry_array)}selected{/if}>IT-Hardware and Networking</option>
                              <option value="Medical / Healthcare" {if in_array('Medical / Healthcare',$jobDetail.job_industry_array)}selected{/if}>Medical / Healthcare</option>
                              <option value="Telecom / ISP" {if in_array('Telecom / ISP',$jobDetail.job_industry_array)}selected{/if}>Telecom / ISP</option>
                              <option value="Recruitment / Staffing" {if in_array('Recruitment / Staffing',$jobDetail.job_industry_array)}selected{/if}>Recruitment / Staffing</option>
                              <option value="KPO, Research, Analytics" {if in_array('KPO, Research, Analytics',$jobDetail.job_industry_array)}selected{/if}>KPO, Research, Analytics</option>
                              <option value="Internet, E-commerce" {if in_array('Internet, E-commerce',$jobDetail.job_industry_array)}selected{/if}>Internet, E-commerce</option>
                              <option value="IT-Software, Software Services" {if in_array('IT-Software, Software Services',$jobDetail.job_industry_array)}selected{/if}>IT-Software, Software Services</option>
                              <option value="Education, Teaching, Training" {if in_array('Education, Teaching, Training',$jobDetail.job_industry_array)}selected{/if}>Education, Teaching, Training</option>
                              <option value="Other" {if in_array('Other',$jobDetail.job_industry_array)}selected{/if}>Other</option>
                            </select>
                                </div>
                          </div>
                          <div class="col-sm-12  my-2 py-2 bg-white p-4" style="border: 1px solid #0000003d;">
                            <div class="form-group">
                              <label for="numberofopening jobNumberInput">Number of opening<span class="text-danger">*</span></label>

                              <input type="text" class="form-control" id="numberofopening"
                                placeholder="enter number of opening" value="{$jobDetail.total_openings}" required />
                            </div>
                    
                              <div class="form-row">
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label for="startDate">Deadline Date<span class="text-danger">*</span></label>
                                    <input type="date" name="somedate" class="form-control jobStartDateInput"
                                      value="{$jobDetail.deadline_date}" required />
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                     <div class="form-group">
                              <label for="salary">Salary<span class="text-danger">*</span></label>
                              <input type="number" pattern="\d*" maxlength="10" class="form-control jobSalaryInput"
                                value="{$jobDetail.salary_provide}" id="salary" placeholder="enter offer salary" required />
                            </div> 
                                </div>
                              </div>
                    </div>
                          <div class="col-sm-12 bg-white my-2 py-2 text-center " style="border: 1px solid #0000003d;">
                            <button class="btn witBtn px-5 updateJob">
                              UPDATE
                            </button>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"
    integrity="sha256-kQ6DQtOnXtjGYnAEMZQjpsioC75ND0K9I8MyjtdLCyk=" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
     <script type="text/javascript" src="{base_url()}/js/editJob.js?v={jsversion()}"></script>
  <script>
    $(document).ready(function () {
      $('.js-example-basic-multiple').select2({
        tags: true,
        placeholder: 'Qualification Required',
        allowClear: true
      });
      $('.skills-required-for-job').select2({
        tags: true,
        placeholder: 'Skills Required',
        allowClear: true
      });
      $('.functional-area').select2({
        tags: true,
        placeholder: 'Functional Area Required',
        allowClear: true
      });
      $('.industry-type').select2({
        tags: true,
        placeholder: 'Industry Type Required',
        allowClear: true
      });

      $('.job-location').select2({
        placeholder: 'Job Location Required'
      });

      $('.js-example-basic-single').select2({
        placeholder: 'Experience Required'
      });
    });
  </script>

 
  <script src="{base_url()}/js/smoothscroll.js?v={jsversion()}"></script>
  <script type="text/javascript">
    $(window).on('load resize', function () {
      if ($(this).outerWidth() < 992) {
        //768
        $('body')
          .removeClass('sidebar-collapsed')
          .addClass('drawer-sidebar');
      } else {
        $('body').removeClass('drawer-sidebar');
      }
    });

    $(function () {
      $('.js-sidebar-toggler').click(function (e) {
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
       $('.logOutBtn').on('click', function() {
    var baseUrl = $('.baseUrl').attr('baseUrl');

    $.ajax({
      url: 'index.php?job_portal_dashboard=true',
      dataType: 'json',
      type: 'post',
      data: {
        logOut: true
      },
      success: function(response) {
        window.location = baseUrl;
      }
    });
  });
    });
  </script>
  <script>
    function cbChange(obj) {
      var cbs = document.getElementsByClassName('cb');
      for (var i = 0; i < cbs.length; i++) {
        cbs[i].checked = false;
      }
      obj.checked = true;
    }
  </script>
   <script>
    var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("somedate")[0].setAttribute('min', today);
  </script>

</body>

</html>