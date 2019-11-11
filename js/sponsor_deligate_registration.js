$(document).ready(function() {
  $('.eventRegistrationCandidate').on('click', function(e) {
    e.preventDefault();
    var baseUrl = $('.siteUrl').val();
    var firstName = $('.firstName').val();
    if (firstName === '') {
      Swal.fire({
        text: 'Please fill all required fields',
        type: 'info'
      });

      return false;
    }
    var lastName = $('.lastName').val();
    if (lastName === '') {
      Swal.fire({
        text: 'Please fill all required fields',
        type: 'info'
      });

      return false;
    }
    var organisationName = $('.organisationName').val();
    if (organisationName === '') {
      Swal.fire({
        text: 'Please fill all required fields',
        type: 'info'
      });

      return false;
    }
    var designation = $('.designation ').val();
    if (designation === '') {
      Swal.fire({
        text: 'Please fill all required fields',
        type: 'info'
      });

      return false;
    }
    var email = $('.email').val();
    if (email === '') {
      Swal.fire({
        text: 'Please fill all required fields',
        type: 'info'
      });

      return false;
    }
    var phoneNo = $('.phoneNo').val();
    if (phoneNo === '') {
      Swal.fire({
        text: 'Please fill all required fields',
        type: 'info'
      });

      return false;
    }
       var organisationcode = $('.organisationcode').val();
        if (organisationcode === '') {
      Swal.fire({
        text: 'Please fill all required fields',
        type: 'info'
      });

      return false;
    }
    $('.loader').show();
    $.ajax({
      url: 'index.php?delegate_registration=true',
      type: 'post',
      dataType: 'json',
      data: {
        firstName: firstName,
        lastName: lastName,
        organisationName: organisationName,
        designation: designation,
        email: email,
        phoneNo: phoneNo,
        organisationcode: organisationcode,
        eventRegistrationSponsor: true
      },
      success: function(response) {
        if (response.success === 'true') {
          setTimeout(function() {
            Swal.fire({
              text:
                'Thank You for registering, Please select classes to participate',
              confirmButtonColor: '#1E3262',
              type: 'success',
              confirmButtonText: 'Click to Continue',
              background: '#ebf0f9'
            }).then(function() {
              window.location = baseUrl;
            });
            $('.loader').hide();
          }, 2000);
        } else {
          setTimeout(function() {
            Swal.fire({
              title: response.message,
              confirmButtonText: 'Please proceed for event registration.',
              confirmButtonColor: '#1E3262',
              type: 'info'
            }).then(function(){
                window.location.href=
                "http://womenintech.co.in/delegate_registration";
            })
            $('.loader').hide();
          }, 2000);
        }
      }
    });
  });
});
