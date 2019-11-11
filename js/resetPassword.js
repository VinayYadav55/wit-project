$(document).ready(function() {
  $('.resetPasswordBtn').on('click', function(e) {
    e.preventDefault();

    var email = $('.email').val();
    var password = $('.password').val();
    $('.loader').show();

    var vars = [],
      hash;
    var hashes = window.location.href
      .slice(window.location.href.indexOf('?') + 1)
      .split('&');
    for (var i = 0; i < hashes.length; i++) {
      hash = hashes[i].split('=');
      vars.push(hash[0]);
      vars[hash[0]] = hash[1];
    }

    console.log(vars['reset_key']);

    $.ajax({
      url: 'index.php?reset_password=true',
      type: 'post',
      dataType: 'json',
      data: {
        email: email,
        password: password,
        resetKey: vars['reset_key'],
        resetP: true
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
              window.location.href = 'http://womenintech.co.in/login';
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
