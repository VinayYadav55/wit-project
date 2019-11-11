{load_presentation_object filename='resetPassword' assign='obj'}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link rel="shortcut icon" href="{base_url()}/images/wit-favicon.ico" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{base_url()}/styles/parsley.css?v={jsversion()}" />
    <link
      rel="stylesheet"
      type="text/css"
      href="{base_url()}/styles/slick.css?v={jsversion()}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{base_url()}/styles/slick-theme.css?v={jsversion()}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{base_url()}/styles/about.css?v={jsversion()}"
    />
    <script src="{base_url()}/libs/jquery/jquery.min.js?v={jsversion()}"></script>
    <script
      type="text/javascript"
      src="{base_url()}/js/resetPassword.js?v={jsversion()}"
    ></script>
    <title>WiT | RESET PASSWORD</title>
    <style>
      .form-control:focus {
        color: #495057 !important;
        background-color: #fff !important;
        border-color: #1e3262 !important;
        outline: 0 !important;
        box-shadow: 0 0 0 0.1rem rgba(30, 50, 98, 0.25) !important;
      }
      .parsley-errors-list {
        margin: 6px 0 3px !important;
      }
      input.parsley-error,
      select.parsley-error,
      textarea.parsley-error {
        color: #b94a48;
        background-color: #8080801f !important;
        border: 1px solid #8080801f !important;
      }
    </style>
  </head>
  <body>
    {include file='header.tpl'}
 <div class="loader"></div>
    <div class="container-fluid">
      <div class="container">
        <div class="row py-5 bg-light" style=" border-radius: 1rem;">
          <div
            class="col-sm-4 offset-sm-4 my-5 py-5 bg-light forgetPassword"
          >
            <h6 class="text-center">Reset Passowrd</h6>
            <div class="">
              <form id="demo-form" data-parsley-validate="">
                <div class="form-group py-3">
                  <label for="">Your email</label>
                  <input
                    type="text"
                    name="email"
                    class="email form-control"
                    placeholder="Enter email"
                    data-parsley-type="email"
                    data-parsley-trigger="keyup"
                    required
                  />
                </div>
                <div class="form-group py-3">
                  <label for="">New Password</label>
                  <input
                    type="password"
                    name="password"
                    id="newpassowrd"
                    class="password form-control"
                    placeholder="Enter new  password"
                    data-parsley-minlength="8"
                    data-parsley-uppercase="1"
                    data-parsley-lowercase="1"
                    data-parsley-number="1"
                    data-parsley-special="1"
                    parsley-required="true"
                    data-parsley-trigger="keyup"
                    required
                  />
                </div>
                <div class="form-group py-3">
                  <label for="">Confirm Passowrd</label>
                  <input
                    type="password"
                    class="form-control"
                    name="confirmPassword"
                    placeholder="enter confirm password"
                    data-parsley-equalto="#newpassowrd"
                    data-parsley-minlength="8"
                    data-parsley-uppercase="1"
                    data-parsley-lowercase="1"
                    data-parsley-number="1"
                    data-parsley-special="1"
                    parsley-required="true"
                    data-parsley-trigger="keyup"
                    required
                  />
                </div>
                <div class="form-group py-3">
                  <button
                    type="submit"
                    class="resetPasswordBtn btn btn-block btn-primary"
                  >
                    Reset Password
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    {include file='footer.tpl'}

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
    <script src="{base_url()}/libs/parsley/parsley.min.js?v={jsversion()}"></script>
    <script type="text/javascript">
      $(function() {
        $('#demo-form')
          .parsley()
          .on('field:validated', function() {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
          })
          .on('form:submit', function() {
            return false; // Don't submit form for this demo
          });
        //has uppercase
        window.Parsley.addValidator('uppercase', {
          requirementType: 'number',
          validateString: function(value, requirement) {
            var uppercases = value.match(/[A-Z]/g) || [];
            return uppercases.length >= requirement;
          },
          messages: {
            en: 'Your password must contain at least (%s) uppercase letter.'
          }
        });

        //has lowercase
        window.Parsley.addValidator('lowercase', {
          requirementType: 'number',
          validateString: function(value, requirement) {
            var lowecases = value.match(/[a-z]/g) || [];
            return lowecases.length >= requirement;
          },
          messages: {
            en: 'Your password must contain at least (%s) lowercase letter.'
          }
        });

        //has number
        window.Parsley.addValidator('number', {
          requirementType: 'number',
          validateString: function(value, requirement) {
            var numbers = value.match(/[0-9]/g) || [];
            return numbers.length >= requirement;
          },
          messages: {
            en: 'Your password must contain at least (%s) number.'
          }
        });

        //has special char
        window.Parsley.addValidator('special', {
          requirementType: 'number',
          validateString: function(value, requirement) {
            var specials = value.match(/[^a-zA-Z0-9]/g) || [];
            return specials.length >= requirement;
          },
          messages: {
            en: 'Your password must contain at least (%s) special characters.'
          }
        });
      });
    </script>
  </body>
</html>
