{load_presentation_object filename='event_deligate_registration' assign='obj'}
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="{base_url()}/images/wit-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <title>WiT | EVENT REGISTRATION</title>
  <link rel="stylesheet" type="text/css" href="{base_url()}/styles/pastspecificevent.css?v={jsversion()}" />

</head>

<body>
  <input type="hidden" name="" class="siteUrl" value={base_url()}/eventclassBooking>
  <div class="loader"></div>

  {include file ='header.tpl'}
  <div class="mainBlock">
    <div class="container right2leftGrad">
      <div class="forTemoraryImg text-center">
        <img src="{base_url()}/images/witlogo-logo.png" height="70" width="120" />
      </div>
      <div class="row">
        <div class="col-sm-6 offset-sm-3 pb-5">
          <h4 class="text-center pt-2">Delegate Registration</h4>
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
               <div class="form-group">
              <label for="">Coupon Code<span class="text-danger">*</span></label>
              <input type="text" class="form-control organisationcode" maxlength="7" required>
            </div>
            
            <div class="form-group text-center">
              <button class="btn witBtn text-white eventRegistrationCandidate px-5 my-3 ">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>



  {include file ='footer.tpl'}
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
  <script src="{base_url()}/js/sponsor_deligate_registration.js?v={jsversion()}"></script>

</body>

</html>