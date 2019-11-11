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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
 <link rel="shortcut icon" href="{base_url()}/images/wit-favicon.ico" type="image/x-icon" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="styles/job_portal.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/29bef62cc9.js"></script>
  <script src="{base_url()}/libs/jquery/jquery.min.js"></script>
  <script type="text/javascript" src={base_url()}/js/jobPortal.js> </script> <title>WiT | JOB PORTAL</title>
    <style>
      .btn-outline-primary {
        border: 1px solid gray !important;
        color: gray !important;
      }
      .btn-outline-primary:hover {
        background-color: slategrey !important;
        color: white !important;
      }
    </style>
  </head>
  <body>
    {include file='header.tpl'}
    <div class="container-fluid bg-light mt-5 px-5">
      <div class="row py-4 mt-5">
        <div class="col-md-3 filtersection mt-5">
          <div class="row">
            <div class="col-md-12">
                <div class=" row col-md-12 p-3 py-2">
                  <div class=" col-md-5 p-0 filterHeading">Filter</div>
                  <div class="col-md-2 p-0"></div>
                  <div class="col-md-4 p-0">
                    <button class="btn px-5 resetBtn "> Reset</button>
                  </div>
                  <div class="col-md-1"></div>
                </div>
                <strong><hr></hr></strong>
                <div class="input-group mb-3  mt-3">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search Job by Keyword"
                  />
                  <div class="input-group-append"></div>
                </div>
              <div class="input-group mb-3">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search Job by Company Name"
                />
                <div class="input-group-append"></div>
              </div>

              <div class="btn-group-vertical">
                <div class="btn-group">
                  <button
                    type="button"
                    class="btn btn-light dropdown-toggle"
                    data-toggle="dropdown"
                  >
                    City
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Delhi</a>
                    <a class="dropdown-item" href="#">Gurgaon</a>
                    <a class="dropdown-item" href="#">Mumbai</a>
                    <a class="dropdown-item" href="#">Bangalore</a>
                    <a class="dropdown-item" href="#">Hydrabad</a>
                    <a class="dropdown-item" href="#">Kolkatta</a>
                  </div>
                </div>
              </div>

              <hr />
              <div class="mb-2">Job Type</div>

              <div class="row my-2">
                <div class="col-md-1"></div>
                <div class="col-md-5 dark mr-2 p-2">
                  <span style="font-size:12px;">Full Time</span>
                  <span class="float-right"
                    ><input type="checkbox" name=""
                  /></span>
                </div>
                <div class="col-md-5 dark p-2">
                  <span style="font-size:12px;">Part Time</span>
                  <span class="float-right"
                    ><input type="checkbox" name=""
                  /></span>
                </div>
                <div class="col-md-1"></div>
              </div>

              <div class="row my-2">
                <div class="col-md-1"></div>
                <div class="col-md-5 dark mr-2 p-2">
                  <span style="font-size:12px;">Work From Home</span>
                  <span class="float-right"
                    ><input type="checkbox" name=""
                  /></span>
                </div>
                <div class="col-md-1"></div>
              </div>


              <div class="btn-group-vertical my-3">
                <div class="btn-group">
                  <button
                    type="button"
                    class="btn btn-light dropdown-toggle"
                    data-toggle="dropdown"
                  >
                    Functional Area
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">IT</a>
                    <a class="dropdown-item" href="#">FINANCE</a>
                    <a class="dropdown-item" href="#">ACCOUNTING</a>
                  </div>
                </div>
              </div>

              <hr />

              <div class="btn-group-vertical">
                <div class="btn-group">
                  <button
                    type="button"
                    class="btn btn-light dropdown-toggle"
                    data-toggle="dropdown"
                  >
                    Industries
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">IT SOFTWARE</a>
                    <a class="dropdown-item" href="#">NETWORKING</a>
                    <a class="dropdown-item" href="#">MECHANICAL</a>
                    <a class="dropdown-item" href="#">FINANCE</a>
                    <a class="dropdown-item" href="#">ACCOUNTING</a>
                    <a class="dropdown-item" href="#">ELECTRICAL</a>
                  </div>
                </div>
              </div>

              <hr />
              <p>Year of Experience</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="btn-group-vertical">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-light dropdown-toggle"
                        data-toggle="dropdown"
                      >
                        From Year
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">1991</a>
                        <a class="dropdown-item" href="#">1992</a>
                        <a class="dropdown-item" href="#">1993</a>
                        <a class="dropdown-item" href="#">1994</a>
                        <a class="dropdown-item" href="#">1995</a>
                        <a class="dropdown-item" href="#">1996</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="btn-group-vertical">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-light dropdown-toggle"
                        data-toggle="dropdown"
                      >
                        From Year
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">2000</a>
                        <a class="dropdown-item" href="#">2001</a>
                        <a class="dropdown-item" href="#">2002</a>
                        <a class="dropdown-item" href="#">2003</a>
                        <a class="dropdown-item" href="#">2004</a>
                        <a class="dropdown-item" href="#">2005</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mt-3 mb-3">
                <div class="col-md-12 py-5">
                  <button class="btn btn-block witBtn">REFINE</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-8 jobsSection mt-5">
           
          <div class="row">
            <div class="col-md-12 ">
              <h2 class="text-center">All Jobs</h2>
              <hr />
                 {include file='listed_jobs.tpl'}
                </div>
                <hr />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {include file='footer.tpl'}
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  </body>

</html>