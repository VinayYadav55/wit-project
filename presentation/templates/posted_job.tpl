{load_presentation_object filename='postedJob' assign='obj'} {assign
var="jobDetail" value=$obj->jobDetails.jobDetails}
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
  <title>DASHBOARD | JOB DETAILS</title>
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
      data-target="#navbarNav"> <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i></button>
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
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 bg-white" style="position:sticky; top:64px; z-index:200;border:1px solid #8080804d;">
                <h4 class="py-2 text-center" >Full Job Post Details</h4>
              </div>
              <div class="col-sm-12">
                <div class="container">
                  <div class="row my-4" style="border:1px solid #8080804d;">
                    <div class="col-sm-6 bg-white p-4" style="border-right:1px solid #8080804d;">
                      <h5 class="py-1 headingStyles">Job Title/ Designation</h5>
                      <p class="py-1 text-capitalize paragraphStyles">{$jobDetail.job_title}</p>
                      <h5 class="py-1 headingStyles">Qualification</h5>
                      <p class="py-1 paragraphStyles ">{$jobDetail.qualifications}</p>
                      <h5 class="py-1 headingStyles">Work Experience</h5>
                      <p class="py-1 paragraphStyles">{$jobDetail.work_experience} Year</p>
                      <h5 class="py-1 headingStyles">Skills</h5>
                      <p class="py-1 paragraphStyles">{$jobDetail.required_skills}</p>
                      <h5 class="py-1 headingStyles">Job Type</h5>
                      <p class="py-1 paragraphStyles">{$jobDetail.job_type}</p>
                      <h5 class="py-1 headingStyles">Job Location</h5>
                      <p class="py-1 paragraphStyles">{$jobDetail.job_location}</p>
                       <h5 class="py-1 headingStyles">Functional Area</h5>
                      <p class="py-1 paragraphStyles">{$jobDetail.job_functional_area}</p>
                      <h5 class="py-1 headingStyles">Industry Type</h5>
                      <p class="py-1 paragraphStyles">{$jobDetail.job_industry_type}</p>
                      <h5 class="py-1 headingStyles">number of opening</h5>
                      <p class="py-1 paragraphStyles">{$jobDetail.total_openings}</p>
                      <h5 class="py-1 headingStyles">End Date</h5>
                      <p class="py-1 paragraphStyles">{$jobDetail.deadline_date}</p>
                      <h5 class="py-1 headingStyles">Salary</h5>
                      <p class="py-1 paragraphStyles">{$jobDetail.salary_provide}</p>
                      </div>
                      <div class="col-sm-6 bg-white  p-4">
                     <h5 class="py-1 headingStyles">Job Description</h5>
                      <p class="py-1 paragraphStyles">{$jobDetail.job_description}</p>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
    <script type="text/javascript" src="{base_url()}/js/job_portal_dashboard.js?v={jsversion()}"></script>
  <script>
    $(document).ready(function () {
      $('.js-example-basic-multiple').select2({
        tags: true,
        tokenSeparators: [',', ' '],
        placeholder: 'Enter Required Qualification',
        allowClear: true
      });
      $('.skills-required-for-job').select2({
        tags: true,
        tokenSeparators: [',', ' '],
        placeholder: 'Enter Required Skills',
        allowClear: true
      });
      $('.functional-area').select2({
        tags: true,
        tokenSeparators: [',', ' '],
        placeholder: 'Enter Required functional Area',
        allowClear: true
      });
      $('.industry-type').select2({
        tags: true,
        tokenSeparators: [',', ' '],
        placeholder: 'Enter Required Industry Type',
        allowClear: true
      });

      $('.job-location').select2({
        placeholder: 'Enter job location'
      });

      $('.js-example-basic-single').select2({
        placeholder: 'Enter Required Experience'
      });
    });
  </script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#example').DataTable();
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
   
    });
  </script>
</body>

</html>