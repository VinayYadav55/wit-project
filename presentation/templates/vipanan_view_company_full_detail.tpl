{load_presentation_object filename='jobPortalDashboard' assign='obj'}
{assign var='jobDetail' value=$obj->jobDetails}
{assign var = 'company' value=$obj->companyDetails}
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="{base_url()}/images/wit-favicon.ico" type="image/x-icon">
  <title>VIPANANWiT | COMPANY FULL DETAILS | DASHBOARD</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css" />
  <link rel="stylesheet" href="{base_url()}/styles/datatablesStyles.css?v={jsversion()}">
  <link href="{base_url()}/styles/wit_job_dashboard.css?v={jsversion()}" rel="stylesheet" />
  <link href="{base_url()}/styles/wit_job_dashboard_two.css?v={jsversion()}" rel="stylesheet" />
  <link rel="stylesheet" href="{base_url()}/styles/vipanan_view_company_details.css?v={jsversion()}" />

</head>

<body>
  <input type="hidden" baseUrl="{base_url()}/vipanan" class="baseUrl">
  <header class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
    <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
      data-target="#sidebar">
      <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
    </a>
    <a class="logo bg-white" href={base_url()}><img src="{base_url()}/images/witlogo-dashboard-logo.jpeg" width="100"
        height="60" tyle="max-width:100%; height:auto;
                alt=" wit-logo" /></a>
    <button class="navbar-toggler navbar-icon waves-effect waves-light" type="button" data-toggle="collapse"
      data-target="#navbarNav"><i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav navbar-toolbar ml-auto">
        <li>
          <div class="logOutBtn nav-link  waves-effect waves-light">LOGOUT
          </div>
        </li>
      </ul>
    </div>
  </header>
  <div id="sidebar" class="sidenav sidenav-fixed expand-lg" style="border-right:1px solid gray;">
    <div class="mt-5 pt-5 pl-3">
      <nav class="nav flex-column nav-pills">
        <a class="nav-link  active" href="{base_url()}/vipanan_wit_dashboard">Dashboard</a>
        <a class="nav-link " href="{base_url()}/vipanan_add_companies">Add Companies</a>
      </nav>
    </div>
  </div>

  <!-- ******************************************************* -->
  <div class="docs-content-wrapper" style="background-color: #ececec;">
    <div class="container">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 borderStyle bg-white my-2" style="position: sticky; top:64px; z-index:1;">
            <h4 class="text-capitalize text-center  py-1">Full Details of {$company.company_name}</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 bg-white borderStyle">
            <div class="row">
              <div class="col-sm-6 px-4 bg-white py-4 my-2" style="border-right:1px solid gray;">
                <h6 class="headingStyles">Company Name </h6>
                <p class="text-capitalize paragraphStyles">{$company.company_name}</p>
                <h6 class="headingStyles">Company Description</h6>
                <p class="paragraphStyles">{$company.company_description}</p>
                <h6 class="headingStyles">Number of Job Posted</h6>
                <p class="paragraphStyles">{$company.totalJobPosted}</p>
                <h6 class="pt-2 headingStyles">Office Number</h6>
                <p class="paragraphStyles">{$company.office_no}</p>
                <h6 class="headingStyles pt-2">GST Number</h6>
                <p class="paragraphStyles">{$company.gst_number}</p>
                <h6 class="headingStyles pt-2">State</h6>
                <p class="paragraphStyles text-capitalize">{$company.state}</p>
                <h6 class="headingStyles pt-2">City</h6>
                <p class="paragraphStyles text-capitalize">{$company.city}</p>
                <h6 class="headingStyles pt-2">Office Address</h6>
                <p class="paragraphStyles text-capitalize">{$company.office_address}</p>
                <h6 class="headingStyles pt-2">Pin Code / Zip</h6>
                <p class="paragraphStyles"> {$company.pin_code}</p>


              </div>

              <div class="col-sm-6 px-4 py-4 bg-white my-2">
                <h6 class=" headingStyles ">Contact Person</h6>
                <p class="text-capitalize paragraphStyles">{$company.contact_person_name}</p>
                <h6 class="pt-2 headingStyles ">Person Designation</h6>
                <p class="text-capitalize paragraphStyles">{$company.designation}</p>
                <h6 class="pt-2 headingStyles">Email</h6>
                <p class="paragraphStyles">{$company.email_id}</p>
                <h6 class="pt-2 headingStyles">Alternate Email</h6>
                <p class="paragraphStyles">{$company.alternate_email_address}</p>
                <h6 class="headingStyles pt-2">Contact Number</h6>
                <p class="paragraphStyles">{$company.mobile_no}</p>
              </div>

            </div>

          </div>

        </div>
        <div class="row">
          <div class="col-sm-12 pt-3 bg-white my-4 borderStyle">
            <h4 class="py-2 text-capitalize text-center">List of Jobs Posted by {$company.company_name}</h4>
            <hr class="w-75 bg-success">
            <div class="table-responsive-md">
              <table class="table table-sm table-striped" id="example">
                <thead>
                  <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Status</th>
                    <th scope="col">Applications</th>
                    <th scope="col">Application Deadline</th>
                  </tr>
                </thead>
                <tbody>
                  {foreach from=$jobDetail.jobDetails item=job}
                  <tr>
                    <th scope="row">{$job.posted_date}</th>
                    <td class="text-capitalize">
                      <a href="{base_url()}/vipanan_view_company_job_full_detail/job_id={$job.id}">{$job.job_title}</a>
                    </td>
                    <td class="{if $job.active_status == 'Active'}text-success{else}text-dark{/if}">{$job.active_status}
                    </td>
                    <td>
                      <a
                        href="{base_url()}/vipanan_view_company_job_applicant_list/job_id={$job.id}">{$job.applicant_count}&nbsp;(view)</a>
                    </td>
                    <td>{$job.deadline_date}</td>

                  </tr>
                  {/foreach}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
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
      $('#example').DataTable({
        dom: 'lBfrtip',
        buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        responsive: true
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $('.logOutBtn').on('click', function () {
        var baseUrl = $('.baseUrl').attr('baseUrl');

        $.ajax({
          url: 'index.php?vipanan=true',
          dataType: 'json',
          type: 'post',
          data: {
            'logOut': true
          },
          success: function (response) {
            window.location = baseUrl;
          }
        });
      });
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