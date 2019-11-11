<!DOCTYPE html>
<html>
  <head>
          <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147066526-1"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){
     dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-147066526-1');
</script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Collapsible sidebar using Bootstrap 4</title>

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles/menteeprofile.css?v={jsversion()}" />
    <link rel="stylesheet" href="styles/mentorlist.css?v={jsversion()}" />
    <link rel="stylesheet" type="text/css" href="styles/home.css?v={jsversion()}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"
    />

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <link rel="stylesheet" href="libs/font-awesome/css/all.min.css?v={jsversion()}" />
    <!-- Font Awesome JS -->
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
      integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
      crossorigin="anonymous"
    ></script>
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
      integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <div class="wrapper">
      <!-- Sidebar Holder -->
      <nav id="sidebar">
        <div class="sidebar-header">
          <a href="?menteeprofile=true">
            <img class="img-fluid" src="images/singlemen.jpg" alt=""
          /></a>
        </div>

        <div class="">
          <h4 class="text-center">Micheal Clark</h4>
        </div>
        <ul class="list-unstyled components">
          <p>Bio</p>
          <li class="active">
            <a
              href="#homeSubmenu"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle"
              >Home</a
            >
            <ul class="collapse list-unstyled" id="homeSubmenu">
              <li>
                <a href="#">Home 1</a>
              </li>
              <li>
                <a href="#">Home 2</a>
              </li>
              <li>
                <a href="#">Home 3</a>
              </li>
            </ul>
          </li>
          <li>
            <a> Messages <span class="badge badge-danger">4</span> </a>
          </li>
          <li>
            <a> Notifications <span class="badge badge-success">7</span> </a>
          </li>
          <li>
            <a href="?mentorlist=true">My Network</a>
          </li>
          <li><a href="">Ask a Community</a></li>
          <li>
            <a
              href="#pageSubmenu"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle"
              >Settings</a
            >
            <ul class="collapse list-unstyled" id="pageSubmenu">
              <li>
                <a href="#">Page 1</a>
              </li>
              <li>
                <a href="#">Page 2</a>
              </li>
              <li>
                <a href="#">Page 3</a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>

      <!-- Page Content Holder -->
      <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="navbar-btn">
              <span></span>
              <span></span>
              <span></span>
            </button>
            <div>
              <a href="/rbswit">
                <img src="images/witlogo3.png" width="100" height="50" alt=""
              /></a>
            </div>
            <button
              class="btn btn-dark d-inline-block d-lg-none ml-auto"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fas fa-align-justify"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                  <form class="form-inline my-2 my-lg-0">
                    <input
                      class="form-control mr-sm-2"
                      type="search"
                      placeholder="Search Mentors"
                    />
                    <button class="btn btn-light my-2 my-sm-0" type="submit">
                      Search
                    </button>
                  </form>
                </li>
                <!-- // <li class="nav-item">
                //   <a class="nav-link" href="#">Page</a>
                // </li>
                // <li class="nav-item">
                //   <a class="nav-link" href="#">Page</a>
                // </li>
                // <li class="nav-item">
                //   <a class="nav-link" href="#">Page</a>
                // </li> -->
              </ul>
            </div>
          </div>
        </nav>
        <div class="container-fluid">
          {section name="i" start="1" loop="5"}
          <div class="row ">
            <div
              class="col-md-8 mb-2 border border-warning mentorlistContainer"
            >
              <div class="row ">
                <div class="col-sm-4">
                  <div class="profile-img">
                    <img
                      class="res img-thumbnail"
                      src="images/singlemen.jpg"
                      alt=""
                    />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="row">
                    <div class="col-12">
                      <h4>Micheal Broad</h4>
                      <p class="text-warning">The Googler</p>
                      <p class="text-warning">Location : San Francisco USA</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-2 ">
                  <div class="row">
                    <div class="col-12 p-2">
                      <button class="btn btn-success btn-block">
                        View Profile
                      </button>
                    </div>
                    <div class="col-12 p-2">
                      <button class="btn btn-success btn-block">Chat</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {/section}
        </div>
      </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
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
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    ></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
          $('#sidebar').toggleClass('active');
          $(this).toggleClass('active');
        });
      });
    </script>
  </body>
</html>
