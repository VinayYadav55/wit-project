<!DOCTYPE html>
<html lang="en">

<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147066526-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-147066526-1');
  </script>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="{base_url()}/images/wit-favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css"
    integrity="sha256-PIRVsaP4JdV/TIf1FR8UHy4TFh+LiRqeclYXvCPBeiw=" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="{base_url()}/styles/job_portal.css?v={jsversion()}" />

  <title>WiT | JOB PORTAL</title>
</head>

<body>
  {include file='header.tpl'}
  <div class="loader"></div>
  <div class="jobPortalTopStyles">
    <div class="container-fluid bg-light mt-5 px-4 px-sm-5">
      <div class="row py-4 mt-5">
        <div class="col-md-3 filtersection mt-5">
          <div class="container-fluid">
            <div class="row">
              <div class="col-6 py-2">
                Filter
              </div>
              <div class="col-6 text-right py-2"><button class="btn btn-light">Reset</button></div>
              <div class="col-sm-12 mb-3">
                <div class="input-group">
                  <div class="input-group-prepend" style="border: 1px solid #ced4da;">
                    <button class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                  <input type="text" class="form-control inuttBoxBoostrapStyle" placeholder="Search jobs by keywords">
                </div>
              </div>
              <div class="col-sm-12 mb-3">
                <div class="input-group">
                  <div class="input-group-prepend" style="border: 1px solid #ced4da;">
                    <button class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                  <input type="text" class="form-control inuttBoxBoostrapStyle"
                    placeholder="Search jobs by company name">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Preferred City</label>
                  <select class="form-control">
                    <option value="" selected disabled>Select</option>
                    <option value="Gurgaon">Gurgaon</option>
                    <option value="Delhi NCR">Delhi NCR</option>
                    <option value="Hydrabad">Hydrabad</option>
                    <option value="Bangalore" name='city[]' class=filter>Bangalore</option>
                    <option value="Chennai">Chennai</option>
                    <option value="Pune">Pune</option>
                    <option value="Kolkatta">Kolkatta</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Jaipur">Jaipur</option>
                    <option value="Indore">Indore</option>
                    <option value="Lucknow">Lucknow</option>
                    <option value="Goa">Goa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-12 mb-3">
                <label>Job Type</label>
                <div class="row">
                  <div class="col-sm-6 py-2 my-1">
                    <div class="form-check  bg-light">
                      <label class="form-check-label">
                        <input type="checkbox" name="job_type[]" class="form-check-input filter" value="full time" id='fulltime'>
                        <p class=""><small>Full Time</small></p>
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-6 py-2  my-1">
                    <div class="form-check bg-light">
                      <label class="form-check-label">
                        <input type="checkbox" name="job_type[]" class="form-check-input filter" value="part time" id='parttime'>
                        <p><small>Part Time</small></p>
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-6 py-2  my-1">
                    <div class="form-check bg-light">
                      <label class="form-check-label">
                        <input type="checkbox" name="job_type[]" class="form-check-input filter" value="remote working" id='remoteworking'>
                        <p><small>Remote Working</small></p>
                      </label>
                    </div>
                  </div>

                  <div class="col-sm-6 py-2  my-1">
                    <div class="form-check bg-light">
                      <label class="form-check-label">
                        <input type="checkbox" name="job_type[]" class="form-check-input filter" value="volunteer">
                        <p><small>Volunteer</small></p>
                      </label>
                    </div>
                  </div>

                  <div class="col-sm-6 py-2  my-1">
                    <div class="form-check bg-light">
                      <label class="form-check-label">
                        <input type="checkbox" name="job_type[]" class="form-check-input filter" value="consultant">
                        <p><small>Consultant</small></p>
                      </label>
                    </div>
                  </div>

                  <div class="col-sm-6 py-2  my-1">
                    <div class="form-check bg-light">
                      <label class="form-check-label">
                        <input type="checkbox" name="job_type[]" class="form-check-input filter" value="unpaid internship">
                        <p><small>Unpaid Internship</small></p>
                      </label>
                    </div>
                  </div>


                  <div class="col-sm-6 py-2  my-1">
                    <div class="form-check bg-light">
                      <label class="form-check-label">
                        <input type="checkbox" name="job_type[]" class="form-check-input filter" value="paid internship">
                        <p><small>Paid Internship</small></p>
                      </label>
                    </div>
                  </div>


                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Functional Area</label>
                  <select class="form-control">
                    <option value="" selected disabled>Select</option>
                    <option value="Art Director / Graphic / Web Designer">Art Director / Graphic / Web Designer</option>
                    <option value="Audit">Audit</option>
                    <option value="Accounting / finance">Accounting / finance</option>
                    <option value="Computer Operator / Data Entry">Computer Operator / Data Entry</option>
                    <option value="Database Administrator / Data Warehouse">Database Administrator / Data Warehouse</option>
                    <option value="Digital Marketing / SEM / SEO">Digital Marketing / SEM / SEO</option>
                    <option value="HR">HR</option>
                    <option value="Management">Management</option>
                    <option value="Network Administrator">Network Administrator</option>
                    <option value="Operations">Operations</option>
                    <option value="Project Management">Project Management</option>
                    <option value="Software Development">Software Development</option>
                    <option value="Software Testing">Software Testing</option>
                    <option value="Sales / Marketing ">Sales / Marketing </option>
                    <option value="WebDesigner / UI / UX Designer">WebDesigner / UI / UX Designer</option>
                    <option value="Others">Others</option>
                  </select>
                </div>
              </div>


              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Industry</label>
                  <select class="form-control">
                    <option value="" selected disabled>Select</option>
                    <option value="Accounting / Finance">Accounting / Finance</option>
                    <option value="Banking / Financial Services">Banking / Financial Services</option>
                    <option value="IT-Hardware and Networking">IT-Hardware and Networking</option>
                    <option value="Medical / Healthcare">Medical / Healthcare</option>
                    <option value="Telecom / ISP">Telecom / ISP</option>
                    <option value="Recruitment / Staffing">Recruitment / Staffing</option>
                    <option value="KPO, Research, Analytics">KPO, Research, Analytics</option>
                    <option value="Internet, E-commerce">Internet, E-commerce</option>
                    <option value="IT-Software, Software Services">IT-Software, Software Services</option>
                    <option value="Education, Teaching, Training">Education, Teaching, Training</option>
                    <option value="Others">Others</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Year of experience</label>
                  <select class="form-control">
                    <option value="" selected disabled>Select</option>
                    <option value="0-3">0-3 Year</option>
                    <option value="3-6">3-6 Year</option>
                    <option value="6-10">6-10 Year</option>
                    <option value="10+">10+ Year</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-12 my-3">
                <div class="form-group">
                  <button class="btn btn-block witBtn">Refine</button>
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
  </div>
  {include file='footer.tpl'}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"
    integrity="sha256-kQ6DQtOnXtjGYnAEMZQjpsioC75ND0K9I8MyjtdLCyk=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function () {
      $('.job-location-cities').select2({
        placeholder: 'Enter preferred city',
        allowClear: true
      });
    });
  </script>
  <script type="text/javascript" src="{base_url()}/js/jobPortal.js?v={jsversion()}"> </script> 
  <script type="text/javascript" src="{base_url()}/js/search.js?v={jsversion()}"> </script>
  </body> 
  </html>