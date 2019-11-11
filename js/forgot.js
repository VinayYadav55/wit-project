$(document).ready(function() {
  $('.submitBtn').on('click', function(e) {
    e.preventDefault();
    var email = $('.email').val();
    if(email === ''){
        Swal.fire({
            text:'Email Required',
            type:'info'
        });
        return false;
    }
    $('.loader').show();
    $.ajax({
      url: 'index.php?login=true',
      type: 'post',
      dataType: 'json',
      data: {
        email: email,
        forgotP: true
      },
      success: function(response) {
        if (response.success === 'true') {
          setTimeout(function() {
            Swal.fire({
              title: response.message,
              confirmButtonColor: '#1E3262',
              type: 'success',
              confirmButtonText: 'Click to Continue',
              background: '#ebf0f9'
            }).then(function() {
              window.location.href = 'http://womenintech.co.in';
            });
            $('.loader').hide();
          }, 1000);
        } else {
          setTimeout(function() {
            Swal.fire({
              title: response.message,
              text: 'Enter your correct username and password',
              type: 'error'
            });
            $('.loader').hide();
          }, 1000);
        }
      }
    });
  });
});
