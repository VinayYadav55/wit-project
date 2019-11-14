{load_presentation_object filename='mentorsProfile' assign='obj'}
{load_presentation_object filename='mentors' assign='obj'}

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="{base_url()}/images/wit-favicon.ico" type="image/x-icon">
  <title>WiT DASHBOARD | LIST OF COMPANIES</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css" />
  <link href="{base_url()}/styles/wit_job_dashboard.css?v={jsversion()}" rel="stylesheet" />
  <link href="{base_url()}/styles/wit_job_dashboard_two.css?v={jsversion()}" rel="stylesheet" />
   <link rel="stylesheet" href="{base_url()}/styles/datatablesStyles.css?v={jsversion()}">
  <script type="text/javascript" src="{base_url()}/js/wit_admin_login.js?v={jsversion()}"></script>
  <script type="text/javascript" src="{base_url()}/js/mentor.js?v={jsversion()}"></script>
</head>

<body>
  <input type="hidden" baseUrl={base_url()} class="baseUrl">
  <header class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
    <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
      data-target="#sidebar">
      <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
    </a>
    <a class="logo bg-white" href={base_url()}><img src="{base_url()}/images/witlogo-dashboard-logo.jpeg" width="100" height="60"  /></a>
    <button class="navbar-toggler navbar-icon waves-effect waves-light" type="button" data-toggle="collapse"
      data-target="#navbarNav"><i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i></button>
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
        <a class="nav-link" href="{base_url()}/dashboard">Dashboard</a>
        <a class="nav-link active" href="{base_url()}/mentors">Mentor List</a>
      </nav>
    </div>
  </div>

  <div class="docs-content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 p-2">
                  <ul class="nav nav-pills mb-3 py-2 px-5 someStyleinList" id="pills-tab" role="tablist" style="position: sticky;top: 64px;z-index: 1;">
                      <li class="nav-item someStyleinListone">
                        <a class="nav-link active someStyleinListtwo" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">New Mentors</a>
                      </li>
                      <li class="nav-item someStyleinListone">
                        <a class="nav-link someStyleinListtwo" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Approved List</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                          {foreach from=$obj->mentors item=list}
                          <div class="col-sm-12 mb-4 mentorListStyles py-4 " id="followedMentors">
                              <div class="row">
                                  <div class="col-8">
                                          <h6 class="text-capitalize">{$list.first_name} {$list.last_name}</h6>
                                          <div><small><b>Gender:</b> {$list.gender}</small></div>
                                          <div><small><b>Email id:</b> {$list.email_id}</small></div>
                                          <div class="mt-3">
                                              <a class="btn btn-sm btn-outline-primary" 
                                              href="{base_url()}/wit_mentors_detailed_profile/mentors_id={$list.id}">
                                                  View Profile
                                              </a>
                                              <button class=" btn btn-sm btn-outline-primary approveByWit" 
                                              id="{$list.id}">Approve</button>
                                              <!-- <button class=" btn-danger denyButton">Deny</button> -->
                                      </div>
                                  </div>
                                  <div class="col-4">
                                          <div class="speakerImgDivMentor">
                                                  <div class="imageContainerSpeakerMentor">
                                                      <img src="{base_url()}/images/avtar.png" class="main-image-speaker-mentor rounded-circle" alt="" />
                                           </div>
                                       </div>
                                  </div>
                              </div>
                          </div>
                          {/foreach}
                      </div>
                      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                          {foreach from=$obj->approvedMentorList item=approvedlist}
                          <div class="col-sm-12 mb-4 mentorListStyles py-4 " id="followedMentors">
                              <div class="row">
                                  <div class="col-8">
                                          <h6 class="text-capitalize">{$approvedlist.first_name} {$approvedlist.last_name}</h6>
                                          <div><small><b>Gender:</b> {$approvedlist.gender}</small></div>
                                          <div><small><b>Email id:</b> {$approvedlist.email_id}</small></div>
                                          <div class="mt-3">
                                              <a class="btn btn-sm btn-outline-primary" 
                                              href="{base_url()}/wit_mentors_detailed_profile/mentors_id={$approvedlist.id}">
                                                  View Profile
                                              </a>
                                      </div>
                                  </div>
                                  <div class="col-4">
                                          <div class="speakerImgDivMentor">
                                                  <div class="imageContainerSpeakerMentor">
                                                      <img src="{base_url()}/images/avtar.png" class="main-image-speaker-mentor rounded-circle" alt="" />
                                           </div>
                                       </div>
                                  </div>
                              </div>
                          </div>
                          {/foreach}
                      </div>
                    </div> 
            </div>
          </div>
        </div>
    
 <!-- The Modal -->
 <div class="modal fade animated bounceInUp" id="myModal">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header bg-dark">
          <h4 class="modal-title text-white">Mentor Profile</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            
          </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
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
      //get the file name
      // var fileName = $(this).val();
      // var fileName = $(this).val();
      var fileName = $(this)
        .val()
        .replace('C:\\fakepath\\', ' ');
      //replace the "Choose a file" label
      $(this)
        .next('.custom-file-label')
        .html(fileName);
    });
  </script>
</body>

</html>