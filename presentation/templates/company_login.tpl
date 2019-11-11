{load_presentation_object filename='jobPortalDashboard' assign='obj'}
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
  <link rel="stylesheet" href="{base_url()}/styles/normalize.css?v={jsversion()}" />
  <link rel="stylesheet" href="{base_url()}/styles/stylesheet.css?v={jsversion()}" />

  <link href="{base_url()}/styles/wit_job_dashboard.css?v={jsversion()}" rel="stylesheet" />
  <link href="{base_url()}/styles/wit_job_dashboard_two.css?v={jsversion()}" rel="stylesheet" />
  <link rel="stylesheet" href="{base_url()}/styles/wit_admin_login.css?v={jsversion()}" />
  <title>EMPLOYER LOGIN</title>
</head>

<body>
  <div class="loader"></div>
  <header class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
    <a class="logo" href="{base_url()}"><img src="images/witlogo-dashboard-logo.jpeg" width="100" height="60"
        alt="" /></a>
    <button class="navbar-toggler navbar-icon waves-effect waves-light" type="button" data-toggle="collapse"
      data-target="#navbarNav"></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav navbar-toolbar ml-auto">
        <li class="py-5">
          <a href="#" class="nav-link waves-effect waves-light">Employer</a>
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
              <div class="col-sm-12 text-center pt-5 mt-5">
                <form class="login-form">
                  <h1>Login</h1>
                  <div class="txtb form-group">
                    <input type="text" class="email"  name="email"
                              id="email" />
                    <span data-placeholder="Username"></span>
                  </div>
                  <div class="txtb form-group">
                    <input type="password" class="pwd"  name="pwd"
                              id="pwd" />
                    <span data-placeholder="Password"></span>
                  </div>
                  <a href="" class="float-right forgotpasswordStyle mb-4" data-toggle="modal"
                    data-target="#myModal">Forgot
                    password</a>
                  <input type="submit" class="logbtn companylogin" value="Login">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                Forgot your Password ? <br><br>
                please write to us at <span class="text-primary">info@womenintech.co.in</span>
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
  <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"
    integrity="sha256-kQ6DQtOnXtjGYnAEMZQjpsioC75ND0K9I8MyjtdLCyk=" crossorigin="anonymous"></script>
  <script src="{base_url()}/js/smoothscroll.js?v={jsversion()}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
  <script src="{base_url()}/js/job_portal_dashboard.js?v={jsversion()}"></script>
  <script type="text/javascript">
    $(".txtb input").on("focus", function () {
      $(this).addClass("focus");
    });

    $(".txtb input").on("blur", function () {
      if ($(this).val() == "")
        $(this).removeClass("focus");
    });

  </script>
</body>

</html>