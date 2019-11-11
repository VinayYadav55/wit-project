{load_presentation_object filename='resumeUpload' assign='obj'}
{assign var = 'message' value =$obj}

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="{base_url()}/images/wit-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="{base_url()}/styles/job_portal_styles.css?v={jsversion()}" />
  <link href="{base_url()}/styles/user_dashboard.css?v={jsversion()}" rel="stylesheet" />
  <script src="{base_url()}/libs/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="{base_url()}/js/job_portal_dashboard.js?v={jsversion()}"></script>
  <title>WiT | RESUME UPLOADED</title>
</head>

<body>
  {include file='header.tpl'}
    <div class="container-fluid">
      <div class="container">
        <div class="row py-5 my-5">
          <div class="col-sm-4 offset-sm-4 text-center py-5 my-5" style="border: 1px solid #c5c5c5;">
            <h4 class="text-success py-5 my-5">{$obj->response}</h4>
            <p>Please click to continue <a href="{base_url()}/user_dashboard">Continue...</a></p>
          </div>
        </div>
      </div>
    </div>

    {include file='footer.tpl'}

    <script>
      $(document).ready(function () {
        $('.logOutBtn').on('click', function () {
          var baseUrl = $('.baseUrl').attr('baseUrl');

          $.ajax({
            url: 'index.php?job_portal_dashboard=true',
            dataType: 'json',
            type: 'post',
            data: {
              logOut: true
            },
            success: function (response) {
              window.location = baseUrl;
            }
          });
        });
        $('#customFile').on('change', function () {
          var fileName = $(this)
            .val()
            .replace('C:\\fakepath\\', ' ');
          $(this)
            .next('.custom-file-label')
            .html(fileName);
        });
      })
    </script>
</body>

</html>