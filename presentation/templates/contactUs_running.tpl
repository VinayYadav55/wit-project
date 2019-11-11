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
  <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{base_url()}/images/wit-favicon.ico" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="{base_url()}/styles/contact.css" />

  <title>WiT | CONTACT US</title>
</head>

<body>
  {include file='header.tpl'}
   <div class="loader"></div>
  <div style="margin-top: 7.8rem !important;">
  <div class="container-fluid">
    <div class="container">
      <div class="row my-5 no-gutters ">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <h6 class="Heading text-center py-3">CONTACT US</h6>
          <form>
            <div class="form-group">
              <label for="uname">First Name</label>
              <input type="text" class="form-control fname" id="uname" placeholder="Enter First Name" name="uname" required />
            </div>
            <div class="form-group">
              <label for="lname">Last Name</label>
              <input type="text" class="form-control lname" id="lname" placeholder="Enter Last Name" name="lname" required />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control email" id="email" placeholder="Enter Email" name="email" required />
            </div>

            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="text" class="form-control contact" id="phone" placeholder="Enter Number" name="phone" required />
            </div>

            <div class="form-group">
              <label for="pwd">Company Name</label>
              <input type="text" class="form-control companyname" id="company" placeholder="Enter Company Name" name="company"
                required />
            </div>
            <div class="form-group">
              <label for="purpose">Reason of Enquiry</label>
              <select class="form-control enquiryreason" id="purpose">
                <option selected="true" disabled="disabled"> Select</option>
                <option>Volunteer to Join WiT</option>
                <option>Schools & Colleges</option>
                <option>Sponsorship</option>
                <option>Mentoring</option>
                <option>Second Careers</option>
                <option>Others</option>
              </select>
            </div>

            <div class="form-group">
              <label for="comment">Your Message</label>
              <textarea class="form-control message" rows="5" id="comment"></textarea>
            </div>
            <div class="text-center">
              <a href="#" data-toggle="modal" data-target="#myModal" type="submit" class="text-center btn  witBtn px-3 contactusdata">
                SUBMIT
              </a>
            </div>
          </form>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </div>
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 text-center py-5 my-5">
                <h6 class="text-success">Thank you for contacting us – we will get back to you soon! </h6>
              </div>
            </div>
          </div>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

  <!-- second part -->
</div>
  {include file='footer.tpl'}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="{base_url()}/js/contactus.js"></script>
</body>

</html>