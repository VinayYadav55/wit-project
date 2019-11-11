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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link rel="shortcut icon" href="{base_url()}/images/wit-favicon.ico" type="image/x-icon">
    <link
      rel="stylesheet"
      type="text/css"
      href="{base_url()}/styles/about.css?v={jsversion()}"
    />
    <title>WiT | FORGOT PASSWORD</title>
  </head>
  <body>
    {include file='header.tpl'}
     <div class="loader"></div>
    <div class="container-fluid mt-5">
      <div class="container">
        <div class="row py-5">
          <div
            class="col-sm-6 offset-sm-3 my-5 py-5 bg-light forgetPassword"
          
          >
            <div class="bg-light p-3">
              <h5 class="py-3">
                Please enter your email-id to reset your password
              </h5>
              <h6 class="py-3 mb-5">
                you will receive a link in your e-mail for reset password
              </h6>
              <form action="" method="">
                <div class="form-group py-3">
                  <label for="email">Enter Email</label>
                  <input
                    type="text"
                    name="email"
                    class="form-control email"
                    required
                  />
                </div>
                <button
                  type="submit"
                  class="btn btn-primary btn-block submitBtn"
                >
                  Submit
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    {include file='footer.tpl'}

  <script type="text/javascript" src="{base_url()}/js/forgot.js?v={jsversion()}"></script>
    <script
      type="text/javascript"
      src="//code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="//code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script type="text/javascript" src="{base_url()}/js/slick.min.js?v={jsversion()}"></script>
    <script src="{base_url()}/js/newsinsitesslick.js?v={jsversion()}"></script>
    
  </body>
</html>
