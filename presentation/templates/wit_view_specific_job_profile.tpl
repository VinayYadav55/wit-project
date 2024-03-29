{load_presentation_object filename='postedJob' assign='obj'}
{assign var='jobData' value=$obj->jobDetails.jobDetails}
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
  <link rel="stylesheet" href="{base_url()}/styles/normalize.css" />
  <link rel="stylesheet" href="{base_url()}/styles/stylesheet.css" />
  <link rel="stylesheet" href="{base_url()}/styles/job_portal_styles.css?v={jsversion()}" />
  <link href="{base_url()}/styles/wit_job_dashboard.css?v={jsversion()}" rel="stylesheet" />
  <link href="{base_url()}/styles/wit_job_dashboard_two.css?v={jsversion()}" rel="stylesheet" />
  <title>WiT | JOB PROFILE DETAILS | DASHBOARD</title>
</head>

<body>
     <input type="hidden" baseUrl={base_url()} class="baseUrl">
  <header class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
    <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
      data-target="#sidebar">
      <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
    </a> 
   <a href="{base_url()}"><img src="{base_url()}/images/witlogo-dashboard-logo.jpeg" width="100" height="60" /></a>
    <button class="navbar-toggler navbar-icon waves-effect waves-light" type="button" data-toggle="collapse"
      data-target="#navbarNav"></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav navbar-toolbar ml-auto">
       <li><div class="logout nav-link  waves-effect waves-light">LOGOUT
        </div></li>
      </ul>
    </div>
  </header>
  <div id="sidebar" class="sidenav sidenav-fixed expand-lg" style="border-right:1px solid gray;">
    <div class="mt-5 pt-5 pl-3">
      <nav class="nav flex-column nav-pills">
        <a class="nav-link active" href="{base_url()}/dashboard">Dashboard</a>
      </nav>
    </div>
  </div>

  <div class="docs-content-wrapper wordingIssuesStyle" style="background-color: #ececec;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 bg-white" style="position:sticky; top:64px; z-index:200;border: #0505053b 1px solid;">
                <h4 class="py-2 text-center">Full Job Post Details</h4>
              </div>
              <div class="col-sm-12 p-4">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12 bg-white p-4" style="border: #0505053b 1px solid;">
                      <h5 class="py-1">Number of Application On this Job</h5>
                      <p class="py-1">{$jobData.applicant_count}</p>
                      <h5 class="py-1">Job Title/ Designation</h5>
                      <p class="py-1">{$jobData.job_title}</p>
                      <h5 class="py-1">Qualification</h5>
                      <p class="py-1">{$jobData.qualifications}</p>
                      <h5 class="py-1">Work Experience</h5>
                      <p class="py-1">{$jobData.work_experience} Year</p>
                      <h5 class="py-1">Skills</h5>
                      <p class="py-1">{$jobData.required_skills}</p>
                      </div>
                       <div class="col-sm-12 bg-white p-4 mt-2" style="border: #0505053b 1px solid;">
                      <h5 class="py-1">Job Type</h5>
                      <p class="py-1">{$jobData.job_type}</p>
                      <h5 class="py-1">Job Location</h5>
                      <p class="py-1">{$jobData.job_location}</p>
                      <h5 class="py-1">Functional Area</h5>
                      <p class="py-1">{$jobData.job_functional_area}</p>
                      <h5 class="py-1">Industry Type</h5>
                      <p class="py-1">{$jobData.job_industry_type}</p>
                      <h5 class="py-1">Number of Opening</h5>
                      <p class="py-1">{$jobData.total_openings}</p>
                      <h5 class="py-1">End Date</h5>
                      <p class="py-1">{$jobData.deadline_date}</p>
                      <h5 class="py-1">Salary</h5>
                      <p class="py-1">{$jobData.salary_provide}/ anum</p>
                      </div>
                      <div class="col-sm-12 bg-white p-4 mt-2" style="border: #0505053b 1px solid;">
                       <h5 class="py-1">Job Description</h5>
                      <p class="py-1">{$jobData.job_description}/ anum</p>
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"
    integrity="sha256-kQ6DQtOnXtjGYnAEMZQjpsioC75ND0K9I8MyjtdLCyk=" crossorigin="anonymous"></script>
    <script src="{base_url()}/js/smoothscroll.js?v={jsversion()}"></script>
  <script>
    $(document).ready(function () {
      $('#example').DataTable();
    });
  </script>
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
  <script type="text/javascript" src="{base_url()}/js/wit_admin_login.js?v={jsversion()}"></script>
</body>

</html>