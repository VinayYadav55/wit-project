$(document).ready(function() {
  $('.applyButton').on('click', function(e) {
    e.preventDefault();
    var job_id = $('.postName').attr('job_id');
    $('.loader').show();
    $.ajax({
      url: 'index.php?job_title=true',
      type: 'post',
      dataType: 'json',
      data: {
        job_id: job_id,
        applyJob: true
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
            }).then(function(){
                location.reload();
            })
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
        if(response.success === 'Not Registered'){
          setTimeout(function() {
            Swal.fire({
              title: response.message,
              type: 'error',
              confirmButtonText: 'Login / Signup',
            }).then(function(){
                window.location.href=response.redirect_url;
            });
            $('.loader').hide();
          }, 1000);  
        }
        if(response.success === 'Not Registered For Job Portal'){
          setTimeout(function() {
            Swal.fire({
              title: response.message,
              type: 'error',
              confirmButtonText: 'Register',
            }).then(function(){
                window.location.href=response.redirect_url;
            });
            $('.loader').hide();
          }, 1000);  
        }
      }
    });
  });
});
