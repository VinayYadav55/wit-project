{assign var = 'userSessionDetail' value=$smarty.session.userDetails}
{load_presentation_object filename='jobCandidateList' assign='obj'}
{assign var='candidateDetail' value=$obj->applicantDetails}
{include file='dashheader.tpl'}
<link rel="stylesheet" href="{base_url()}/styles/user_view_profile.css">
  <div class="docs-content-wrapper wordingIssuesStyle forparaStyle" style="word-break:break-word;background-color: #ececec;">
  {if $userSessionDetail.type==='Candidate'}  
  <div class="container">
      <div class="row">
        <div class="col-sm-9">
        <div class="col-12 bg-white my-3 p-2" id="aboutme" style="border: 1px solid #d2cccc; border-radius:0.5rem; ">
          <div class="usrdthead text-white p-2 m-3">About Me</div>
          <ul>
            <li>
              <h6>Name</h6>
              <div class="text-capitalize usrdt">{$userSessionDetail.first_name} {$userSessionDetail.last_name}</div>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
            </li>
            <li>
              <h6>Email</h6>
              <div class="usrdt">{$userSessionDetail.email_id}</div>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
            </li>
            <li>
              <h6>Contact</h6>
              <div class="usrdt">+91-{$userSessionDetail.phone_no}</div>
            </li>
          </ul>
        </div>
        <div class="col-12 mb-3 bg-white p-2" id="preferences" style="border: 1px solid #d2cccc; border-radius:0.5rem; ">
            <div class="usrdthead text-white p-2 m-3">Preferences</div>
          <ul>
            <li>
              <h6>Prefer City</h6>
              <div class="usrdt">{$candidateDetail.prefered_city}</div>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
            </li>
            <li>
              <h6>Prefer job type</h6>
              <div class="text-capitalize usrdt">{$candidateDetail.prefered_job_types}</div>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
            </li>
            <li>
              <h6>Preferred functional Area</h6>
              <div class="usrdt">{$candidateDetail.functional_area}</div>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
            </li>
            <li>
              <h6>Preferred Industry Type</h6>
              <div class="usrdt">{$candidateDetail.industry_type}</div>
            </li>
          </ul>
        </div>
        <div class="col-12 mb-3  p-0" id="skills">
          <div class="skills p-2 bg-white" style="border: 1px solid #d2cccc;border-radius:0.5rem; ">
              <div class="usrdthead text-white p-2 m-3">Skills</div>
            <ul>
              <li>
                <div class="usrdt">{if $candidateDetail.skill_set === null }N/A <a class="text-dark usreditprfl" href="{base_url()}/user_edit_profile"><i class="fas fa-pen"></i></a>{else}{$candidateDetail.skill_set}{/if}</p>
              </li>
            </ul>

          </div>
          <div class="experirnce p-2 my-2 bg-white" id="exp" style="border: 1px solid #d2cccc; border-radius:0.5rem; ">
              <div class="usrdthead text-white p-2 m-3">Experience</div>
            <ul>
              <li>
                <div class="usrdt">{if $candidateDetail.experience === ''}N/A{else}{$candidateDetail.experience} year{/if}</div>
              </li>
            </ul>

          </div>
          <div class="extras p-2 bg-white" id="currentjob" style="border: 1px solid #d2cccc;border-radius:0.5rem; ">
          <div class="usrdthead text-white p-2 m-3">Current Employment</div>
            {if $candidateDetail.current_company_name !== ''}
            <ul>
              <li class="py-1"><b>Company Name</b></li>
              <li class="py-1 text-capitalize">
                <div class="usrdt">{$candidateDetail.current_company_name}</div>
              </li>
              <li class="py-1"><b>Designation</b></li>
              <li class="py-1 text-capitalize">
              <div class="usrdt">  {$candidateDetail.current_designation}</div>
              </li>
              <li class="py-1"><b>Join Date</b></li>
              <li class="py-1">
               <div class="usrdt"> {$candidateDetail.current_company_joinee_month} {$candidateDetail.current_company_joinee_date}</div>
              </li>
              <li class="py-1"><b> About The Job</b></li>
              <li class="py-1">
              <div class="usrdt"> {$candidateDetail.current_job_descripton}</div> 
              </li>
            </ul>
            {/if}
          </div>
        </div>
        <div class="col-12  mb-3 bg-white p-2" id="edu" style="border: 1px solid #d2cccc;border-radius:0.5rem; ">
            <div class="usrdthead text-white p-2 m-3">Education</div>
          <ul>
            {assign var="aa" value=$candidateDetail.educationDetails}

            {section name=i loop=$aa start=0 max=2 }

            <li class="py-1">
              <strong>
                {$aa[i].class}
                ({$aa[i].passingYear})</strong>
            </li>
            <li class="py-1 text-capitalize">
             <div class="usrdt"> {$aa[i].schoolName}</div>
            </li>
            <li class="py-1"><b>Percentage / CGPA:</b> <div class="usrdt">{$aa[i].percentage}</div></li>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
            {/section}
          </ul>

          <ul>
            {assign var="bb" value=$candidateDetail.educationDetails}
            {section name=i loop=$aa start=2 max=3}
            {if $bb[i].course !== ''}
            <li class="py-1 text-uppercase">
              <strong>{$bb[i].course}-{$bb[i].Specilization}({$aa[i].Year_of_Complition})</strong>
            </li>
            <li class="py-1 text-capitalize">
             <div class="usrdt">{$bb[i].collegeName}</div>
            </li>
            <li class="py-1">
              <b> Percentage/ CGPA/ GPA:</b><div class="usrdt"> {$bb[i].percentage}</div>
            </li>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
            {else}
            {/if}
            {/section}
          </ul>

        </div>
        <div class="col-12 mb-3 bg-white p-2" id="pjct" style="border: 1px solid #d2cccc;border-radius:0.5rem; ">
            <div class="usrdthead text-white p-2 m-3">Projects</div>
          <ul>
            {assign var="previousProject" value=$candidateDetail.projectDetails}
            {counter start=0 print=false}
            {section name=i loop=$previousProject}
            {if $previousProject[i].project_title !==''}
            <li class="py-1"><strong>Project-{counter}</strong></li>
            <li class="py-1 text-capitalize"><div class="usrdt">{$previousProject[i].project_title}
               ( {$previousProject[i].year_of_completion} )</div>
            </li>
            <li class="py-1 text-capitalize"><div class="usrdt">{if $previousProject[i].project_description ==
              ''}N/A{else}{$previousProject[i].project_description}{/if}</div></li>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
            {/if}
            {/section}
          </ul>

        </div>
        <div class="col-12 mb-3 bg-white p-2" id="pemp" style="border: 1px solid #d2cccc;border-radius:0.5rem; ">
            <div class="usrdthead text-white p-2 m-3">Previous Employment</div>
          <ul>
            {assign var="previousJobs" value=$candidateDetail.previousJobDetails}
            {counter start=0 print=false}
            {section name=i loop=$previousJobs}
            {if $previousJobs[i].designantion !== ''}
            <li class="py-1"><strong>Employment-{counter}</strong></li>
         
            <li class="py-1 text-capitalize"><div class="usrdt">{if $previousJobs[i].designantion ==
                ''}N/A{else}{$previousJobs[i].designantion} ({$previousJobs[i].join_date}
                -{$previousJobs[i].end_date}){/if}</div></li>
            <li class="py-1 text-capitalize"><div class="usrdt">{if $previousJobs[i].organization ==
              ''}N/A{else}{$previousJobs[i].organization}{/if}</div></li>
            <li class="py-1"><div class="usrdt text-capitalize">{if $previousJobs[i].description == ''}N/A{else}{$previousJobs[i].description}{/if}</div></li>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
            {else}<span class="usrdt"></span>
            {/if}
            {/section}
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
  {/if}
       



    {if $userSessionDetail.type==='Mentor'}
    <div class="container">
        <div class="row">
          <div class="col bg-white m-3 p-3 mentorListStyles">
            <h5>About Me</h5>
            <hr class=" bg-primary align-self-start" />
            <ul>
              <li>
                <h6>Name</h6>
                <p class="text-capitalize">{$userSessionDetail.first_name} {$userSessionDetail.last_name}</p>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
              </li>
              <li>
                <h6>Email</h6>
                <p>{$userSessionDetail.email_id} </p>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
              </li>
              <li>
                <h6>Contact</h6>
                <p>+91-{$userSessionDetail.phone_no}</p>
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
                  <p>{$candidateDetail.skill_set}</p>
                </li>
              </ul>
            </div>
            <div class="experirnce p-4 my-2 bg-white" style="border: 1px solid #d2cccc; border-radius:0.5rem; ">
              <h5>Experience</h5>
              <hr class="bg-primary" />
              {if $candidateDetail.experience !==null}
              <ul>
                <li>
                  <p>{$candidateDetail.experience} year</p>
                </li>
              </ul>
              {/if}
            </div>
            <div class="extras bg-white p-4 my-2" style="border: 1px solid #d2cccc; border-radius:0.5rem; ">
              <h5>Current Employment</h5>
              <hr class="bg-primary" />
              {if $candidateDetail.current_company_name !== null || $candidateDetail.current_designation !== null}
              <ul>
                <li class="py-1"><b>Company Name</b></li>
                <li class="py-1 text-capitalize">
                  {$candidateDetail.current_company_name}
                </li>
                <li class="py-1"><b>Desginantion</b></li>
                <li class="py-1 text-capitalize">
                  {$candidateDetail.current_designation}
                </li>
                <li class="py-1"><b>Join Date</b></li>
                <li class="py-1">
                  {$candidateDetail.current_company_joinee_month} {$candidateDetail.current_company_joinee_date}
                </li>
                <li class="py-1"><b>About The Job</b></li>
                <li class="py-1">
                  {$candidateDetail.current_job_descripton}
                </li>
              </ul>
              {/if}
            </div>
          </div>
          <div class="col bg-white m-3 p-3 mentorListStyles">
            <h5>Education</h5>
            <hr class="bg-primary align-self-start" />
            <ul>
              {assign var="aa" value=$candidateDetail.educationDetails}
  
              {section name=i loop=$aa start=0 max=2 }
  
              <li class="py-1">
                <strong>
                  {$aa[i].class}
                  ({$aa[i].passingYear})</strong>
              </li>
  
              <li class="py-1 text-capitalize">
                {$aa[i].schoolName}
              </li>
              <li class="py-1"><b>Percentage / CGPA:</b> {$aa[i].percentage}</li>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
              {/section}
            </ul>
  
            <ul>
              {assign var="bb" value=$candidateDetail.educationDetails}
              {section name=i loop=$aa start=2 max=3}
              {if $bb[i].course !== ''}
              <li class="py-1 text-capitalize">
                <strong>{$bb[i].course}({$aa[i].Year_of_Complition})</strong>
              </li>
              <li class="py-1 text-capitalize">
                {$bb[i].collegeName}
              </li>
              <li class="py-1">
                <b> Percentage/ CGPA/ GPA:</b> {$bb[i].percentage}
              </li>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
              {else}
              {/if}
              {/section}
            </ul>
  
          </div>
          <div class="w-100"></div>
          <div class="col bg-white p-3 m-3 mentorListStyles">
            <h5>Projects</h5>
            <hr class="bg-primary" />
            <ul>
              {assign var="previousProject" value=$candidateDetail.projectDetails}
              {counter start=0 print=false}
              {section name=i loop=$previousProject}
  
              <li class="py-1"><strong>Project-{counter}</strong></li>
              <li class="py-1 text-capitalize"><strong>{$previousProject[i].project_title}
                  {$previousProject[i].year_of_completion}</strong>
              </li>
              <li class="py-1 text-capitalize">{if $previousProject[i].project_description ==
                ''}N/A{else}{$previousProject[i].project_description}{/if}</li>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
              {/section}
            </ul>
  
          </div>
          <div class="col bg-white p-3 m-3 mentorListStyles">
            <h5>Previous Employment</h5>
            <hr class="bg-primary" />
            <ul>
              {assign var="previousJobs" value=$candidateDetail.previousJobDetails}
              {counter start=0 print=false}
              {section name=i loop=$previousJobs}
  
              <li class="py-1"><strong>Employment-{counter}</strong></li>
              {if $previousJobs[i].designantion !== ''}
              <li class="py-1 text-capitalize"><strong>{if $previousJobs[i].designantion ==
                  ''}N/A{else}{$previousJobs[i].designantion} ({$previousJobs[i].join_date}
                  -{$previousJobs[i].end_date}){/if}</strong></li>
              <li class="py-1 text-capitalize">{if $previousJobs[i].organization ==
                ''}N/A{else}{$previousJobs[i].organization}{/if}</li>
              <li class="py-1">{if $previousJobs[i].description == ''}N/A{else}{$previousJobs[i].description}{/if}</li>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;" />
              {else}N/A
              {/if}
              {/section}
            </ul>
          </div>
      </div>
    
    {/if}
  </div>
  {include file='dashfooter.tpl'}