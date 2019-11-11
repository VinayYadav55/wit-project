{load_presentation_object filename='jobPortal' assign='obj'}
{foreach from=$obj->jobDetails item=job}

<div class="row">
  <div class="col-md-2">
    <div class="speakerImgDivHomeCompany">
      <div class="imageContainerSpeakerHomeCompany">
        <img class="main-image-speakerHomeCompany" src="{base_url()}/{$job.company_logo}" />
      </div>
    </div>
  </div>
  <div class="col-md-10">
    <div>
      <a href="{base_url()}/job_title/job_id={$job.job_id}" class="jobTitle text-capitalize">{$job.job_title}</a>
    </div>
    <div class="companyName py-2">{$job.company_name|@capitalize}</div>
    <button class="btn witBtn px-4 float-right applyJobs" id={$job.job_id}>Apply</button>
    <ul class="nav">
      <li class="nav-item listBorder pr-2">
        <i class="fas fa-map-marker"></i> {$job.job_location}
      </li>
      <li class="nav-item listBorder pr-2">
        &nbsp; <i class="fas fa-briefcase"></i> {$job.work_experience|@capitalize} {if
        $job.work_experience=='freshers'}{else} years {/if}
      </li>
    </ul>
  </div>
</div>
<hr />
{/foreach}
{if $obj->jobDetails}
<div class="pagination">
  {if $obj->totalJobs >10}
  <div class="page">
    <div class="row">
      {assign var = totalpage value= $obj->totalJobs/10|ceil}
      {assign var = counter value=$smarty.section.foo.iteration}
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a href='{base_url()}/job_portal' class="page-link productpagetab text-dark" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>

          {assign var = counter value=$smarty.section.foo.iteration}
          <li class="page-item">
            <a class="page-link {if $obj->page >=2}productpagetab{else}disabled{/if}" aria-label="Next"
              id="{if $obj->page >=2}{$obj->page - 1}{/if}">
              <span aria-hidden="true">&#8249;</span>

            </a>
          </li>
          <li class="page-item active">
            <a class="page-link productpagetab currentPage" id="{if $obj->page}{$obj->page}{else}1{/if}">{if
              $obj->page}{$obj->page}{else}1{/if}</a></li>
          <li class="page-item ">
            <a class="page-link {if $obj->page <$counter}productpagetab{else}disabled{/if}" aria-label="Next"
              id="{if $obj->page==''}{$obj->page + 2}{else}{$obj->page + 1}{/if}">
              <span aria-hidden="true">&#8250;</span>

            </a>
          </li>
          <li class="page-item">
            <a class="page-link productpagetab" aria-label="Next" id="{$counter}">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>

    </div>
  </div>
  {/if}
</div>
{else}
<div class="no-product">
  <div class="error-message text-center">
    No Jobs Found!
  </div>
</div>

{/if}