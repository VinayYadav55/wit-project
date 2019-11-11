{load_presentation_object filename='userDashboard' assign='obj'}
{assign var = 'userSessionDetail' value=$smarty.session.userDetails}
{include file='dashheader.tpl'}
{assign var="total_applied_jobs" value=$obj->appliedJobsList|@count}

  <div class="docs-content-wrapper">
    <div class="container-fluid" style="background-color: #ececec;">
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10 my-4 bg-white">
          <h3 class="py-2 text-center">Applied Job</h3>
          <hr class="bg-secondary" />
        </div>
        <div class="col-sm-1"></div>
      </div>
      {foreach from=$obj->appliedJobsList item='jobList'}
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10 bg-light p-4 appliedJobMain" style="border: 1px solid #d2cccc;">
          <h4>{$jobList.company_name}</h4>
          <p class="text-capitalize">Profile: {$jobList.job_title}</p>
          <p>{$jobList.job_description}</p>
          <span class="btn p-2 appliedStatusBtn disabled">
            Applied <i class='far fa-check-circle'></i>
          </span>
          <span class="ml-md-5 float-right viewFullDetails"><a class="text-white"
              href="{base_url()}/job_details/job_id={$jobList.job_id}">View
              Details</a></span>
        </div>
        <div class="col-sm-1"></div>
      </div>
      {/foreach}
      <div class="col-sm-1"></div>
    </div>
  </div>

  {include file='dashfooter.tpl'}