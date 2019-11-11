{load_presentation_object filename='activate' assign='obj'}

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
  <link rel="stylesheet" type="text/css" href="{base_url()}/styles/slick.css?v={jsversion()}" />
  <link rel="stylesheet" type="text/css" href="{base_url()}/styles/slick-theme.css?v={jsversion()}" />
  <link rel="stylesheet" type="text/css" href="{base_url()}/styles/about.css?v={jsversion()}" />

  <title>WiT | Activate </title>
  <style>
    .textStyles {
      background-image: linear-gradient(to right, #1E3262, #E94161);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
    }
  </style>
</head>

<body>
  {include file='header.tpl'}
  <div class="container-fluid text-center mt-5 pt-5">
    <div class="row">
      <div class="col-sm-4 offset-sm-4 my-5 py-5 border border-dark"  style="box-shadow: 1px 2px 2px 1px !important;">
        <div class="mt-5 pt-5  text-center">
          {assign var = 'message' value = $obj->message}
          <h2 class="text-white animated infinite pulse delay-2s textStyles">{$message}</h2>
          <h6 class="py-5 text-center">Please&nbsp;&nbsp;<a href="{base_url()}/login" style="text-decoration: underline;"><em>Login</em></a>&nbsp;&nbsp; Now</h6>
           <p>For any further queries about login details or errors, please write to us at <a
              href="https://mail.google.com/mail/?view=cm&fs=1&to=info@womenintech.co.in" target="_blank">
              info@womenintech.com</a></p>
        </div>
      </div>
    </div>
  </div>

  {include file='footer.tpl'}

  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="{base_url()}/js/slick.min.js?v={jsversion()}"></script>
  <script src="{base_url()}/js/newsinsitesslick.js?v={jsversion()}"></script>
</body>

</html>