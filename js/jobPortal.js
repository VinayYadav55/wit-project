$(document).ready(function() {
  $('.logOutBtn').on('click', function() {
    var baseUrl = $('.baseUrl').attr('baseUrl');

    $.ajax({
      url: 'index.php?login',
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
  $(document).on('click', '.productpagetab', pageFilter);
  $('.applyJobs').on('click', function(e) {
    e.preventDefault();
    var job_id = $(this).attr('id');
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
            }).then(function() {
              location.reload();
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
          },1000);  
        }
        
      }
    });
  });
});

function pageFilter() {
  var page = $(this).attr('id');
  var url = window.location.href;

  if (url.indexOf('?') > -1) {
    if (getQueryParams('page')) {
      window.location.href = url.replace(
        'page=' + getQueryParams('page'),
        'page=' + page
      );
    } else {
      window.location.href = url + '&page=' + page;
    }
  } else {
    window.location.href = url + '?page=' + page;
  }
}

function getQueryParams(key) {
  // get query string from url
  var queryParams = window.location.search
    .toLowerCase()
    .substring(1)
    .split('&');
  // create object for storing query params
  var params = {};

  queryParams.forEach(function(item) {
    var query = item.split('=');
    params[query[0]] = query[1];
  });

  return params[key.toLowerCase()];
}
