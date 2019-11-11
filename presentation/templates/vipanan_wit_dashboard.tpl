{load_presentation_object filename='vipanan_admin' assign='obj'}
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="{base_url()}/images/wit-favicon.ico" type="image/x-icon">
  <title>VIPANANWiT | VIPANAN DASHBOARD</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css" />
  <link href="{base_url()}/styles/wit_job_dashboard.css?v={jsversion()}" rel="stylesheet" />
  <link href="{base_url()}/styles/wit_job_dashboard_two.css?v={jsversion()}" rel="stylesheet" />
  <link rel="stylesheet" href="{base_url()}/styles/datatablesStyles.css?v={jsversion()}">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
  <script src="{base_url()}/js/smoothscroll.js?v={jsversion()}"></script>
  <script type="text/javascript" src="{base_url()}/js/vipanan_admin.js?v={jsversion()}"> 
  </script>
</head>

<body>
     <div class="loader"></div>
  <input type="hidden" baseUrl="{base_url()}/vipanan" class="baseUrl">
  <header class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
    <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
      data-target="#sidebar">
      <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
    </a>
    <a class="logo bg-white" href={base_url()}><img src="{base_url()}/images/witlogo-dashboard-logo.jpeg" width="100" height="60" tyle="max-width:100%; height:auto;
                alt="wit-logo" /></a>
    <button class="navbar-toggler navbar-icon waves-effect waves-light" type="button" data-toggle="collapse"
      data-target="#navbarNav"><i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i></button>
    <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="nav navbar-nav navbar-toolbar ml-auto">
        <li><div class="logOutBtn nav-link  waves-effect waves-light">LOGOUT
        </div></li>
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
  <div class="docs-content-wrapper border border-dark">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <h4 class="bg-light py-1">Dashboard</h4>
                <div class="table-responsive-md">
                  <table class="table table-sm table-striped" id="example">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Register Date</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Update</th>
                        <th scope="col">Remove</th>
                      </tr>
                    </thead>
                    <tbody>
                      {foreach from=$obj->jobRegisteredcompanies item='companyData'}
                      <tr>
                        <th scope="row">{$companyData.id}</th>
                        <th scope="row">{$companyData.created_on}</th>
                        <td>
                          <a
                            href="{base_url()}/vipanan_view_company_full_detail/company_id={$companyData.id}">{$companyData.company_name}</a>
                        </td>
                        <td>
                          <a href="{base_url()}/vipanan_edit_company/company_id={$companyData.id}"><i
                              class="fas fa-edit"></i> Edit</a>
                        </td>

                        <td>
                             <i class="far fa-trash-alt" style="color:red;"></i>
                          <a class="removecompany" id='{$companyData.id}'>Remove</a>

                        </td>

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
  </div>

 
 
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
    $('#customFile').on('change', function () {
      var fileName = $(this)
        .val()
        .replace('C:\\fakepath\\', ' ');
      $(this)
        .next('.custom-file-label')
        .html(fileName);
    });
  </script>
  <script>
    
  </script>
  </body> 
  </html>