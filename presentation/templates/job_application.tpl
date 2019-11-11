{load_presentation_object filename='jobCandidateList' assign='obj'}
{assign var = 'companySessionDetail' value=$smarty.session.companySession}
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
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css"
    integrity="sha256-PIRVsaP4JdV/TIf1FR8UHy4TFh+LiRqeclYXvCPBeiw=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css" />
  <link rel="stylesheet" href="{base_url()}/styles/datatablesStyles.css?v={jsversion()}">
  <link rel="stylesheet" href="{base_url()}/styles/normalize.css?v={jsversion()}" />
  <link rel="stylesheet" href="{base_url()}/styles/stylesheet.css?v={jsversion()}" />
  <link rel="stylesheet" href="{base_url()}/styles/job_portal_styles.css?v={jsversion()}" />
  <link href="{base_url()}/styles/wit_job_dashboard.css?v={jsversion()}" rel="stylesheet" />
  <link href="{base_url()}/styles/wit_job_dashboard_two.css?v={jsversion()}" rel="stylesheet" />
  <link href="{base_url()}/styles/employeer_dashboard.css?v={jsversion()}" rel="stylesheet" />

  <title>DASHBOARD | JOB APPLICATIONS</title>
</head>

<body>
  <input type="hidden" class="baseUrl" baseUrl={base_url()}/employer> <header
    class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
  <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
    data-target="#sidebar">
    <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
  </a>
  <a class="logo" href="{base_url()}"><img src="{base_url()}/images/witlogo-dashboard-logo.jpeg" width="100"
      height="60" /></a>
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
        <div class="col-sm-12 mb-2 bg-white"
          style="position: sticky; top:65px; z-index: 200;border: 1px solid #c5bebe;">
          <h4 class="text-center py-2">Number of Applications</h4>
        </div>
        <div class="col-sm-10 offset-sm-1 witViewList">
          <div class="hiddenTableForList">
            <div class="table-responsive">

              <table class="table table-sm table-striped d-none" id="hiddenTableWit">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Date</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Contact Email</th>
                    <th scope="col">Contact Phone</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Martial Status</th>
                    <th scope="col">Permanent Address</th>
                    <th scope="col">Prefer City</th>
                    <th scope="col">Prefer Job Type</th>
                    <th scope="col">Functional Area</th>
                    <th scope="col">Industry Type</th>
                    <th scope="col">Experience</th>
                    <th scope="col">Residence Address</th>
                    <th scope="col">10th Details</th>
                    <th scope="col">12th Details</th>
                    <th scope="col">Graduation Details</th>
                    <th scope="col">Post Graduation Details</th>
                    <th scope="col">Other Education Details</th>
                    <th scope="col">Skills</th>
                    <th scope="col">Previous Project1 Details</th>
                    <th scope="col">Previous Project2 Details</th>
                    <th scope="col">Previous Project3 Details</th>
                    <th scope="col">Current Compamny Details</th>
                    <th scope="col">Previous Job1 Details</th>
                    <th scope="col">Previous Job2 Details</th>
                    <th scope="col">Previous Job3 Details</th>

                  </tr>
                </thead>
                <tbody>

                  {forEach from=$obj->candidateList item='list'}


                  <tr>
                    <th scope="row">{$list.applicant_id}</th>
                    <th scope="row">{$list.posted_date}</th>
                    <td class="text-capitalize">
                      {$list.first_name} {$list.last_name}
                    </td>
                    <td>{$list.contact_email}</td>
                    <td>
                      {$list.contact_phone_no}
                    </td>
                    <td>{$list.date_of_Birth}</td>
                    <td>{if $list.martial_status == ''}N/A{else}{$list.martial_status}{/if}</td>

                    <td>{if $list.permanent_address == ''}N/A {else}{$list.permanent_address}{/if}</td>
                    <td>{$list.prefered_city}</td>
                    <td>{$list.prefered_job_types}</td>
                    <td>{$list.functional_area}</td>
                    <td>{$list.industry_type}</td>
                    <td>{$list.experience}</td>
                    <td>{if $list.resident_address == ''}N/A {else}{$list.resident_address}{/if}</td>
                    <td>{if $list.10th_class_details == ",,,"} N/A
                      {else}{$list.10th_class_details} {/if}</td>


                    <td>{if $list.12th_class_details == ",,,"} N/A
                      {else}{$list.12th_class_details}{/if}</td>

                    <td>{if $list.graduation_details.collegeName ==
                      ''}N/A{else}{$list.graduation_details.collegeName},{$list.graduation_details.course},
                      {$list.graduation_details.Specilization},
                      {$list.graduation_details.Year_of_Complition},
                      {$list.graduation_details.percentage}{/if}</td>



                    <td>{if $list.post_graduation_details.collegeName ==
                      ''}N/A{else}{$list.post_graduation_details.collegeName},{$list.post_graduation_details.course},
                      {$list.post_graduation_details.Specilization},
                      {$list.post_graduation_details.Year_of_Complition},
                      {$list.post_graduation_details.percentage}{/if}</td>

                    <td>{if $list.additional_education_details == ",,,,"} N/A
                      {else}{$list.additional_education_details} {/if}</td>
                    <td>{if $list.skill_set == ''}N/A{else}{$list.skill_set}{/if}</td>

                    <td>{if $list.previous_project1_details == ',,'}N/A{else}{$list.previous_project1_details}{/if}</td>

                    <td>{if $list.previous_project2_details == ',,'}N/A{else}{$list.previous_project2_details}{/if}</td>

                    <td>{if $list.previous_project2_details == ',,'}N/A{else}{$list.previous_project3_details}{/if}</td>


                    <td>{if $list.current_company_name == ''}N/A{else}{$list.current_company_name},
                      {$list.current_salary},
                      {$list.current_designation},
                      {$list.current_company_joinee_date},
                      {$list.current_job_descripton}{/if}</td>

                    <td>{if $list.previous_job1 == ',,,,'}N/A{else}{$list.previous_job1}{/if}</td>


                    <td>{if $list.previous_job2 == ',,,,'}N/A{else}{$list.previous_job2}{/if}</td>


                    <td>{if $list.previous_job3 == ',,,,'}N/A{else}{$list.previous_job3}{/if}</td>




                  </tr>
                  {/foreach}
                </tbody>
              </table>
            </div>
          </div>
        </div>
        {forEach from=$obj->candidateList item='list'}
        <div class="col-sm-10 offset-sm-1 my-2 p-4 bg-white" style="border: 1px solid #c5bebe;">
          <h4>{$list.first_name|ucfirst} {$list.last_name|ucfirst}</h4>
          <p>{$list.permanent_address|ucfirst}</p>
          <h6>Education</h6>
          {if $list.post_graduation_details.course !== '' || $list.post_graduation_details.collegeName !== ''}
          <p>
            {$list.post_graduation_details.course}({$list.post_graduation_details.Year_of_Complition}),
            {$list.post_graduation_details.collegeName}
          </p>
          {elseif $list.graduation_details.course !== '' ||$list.graduation_details.collegeName !== ''}
          <p>
            {$list.graduation_details.course}({$list.graduation_details.Year_of_Complition}),
            {$list.graduation_details.collegeName}
          </p>
          {else}<p class="mb-3">N/A</p>
          {/if}
          <h6>Skills</h6>
          <p>{if $list.skill_set}{$list.skill_set}{else}N/A{/if}</p>
          <a href="{base_url()}/job_application_full_details/candidate_id={$list.applicant_id}"
            class="btn btn-sm witBtn">View Full Application</a>
        </div>
        {/foreach}
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
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js
  "></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
  <script>

    $(document).ready(function () {
      $('#hiddenTableWit').DataTable({
        dom: 'B',
        buttons: [
          'csv', 'excel'
        ],
        responsive: true
      });
    });
  </script>
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