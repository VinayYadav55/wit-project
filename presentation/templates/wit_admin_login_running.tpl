{load_presentation_object filename='wit_admin_login' assign='obj'}
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
    <link rel="stylesheet" href="{base_url()}/styles/normalize.css" />
    <link rel="stylesheet" href="{base_url()}/styles/stylesheet.css" />
    <link rel="stylesheet" href="{base_url()}/styles/wit_admin_login.css?v={jsversion()}" />
    <link href="{base_url()}/styles/wit_job_dashboard.css?v={jsversion()}" rel="stylesheet" />
    <link href="{base_url()}/styles/wit_job_dashboard_two.css?v={jsversion()}" rel="stylesheet" />
    <title>WiT | DASHBOARD LOGIN</title>
  </head>
  <body>
      <div class="loader"></div>
    <header
      class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled"
    >
      <a class="logo bg-white" href="{base_url()}"
        ><img src="images/witlogo-dashboard-logo.jpeg" width="100" height="60" alt=""
      /></a>
      <button
        class="navbar-toggler navbar-icon waves-effect waves-light"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
      ></button>
       <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav navbar-toolbar ml-auto">
          <li class="py-5">
            <a href="#" class="nav-link waves-effect waves-light"
              >WomenInTech</a
            >
          </li>
          <li>
            
          </li>
        </ul>
      </div>
    </header>

    <div class="docs-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="container-fluid">
              <div class="row">
                <div
                  class="col-sm-12 bg-light py-2 text-center"
                  style="position: sticky; top:65px; z-index:200;"
                >
                  <h4 class="">WiT Admin Login</h4>
                </div>
                <div class="col-sm-6 offset-sm-3 py-5 mt-5" style="border: 1px solid #dadada;
    background-image: linear-gradient(45deg,rgba(30, 50, 98, 0.5),rgba(233, 65, 97, 0.5));
    border-radius: 5px;
    background-color: #EFFAFD;
    box-shadow: 2px 1px 6px -2px grey;">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-6 offset-sm-3  py-5 mt-5">
                        <form>
                          <div class="form-group">
                            <label for="email">Email<span class="text-danger">*</span></label>
                            <input
                              type="email"
                              name="email"
                              id="email"
                              class="form-control email"
                            />
                          </div>
                          <div class="form-group">
                            <label for="pwd">Password<span class="text-danger">*</span></label>
                            <input
                              type="password"
                              name="pwd"
                              id="pwd"
                              class="form-control pwd"
                            />
                          </div>
                          <div class="form-group mt-5 py-2 text-center">
                            <a
                              type="submit"
                              href="#!"
                              class="btn witBtn px-5 witadminlogin"
                            >
                              Login
                            </a>
                          </div>
                        </form>
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
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="{base_url()}/js/wit_admin_login.js?v={jsversion()}"></script>
  </body>
</html>
