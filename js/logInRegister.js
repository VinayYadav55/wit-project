$(document).ready(function() {
  $('#demo-form-login').on('submit', function(e) {
    e.preventDefault();

    if (
      !$(this)
        .parsley()
        .validate()
    ) {
      return;
    }
    var firstName = $('#firstName').val();
    var lastName = $('#lastName').val();
    var emailSignUp = $('#emailSignUp').val();
    var phone = $('#phone').val();
    var gender = $('#exampleFormControlSelect1').val();
    var type = $('#exampleFormControlSelect2').val();
    var password = $('#pwdSignup').val();
    $('.overlay-loader-div').show();
    $.ajax({
      url: 'index.php?login',
      type: 'post',
      dataType: 'json',
      data: {
        firstName: firstName,
        lastName: lastName,
        emailSignUp: emailSignUp,
        phone: phone,
        gender: gender,
        type: type,
        password: password,
        register: true
      },
      success: function(response) {
        console.log(response.success);
        if (response.success === 'true') {
          setTimeout(function() {
            $('.overlay-loader-div').hide();
            Swal.fire({
              title: response.message,
              text:
                'You received a link on your mail, click and activate your account',
              type: 'success'
            }).then(function() {
              location.reload();
            });
          }, 5000);
        } else {
          setTimeout(function() {
            Swal.fire({
              title: response.message,
              type: 'error'
            });
            $('.overlay-loader-div').hide();
          }, 5000);
        }
      }
    });
  });

  $('#demo-form').on('submit', function(e) {
    e.preventDefault();
    if (
      !$(this)
        .parsley()
        .validate()
    ) {
      return;
    }
    var email = $('.email').val();
    var password = $('.pwd').val();
    $('.overlay-loader-div').show();
    $.ajax({
      url: 'index.php?login=true',
      type: 'post',
      dataType: 'json',
      data: {
        email: email,
        password: password,
        loginUser: true
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
              window.location.href =
                'http://localhost/djdfbf/sanjeev/user_dashboard';
            });
            $('.overlay-loader-div').hide();
          }, 5000);
        } else {
          setTimeout(function() {
            Swal.fire({
              title: response.message,
              type: 'error'
            });
            $('.overlay-loader-div').hide();
          }, 5000);
        }
      }
    });
  });

  
});
$('#demo-form')
        .parsley()
        .on('field:validated', function () {
          var ok = $('.parsley-error').length === 0;
          $('.bs-callout-info').toggleClass('hidden', !ok);
          $('.bs-callout-warning').toggleClass('hidden', ok);
        })
        .on('form:submit', function () {
          return false; // Don't submit form for this demo
        });
      //has uppercase
      window.Parsley.addValidator('uppercase', {
        requirementType: 'number',
        validateString: function (value, requirement) {
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
        validateString: function (value, requirement) {
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
        validateString: function (value, requirement) {
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
        validateString: function (value, requirement) {
          var specials = value.match(/[^a-zA-Z0-9]/g) || [];
          return specials.length >= requirement;
        },
        messages: {
          en: 'Your password must contain at least (%s) special characters.'
        }
      });