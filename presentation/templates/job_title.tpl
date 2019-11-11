{load_presentation_object filename='postedJob' assign='obj'}
{assign var = 'userSessionDetail' value=$smarty.session.userDetails}
{assign var='job' value=$obj->JobIdDetails}
<!DOCTYPE html>
<html lang="en">

<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147066526-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-147066526-1');
  </script>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="{base_url()}/images/wit-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="{base_url()}/styles/job_title.css?v={jsversion()}" />
  <title>WiT | JOB PROFILE DETAILS</title>

</head>

<body>
  {include file='header.tpl'}
  <div class="loader"></div>
  <div class="jobtitleTopStyles">
    <div class="container-fluid bg-light p-0">
      <input type="hidden" class="applicant_id" value={$userSessionDetail.id}>
      <div class="column  p-0 bg-white stiktoTopBtns">
        <div class="col-md-12 py-2 jobTitleCont">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 text-center py-0 py-sm-1">
              {if $obj->userStatusForJob.isRegisteredForJob==0}
              {if !$userSessionDetail}
              <a href="{base_url()}/login" class="btn witBtn registerButton">
                Register
              </a>
              {else}
              <a href="{base_url()}/candidate_registration" class="btn witBtn registerButton">
                Register
              </a>
              {/if}
              {else}
              {/if}
              <div class="btn witBtn applyButton ml-5">Apply</div>
            </div>
          </div>
        </div>
      </div>
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
            <h4 class="pt-3 px-3">Job Description</h4>
            <hr />
            <div class="px-5">
              <div><b>About the job</b></div>
              <div class="">
                {$job.job_description}
              </div>
            </div>
            <div class="px-5 py-4">
              <h6 class="font-weight-bold">Education</h6>
              <p> {$job.qualifications}</p>
              <h6 class="font-weight-bold">Work Experience</h6>
              <p> {$job.work_experience|@capitalize} {if $job.work_experience=='freshers'}
                {else} Years {/if}</p>
              <h6 class="font-weight-bold">Workplace Location</h6>
              <p>{$job.job_location}</p>
            </div>
          </div>
          <div class="col-md-1 col-sm-1 col-lg-1"></div>
          <div class="col-sm-4 col-md-4 col-lg-4 bg-white" style="word-break: break-word;">
            <div class="column py-4">
              <div class="col-md-12">
                <h6 class="criteriaHeading">Job Type</h6>
                <p class="criteria">{$job.job_type}</p>
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
                <p class="criteria"> {$job.work_experience|@capitalize} {if $job.work_experience=='freshers'} {else}
                  Years {/if}</p>
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
    {include file='footer.tpl'}

    <script type="text/javascript" src="{base_url()}/js/jobApply.js?v={jsversion()}"></script>
</body>

</html>