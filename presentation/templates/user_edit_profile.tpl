{assign var = 'userSessionDetail' value=$smarty.session.userDetails}
{load_presentation_object filename='jobCandidateList' assign='obj'}
{assign var='candidateDetail' value=$obj->applicantDetails}




{include file='dashheader.tpl'}
<input type="hidden" baseUrl={base_url()} class="baseUrl">
<div class="docs-content-wrapper">
    {if $userSessionDetail.type==='Candidate'}  
    <div class="container-fluid" style="background-color: #ececec;">
    <div class="row">
      <div class="col-sm-12">
        <div class="container bg-white py-5">
          <h1 class="text-center ">Edit Profile</h1>
          <div class="row">
            <div class="col-md-6 offset-sm-3 py-2">
              <form action="#">
                <div class="form-group">
                  <label for="">Preferred City</label>

                  {assign var = 'preferedCity' value=$candidateDetail.prefered_city_array}
                  <select class="job-location-cities preferCity" name="cities" multiple="multiple"
                    style="width: 100% !important; border:none;">
                    <option value="Gurgaon" {if in_array('Gurgaon',$preferedCity)}selected{/if}>Gurgaon </option>
                      <option value="Delhi NCR" {if in_array('DelhiNCR',$preferedCity)}selected{/if}>Delhi NCR</option>
                      <option value="Hydrabad" {if in_array('Hydrabad',$preferedCity)}selected{/if}>Hydrabad </option>
                      <option value="Bangalore" {if in_array('Bangalore',$preferedCity)}selected{/if}>Bangalore
                      </option> <option value="Chennai" {if in_array('Chennai',$preferedCity)}selected{/if}>Chennai
                      </option> <option value="Pune" {if in_array('Pune',$preferedCity)}selected{/if}>Pune </option>
                      <option value="Kolkatta" {if in_array('Kolkatta',$preferedCity)}selected{/if}>Kolkatta </option>
                      <option value="Mumbai" {if in_array('Mumbai',$preferedCity)}selected{/if}>Mumbai </option> <option
                      value="Jaipur" {if in_array('Jaipur',$preferedCity)}selected{/if}>Jaipur </option> <option
                      value="Indore" {if in_array('Indore',$preferedCity)}selected{/if}>Indore </option> <option
                      value="Lucknow" {if in_array('Lucknow',$preferedCity)}selected{/if}>Lucknow </option> <option
                      value="Goa" {if in_array('Goa',$preferedCity)}selected{/if}>Goa </option> </select> </div> <div
                      class="form-group">
                      <label for="jobtype">Preferred Job Type</label>
                      <select class="employee-job-type preferJobType" name="jobtype" multiple="multiple"
                        style="width: 100% !important; border:none;">
                        {assign var = 'prefered_job_types' value=$candidateDetail.prefered_job_types_array}
                        <option value="Full Time" {if in_array('Full Time',$prefered_job_types)}selected{/if}>Full
                          Time</option> <option value="Part Time" {if in_array('Part
                          Time',$prefered_job_types)}selected{/if}>Part Time</option> <option value="Remote Working" {if
                          in_array('Remote Working',$prefered_job_types)}selected{/if}>Remote Working</option> <option
                          value="Consultant" {if in_array('Consultant',$prefered_job_types)}selected{/if}>Consultant
                          </option> <option value="Volunteer" {if
                          in_array('Volunteer',$prefered_job_types)}selected{/if}>Volunteer </option> <option
                          value="Paid Internship" {if in_array('Paid Internship',$prefered_job_types)}selected{/if}>Paid
                          Internship</option> <option value="Unpaid Internship" {if in_array('Unpaid
                          Internship',$prefered_job_types)}selected{/if}>Unpaid Internship</option> </select> </div>
                          <div class="form-group">
                          <label for="functionalarea">Select Functional Area</label>
                          <select class="employee-functional-area employeefunctionalArea" name="functionalarea"
                            multiple="multiple" style="width: 100% !important; border:none;">

                            {assign var = 'functional_area' value=$candidateDetail.functional_area_array}
                            <option value="Art Director / Graphic / Web Designer" {if in_array('Art Director / Graphic /
                              Web Designer',$functional_area)}selected{/if}>Art Director / Graphic / Web
                              Designer</option> <option value="Audit" {if
                              in_array('Audit',$functional_area)}selected{/if}>Audit </option> <option
                              value="Accounting / finance" {if in_array('Accounting /
                              finance',$functional_area)}selected{/if}>Accounting / finance</option> <option
                              value="Computer Operator / Data Entry" {if in_array('Computer Operator / Data
                              Entry',$functional_area)}selected{/if}>Computer Operator / Data Entry</option> <option
                              value="Database Administrator / Data Warehouse" {if in_array('Database / Administrator /
                              Data Warehouse',$functional_area)}selected{/if}>Database Administrator / Data
                              Warehouse</option> <option value="Digital Marketing / SEM / SEO" {if in_array('Digital
                              Marketing / SEM / SEO',$functional_area)}selected{/if}>Digital Marketing / SEM /
                              SEO</option> <option value="HR" {if in_array('HR',$functional_area)}selected{/if}>HR
                              </option> <option value="Management" {if
                              in_array('Management',$functional_area)}selected{/if}>Management </option> <option
                              value="Network Administrator" {if in_array('Network
                              Administrator',$functional_area)}selected{/if}>Network Administrator</option> <option
                              value="Operations" {if in_array('Operations',$functional_area)}selected{/if}>Operations
                              </option> <option value="Project Management" {if in_array('Project
                              Management',$functional_area)}selected{/if}>Project Management</option> <option
                              value="WebDesigner / UI / UX Designer" {if in_array('WebDesigner / UI / UX
                              Designer',$functional_area)}selected{/if}>WebDesigner / UI / UX Designer</ option>
                            <option value="Software Testing" {if in_array('Software
                              Testing',$functional_area)}selected{/if}>Software Testing</option> <option
                              value="Sales / Marketing" {if in_array('Sales /
                              Marketing',$functional_area)}selected{/if}>Sales / Marketing </option> <option
                              value="Software Development" {if in_array('Software
                              Development',$functional_area)}selected{/if}>Software Development</option> <option
                              value="Others" {if in_array('Others',$functional_area)}selected{/if}>Others </option>
                              </select> </div> {assign var='industry_type' value=$candidateDetail.industry_type_array}
                              <div class="form-group">
                              <label for="functionalarea">Select Industry Type</label>
                              <select class="employee-industry-type employeeIndustryType" name="functionalarea"
                                multiple="multiple" style="width: 100% !important; border:none;">
                                <option value="Accounting / Finance" {if in_array('Accounting /
                                  Finance',$industry_type)}selected{/if}>Accounting / Finance</option> <option
                                  value="Banking / Financial Services" {if in_array('Banking / Financial
                                  Services',$industry_type)}selected{/if}>Banking / Financial Services</option> <option
                                  value="IT- Hardware and Networking" {if in_array('IT- Hardware and
                                  Networking',$industry_type)}selected{/if}>IT- Hardware and Networking</option> <option
                                  value="Medical / Healthcare" {if in_array('Medical /
                                  Healthcare',$industry_type)}selected{/if}>Medical / Healthcare</option> <option
                                  value="Telecom / ISP" {if in_array('Telecom /
                                  ISP',$industry_type)}selected{/if}>Telecom / ISP</option> <option
                                  value="Recruitment / Staffing" {if in_array('Recruitment /
                                  Staffing',$industry_type)}selected{/if}>Recruitment / Staffing</option> <option
                                  value="KPO / Research / Analytics" {if in_array('KPO / Research /
                                  Analytics',$industry_type)}selected{/if}>KPO / Research / Analytics</option> <option
                                  value="Internet / E-commerce" {if in_array('Internet /
                                  E-commerce',$industry_type)}selected{/if}>Internet / E-commerce</option> <option
                                  value="IT-Software / Software Services" {if in_array('IT-Software / Software
                                  Services',$industry_type)}selected{/if}>IT-Software / Software Services</option>
                                  <option value="Education / Teaching / Training" {if in_array('Education / Teaching /
                                  Training',$industry_type)}selected{/if}>Education / Teaching / Training</option>
                                  <option value="Others" {if in_array('Others',$industry_type)}selected{/if}>Others
                                  </option> </select> </div> <div class="form-group">
                                  <label for="">Year of Experience</label>
                                  <div class="form-group">
                                    <select class="select-experience employeeExperience" name="state"
                                      style="width: 100% !important;">{assign var = 'experience'
                                      value=$candidateDetail.experience}
                                      <option disabled="disabled" selected="true">Select</option>
                                      <option value="0-3" {if '0-3'==$experience}selected{/if}>0-3 Year</option> <option
                                        value="3-6" {if '3-6'==$experience}selected{/if}>3-6 Year</option> <option
                                        value="6-10" {if '6-10'==$experience}selected{/if}>6-10 Year</option> <option
                                        value="10+" {if '10+'==$experience}selected{/if}>10+ Year</option> </select>
                                        </div> </div> <div class="accordion py-5" id="accordionExample">
                                        <div class="card">
                                          <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                              <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
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
                                                  10th</summary>
                                                {assign var='class_10_details'
                                                value=$candidateDetail.educationDetails[0]}

                                                <div class="form-group employeehighschoolrecord">
                                                  <label for="">Board Name</label>
                                                  <input type="text" class="form-control employeehighschoolboardname"
                                                    placeholder="C.B.S.E. etc" value="{$class_10_details.BoardName}" />
                                                </div>
                                                <div class="form-group employeehighschoolrecord">
                                                  <label for="">School Name</label>
                                                  <input type="text" class="form-control employeehighschoolschoolname"
                                                    placeholder="DPS etc" value="{$class_10_details.schoolName}" />
                                                </div>
                                                <div class="form-group employeehighschoolrecord">
                                                  <label for="">Year of Complition</label>
                                                  <input type="text" class="form-control employeehighschoolpassingyear"
                                                    placeholder="2002 etc" value="{$class_10_details.passingYear}" />
                                                </div>
                                                <div class="form-group employeehighschoolrecord">
                                                  <label for="">Percentage / Marks</label>
                                                  <input type="text" class="form-control employeehighschoolpercentage"
                                                    placeholder="95.6% or 9.5CGPA or 4.5GPA etc"
                                                    value="{$class_10_details.percentage}" />
                                                </div>
                                              </details>
                                              <details class="mt-3">
                                                <summary class="bg-light"
                                                  style="border: 1px solid #e6e4e4;outline: none; box-shadow: none;">
                                                  12th</summary>
                                                {assign var='class_12_details'
                                                value=$candidateDetail.educationDetails[1]}
                                                <div class="form-group employeehighersecondaryrecord">
                                                  <label for="">Board Name</label>
                                                  <input type="text"
                                                    class="form-control employeehighersecondaryboardname"
                                                    placeholder="C.B.S.E etc" value="{$class_12_details.BoardName}" />
                                                </div>
                                                <div class="form-group employeehighersecondaryrecord">
                                                  <label for="">School Name</label>
                                                  <input type="text"
                                                    class="form-control employeehighersecondaryschoolname"
                                                    placeholder="DPS etc" value="{$class_12_details.schoolName}" />
                                                </div>
                                                <div class="form-group employeehighersecondaryrecord">
                                                  <label for="">Year of Complition</label>
                                                  <input type="text"
                                                    class="form-control employeehighersecondarypassingyear"
                                                    placeholder="2002 etc" value="{$class_12_details.passingYear}" />
                                                </div>
                                                <div class="form-group employeehighersecondaryrecord">
                                                  <label for="">Percentage/ Marks</label>
                                                  <input type="text"
                                                    class="form-control employeehighersecondarypercentage"
                                                    placeholder="95.6% or 9.5CGPA or 4.5GPA etc"
                                                    value="{$class_12_details.percentage}" />
                                                </div>
                                              </details>
                                              <!-- ************************************-->

                                              <details class="mt-3">
                                                {assign var='grd_details' value=$candidateDetail.educationDetails[2]}
                                                <summary class="bg-light"
                                                  style="border: 1px solid #e6e4e4;outline: none; box-shadow: none;">
                                                  Graduation / Diploma</summary>
                                                <div class="form-group">
                                                  <label for="">College/Institute</label>
                                                  <input type="text" class="form-control employeegraduationinstitute"
                                                    placeholder="IIT Delhi etc" value="{$grd_details.collegeName}" />
                                                </div>
                                                <div class="form-group">
                                                  <label for="">Course</label>
                                                  <input type="text" class="form-control employeegraduationcourse"
                                                    placeholder="MBA etc" value="{$grd_details.course}" />
                                                </div>
                                                <div class="form-group">
                                                  <label for="">Specilization</label>
                                                  <input type="text"
                                                    class="form-control employeegraduationspecilization"
                                                    placeholder="Finance etc" value="{$grd_details.Specilization}" />
                                                </div>
                                                <div class="form-group">
                                                  <label for="">Year of Complition</label>
                                                  <input type="text" class="form-control employeegraduationpassingyear"
                                                    placeholder="2011 etc" value="{$grd_details.Year_of_Complition}" />
                                                </div>
                                                <div class="form-group">
                                                  <label for="">Percentage / CGPA / GPA</label>
                                                  <input type="text" class="form-control employeegraduationpercentage"
                                                    placeholder="95% or 9.5CGPA or 4.5GPA etc"
                                                    value="{$grd_details.percentage}" />
                                                </div>
                                              </details>



                                              <details class="mt-3">
                                                {assign var='pg_details' value=$candidateDetail.educationDetails[3]}
                                                <summary class="bg-light"
                                                  style="border: 1px solid #e6e4e4;outline: none; box-shadow: none;">
                                                  Post Graduation</summary>
                                                <div class="form-group">
                                                  <label for="">College/Institute</label>
                                                  <input type="text"
                                                    class="form-control employeepostgraduationinstitute"
                                                    placeholder="IIT Delhi etc" value="{$pg_details.collegeName}" />
                                                </div>
                                                <div class="form-group">
                                                  <label for="">Course</label>
                                                  <input type="text" class="form-control employeepostgraduationcourse"
                                                    placeholder="MBA etc" value="{$pg_details.course}" />
                                                </div>
                                                <div class="form-group">
                                                  <label for="">Specilization</label>
                                                  <input type="text"
                                                    class="form-control employeepostgraduationspecilization"
                                                    placeholder="Finance etc" value="{$pg_details.Specilization}" />
                                                </div>
                                                <div class="form-group">
                                                  <label for="">Year of Complition</label>
                                                  <input type="text"
                                                    class="form-control employeepostgraduationpassingyear"
                                                    placeholder="2011 etc" value="{$pg_details.Year_of_Complition}" />
                                                </div>
                                                <div class="form-group">
                                                  <label for="">Percentage / CGPA/ GPA</label>
                                                  <input type="text"
                                                    class="form-control employeepostgraduationpercentage"
                                                    placeholder="95% or 9.5CGPA or 4.5GPA etc"
                                                    value="{$pg_details.percentage}" />
                                                </div>
                                              </details>

                                              <!-- ****************************************** -->

                                              <details class="mt-3">
                                                {assign var='other_class_details'
                                                value=$candidateDetail.educationDetails[4]}
                                                <summary class="bg-light"
                                                  style="border: 1px solid #e6e4e4;outline: none; box-shadow: none;">
                                                  Other Qualification <small>(If any)</small></summary>
                                                <div class="form-group">
                                                  <label for="">College/Institute</label>
                                                  <input type="text" class="form-control employeeotherinstitute"
                                                    placeholder="IIT Bombay etc"
                                                    value="{$other_class_details.collegeName}" />
                                                </div>
                                                <div class="form-group">
                                                  <label for="">Course</label>
                                                  <input type="text" class="form-control employeeothercourse"
                                                    placeholder="Phd etc" value="{$other_class_details.course}" />
                                                </div>
                                                <div class="form-group">
                                                  <label for="">Specilization</label>
                                                  <input type="text" class="form-control employeeotherspecilization"
                                                    placeholder="Data science etc"
                                                    value="{$other_class_details.Specilization}" />
                                                </div>
                                                <div class="form-group">
                                                  <label for="">Year of Complition</label>
                                                  <input type="text" class="form-control employeeotherpassingyear"
                                                    placeholder="2018 etc"
                                                    value="{$other_class_details.Year_of_Complition}" />
                                                </div>
                                                <div class="form-group">
                                                  <label for="">Percentage/ CGPA/ GPA</label>
                                                  <input type="text" class="form-control employeeotherpercentage"
                                                    placeholder="95% or 9.5CGPA or 4.5GPA etc"
                                                    value="{$other_class_details.percentage}" />
                                                </div>
                                              </details>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                              <button class="btn btn-link collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Skills
                                              </button>
                                            </h2>
                                          </div>
                                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                              <div class="form-group">
                                                <select class="employee-skills employeeskills" name="skills"
                                                  multiple="multiple" style="width: 100% !important;">
                                                  {assign var="skillset" value=$candidateDetail.skill_set_array}
                                                  <option value="HTML" {if in_array('HTML',
                                                    $skillset)}selected{/if}>HTML </option> <option value="CSS" {if
                                                    in_array('CSS', $skillset)}selected{/if}>CSS </option> <option
                                                    value="JavaScript" {if in_array('JavaScript',
                                                    $skillset)}selected{/if}>JavaScript </option> <option value="Java"
                                                    {if in_array('Java', $skillset)}selected{/if}>Java </option> <option
                                                    value="NodeJs" {if in_array('NodeJs',
                                                    $skillset)}selected{/if}>NodeJs </option> <option value="Angular2+"
                                                    {if in_array('Angular2', $skillset)}selected{/if}>Angular2+
                                                    </option> <option value="AngularJs" {if in_array('AngularJs',
                                                    $skillset)}selected{/if}>AngularJs </option> <option value="JQuery"
                                                    {if in_array('JQuery', $skillset)}selected{/if}>JQuery </option>
                                                    <option value="Python" {if in_array('Python',
                                                    $skillset)}selected{/if}>Python </option> <option value="BigData"
                                                    {if in_array('BigData', $skillset)}selected{/if}>Big Data</option>
                                                    <option value="DataScience" {if in_array('DataScience',
                                                    $skillset)}selected{/if}>Data Science</option> </select> </div>
                                                    </div> </div> </div> <div class="card">
                                                    <div class="card-header" id="headingThree">
                                                      <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button"
                                                          data-toggle="collapse" data-target="#collapseThree"
                                                          aria-expanded="false" aria-controls="collapseThree">
                                                          Projects
                                                        </button>
                                                      </h2>
                                                    </div>
                                                    <div id="collapseThree" class="collapse"
                                                      aria-labelledby="headingThree" data-parent="#accordionExample">
                                                      <div class="card-body">
                                                        <details class="mt-3">
                                                          <summary class="bg-light"
                                                            style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;">
                                                            Project 1</summary>
                                                          {assign var='project_1_details'
                                                          value=$candidateDetail.projectDetails[0]}
                                                          <div class="form-group">
                                                            <label for="">Project Title</label>
                                                            <input type="text"
                                                              class="form-control employeeprojectonetitle"
                                                              value="{$project_1_details.project_title}" />
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="">Project Description</label>
                                                            <input type="text"
                                                              class="form-control employeeprojectonedescription"
                                                              value="{$project_1_details.project_description}" />
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="">Year of Complition</label>
                                                            <input type="text"
                                                              class="form-control employeeprojectoneyearcomplition"
                                                              value="{$project_1_details.year_of_completion}" />
                                                          </div>
                                                        </details>

                                                        <details class="mt-3">
                                                          <summary class="bg-light"
                                                            style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;">
                                                            Project 2</summary>{assign var='project_2_details'
                                                          value=$candidateDetail.projectDetails[1]}
                                                          <div class="form-group">
                                                            <label for="">Project Title</label>
                                                            <input type="text"
                                                              class="form-control employeeprojecttwotitle"
                                                              placeholder="Library management system etc"
                                                              value="{$project_2_details.project_title}" />
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="">Project Description</label>
                                                            <input type="text"
                                                              class="form-control employeeprojecttwodescription"
                                                              placeholder="Project description..."
                                                              value="{$project_2_details.project_description}" />
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="">Year of Complition</label>
                                                            <input type="text"
                                                              class="form-control employeeprojecttwoyearcomplition"
                                                              placeholder="2002 etc"
                                                              value="{$project_2_details.year_of_completion}" />
                                                          </div>
                                                        </details>
                                                        <details class="mt-3">
                                                          <summary class="bg-light"
                                                            style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;">
                                                            Project 3</summary>
                                                          {assign var='project_3_details'
                                                          value=$candidateDetail.projectDetails[2]}

                                                          <div class="form-group">
                                                            <label for="">Project Title</label>
                                                            <input type="text"
                                                              class="form-control employeeprojectthreetitle"
                                                              placeholder="Indian tourism etc"
                                                              value='{$project_3_details.project_title}' />
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="">Project Description</label>
                                                            <input type="text"
                                                              class="form-control employeeprojectthreedescription"
                                                              placeholder="Project description..."
                                                              value="{$project_3_details.project_description}" />
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="">Year of Complition</label>
                                                            <input type="text"
                                                              class="form-control employeeprojectthreeyearcomplition"
                                                              placeholder="2002 etc"
                                                              value="{$project_3_details.year_of_completion}" />
                                                          </div>
                                                        </details>
                                                      </div>
                                                    </div>
                                              </div>

                                              <div class="card">
                                                <div class="card-header" id="headingFour">
                                                  <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button"
                                                      data-toggle="collapse" data-target="#collapseFour"
                                                      aria-expanded="false" aria-controls="collapseFour">
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
                                                        <input type="date" class="form-control employeedob"
                                                          value={$candidateDetail.date_of_Birth} />
                                                      </div>
                                                      <div class="form-group col-6">
                                                        <label for="sel1">Marital Status</label>
                                                        <select class="form-control employeemaritalstatus" id="sel1">
                                                          <option selected="true" disabled="disabled">Select</option>

                                                          <option value="Single/Unmarried"
                                                            {if 'Single/Unmarried'==$candidateDetail.martial_status}selected{/if}>Single/Unmarried
                                                            </option> <option value="Married"
                                                            {if 'Married'==$candidateDetail.martial_status}selected{/if}>Married
                                                            </option> </select> </div> </div> <div class="form-group">
                                                            <label for="comment">Permanent Address</label>
                                                            <textarea class="form-control employeepermanentaddress"
                                                              rows="2"
                                                              id="comment">{$candidateDetail.permanent_address}</textarea>
                                                      </div>
                                                      <div class="form-row">
                                                        <div class="form-group col-6">
                                                          <label for="">HomeTown</label>
                                                          <input type="text" class="form-control employeehometown"
                                                            value={$candidateDetail.resident_address} />
                                                        </div>
                                                        <div class="form-group col-6">
                                                          <label for="">Zip</label>
                                                          <input type="text" class="form-control employeeaddresszip"
                                                            value={$candidateDetail.pin_code} />
                                                        </div>
                                                      </div>

                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="py-2 px-4 bg-light" style="border: 1px solid #dcdcdc;">
                                                  <label for="" class="">Are you currently working?</label><br />
                                                  <label for="">Yes</label>
                                                  <input type="radio" class="currentJobDiv" name="workingcurrently"
                                                    id="watch-me" value='Yes'
                                                    {if 'Yes'==$candidateDetail.currently_working_status}checked{/if}} />&nbsp;
                                                  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                                  &nbsp; &nbsp;
                                                  <label for="">No</label>
                                                  <input type="radio" class="currentJobDivNo" name="workingcurrently"
                                                    id="jhjyg" value='No'
                                                    {if 'Yes'==$candidateDetail.currently_working_status}checked{/if}}
                                                    checked />
                                                </div>

                                                <div class="card" id="show-me" style="display: none;">
                                                  <div class="card-header" id="headingSix">
                                                    <h2 class="mb-0">
                                                      <button class="btn btn-link collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseSix"
                                                        aria-expanded="false" aria-controls="collapseSix">
                                                        Add Current Employment
                                                      </button>
                                                    </h2>
                                                  </div>
                                                  <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                      <div class="p-4 bg-light" style="border: 1px solid #dcdcdc;">
                                                        <div class="form-group">
                                                          <label for="">Add Designation</label>
                                                          <input type="text"
                                                            class="form-control employeecurrentdesignation"
                                                            value="{$candidateDetail.current_designation}" />
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="sel1">Add Organization</label>
                                                          <input type="text"
                                                            class="form-control employeecurrentorganization"
                                                            value="{$candidateDetail.current_company_name}" />
                                                        </div>
                                                        <div class="form-row">
                                                          <div class="col-sm-6 form-group">
                                                            <label for="sel1">Starting Working From</label>
                                                            <select class="form-control employeecurrentstartingyear"
                                                              id="sel1">
                                                              <option selected="true" disabled="disabled">Select Year
                                                              </option>
                                                              <option value="1990"
                                                                {if '1990'==$candidateDetail.current_company_joinee_date}selected{/if}>1990
                                                                </option> <option value="1991"
                                                                {if '1991'==$candidateDetail.current_company_joinee_date}selected{/if}>1991
                                                                </option> <option value="1992"
                                                                {if '1992'==$candidateDetail.current_company_joinee_date}selected{/if}>1992
                                                                </option> <option value="1993"
                                                                {if '1993'==$candidateDetail.current_company_joinee_date}selected{/if}>1993
                                                                </option> <option value="1994"
                                                                {if '1994'==$candidateDetail.current_company_joinee_date}selected{/if}>1994
                                                                </option> <option value="1995"
                                                                {if '1995'==$candidateDetail.current_company_joinee_date}selected{/if}>1995
                                                                </option> <option value="1996"
                                                                {if '1996'==$candidateDetail.current_company_joinee_date}selected{/if}>1996
                                                                </option> <option value="1997"
                                                                {if '1997'==$candidateDetail.current_company_joinee_date}selected{/if}>1997
                                                                </option> <option value="1998"
                                                                {if '1998'==$candidateDetail.current_company_joinee_date}selected{/if}>1998
                                                                </option> <option value="1999"
                                                                {if '1999'==$candidateDetail.current_company_joinee_date}selected{/if}>1999
                                                                </option> <option value="2000"
                                                                {if '2000'==$candidateDetail.current_company_joinee_date}selected{/if}>2000
                                                                </option> <option value="2001"
                                                                {if '2001'==$candidateDetail.current_company_joinee_date}selected{/if}>2001
                                                                </option> <option value="2002"
                                                                {if '2002'==$candidateDetail.current_company_joinee_date}selected{/if}>2002
                                                                </option> <option value="2003"
                                                                {if '2003'==$candidateDetail.current_company_joinee_date}selected{/if}>2003
                                                                </option> <option value="2004"
                                                                {if '2004'==$candidateDetail.current_company_joinee_date}selected{/if}>2004
                                                                </option> <option value="2005"
                                                                {if '2005'==$candidateDetail.current_company_joinee_date}selected{/if}>2005
                                                                </option> <option value="2006"
                                                                {if '2006'==$candidateDetail.current_company_joinee_date}selected{/if}>2006
                                                                </option> <option value="2007"
                                                                {if '2007'==$candidateDetail.current_company_joinee_date}selected{/if}>2007
                                                                </option> <option value="2008"
                                                                {if '2008'==$candidateDetail.current_company_joinee_date}selected{/if}>2008
                                                                </option> <option value="2009"
                                                                {if '2009'==$candidateDetail.current_company_joinee_date}selected{/if}>2009
                                                                </option> <option value="2010"
                                                                {if '2010'==$candidateDetail.current_company_joinee_date}selected{/if}>2010
                                                                </option> <option value="2011"
                                                                {if '2011'==$candidateDetail.current_company_joinee_date}selected{/if}>2011
                                                                </option> <option value="2012"
                                                                {if '2012'==$candidateDetail.current_company_joinee_date}selected{/if}>2012
                                                                </option> <option value="2013"
                                                                {if '2013'==$candidateDetail.current_company_joinee_date}selected{/if}>2013
                                                                </option> <option value="2014"
                                                                {if '2014'==$candidateDetail.current_company_joinee_date}selected{/if}>2014
                                                                </option> <option value="2015"
                                                                {if '2015'==$candidateDetail.current_company_joinee_date}selected{/if}>2015
                                                                </option> <option value="2016"
                                                                {if '2016'==$candidateDetail.current_company_joinee_date}selected{/if}>2016
                                                                </option> <option value="2017"
                                                                {if '2017'==$candidateDetail.current_company_joinee_date}selected{/if}>2017
                                                                </option> <option value="2018"
                                                                {if '2018'==$candidateDetail.current_company_joinee_date}selected{/if}>2018
                                                                </option> <option value="2019"
                                                                {if '2019'==$candidateDetail.current_company_joinee_date}selected{/if}>2019
                                                                </option> </select> </div> <div
                                                                class="col-sm-6 form-group">
                                                                <label for="sel1">Month</label>
                                                                <select
                                                                  class="form-control employeecurrentstartingmonth"
                                                                  id="sel1">
                                                                  <option selected="true" disabled="disabled">Select
                                                                    Month
                                                                  </option>
                                                                  <option value="Jan"
                                                                    {if 'Jan'==$candidateDetail.current_company_joinee_month}selected{/if}>Jan
                                                                    </option> <option value="Feb"
                                                                    {if 'Feb'==$candidateDetail.current_company_joinee_month}selected{/if}>Feb
                                                                    </option> <option value="Mar"
                                                                    {if 'Mar'==$candidateDetail.current_company_joinee_month}selected{/if}>Mar
                                                                    </option> <option value="Apr"
                                                                    {if 'Apr'==$candidateDetail.current_company_joinee_month}selected{/if}>Apr
                                                                    </option> <option value="May"
                                                                    {if 'May'==$candidateDetail.current_company_joinee_month}selected{/if}>May
                                                                    </option> <option value="Jun"
                                                                    {if 'Jun'==$candidateDetail.current_company_joinee_month}selected{/if}>Jun
                                                                    </option> <option value="Jul"
                                                                    {if 'Jul'==$candidateDetail.current_company_joinee_month}selected{/if}>Jul
                                                                    </option> <option value="Aug"
                                                                    {if 'Aug'==$candidateDetail.current_company_joinee_month}selected{/if}>Aug
                                                                    </option> <option value="Sep"
                                                                    {if 'Sep'==$candidateDetail.current_company_joinee_month}selected{/if}>Sep
                                                                    </option> <option value="Oct"
                                                                    {if 'Oct'==$candidateDetail.current_company_joinee_month}selected{/if}>Oct
                                                                    </option> <option value="Nov"
                                                                    {if 'Nov'==$candidateDetail.current_company_joinee_month}selected{/if}>Nov
                                                                    </option> <option value="Dec"
                                                                    {if 'Dec'==$candidateDetail.current_company_joinee_month}selected{/if}>Dec
                                                                    </option> </select> </div> </div> <div
                                                                    class="form-group">
                                                                    <label for="">Current Salary</label>
                                                                    <input type="text"
                                                                      class="form-control employeecurrentsalary"
                                                                      value="{$candidateDetail.current_salary}" />
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="comment">Description of job</label>
                                                            <textarea class="form-control employeecurrentjobdescription"
                                                              rows="3"
                                                              id="comment">{$candidateDetail.current_job_descripton}</textarea>
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
                                                    id="watch-me-previous-job" />&nbsp; &nbsp; &nbsp; &nbsp;
                                                  &nbsp;&nbsp;
                                                  &nbsp; &nbsp;
                                                  &nbsp; &nbsp;
                                                  <label for="">No</label>
                                                  <input type="radio" class="previousJobDivNo" name="workedbefore"
                                                    id="hjh" checked />
                                                </div>
                                                <div class="accordion" id="accordionExampletwo">
                                                  <div class="card" id="show-me-previous-job" style="display: none;">
                                                    <div class="card-header" id="headingFive">
                                                      <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button"
                                                          data-toggle="collapse" data-target="#collapseFive"
                                                          aria-expanded="false" aria-controls="collapseFive">
                                                          Add Employment
                                                        </button>
                                                      </h2>
                                                    </div>
                                                    <div id="collapseFive" class="collapse"
                                                      aria-labelledby="headingFive" data-parent="#accordionExampletwo">
                                                      <div class="card-body employmentDetailsDiv">
                                                        <!-- *****************************-->
                                                        <details class="mt-3">
                                                          <summary class="bg-light"
                                                            style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;">
                                                            job1</summary>{assign var='job_1_details'
                                                          value=$candidateDetail.previousJobDetails[0]}


                                                          <div class="p-1 bg-light" style="border: 1px solid #dcdcdc;">
                                                            <div class="form-group">
                                                              <label for="">Add Designation</label>
                                                              <input type="text"
                                                                class="form-control employeepreviousjobonedesignation"
                                                                value="{$job_1_details.designantion}" />
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="sel1">Add Organization</label>
                                                              <input type="text"
                                                                class="form-control employeepreviousjoboneorganization"
                                                                value="{$job_1_details.organization}" />
                                                            </div>
                                                            <div class="form-row">
                                                              <div class="col-sm-6 form-group">
                                                                <label for="experiencefirst">Worked From</label>
                                                                <select
                                                                  class="form-control employeepreviousjobonestartingyear"
                                                                  id="experiencefirst" onChange="firstjob(this.value);">
                                                                  <option selected="true" disabled="disabled">Select
                                                                    Year
                                                                  </option>
                                                                  <option value="1990"
                                                                    {if '1990'==$job_1_details.join_date}selected{/if}>1990
                                                                    </option> <option value="1991"
                                                                    {if '1991'==$job_1_details.join_date}selected{/if}>1991
                                                                    </option> <option value="1992"
                                                                    {if '1992'==$job_1_details.join_date}selected{/if}>1992
                                                                    </option> <option value="1993"
                                                                    {if '1993'==$job_1_details.join_date}selected{/if}>1993
                                                                    </option> <option value="1994"
                                                                    {if '1994'==$job_1_details.join_date}selected{/if}>1994
                                                                    </option> <option value="1995"
                                                                    {if '1995'==$job_1_details.join_date}selected{/if}>1995
                                                                    </option> <option value="1996"
                                                                    {if '1996'==$job_1_details.join_date}selected{/if}>1996
                                                                    </option> <option value="1997"
                                                                    {if '1997'==$job_1_details.join_date}selected{/if}>1997
                                                                    </option> <option value="1998"
                                                                    {if '1998'==$job_1_details.join_date}selected{/if}>1998
                                                                    </option> <option value="1999"
                                                                    {if '1999'==$job_1_details.join_date}selected{/if}>1999
                                                                    </option> <option value="2000"
                                                                    {if '2000'==$job_1_details.join_date}selected{/if}>2000
                                                                    </option> <option value="2001"
                                                                    {if '2001'==$job_1_details.join_date}selected{/if}>2001
                                                                    </option> <option value="2002"
                                                                    {if '2002'==$job_1_details.join_date}selected{/if}>2002
                                                                    </option> <option value="2003"
                                                                    {if '2003'==$job_1_details.join_date}selected{/if}>2003
                                                                    </option> <option value="2004"
                                                                    {if '2004'==$job_1_details.join_date}selected{/if}>2004
                                                                    </option> <option value="2005"
                                                                    {if '2005'==$job_1_details.join_date}selected{/if}>2005
                                                                    </option> <option value="2006"
                                                                    {if '2006'==$job_1_details.join_date}selected{/if}>2006
                                                                    </option> <option value="2007"
                                                                    {if '2007'==$job_1_details.join_date}selected{/if}>2007
                                                                    </option> <option value="2008"
                                                                    {if '2008'==$job_1_details.join_date}selected{/if}>2008
                                                                    </option> <option value="2009"
                                                                    {if '2009'==$job_1_details.join_date}selected{/if}>2009
                                                                    </option> <option value="2010"
                                                                    {if '2010'==$job_1_details.join_date}selected{/if}>2010
                                                                    </option> <option value="2011"
                                                                    {if '2011'==$job_1_details.join_date}selected{/if}>2011
                                                                    </option> <option value="2012"
                                                                    {if '2012'==$job_1_details.join_date}selected{/if}>2012
                                                                    </option> <option value="2013"
                                                                    {if '2013'==$job_1_details.join_date}selected{/if}>2013
                                                                    </option> <option value="2014"
                                                                    {if '2014'==$job_1_details.join_date}selected{/if}>2014
                                                                    </option> <option value="2015"
                                                                    {if '2015'==$job_1_details.join_date}selected{/if}>2015
                                                                    </option> <option value="2016"
                                                                    {if '2016'==$job_1_details.join_date}selected{/if}>2016
                                                                    </option> <option value="2017"
                                                                    {if '2017'==$job_1_details.join_date}selected{/if}>2017
                                                                    </option> <option value="2018"
                                                                    {if '2018'==$job_1_details.join_date}selected{/if}>2018
                                                                    </option> <option value="2019"
                                                                    {if '2019'==$job_1_details.join_date}selected{/if}>2019
                                                                    </option> </select> </div> <div
                                                                    class="col-sm-6 form-group">
                                                                    <label for="sel1">Month</label>
                                                                    <select class="form-control" id="sel1">
                                                                      <option selected="true" disabled="disabled">
                                                                        Select
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
                                                                    {if '1990'==$job_1_details.end_date}selected{/if}>1990
                                                                    </option> <option value="1991"
                                                                    {if '1991'==$job_1_details.end_date}selected{/if}>1991
                                                                    </option> <option value="1992"
                                                                    {if '1992'==$job_1_details.end_date}selected{/if}>1992
                                                                    </option> <option value="1993"
                                                                    {if '1993'==$job_1_details.end_date}selected{/if}>1993
                                                                    </option> <option value="1994"
                                                                    {if '1994'==$job_1_details.end_date}selected{/if}>1994
                                                                    </option> <option value="1995"
                                                                    {if '1995'==$job_1_details.end_date}selected{/if}>1995
                                                                    </option> <option value="1996"
                                                                    {if '1996'==$job_1_details.end_date}selected{/if}>1996
                                                                    </option> <option value="1997"
                                                                    {if '1997'==$job_1_details.end_date}selected{/if}>1997
                                                                    </option> <option value="1998"
                                                                    {if '1998'==$job_1_details.end_date}selected{/if}>1998
                                                                    </option> <option value="1999"
                                                                    {if '1999'==$job_1_details.end_date}selected{/if}>1999
                                                                    </option> <option value="2000"
                                                                    {if '2000'==$job_1_details.end_date}selected{/if}>2000
                                                                    </option> <option value="2001"
                                                                    {if '2001'==$job_1_details.end_date}selected{/if}>2001
                                                                    </option> <option value="2002"
                                                                    {if '2002'==$job_1_details.end_date}selected{/if}>2002
                                                                    </option> <option value="2003"
                                                                    {if '2003'==$job_1_details.end_date}selected{/if}>2003
                                                                    </option> <option value="2004"
                                                                    {if '2004'==$job_1_details.end_date}selected{/if}>2004
                                                                    </option> <option value="2005"
                                                                    {if '2005'==$job_1_details.end_date}selected{/if}>2005
                                                                    </option> <option value="2006"
                                                                    {if '2006'==$job_1_details.end_date}selected{/if}>2006
                                                                    </option> <option value="2007"
                                                                    {if '2007'==$job_1_details.end_date}selected{/if}>2007
                                                                    </option> <option value="2008"
                                                                    {if '2008'==$job_1_details.end_date}selected{/if}>2008
                                                                    </option> <option value="2009"
                                                                    {if '2009'==$job_1_details.end_date}selected{/if}>2009
                                                                    </option> <option value="2010"
                                                                    {if '2010'==$job_1_details.end_date}selected{/if}>2010
                                                                    </option> <option value="2011"
                                                                    {if '2011'==$job_1_details.end_date}selected{/if}>2011
                                                                    </option> <option value="2012"
                                                                    {if '2012'==$job_1_details.end_date}selected{/if}>2012
                                                                    </option> <option value="2013"
                                                                    {if '2013'==$job_1_details.end_date}selected{/if}>2013
                                                                    </option> <option value="2014"
                                                                    {if '2014'==$job_1_details.end_date}selected{/if}>2014
                                                                    </option> <option value="2015"
                                                                    {if '2015'==$job_1_details.end_date}selected{/if}>2015
                                                                    </option> <option value="2016"
                                                                    {if '2016'==$job_1_details.end_date}selected{/if}>2016
                                                                    </option> <option value="2017"
                                                                    {if '2017'==$job_1_details.end_date}selected{/if}>2017
                                                                    </option> <option value="2018"
                                                                    {if '2018'==$job_1_details.end_date}selected{/if}>2018
                                                                    </option> <option value="2019"
                                                                    {if '2019'==$job_1_details.end_date}selected{/if}>2019
                                                                    </option> </select> </div> <div
                                                                    class="col-sm-6 form-group">
                                                                    <label for="sel1">Month</label>
                                                                    <select class="form-control" id="sel1">
                                                                      <option selected="true" disabled="disabled">
                                                                        Select
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
                                                              <label for="comment">Description of job</label>
                                                              <textarea
                                                                class="form-control employeepreviousjobonedescription"
                                                                rows="2"
                                                                id="comment"> {$job_1_details.description}</textarea>
                                                            </div>
                                                          </div>
                                                        </details>

                                                        <details class="mt-3">
                                                          <summary class="bg-light"
                                                            style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;">
                                                            job2</summary>{assign var='job_2_details'
                                                          value=$candidateDetail.previousJobDetails[1]}

                                                          <div class="p-1 bg-light" style="border: 1px solid #dcdcdc;">
                                                            <div class="form-group">
                                                              <label for="">Add Designation</label>
                                                              <input type="text"
                                                                class="form-control employeepreviousjobtwodesignation"
                                                                value="{$job_2_details.designantion}" />
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="sel1">Add Organization</label>
                                                              <input type="text"
                                                                class="form-control employeepreviousjobtwoorganization"
                                                                value="{$job_2_details.organization}" />
                                                            </div>
                                                            <div class="form-row">
                                                              <div class="col-sm-6 form-group">
                                                                <label for="experiencefirst">Worked From</label>
                                                                <select
                                                                  class="form-control employeepreviousjobtwostartingyear"
                                                                  id="experiencefirst"
                                                                  onChange="secondjob(this.value);">
                                                                  <option selected="true" disabled="disabled">Select
                                                                    Year
                                                                  </option>
                                                                  <option value="1990"
                                                                    {if '1990'==$job_2_details.join_date}selected{/if}>1990
                                                                    </option> <option value="1991"
                                                                    {if '1991'==$job_2_details.join_date}selected{/if}>1991
                                                                    </option> <option value="1992"
                                                                    {if '1992'==$job_2_details.join_date}selected{/if}>1992
                                                                    </option> <option value="1993"
                                                                    {if '1993'==$job_2_details.join_date}selected{/if}>1993
                                                                    </option> <option value="1994"
                                                                    {if '1994'==$job_2_details.join_date}selected{/if}>1994
                                                                    </option> <option value="1995"
                                                                    {if '1995'==$job_2_details.join_date}selected{/if}>1995
                                                                    </option> <option value="1996"
                                                                    {if '1996'==$job_2_details.join_date}selected{/if}>1996
                                                                    </option> <option value="1997"
                                                                    {if '1997'==$job_2_details.join_date}selected{/if}>1997
                                                                    </option> <option value="1998"
                                                                    {if '1998'==$job_2_details.join_date}selected{/if}>1998
                                                                    </option> <option value="1999"
                                                                    {if '1999'==$job_2_details.join_date}selected{/if}>1999
                                                                    </option> <option value="2000"
                                                                    {if '2000'==$job_2_details.join_date}selected{/if}>2000
                                                                    </option> <option value="2001"
                                                                    {if '2001'==$job_2_details.join_date}selected{/if}>2001
                                                                    </option> <option value="2002"
                                                                    {if '2002'==$job_2_details.join_date}selected{/if}>2002
                                                                    </option> <option value="2003"
                                                                    {if '2003'==$job_2_details.join_date}selected{/if}>2003
                                                                    </option> <option value="2004"
                                                                    {if '2004'==$job_2_details.join_date}selected{/if}>2004
                                                                    </option> <option value="2005"
                                                                    {if '2005'==$job_2_details.join_date}selected{/if}>2005
                                                                    </option> <option value="2006"
                                                                    {if '2006'==$job_2_details.join_date}selected{/if}>2006
                                                                    </option> <option value="2007"
                                                                    {if '2007'==$job_2_details.join_date}selected{/if}>2007
                                                                    </option> <option value="2008"
                                                                    {if '2008'==$job_2_details.join_date}selected{/if}>2008
                                                                    </option> <option value="2009"
                                                                    {if '2009'==$job_2_details.join_date}selected{/if}>2009
                                                                    </option> <option value="2010"
                                                                    {if '2010'==$job_2_details.join_date}selected{/if}>2010
                                                                    </option> <option value="2011"
                                                                    {if '2011'==$job_2_details.join_date}selected{/if}>2011
                                                                    </option> <option value="2012"
                                                                    {if '2012'==$job_2_details.join_date}selected{/if}>2012
                                                                    </option> <option value="2013"
                                                                    {if '2013'==$job_2_details.join_date}selected{/if}>2013
                                                                    </option> <option value="2014"
                                                                    {if '2014'==$job_2_details.join_date}selected{/if}>2014
                                                                    </option> <option value="2015"
                                                                    {if '2015'==$job_2_details.join_date}selected{/if}>2015
                                                                    </option> <option value="2016"
                                                                    {if '2016'==$job_2_details.join_date}selected{/if}>2016
                                                                    </option> <option value="2017"
                                                                    {if '2017'==$job_2_details.join_date}selected{/if}>2017
                                                                    </option> <option value="2018"
                                                                    {if '2018'==$job_2_details.join_date}selected{/if}>2018
                                                                    </option> <option value="2019"
                                                                    {if '2019'==$job_2_details.join_date}selected{/if}>2019
                                                                    </option> </select> </div> <div
                                                                    class="col-sm-6 form-group">
                                                                    <label for="sel1">Month</label>
                                                                    <select class="form-control" id="sel1">
                                                                      <option selected="true" disabled="disabled">
                                                                        Select
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
                                                                    {if '1990'==$job_2_details.end_date}selected{/if}>1990
                                                                    </option> <option value="1991"
                                                                    {if '1991'==$job_2_details.end_date}selected{/if}>1991
                                                                    </option> <option value="1992"
                                                                    {if '1992'==$job_2_details.end_date}selected{/if}>1992
                                                                    </option> <option value="1993"
                                                                    {if '1993'==$job_2_details.end_date}selected{/if}>1993
                                                                    </option> <option value="1994"
                                                                    {if '1994'==$job_2_details.end_date}selected{/if}>1994
                                                                    </option> <option value="1995"
                                                                    {if '1995'==$job_2_details.end_date}selected{/if}>1995
                                                                    </option> <option value="1996"
                                                                    {if '1996'==$job_2_details.end_date}selected{/if}>1996
                                                                    </option> <option value="1997"
                                                                    {if '1997'==$job_2_details.end_date}selected{/if}>1997
                                                                    </option> <option value="1998"
                                                                    {if '1998'==$job_2_details.end_date}selected{/if}>1998
                                                                    </option> <option value="1999"
                                                                    {if '1999'==$job_2_details.end_date}selected{/if}>1999
                                                                    </option> <option value="2000"
                                                                    {if '2000'==$job_2_details.end_date}selected{/if}>2000
                                                                    </option> <option value="2001"
                                                                    {if '2001'==$job_2_details.end_date}selected{/if}>2001
                                                                    </option> <option value="2002"
                                                                    {if '2002'==$job_2_details.end_date}selected{/if}>2002
                                                                    </option> <option value="2003"
                                                                    {if '2003'==$job_2_details.end_date}selected{/if}>2003
                                                                    </option> <option value="2004"
                                                                    {if '2004'==$job_2_details.end_date}selected{/if}>2004
                                                                    </option> <option value="2005"
                                                                    {if '2005'==$job_2_details.end_date}selected{/if}>2005
                                                                    </option> <option value="2006"
                                                                    {if '2006'==$job_2_details.end_date}selected{/if}>2006
                                                                    </option> <option value="2007"
                                                                    {if '2007'==$job_2_details.end_date}selected{/if}>2007
                                                                    </option> <option value="2008"
                                                                    {if '2008'==$job_2_details.end_date}selected{/if}>2008
                                                                    </option> <option value="2009"
                                                                    {if '2009'==$job_2_details.end_date}selected{/if}>2009
                                                                    </option> <option value="2010"
                                                                    {if '2010'==$job_2_details.end_date}selected{/if}>2010
                                                                    </option> <option value="2011"
                                                                    {if '2011'==$job_2_details.end_date}selected{/if}>2011
                                                                    </option> <option value="2012"
                                                                    {if '2012'==$job_2_details.end_date}selected{/if}>2012
                                                                    </option> <option value="2013"
                                                                    {if '2013'==$job_2_details.end_date}selected{/if}>2013
                                                                    </option> <option value="2014"
                                                                    {if '2014'==$job_2_details.end_date}selected{/if}>2014
                                                                    </option> <option value="2015"
                                                                    {if '2015'==$job_2_details.end_date}selected{/if}>2015
                                                                    </option> <option value="2016"
                                                                    {if '2016'==$job_2_details.end_date}selected{/if}>2016
                                                                    </option> <option value="2017"
                                                                    {if '2017'==$job_2_details.end_date}selected{/if}>2017
                                                                    </option> <option value="2018"
                                                                    {if '2018'==$job_2_details.end_date}selected{/if}>2018
                                                                    </option> <option value="2019"
                                                                    {if '2019'==$job_2_details.end_date}selected{/if}>2019
                                                                    </option> </select> </div> <div
                                                                    class="col-sm-6 form-group">
                                                                    <label for="sel1">Month</label>
                                                                    <select class="form-control" id="sel1">
                                                                      <option selected="true" disabled="disabled">
                                                                        Select
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
                                                              <label for="comment">Description of job</label>
                                                              <textarea
                                                                class="form-control employeepreviousjobtwodescription"
                                                                rows="2"
                                                                id="comment"> {$job_2_details.description}</textarea>
                                                            </div>
                                                          </div>
                                                        </details>

                                                        <details class="mt-3">
                                                          <summary class="bg-light"
                                                            style="border: 1px solid #e6e4e4; outline: none; box-shadow: none;">
                                                            job3</summary>{assign var='job_3_details'
                                                          value=$candidateDetail.previousJobDetails[2]}

                                                          <div class="p-1 bg-light" style="border: 1px solid #dcdcdc;">
                                                            <div class="form-group">
                                                              <label for="">Add Designation</label>
                                                              <input type="text"
                                                                class="form-control employeepreviousjobthreedesignation"
                                                                value="{$job_3_details.designantion}" />
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="sel1">Add Organization</label>
                                                              <input type="text"
                                                                class="form-control employeepreviousjobthreeorganization"
                                                                value="{$job_3_details.organization}" />
                                                            </div>



                                                            <div class="form-row">
                                                              <div class="col-sm-6 form-group">
                                                                <label for="experiencefirst">Worked From</label>
                                                                <select
                                                                  class="form-control employeepreviousjobthreestartingyear"
                                                                  id="experiencefirst" onChange="thirdjob(this.value);">
                                                                  <option selected="true" disabled="disabled">Select
                                                                    Year
                                                                  </option>
                                                                  <option value="1990"
                                                                    {if '1990'==$job_3_details.join_date}selected{/if}>1990
                                                                    </option> <option value="1991"
                                                                    {if '1991'==$job_3_details.join_date}selected{/if}>1991
                                                                    </option> <option value="1992"
                                                                    {if '1992'==$job_3_details.join_date}selected{/if}>1992
                                                                    </option> <option value="1993"
                                                                    {if '1993'==$job_3_details.join_date}selected{/if}>1993
                                                                    </option> <option value="1994"
                                                                    {if '1994'==$job_3_details.join_date}selected{/if}>1994
                                                                    </option> <option value="1995"
                                                                    {if '1995'==$job_3_details.join_date}selected{/if}>1995
                                                                    </option> <option value="1996"
                                                                    {if '1996'==$job_3_details.join_date}selected{/if}>1996
                                                                    </option> <option value="1997"
                                                                    {if '1997'==$job_3_details.join_date}selected{/if}>1997
                                                                    </option> <option value="1998"
                                                                    {if '1998'==$job_3_details.join_date}selected{/if}>1998
                                                                    </option> <option value="1999"
                                                                    {if '1999'==$job_3_details.join_date}selected{/if}>1999
                                                                    </option> <option value="2000"
                                                                    {if '2000'==$job_3_details.join_date}selected{/if}>2000
                                                                    </option> <option value="2001"
                                                                    {if '2001'==$job_3_details.join_date}selected{/if}>2001
                                                                    </option> <option value="2002"
                                                                    {if '2002'==$job_3_details.join_date}selected{/if}>2002
                                                                    </option> <option value="2003"
                                                                    {if '2003'==$job_3_details.join_date}selected{/if}>2003
                                                                    </option> <option value="2004"
                                                                    {if '2004'==$job_3_details.join_date}selected{/if}>2004
                                                                    </option> <option value="2005"
                                                                    {if '2005'==$job_3_details.join_date}selected{/if}>2005
                                                                    </option> <option value="2006"
                                                                    {if '2006'==$job_3_details.join_date}selected{/if}>2006
                                                                    </option> <option value="2007"
                                                                    {if '2007'==$job_3_details.join_date}selected{/if}>2007
                                                                    </option> <option value="2008"
                                                                    {if '2008'==$job_3_details.join_date}selected{/if}>2008
                                                                    </option> <option value="2009"
                                                                    {if '2009'==$job_3_details.join_date}selected{/if}>2009
                                                                    </option> <option value="2010"
                                                                    {if '2010'==$job_3_details.join_date}selected{/if}>2010
                                                                    </option> <option value="2011"
                                                                    {if '2011'==$job_3_details.join_date}selected{/if}>2011
                                                                    </option> <option value="2012"
                                                                    {if '2012'==$job_3_details.join_date}selected{/if}>2012
                                                                    </option> <option value="2013"
                                                                    {if '2013'==$job_3_details.join_date}selected{/if}>2013
                                                                    </option> <option value="2014"
                                                                    {if '2014'==$job_3_details.join_date}selected{/if}>2014
                                                                    </option> <option value="2015"
                                                                    {if '2015'==$job_3_details.join_date}selected{/if}>2015
                                                                    </option> <option value="2016"
                                                                    {if '2016'==$job_3_details.join_date}selected{/if}>2016
                                                                    </option> <option value="2017"
                                                                    {if '2017'==$job_3_details.join_date}selected{/if}>2017
                                                                    </option> <option value="2018"
                                                                    {if '2018'==$job_3_details.join_date}selected{/if}>2018
                                                                    </option> <option value="2019"
                                                                    {if '2019'==$job_3_details.join_date}selected{/if}>2019
                                                                    </option> </select> </div> <div
                                                                    class="col-sm-6 form-group">
                                                                    <label for="sel1">Month</label>
                                                                    <select class="form-control" id="sel1">
                                                                      <option selected="true" disabled="disabled">
                                                                        Select
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
                                                                    {if '1990'==$job_3_details.end_date}selected{/if}>1990
                                                                    </option> <option value="1991"
                                                                    {if '1991'==$job_3_details.end_date}selected{/if}>1991
                                                                    </option> <option value="1992"
                                                                    {if '1992'==$job_3_details.end_date}selected{/if}>1992
                                                                    </option> <option value="1993"
                                                                    {if '1993'==$job_3_details.end_date}selected{/if}>1993
                                                                    </option> <option value="1994"
                                                                    {if '1994'==$job_3_details.end_date}selected{/if}>1994
                                                                    </option> <option value="1995"
                                                                    {if '1995'==$job_3_details.end_date}selected{/if}>1995
                                                                    </option> <option value="1996"
                                                                    {if '1996'==$job_3_details.end_date}selected{/if}>1996
                                                                    </option> <option value="1997"
                                                                    {if '1997'==$job_3_details.end_date}selected{/if}>1997
                                                                    </option> <option value="1998"
                                                                    {if '1998'==$job_3_details.end_date}selected{/if}>1998
                                                                    </option> <option value="1999"
                                                                    {if '1999'==$job_3_details.end_date}selected{/if}>1999
                                                                    </option> <option value="2000"
                                                                    {if '2000'==$job_3_details.end_date}selected{/if}>2000
                                                                    </option> <option value="2001"
                                                                    {if '2001'==$job_3_details.end_date}selected{/if}>2001
                                                                    </option> <option value="2002"
                                                                    {if '2002'==$job_3_details.end_date}selected{/if}>2002
                                                                    </option> <option value="2003"
                                                                    {if '2003'==$job_3_details.end_date}selected{/if}>2003
                                                                    </option> <option value="2004"
                                                                    {if '2004'==$job_3_details.end_date}selected{/if}>2004
                                                                    </option> <option value="2005"
                                                                    {if '2005'==$job_3_details.end_date}selected{/if}>2005
                                                                    </option> <option value="2006"
                                                                    {if '2006'==$job_3_details.end_date}selected{/if}>2006
                                                                    </option> <option value="2007"
                                                                    {if '2007'==$job_3_details.end_date}selected{/if}>2007
                                                                    </option> <option value="2008"
                                                                    {if '2008'==$job_3_details.end_date}selected{/if}>2008
                                                                    </option> <option value="2009"
                                                                    {if '2009'==$job_3_details.end_date}selected{/if}>2009
                                                                    </option> <option value="2010"
                                                                    {if '2010'==$job_3_details.end_date}selected{/if}>2010
                                                                    </option> <option value="2011"
                                                                    {if '2011'==$job_3_details.end_date}selected{/if}>2011
                                                                    </option> <option value="2012"
                                                                    {if '2012'==$job_3_details.end_date}selected{/if}>2012
                                                                    </option> <option value="2013"
                                                                    {if '2013'==$job_3_details.end_date}selected{/if}>2013
                                                                    </option> <option value="2014"
                                                                    {if '2014'==$job_3_details.end_date}selected{/if}>2014
                                                                    </option> <option value="2015"
                                                                    {if '2015'==$job_3_details.end_date}selected{/if}>2015
                                                                    </option> <option value="2016"
                                                                    {if '2016'==$job_3_details.end_date}selected{/if}>2016
                                                                    </option> <option value="2017"
                                                                    {if '2017'==$job_3_details.end_date}selected{/if}>2017
                                                                    </option> <option value="2018"
                                                                    {if '2018'==$job_3_details.end_date}selected{/if}>2018
                                                                    </option> <option value="2019"
                                                                    {if '2019'==$job_3_details.end_date}selected{/if}>2019
                                                                    </option> </select> </div> <div
                                                                    class="col-sm-6 form-group">
                                                                    <label for="sel1">Month</label>
                                                                    <select class="form-control" id="sel1">
                                                                      <option selected="true" disabled="disabled">
                                                                        Select
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
                                                              <label for="comment">Description of job</label>
                                                              <textarea
                                                                class="form-control employeepreviousjobthreedescription"
                                                                rows="2"
                                                                id="comment">{$job_3_details.description}</textarea>
                                                            </div>
                                                          </div>
                                                        </details>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <button type="button" class="userProfileUpdate btn witBtn px-5 my-5">
                                                  Next
                                                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {/if}

  
  {if $userSessionDetail.type==='Mentor'}  
  <div class="container-fluid" style="background-color: #ececec;">
    mentor edit profile
  </div>
  {/if}
</div>




<script src="{base_url()}/js/user_edit_profile.js?v={jsversion()}"></script>
<script>
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

</script>