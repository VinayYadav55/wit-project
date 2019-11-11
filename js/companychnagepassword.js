$(document).ready(function() {
  $('.submitemployeerpassword').on('click', function(e) {
    e.preventDefault();
    var eoldpassword = $('.eoldpassword').val();
    if (eoldpassword === '') {
      Swal.fire({
        text: 'All fields required',
        type: 'info'
      });
      return false;
    }
    var enewpassword = $('.enewpassword').val();
    if (enewpassword === '') {
      Swal.fire({
        text: 'All fields required',
        type: 'info'
      });
      return false;
    }
    var econfirmpassword = $('.econfirmpassword').val();
    if (econfirmpassword === '') {
      Swal.fire({
        text: 'All fields required',
        type: 'info'
      });
      return false;
    }
    $('.loader').show();
    $.ajax({
      url: 'index.php?job_portal_dashboard=true',
      type: 'post',
      dataType: 'json',
      data: {
        eoldpassword: eoldpassword,
        enewpassword: enewpassword,
        econfirmpassword: econfirmpassword,
        changepassword: true
      },
      success: function(response) {
        if (response.success === 'true') {
          setTimeout(function() {
            $('.loader').hide();
            Swal.fire({
              title: response.message,
              text:
                'Successfully Chnaged your password Please login with new password',
              type: 'success'
            }).then(function() {
              window.location.href = 'http://womenintech.co.in/employer';
            });
          }, 1000);
        } else {
          setTimeout(function() {
            Swal.fire({
              title: response.message,
              type: 'error'
            });
            $('.loader').hide();
          }, 1000);
        }
      }
    });
  });
});
