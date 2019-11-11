
<!DOCTYPE html>
<html lang="en">
  <head>
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147066526-1"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){
     dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-147066526-1');
</script>
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
    <link rel="stylesheet" href="styles/normalize.css?v={jsversion()}" />
    <link rel="stylesheet" href="styles/stylesheet.css?v={jsversion()}" />
    <link rel="stylesheet" href="styles/job_portal_styles.css?v={jsversion()}" />
    <link href="styles/wit_job_dashboard.css?v={jsversion()}" rel="stylesheet" />
    <link href="styles/wit_job_dashboard_two.css?v={jsversion()}" rel="stylesheet" />
    <script type="text/javascript" src="{base_url()}/js/vipanan_add_companies.js?v={jsversion()}"></script>
    <title>DASHBOARD | EDIT PROFILE</title>
  </head>
  <body>
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
      <a class="logo" href="#">WiT</a>
      <button
        class="navbar-toggler navbar-icon waves-effect waves-light"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
      ></button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav navbar-toolbar ml-auto">
      <li class="text-white mr-md-3">
        {$companySessionDetail.company_name|@capitalize}
      </li>
      <li>
        <div class="btn-group">
          <button type="button " class="btn rounded-circle dropdown-toggle btn-primary" data-toggle="dropdown"
            data-display="static" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-tie" style="font-size: 20px;"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-right">
            <h6 class="dropdown-header">{$companySessionDetail.company_name|@capitalize}</h6>
            <h6 class="dropdown-header">
              {$companySessionDetail.email_id}
            </h6>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" type="button">
              <a href='{base_url()}/edit/company_id={$companySessionDetail.id}'> Edit Profile</a>
            </button>
            <div class="dropdown-divider"></div>
            <div class="logOutBtn pl-4">
              Logout
            </div>
          </div>
        </div>
      </li>
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
          <a class="nav-link active" href="{base_url()}/job_portal_dashboard"
            >Dashboard</a
          >
          <a class="nav-link" href="{base_url()}/post_jobs">Post Jobs</a>
        </nav>
      </div>
    </div>
    <div class="docs-content-wrapper border border-dark">
      <div class="container-fluid">
        <div class="row">
          <div
            class="col-sm-12"
            style="position: sticky; top:8%; z-index: 1; border-top: 5px solid white;"
          >
            <h4 class="bg-light py-1">
              Edit Profile
            </h4>
          </div>
          <div class="col-sm-12">
            <ul
              class="nav nav-tabs bg-light"
              id="myTab"
              role="tablist"
              style="position: sticky; top:95px; z-index:20;"
            >
              <li class="nav-item">
                <a
                  class="nav-link active"
                  id="home-tab"
                  data-toggle="tab"
                  href="#home"
                  role="tab"
                  aria-controls="home"
                  aria-selected="true"
                  >Personal Details</a
                >
              </li>
             
              <li class="nav-item">
                <a
                  class="nav-link"
                  id="profile-tab"
                  data-toggle="tab"
                  href="#profile"
                  role="tab"
                  aria-controls="profile"
                  aria-selected="false"
                  >Company Profile</a
                >
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div
                class="tab-pane fade show active"
                id="home"
                role="tabpanel"
                aria-labelledby="home-tab"
              >
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12 py-4">
                      <form>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="fname">FirstName</label>
                            <input
                              type="text"
                              class="form-control"
                              id="fname"
                              placeholder="fname"
                            />
                          </div>
                          <div class="form-group col-md-6">
                            <label for="lname">LastName</label>
                            <input
                              type="text"
                              class="form-control"
                              id="lname"
                              placeholder="lname"
                            />
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input
                              type="email"
                              class="form-control"
                              id="inputEmail4"
                              placeholder="Email"
                            />
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input
                              type="password"
                              class="form-control"
                              id="inputPassword4"
                              placeholder="Password"
                            />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="designation">Designation</label>
                          <input
                            type="text"
                            class="form-control"
                            id="designation"
                            placeholder="designation"
                          />
                        </div>

                        <div class="form-row">
                          <div class="form-group col-sm-6">
                            <label for="inputAddress">Alternate Email</label>
                            <input
                              type="text"
                              class="form-control"
                              id="inputAddress"
                              placeholder="alternate email"
                            />
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputState">Contact</label>
                            <input
                              type="text"
                              class="form-control"
                              id="inputAddress"
                              placeholder="enter contact"
                            />
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              id="gridCheck"
                            />
                            <label class="form-check-label" for="gridCheck">
                              Check me out
                            </label>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                          Update
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="profile"
                role="tabpanel"
                aria-labelledby="profile-tab"
              >
                <div class="container">
                  <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                      <div class="row">
                        <div class="col-sm-12 py-4">
                          <form>
                            <div class="form-group">
                              <label for="organizationnname"
                                >Organization Name</label
                              >
                              <input
                                type="text"
                                class="form-control"
                                id="organizationnname"
                                placeholder="organization name"
                              />
                            </div>
                            <div class="form-group">
                              <label for="comment"
                                >Organization Description</label
                              >
                              <textarea
                                class="form-control"
                                rows="3"
                                id="comment"
                              ></textarea>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-sm-6">
                                <label for="organizationnumber"
                                  >Organization Number</label
                                >
                                <input
                                    value='{$company.office_no}'
                                  type="text"
                                  class="form-control"
                                  id="organizationnumber"
                                  placeholder="organizationnumber"
                                />
                              </div>
                              <div class="form-group col-sm-6">
                                <label for="organizationnumber"
                                  >Organization Logo</label
                                >
                                <div class="custom-file">
                                  <input
                                    type="file"
                                    accept=".pdf ,.docx, .doc"
                                    class="custom-file-input"
                                    id="customFile"
                                  />
                                  <label
                                    class="custom-file-label"
                                    for="customFile"
                                    >Choose file</label
                                  >
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="organizationaddress"
                                >Organization Address</label
                              >
                              <input
                                type="text"
                                class="form-control"
                                id="designation"
                                placeholder="organizationaddress"
                              />
                            </div>

                            <div class="form-row">
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="sel1">Country</label>
                                  <select
                                    class="form-control"
                                    id="countySel"
                                    size="1"
                                  >
                                    <option
                                      value=""
                                      selected="true"
                                      disabled="disabled"
                                      >Select Country</option
                                    >
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="sel1">State</label>
                                  <select
                                    class="form-control"
                                    id="stateSel"
                                    size="1"
                                  >
                                    <option
                                      value="{$company.state}"
                                      selected="true"
                                      
                                      >{$company.state}</option
                                    >
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="sel1">City</label>
                                  <select
                                    class="form-control"
                                    id="citySel"
                                    size="1"
                                  >
                                    <option
                                      value="{$company.city}"
                                      selected="true"
                                     
                                      >{$company.city}</option
                                    >
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="sel1">Zip</label>
                                  <input
                                    class="form-control"
                                    id="zipSel"
                                    size="6"
                                    value='{$company.pin_code}'
                                  >
                                    
                                    >
                                  </select>
                                </div>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary">
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
    <script type="text/javascript" src="{base_url()}/js/job_portal_dashboard.js?v={jsversion()}"></script>
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
      });
    </script>
  </body>
</html>
