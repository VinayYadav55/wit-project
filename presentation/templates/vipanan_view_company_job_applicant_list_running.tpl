{load_presentation_object filename='jobCandidateList' assign='obj'}

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
      <link rel="shortcut icon" href="{base_url()}/images/wit-favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css"
      integrity="sha256-PIRVsaP4JdV/TIf1FR8UHy4TFh+LiRqeclYXvCPBeiw="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"
    />
    <link rel="stylesheet" href="styles/normalize.css" />
    <link rel="stylesheet" href="styles/stylesheet.css" />
    <link rel="stylesheet" href="{base_url()}/styles/job_portal_styles.css?v={jsversion()}" />
    <link href="{base_url()}/styles/wit_job_dashboard.css?v={jsversion()}" rel="stylesheet" />
    <link href="{base_url()}/styles/wit_job_dashboard_two.css?v={jsversion()}" rel="stylesheet" />

    <title>VIPANANWiT | JOB APPLICANTS LIST | DASHBOARD</title>
  </head>
  <body>
        <input type="hidden" baseUrl="{base_url()}/vipanan" class="baseUrl">
    <header
      class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled"
    >
      <a
        href="javascript:;"
        class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
        data-target="#sidebar"
      >
        <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
      </a>
       <a class="logo bg-white" href={base_url()}><img src="{base_url()}/images/witlogo-dashboard-logo.jpeg" width="100" height="60" tyle="max-width:100%; height:auto;
                alt="wit-logo" /></a>
      <button
        class="navbar-toggler navbar-icon waves-effect waves-light"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
      ><i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i></button>
      <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="nav navbar-nav navbar-toolbar ml-auto">
        <li><div class="logOutBtn nav-link  waves-effect waves-light">LOGOUT
        </div></li>
      </ul>
      </div>
    </header>
    <div
      id="sidebar"
      class="sidenav sidenav-fixed expand-lg"
      style="border-right:1px solid gray;"
    >
      <div class="mt-5 pt-5 pl-3">
        <nav class="nav flex-column nav-pills">
         <a class="nav-link  active" href="{base_url()}/vipanan_wit_dashboard">Dashboard</a>
        <a class="nav-link " href="{base_url()}/vipanan_add_companies">Add Companies</a>
        </nav>
      </div>
    </div>

    <div class="docs-content-wrapper" style="background-color: #ECECEC;">
      <div class="container-fluid">
        <div class="row m-2">
          <div
            class="col-sm-12 my-2 bg-white"
            style="position: sticky; top:7%; z-index: 200;border: 1px solid #8080802b;"
          >
            <h3 class="text-center p-2">Number of application</h3>
          </div>
          {forEach from=$obj->candidateList item='list'}
          <div
            class="col-sm-12 my-2 p-4 bg-white"
            style="border: 1px solid #8080802b;"
          >
            <h4>{$list.first_name|ucfirst} {$list.last_name|ucfirst}</h4>
            <p>{$list.permanent_address|ucfirst}</p>
            <h6>Education:</h6>
            
            <p>
              {$list.post_graduation_details.course} ({$list.post_graduation_details.Year_of_Complition}),  {$list.post_graduation_details.collegeName} 
            </p>
            
            <h6>Skills</h6>
            <p>{$list.skill_set}</p>
            <a
              href="{base_url()}/candidate_profile/candidate_id={$list.applicant_id}"
              class="btn btn-sm witBtn"
              >View Full Application</a
            >
          </div>
          {/foreach}
        </div>
      </div>
    </div>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"
      integrity="sha256-kQ6DQtOnXtjGYnAEMZQjpsioC75ND0K9I8MyjtdLCyk="
      crossorigin="anonymous"
    ></script>
    <script src="{base_url()}/js/smoothscroll.js?v={jsversion()}"></script>

    <script>
      $(document).ready(function() {
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
      $(document).ready(function() {
        $('#example').DataTable();
      });
    </script>
    <script type="text/javascript">
      $(window).on('load resize', function() {
        if ($(this).outerWidth() < 992) {
          //768
          $('body')
            .removeClass('sidebar-collapsed')
            .addClass('drawer-sidebar');
        } else {
          $('body').removeClass('drawer-sidebar');
        }
      });

      $(function() {
        $('.js-sidebar-toggler').click(function(e) {
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
           $('.logOutBtn').on('click', function(){
      var baseUrl = $('.baseUrl').attr('baseUrl');

      $.ajax({
        url:'index.php?vipanan=true',
        dataType:'json',
        type:'post',
        data:{
          'logOut':true
        },
        success:function(response){
          window.location = baseUrl;
        }
      });
    });
      });
    </script>
  </body>
</html>
