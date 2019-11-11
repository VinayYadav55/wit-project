{load_presentation_object filename='vipanan_admin' assign='obj'}
{assign var='company' value=$obj->companyDetail}

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
    <title>VIPANANWiT | EDIT COMPANY | DASHBOARD</title>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"
    ></script>
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
    <script type="text/javascript" src="{base_url()}/js/vipanan_add_companies.js?v={jsversion()}"></script>
  </head>
  <body>
      <div class="loader"></div>
    <input type="hidden" company_id={$company.id} class="companyId">
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
          <a class="nav-link  active " href="{base_url()}/vipanan_wit_dashboard"
            >Dashboard</a
          >
          <a class="nav-link" href="{base_url()}/vipanan_add_companies"
            >Add Companies</a
          >
        </nav>
      </div>
    </div>

    
    <div class="docs-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="container">
              <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                  <div class="row">
                    <div class="col-sm-12 py-4">
                      <form>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="fname">First Name<span class="text-danger">*</span></label>
                            <input
                              type="text"
                              class="form-control"
                              id="fname"
                              placeholder="Required First Name"
                              value="{$company.first_name|ucfirst}"
                            />
                          </div>
                          <div class="form-group col-md-6">
                            <label for="lname">Last Name<span class="text-danger">*</span></label>
                            <input
                              type="text"
                              class="form-control"
                              id="lname"
                              placeholder="Required Last Name"
                              value="{$company.last_name|ucfirst}"

                            />
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">Email<span class="text-danger">*</span></label>
                            <input
                              type="email"
                              class="form-control"
                              id="inputEmail4"
                              placeholder="Email"
                              value="{$company.email_id}"

                            />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="designation">Designation<span class="text-danger">*</span></label>
                          <input
                            type="text"
                            class="form-control"
                            id="designation"
                            placeholder="designation"
                            value="{$company.designation|ucfirst}"
                          />
                        </div>

                        <div class="form-row">
                          <div class="form-group col-sm-6">
                            <label for="inputAddress">Alternate Email<span class="text-danger">*</span></label>
                            <input
                              type="text"
                              class="form-control"
                              id="alternateEmail"
                              placeholder="alternate email"
                              value="{$company.alternate_email_address}"
                            />
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputState">Contact<span class="text-danger">*</span></label>
                            <input
                              type="text"
                              class="form-control"
                              id="contactNo"
                              placeholder="enter contact"
                              value="{$company.mobile_no|ucfirst}"
                            />
                          </div>
                          
                        </div>
                        <div class="form-group">
                          <label for="organizationnname"
                            >Organization Name<span class="text-danger">*</span></label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id="organizationnname"
                            placeholder="organization name"
                            value="{$company.company_name|ucfirst}"
                          />
                        </div>
                        <div class="form-group">
                          <label for="comment">Organization Description<span class="text-danger">*</span></label>
                          <textarea
                            class="form-control"
                            rows="3"
                            id="orgDesc"

                          >{$company.company_description}</textarea>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-sm-6">
                            <label for="organizationnumber"
                              >GST Number<span class="text-danger">*</span></label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="organizationnumber"
                              placeholder="organizationnumber"
                              value="{$company.gst_number|ucfirst}"
                            />
                          </div>
                          <div class="form-group col-sm-6">
                                <label for="organizationnumber"
                                  >Organization Number<span class="text-danger">*</span></label
                                >
                                <input
                                    value='{$company.office_no}'
                                  type="text"
                                  class="form-control"
                                  id="organizationnumber"
                                  placeholder="organizationnumber"
                                />
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="organizationaddress"
                            >Organization Address<span class="text-danger">*</span></label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id="organizationaddress"
                            placeholder="organizationaddress"
                            value="{$company.office_address|ucfirst}"
                          />
                        </div>

                        <div class="form-row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="sel1">State<span class="text-danger">*</span></label>
                              <select
                                class="form-control"
                                id="stateSel"
                                size="1"
                              >
                                <option
                                  value="{$company.state}"
                                  selected="true"
                                  disabled="disabled"
                                  >{$company.state}</option
                                >
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="sel1">City<span class="text-danger">*</span></label>
                              <select
                                class="form-control"
                                id="citySel"
                                size="1"
                              >
                                <option
                                  value="{$company.state}"
                                  selected="true"
                                  disabled="disabled"
                                  >{$company.city}</option
                                >
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="sel1">Zip<span class="text-danger">*</span></label>
                              <input class="form-control" id="zipSel" size="1" value='{$company.pin_code}'>
                              </input>
                            </div>
                          </div>
                        </div>
                        <button type="submit" class="btn witBtn px-5 mt-4 waves-effect waves-light text-white updateCompanyDetails">
                          Update
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-sm-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
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
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
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
