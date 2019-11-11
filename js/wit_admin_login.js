$(document).ready(function() {
  $('.logout').on('click', function() {
    var baseUrl = $('.baseUrl').attr('baseUrl');

    $.ajax({
      url: 'index.php?wit=true',
      dataType: 'json',
      type: 'post',
      data: {
        logOut: true
      },
      success: function(response) {
        window.location = baseUrl + '' + '/wit';
      }
    });
  });
  $('.witadminlogin').on('click', function(e) {
    e.preventDefault();
    var witemail = $('.email').val();
    var witpassword = $('.pwd').val();
     $('.loader').show();
    $.ajax({
      url: 'index.php?wit=true',
      type: 'post',
      dataType: 'json',

      data: {
        witemail: witemail,
        witpassword: witpassword,
        witLogin: true
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
                window.location.href = response.redirect_url;
            });
            $('.loader').hide();
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
          
        // if (response.success == 'true') {
        //   alert(response.message);
        //   window.location.href = response.redirect_url;
        // } else {
        //   alert(response.message);
        // }
      }
    });
  });
});
