$(document).ready(function() {
  $('.sponsorsInquerySubmitData').on('click', function(e) {
    e.preventDefault();
    var eventpage =$('.siteUrl').val();
    var firstName = $('.firstName').val();
    if (firstName === '') {
      Swal.fire({
        text: 'Please fill all required fields',
        type: 'error'
      });

      return false;
    }
    var lastName = $('.lastName').val();
    if (lastName === '') {
      Swal.fire({
        text: 'Please fill all required fields',
        type: 'error'
      });

      return false;
    }
    var organisationName = $('.organisationName').val();
    if (organisationName === '') {
      Swal.fire({
        text: 'Please fill all required fields',
        type: 'error'
      });

      return false;
    }
    var designation = $('.designation ').val();
    if (designation === '') {
      Swal.fire({
        text: 'Please fill all required fields',
        type: 'error'
      });

      return false;
    }
    var email = $('.email').val();
    if (email === '') {
      Swal.fire({
        text: 'Please fill all required fields',
        type: 'error'
      });

      return false;
    }
    var phoneNo = $('.phoneNo').val();
    if (phoneNo === '') {
      Swal.fire({
        text: 'Please fill all required fields',
        type: 'error'
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
        sponsorsEventRegistration: true
      },
      success: function(response) {
        if (response.success === 'true') {
          setTimeout(function() {
            Swal.fire({
              title: response.message,
               html:
                ' A representative from WiT team will get in touch<br> with you shortly.<br>For any further queries, please reach out to us at <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@womenintech.co.in" target="_blank">info@womenintech.co.in</a>',
              confirmButtonColor: '#1E3262',
              type: 'success',
              confirmButtonText: 'Click to Continue',
              background: '#ebf0f9'
            }).then(function() {
              window.location.href=eventpage;
            });
            $('.loader').hide();
          }, 2000);
        } else {
          setTimeout(function() {
            Swal.fire({
              title: response.message,
                html:
                'Our team will contact you shortly.<br> For any further queries, please reach out to us at <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@womenintech.co.in" target="_blank">info@womenintech.co.in</a>',
              type: 'warning'
            });
            $('.loader').hide();
          }, 2000);
        }
      }
    });
  });
});
