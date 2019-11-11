<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <link rel="shortcut icon" href="{base_url()}/images/wit-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="{base_url()}/styles/job_portal_styles.css?v={jsversion()}" />

  <title>WiT | RESUME UPLOAD</title>

  <link href="{base_url()}/styles/user_dashboard.css?v={jsversion()}" rel="stylesheet" />
</head>

<body>
  {include file='header.tpl'}
  <!-- // <input type="hidden" baseUrl={base_url()} class="baseUrl"> -->

  <div class="container-fluid">
    <div class="container">
      <div class="row py-5 my-5">
        <div class="col-sm-4 offset-sm-4 py-5 my-5 bg-light " style="border: 1px solid #c5c5c5;">
          <form action="{base_url()}/resumeUploadedSite" method="post" enctype="multipart/form-data">
            <h4 class="py-4">UPDATE RESUME</h4>
            <div class="form-group">
              <input type="file" name="myfile[]" multiple="" class="form-control-file border" required> <br>
            </div>
            <button type="submit" class="btn btn-primary" name="save">Upload</button>
          </form>
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
          url: 'index.php?login=true',
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