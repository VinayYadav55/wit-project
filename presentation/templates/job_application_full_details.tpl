{load_presentation_object filename='jobCandidateList' assign='obj'}
{assign var = 'companySessionDetail' value=$smarty.session.companySession}
<!DOCTYPE html>
<html lang="en">

<head>
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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />

  <link href="{base_url()}/styles/wit_job_dashboard.css?v={jsversion()}" rel="stylesheet" />
  <link href="{base_url()}/styles/wit_job_dashboard_two.css?v={jsversion()}" rel="stylesheet" />
    <link href="{base_url()}/styles/employeer_dashboard.css?v={jsversion()}" rel="stylesheet" />
  <title>DASHBOARD | APPLICANT DETAILS</title>
</head>

<body>
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
  <!-- ************************************************ -->
  <div class="docs-content-wrapper" style="background-color: #ececec;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 bg-white" style="position: sticky; top:65px; z-index:200;">
          <h4 class="text-center py-2 stylingLists">
            Detailed View of Application
          </h4>
        </div>
        {assign var='candidateDetail' value=$obj->applicantDetails}

        <div class="col-sm-12 p-4 stylingLists">
          <div class="bg-white my-2 p-4 " style="border:#8080802b 1px solid">
            <h4 class="text-capitalize py-1">{$candidateDetail.first_name} {$candidateDetail.last_name}</h4>
            <p class="py-1 text-capitalize">{$candidateDetail.resident_address}</p>
            <p class="py-1"><strong>Email id:</strong> {if $candidateDetail.contact_email!=''}{$candidateDetail.contact_email}{else}N/A{/if}</p>
            <p class="py-1"><strong>Contact: </strong>{if $candidateDetail.contact_phone_no!=''}{$candidateDetail.contact_phone_no}{else}N/A{/if}</p>
            <h6 class="py-1">Skills</h6>
            <p class="py-1">{if $candidateDetail.skill_set!=''}{$candidateDetail.skill_set}{else}N/A{/if}</p>
          </div>
          <div class="bg-white my-2 p-4" style="border:#8080802b 1px solid">
            <h5>Resume</h5>
            <div class="row">
              <div class="col-2">
                <b>Education</b>
              </div>
              <div class="col-10">
                <div>
                  <ul>
                      
                    {assign var="aa" value=$candidateDetail.educationDetails}

                    {section name=i loop=$aa start=0 max=2 }

                    <li class="py-1">
                      <strong>
                        {$aa[i].class}
                        ({if $aa[i].passingYear!=''}{$aa[i].passingYear}{else}N/A{/if})</strong>
                    </li>

                    <li class="py-1 text-capitalize">
                      {$aa[i].schoolName}
                    </li>
                    <li class="py-1">CGPA/Percentage: {if $aa[i].percentage!=''}{$aa[i].percentage}{else}N/A{/if}</li>
                    <hr>
                    {/section}

                  </ul>

                  <ul>
                    {assign var="bb" value=$candidateDetail.educationDetails}
                    {section name=i loop=$aa start=2 max=3}
                    {if $bb[i].course!=''}
                    <li class="py-1">
                      <strong>{$bb[i].course}({$aa[i].Year_of_Complition})</strong>
                    </li>
                    <li class="py-1 text-capitalize">
                      {$bb[i].collegeName}
                    </li>
                    <li class="py-1">
                      Percentage/ CGPA/ GPA: {$bb[i].percentage}
                    </li>
                    
                    <hr>
                    {/if}
                    {/section}
                  </ul>

                </div>

              </div>
              <div class="col-2"><b>Previous Project</b></div>
              <div class="col-10">
                <ul>
                  {assign var="previousProject" value=$candidateDetail.projectDetails}
                  {counter start=0 print=false}
                  {section name=i loop=$previousProject}

                  <li class="py-1"><strong>Project-{counter}</strong></li>
                  {if $previousProject[i].project_title}
                  <li class="py-1 text-capitalize"><strong>{$previousProject[i].project_title}
                      ({$previousProject[i].year_of_completion})</strong></li>
                  <li class="py-1">{$previousProject[i].project_description}</li>
                  <hr>{else}N/A
                  {/if}
                  {/section}
                </ul>

                </ul>
              </div>
              <div class="col-2"><b>Previous Jobs</b></div>
              <div class="col-10">
                <ul>
                  {assign var="previousJobs" value=$candidateDetail.previousJobDetails}
                  {counter start=0 print=false}

                  {section name=i loop=$previousJobs}

                  <!-- <li class="py-1"><strong></strong></li> -->
                  {if $previousJobs[i].designantion!=''}
                  <li class="text-capitalize"><strong>{counter}-{$previousJobs[i].designantion}
                      ({$previousJobs[i].join_date}
                      -{$previousJobs[i].end_date})</strong></li>
                  <li class="py-1 text-capitalize">{$previousJobs[i].organization}</li>
                  <li>{$previousJobs[i].description}</li>
                  <hr>
                  {else}
                  N/A
                  {/if}
                  {/section}
                </ul>
              </div>
              <div class="col-2"><b>Currently Working</b></div>
              <div class="col-10">
                  {if $candidateDetail.current_company_name!=''}
                <ul>
                  <li class="py-1"><b>Company Name</b></li>
                  <li class="py-1 text-capitalize">
                    {$candidateDetail.current_company_name}
                  </li>
                  <li class="py-1"><b>Desginantion</b></li>
                  <li class="py-1  text-capitalize">
                    {$candidateDetail.current_designation}
                  </li>
                 <!-- <li class="py-1"><b>Join Date</b></li>
                  <li class="py-1">
                    {$candidateDetail.current_company_joinee_date}
                  </li>-->
                  <li class="py-1"><b>Current Salary</b></li>
                  <li class="py-1">{$candidateDetail.current_salary} INR/anum</li>
                  <li class="py-1"><b>About The Role</b></li>
                  <li class="py-1">
                    {$candidateDetail.current_job_descripton}
                  </li>
                  <hr>
                </ul>
                {else}
                <ul>
                    <li><b>Not Working</b></li>
                </ul>
                 
                {/if}
              </div>
              {if $candidateDetail.resume_link}
              <div class="col-sm-4 offset-sm-4  text-center">
                <a class="text-white py-2 px-5 my-4 witBtn"
                  href="{base_url()}/job_application_full_details/candidate_id={$candidateDetail.id}?file_name={$candidateDetail.resume_link}">Download
                  Resume</a>
              </div>
              {/if}

              <!-- <div class="col-2"><b>Contact Details</b></div>
              <div class="col-10">
                <ul>
                  <li class="py-1">Email id:{$candidateDetail.contact_email}</li>
                  <li class="py-1">Contact:{$candidateDetail.contact_phone_no}</li>
                </ul>
              </div> -->
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"
    integrity="sha256-kQ6DQtOnXtjGYnAEMZQjpsioC75ND0K9I8MyjtdLCyk=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="{base_url()}/js/job_portal_dashboard.js?v={jsversion()}"></script>
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
    });
  </script>
</body>

</html>