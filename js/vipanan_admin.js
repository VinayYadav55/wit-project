$(document).ready(function() {
  $('.removecompany').on('click', function() {
    var company_id = $(this).attr('id');
    $('.loader').show();
    setTimeout(function() {
      $('.loader').hide();
      Swal.fire({
        title: 'Are you sure? You want to delete',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then(function(result) {
        if (result.value) {
          $.ajax({
            url: 'index.php?vipanan_wit_dashboard=true',
            type: 'post',
            dataType: 'json',
            data: {
              company_id: company_id,
              removecompany: true
            },
            success: function(response) {
              if (response.success === 'true') {
                setTimeout(function() {
                  Swal.fire({
                    title: response.message,
                    type: 'success'
                  }).then(function() {
                    location.reload();
                  });
                }, 1000);
              } else {
                setTimeout(function() {
                  Swal.fire({
                    title: response.message,
                    type: 'error'
                  });
                }, 1000);
              }
            }
          });
        } else {
          Swal.fire({
            title: 'Cancelled',
            type: 'info'
          });
        }
      });
    }, 2000);
  });

  $('.vipananadminsubmit').on('click', function(e) {
    e.preventDefault();
    var vipananadminemail = $('.vipananemail').val();
    var vipananadminpassword = $('.vipananpassword').val();
    $('.loader').show();
    $.ajax({
      url: 'index.php?vipanan=true',
      type: 'post',
      dataType: 'json',

      data: {
        vipananadminemail: vipananadminemail,
        vipananadminpassword: vipananadminpassword,
        vipananLogin: true
      },
      success: function(response) {
        if (response.success === 'true') {
          setTimeout(function() {
            $('.loader').hide();
            Swal.fire({
              title: response.message,
              text: 'Now You will redirected to dashboard',
              type: 'success'
            }).then(function() {
              window.location.href = response.redirect_url;
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

  $('.logOutBtn').on('click', function() {
    var baseUrl = $('.baseUrl').attr('baseUrl');

    $.ajax({
      url: 'index.php?vipanan=true',
      dataType: 'json',
      type: 'post',
      data: {
        logOut: true
      },
      success: function(response) {
        window.location = baseUrl;
      }
    });
  });

  $('.signUpBtn').on('click', function(e) {
    e.preventDefault();
    var firstName = $('#firstName').val();
    if (firstName === '') {
      Swal.fire({
        text: 'First Name Required',
        type: 'error'
      });
      return false;
    }
    var lastName = $('#lastName').val();
    if (lastName === '') {
      Swal.fire({
        text: 'Last Name Required',
        type: 'error'
      });
      return false;
    }
    var emailSignUp = $('#emailSignUp').val();
    if (emailSignUp === '') {
      Swal.fire({
        text: 'Email Required',
        type: 'error'
      });
      return false;
    }
    var phone = $('#phone').val();
    if (phone === '') {
      Swal.fire({
        text: 'Phone Required',
        type: 'error'
      });
      return false;
    }
    var gender = $('#exampleFormControlSelect1').val();
    if (gender === null) {
      Swal.fire({
        text: 'Please Select Gender',
        type: 'error'
      });
      return false;
    }
    var type = $('#exampleFormControlSelect2').val();
    if (type === null) {
      Swal.fire({
        text: 'Please Select Join as Volunteer or Mentor or Candidate',
        type: 'error'
      });
      return false;
    }
    var password = $('#pwdSignup').val();
    if (password === '') {
      Swal.fire({
        text: 'Please Select Your Password',
        type: 'error'
      });
      return false;
    }
    $('.loader').show();
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
        if (response.success === 'true') {
          setTimeout(function() {
            $('.loader').hide();
            Swal.fire({
              title: response.message,
              text:
                'Verification link has been sent to your registered email address, please click on that link to verify your account.',
              type: 'success'
            }).then(function() {
              location.reload();
            });
          }, 1000);
        } else {
          setTimeout(function() {
            Swal.fire({
              title: response.message,
              html:
                "An email has already been sent to your regitered email address. Please click on the link to verify your account and proceed further.<br>  <br> If you do not receive verification email, please check your spam folder or  Please contact us at <a href='mailto:info@womenintech.co.in'>info@womenintech.co.in</a> for any query",
              //   text:
              //     'An email has already been sent to your regitered email address. Please click on the link to verify your account and proceed further. '<br>' If you do not receive verification email, please check your spam folder or   Please contact us at info@womenintech.com for any query',
              type: 'error'
            });
            $('.loader').hide();
          }, 1000);
        }
      }
    });
  });

  $('.loginBtn ').on('click', function(e) {
    e.preventDefault();
    var email = $('.email').val();
    if (email === '') {
      Swal.fire({
        text: 'Please fill required fields',
        type: 'error'
      });

      return false;
    }
    var password = $('.pwd').val();
    $('.loader').show();
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
              window.location.href = response.redirect_url;
            });
            $('.loader').hide();
          }, 1000);
        } else {
          setTimeout(function() {
            Swal.fire({
              title: response.message,
              html:
                'Please contact us at <a href="mailto:info@womenintech.co.in">info@womenintech.co.in</a><br> for any query',
              type: 'error'
            });
            $('.loader').hide();
          }, 1000);
        }
      }
    });
  });

  $('.newAccount').on('click', function() {
    $('.loginCard').hide();
    $('.signUpCard').show();
  });
  $('.doLogin').on('click', function() {
    $('.loginCard').show();
    $('.signUpCard').hide();
  });
});
