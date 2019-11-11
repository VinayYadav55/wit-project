{load_presentation_object filename='event_deligate_registration' assign='obj'}
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="{base_url()}/images/wit-favicon.ico" type="image/x-icon">
  <title>WiT | EVENT REGISTRATION</title>
  <link rel="stylesheet" type="text/css" href="{base_url()}/styles/pastspecificevent.css?v={jsversion()}" />

</head>

<body>
    {include file ='header.tpl'}
  <input type="hidden" name="" class="siteUrl" value={base_url()}/wit_growth_summit_2019>
  <div class="loader"></div>
  <div class="mainBlock">
    <div class="container right2leftGrad">
      <div class="forTemoraryImg text-center">
        <img src="{base_url()}/images/witlogo-logo.png" height="70" width="120" />
      </div>
      <div class="row">
        <div class="col-sm-6 offset-sm-3 pb-5">
          <h4 class="text-center pt-2">Sponsors / Exhibitor Inquiry</h4>
          <div class="text-center p-0 m-0">
            <small class="text-center justify-content-center">(Event Partner The Vipanan Company)</small>
          </div>
          <form action method>
            <div class="form-group">
              <label for="">First Name<span class="text-danger">*</span></label>
              <input type="text" class="form-control firstName" required>
            </div>
            <div class="form-group">
              <label for="">Last Name<span class="text-danger">*</span></label>
              <input type="text" class="form-control lastName" required>
            </div>
            <div class="form-group">
              <label for="">Email<span class="text-danger">*</span></label>
              <input type="text" class="form-control email" required>
            </div>
            <div class="form-group">
              <label for="">Contact<span class="text-danger">*</span></label>
              <input type="text" class="form-control phoneNo" required>
            </div>
            <div class="form-group">
              <label for="">Designation<span class="text-danger">*</span></label>
              <input type="text" class="form-control designation" required>
            </div>
            <div class="form-group">
              <label for="">Organisation Name<span class="text-danger">*</span></label>
              <input type="text" class="form-control organisationName" required>
            </div>
            <div class="form-group text-center">
              <button class="btn witBtn text-white sponsorsInquerySubmitData px-5 my-3 ">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  {include file ='footer.tpl'}
  <script src="{base_url()}/js/sponsorexibitor.js?v={jsversion()}"></script>

</body>

</html>