{load_presentation_object filename='jobCandidateList' assign='obj'}
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
     <link rel="shortcut icon" href="{base_url()}/images/wit-favicon.ico" type="image/x-icon">
    <title>VIPANANWiT | APPLICANT FULL DETAILS | DASHBOARD</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
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
    <link href="{base_url()}/styles/wit_job_dashboard.css?v={jsversion()}" rel="stylesheet" />
    <link href="{base_url()}/styles/wit_job_dashboard_two.css?v={jsversion()}" rel="stylesheet" />
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
          <a class="nav-link  active" href="{base_url()}/vipanan_wit_dashboard"
            >Dashboard</a
          >
          <a class="nav-link " href="{base_url()}/vipanan_add_companies"
            >Add Companies</a
          >
        </nav>
      </div>
    </div>

    <div class="docs-content-wrapper" style="background-color:#ECECEC;">
         <div class="container-fluid">
        <div class="row">
          <div
            class="col-sm-12 bg-white"
            style="position: sticky; top:64px; z-index:200;"
          >
            <h4 class="text-center p-2">
              Detailed View of Application
            </h4>
          </div>
          <div class="col-sm-12">
            {assign var='candidateDetail' value=$obj->applicantDetails}
          <div class="col-sm-12 stylingLists">
            <div class="bg-white my-2 p-4" style="border: #bababa 1px solid;">
              <h4 class="text-capitalize">{$candidateDetail.first_name} {$candidateDetail.last_name}</h4>
              <p>{$candidateDetail.resident_address}</p>
              <h6>Skills</h6>
              <p>{$candidateDetail.skill_set}</p>
            </div>
            <div class="bg-white my-2 p-4" style="border: #bababa 1px solid;">
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
                      
                      <li>
                        <strong>
                        {$aa[i].class}
                        ({if $aa[i].passingYear!=''}{$aa[i].passingYear}{else}N/A{/if})</strong>
                      </li>
                
                      <li>
                        {$aa[i].schoolName}
                      </li>
                      <li>CGPA/Percentage:{if $aa[i].percentage!=''}{$aa[i].percentage}{else}N/A{/if}</li>
                      <hr>
                      {/section}
                    </ul>

                    <ul>
                      {assign var="bb" value=$candidateDetail.educationDetails}
                      {section name=i loop=$aa start=2 max=3}
                      {if $bb[i].course!=''}
                      <li>
                        <strong>{$bb[i].course}({$aa[i].Year_of_Complition})</strong>
                      </li>
                      <li>
                        {$bb[i].collegeName}
                      </li>
                      <li>
                        <strong>Percentage/CGPA/ GPA:</strong>{$bb[i].percentage}
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
                       
                       <li><strong>Project-{counter}</strong></li>
                       {if $previousProject[i].project_title}
                    <li><strong>{$previousProject[i].project_title} ({$previousProject[i].project_title})</strong></li>
                    <li>{$previousProject[i].project_description}</li>
                    <hr>{else}N/A
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
                       <li><strong></strong></li>
                    <li><strong>{counter}-{$previousJobs[i].designantion} ({$previousJobs[i].join_date} -{$previousJobs[i].end_date})</strong></li>
                    <li>{$previousJobs[i].organization}</li>
                    <li>{$previousJobs[i].description}</li>
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
                    <li><b>Company Name</b></li>
                    <li class="text-capitalize pb-2">
                      {$candidateDetail.current_company_name}
                    </li>
                    <li><b> Desginantion</b></li>
                    <li class="text-capitalize pb-2">
                      {$candidateDetail.current_designation}
                    </li>
                    <!--<li><b>Joining Date</b></li>
                    <li class="pb-2">
                      {$candidateDetail.current_company_joinee_date}
                    </li>-->
                    <li><b>About The Job</b></li>
                    <li class="pb-2">
                      {$candidateDetail.current_job_descripton}
                    </li>
                  </ul>
                    {else}
                <ul>
                    <li><b>Not Working</b></li>
                </ul>
                 
                {/if}
                </div>
                <div class="col-2"><b>Contact Details</b></div>
                <div class="col-10">
                  <ul>
                    <li class="pb-2"><b>Email id:</b>  {$candidateDetail.contact_email}</li>
                    <li class="pb-2"><b>Contact:</b> {$candidateDetail.contact_phone_no}</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
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
    <script src="{base_url()}/js/smoothscroll.js?v={jsversion()}"></script>
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
      });
    </script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#example').DataTable();
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
    <script>
      $('#customFile').on('change', function() {
        var fileName = $(this)
          .val()
          .replace('C:\\fakepath\\', ' ');
        $(this)
          .next('.custom-file-label')
          .html(fileName);
      });
    </script>
  </body>
</html>
