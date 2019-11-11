{load_presentation_object filename='jobCandidateList' assign='obj'}
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
  <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.css"
      integrity="sha256-sOzekWI0idT6INhELxtD6PppBzQpW7L8cGjCa4h7WsM="
      crossorigin="anonymous"
    /> -->
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

  <title>WiT | APPLICANT DETAILS | DASHBOARD</title>
</head>

<body>
     <input type="hidden" baseUrl={base_url()} class="baseUrl">
  <header class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
    <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
      data-target="#sidebar">
      <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
    </a>
    <a class="logo" href="{base_url()}"><img src="{base_url()}/images/witlogo-dashboard-logo.jpeg" width="100" height="60" /></a>
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
  <div class="docs-content-wrapper" style="background-color:#f2dcdc;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 bg-white" style="position: sticky; top:64px; z-index:200;">
          <h2 class="text-center py-1">
            Detailed View of Application
          </h2>
        </div>
        

          <div class="col-sm-12 p-4 stylingLists">
            {assign var='candidateDetail' value=$obj->applicantDetails}

            <div class="col-sm-12 p-4 stylingLists">
              <div class="bg-white my-2 p-4" style="border:#bbbbbb 1px solid">
                <h4 class="text-capitalize">{$candidateDetail.first_name} {$candidateDetail.last_name}</h4>
                <p>{$candidateDetail.resident_address}</p>
                <h6>Skills</h6>
                <p>{$candidateDetail.skill_set}</p>
              </div>
              <div class="bg-white my-2 p-4" style="border:#bbbbbb 1px solid">
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
                            ({$aa[i].passingYear})</strong>
                        </li>

                        <li class="py-1">
                          {$aa[i].schoolName}
                        </li>
                        <li class="py-1">CGPA/Percentage: {$aa[i].percentage}</li>
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
                        <li class="py-1">
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
                  <div class="col-2"><b>Previous Project:</b></div>
                  <div class="col-10">
                    <ul>
                      {assign var="previousProject" value=$candidateDetail.projectDetails}
                      {counter start=0 print=false}
                      {section name=i loop=$previousProject}

                      <li class="py-1"><strong>Project-{counter}</strong></li>
                        {if $previousProject[i].project_title}
                      <li class="py-1 text-capitalize"><strong>{$previousProject[i].project_title}
                          ({$previousProject[i].year_of_completion})</strong>
                      </li>
                      <li class="py-1">{$previousProject[i].project_description}</li>
                      <hr>
                       {else}N/A
                  {/if}
                      {/section}
                    </ul>

                    </ul>
                  </div>
                  <div class="col-2"><b>Previous Jobs:</b></div>
                  <div class="col-10">
                    <ul>
                      {assign var="previousJobs" value=$candidateDetail.previousJobDetails}
                      {counter start=0 print=false}

                      {section name=i loop=$previousJobs}
                             {if $previousJobs[i].designantion!=''}
                      <li class="py-1 text-capitalize"><strong>{counter}-{$previousJobs[i].designantion} ({$previousJobs[i].join_date}
                          -{$previousJobs[i].end_date})</strong></li>
                      <li class="py-1 text-capitalize">{$previousJobs[i].organization}</li>
                      <li class="py-1">{$previousJobs[i].description}</li>
                      <hr>
                      {else}
                       N/A
                      {/if}
                      {/section}
                    </ul>
                  </div>
                  <div class="col-2"><b>Currently Working:</b></div>
                  <div class="col-10">
                      {if $candidateDetail.current_company_name!=''}
                    <ul>
                      <li class="py-1"><b> Company Name</b></li>
                      <li class="py-1">
                        {$candidateDetail.current_company_name}
                      </li>
                      <li class="py-1"><b> Desginantion</b></li>
                      <li class="py-1">
                        {$candidateDetail.current_designation}
                      </li>
                    <!--  <li class="py-1"><b> Join Date</b></li>
                      <li class="py-1">
                        {$candidateDetail.current_company_joinee_date}
                      </li>-->
                      <li class="py-1"><b> About The Job</b></li>
                      <li class="py-1">
                        {$candidateDetail.current_job_descripton}
                      </li>
                    </ul>
                     {else}
                <ul>
                  <li class="text-danger">Not Working</li>
                </ul>
                {/if}
                  </div>
                  <div class="col-2"><b>Contact Details:</b></div>
                  <div class="col-10">
                    <ul>
                      <li class="py-1">Email id:{$candidateDetail.contact_email}</li>
                      <li class="py-1">Contact: {$candidateDetail.contact_phone_no}</li>
                    </ul>
                  </div>
                </div>
                {if $candidateDetail.resume_link}
                  <div class="col-sm-4 offset-sm-4 text-center text-white">
                <a class="text-white py-2 px-5 my-2 witBtn"
                  href="{base_url()}/{$candidateDetail.resume_link}" download>Download
                  Resume</a>
              </div>
              {/if}
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
    <script src="js/smoothscroll.js"></script>
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
           $('.logout').on('click', function() {
    var baseUrl = $('.baseUrl').attr('baseUrl');

    $.ajax({
      url: 'index.php?wit=true',
      dataType: 'json',
      type: 'post',
      data: {
        logOut: true
      },
      success: function(response) {
        window.location = baseUrl + '' + '/wit';
      }
    });
  });
      });
    </script>
    <script type="text/javascript" src="{base_url()}/js/wit_admin_login.js?v={jsversion()}"></script>
</body>

</html>