{load_presentation_object filename='userDashboard' assign='obj'} {assign var
='userSessionDetail' value=$smarty.session.userDetails}
{load_presentation_object filename='postedJob' assign='obj'}
{include file='dashheader.tpl'}
{assign var='job' value=$obj->JobIdDetails}

  <div class="docs-content-wrapper">
    <div class="container-fluid py-5"  style="background-color: #ececec;">
      <div class="container mb-3">
          <div class="row my-3 bg-white p-4">
              <div class="col-md-2">
                <div class="speakerImgDivHome p-2" style="border: 1px solid #ded4d4;">
                  <div class="imageContainerSpeakerHome">
                    <img class="main-image-speakerHome" src="{base_url()}/{$job.company_logo}" />
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="text-capitalize pt-2" job_id="{$job.job_id}">
                  <h5>{$job.job_title}</h5>
                </div>
                <div class="pt-2">
                  <h6 class="text-capitalize">{$job.company_name}</h6>
                </div>
                <div class="pt-2"><i class="fas fa-map-marker"></i> {$job.job_location}
                </div>
              </div>
    
              <div class="col-md-2 text-center">
                <div class="mt-4">
                  <p class="postedDate">Posted on -<br><span class="text-success">{$job.posted_date}</span> </p>
                  <button class="btn btn-block totalApplicant">
                    {$job.applicant_count} Applicants
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
                    {$job.job_description}
                  </li>

                  <li style="list-style: none;">
                    <b>EDUCATION</b>
                  </li>

                  <li class="pb-4">{$job.qualifications}</li>

                  <li style="list-style: none;">
                    <b>WORK EXPERIENCE</b>
                  </li>
                  <li>
                    {$job.work_experience} Years
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
                
                <div class=""><img src="" /><span>{$job.job_type}</span></div>
              </div>
                <hr />
              <div class="col-md-12">
                <h6 class="criteriaHeading">Functional Area</h6>
                <p class="criteria">{$job.job_functional_area}</p>
              </div>
              <hr />
              <div class="col-md-12">
                <h6 class="criteriaHeading">Industry</h6>
                <p class="criteria">{$job.job_industry_type}</p>
              </div>
              <hr />
              <div class="col-md-12">
                <h6 class="criteriaHeading">Education Required</h6>
                <p class="criteria">{$job.qualifications}</p>
              </div>
              <hr />
              <div class="col-md-12">
                <h6 class="criteriaHeading">Experience Required</h6>
                <p class="criteria">{$job.work_experience} Years</p>
              </div>
              <hr />
              <div class="col-md-12">
                <h6 class="criteriaHeading">Skills Required</h6>
                <p class="criteria">{$job.required_skills}</p>
              </div>
              <hr />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

