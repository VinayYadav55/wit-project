$(document).ready(function(){
    
  $('.contactusdata').on('click', function(e) {
    e.preventDefault();
     var fname = $('.fname').val();
     var lname = $('.lname').val(); 
     var email = $('.email').val(); 
   if (email == '') {
      Swal.fire({
        text: 'Email Required',
        type: 'info'
      });
      return false;
    }
     var contact = $('.contact').val(); 
        if (contact == '') {
      Swal.fire({
        text: 'Phone Required',
        type: 'info'
      });
      return false;
    }
     var companyname = $('.companyname').val(); 
     var enquiryreason = $('.enquiryreason').val(); 
     var message = $('.message').val(); 
       if (message == '') {
      Swal.fire({
        text: 'Please type your message',
        type: 'info'
      });
      return false;
    }
   
    $('.loader').show();
    $.ajax({
      url: 'index.php?contactUs=true',
      type: 'post',
      dataType: 'json',
      data: {
        fname:fname,
        lname:lname,
        email: email,
        contact:contact,
        companyname:companyname,
        enquiryreason:enquiryreason,
        message:message,
        contactus: true
      },
      success: function(response) {
        if (response.success === 'true') {
          setTimeout(function() {
            Swal.fire({
              title: response.message,
              confirmButtonColor: '#1E3262',
               html:
                ' <br>For any further queries, please reach out to us at <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@womenintech.co.in" target="_blank">info@womenintech.co.in</a>',
              type: 'success',
              confirmButtonText: 'Click to Continue',
              background: '#ebf0f9'
            }).then(function() {
              window.location.href =
                'http://womenintech.co.in';
            });
            $('.loader').hide();
          }, 1000);
        } else {
          setTimeout(function() {
            Swal.fire({
              title: response.message,
               html:
                ' <br>For any further queries, please reach out to us at <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@womenintech.co.in" target="_blank">info@womenintech.co.in</a>',
              type: 'error'
            });
            $('.loader').hide();
          }, 1000);
        }
      }
    });
  });
});