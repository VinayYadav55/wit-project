$(document).ready(function() {
    
    var myEditor;
  ClassicEditor.create(document.querySelector('#editor'))
    .then((editor) => {
      console.log('Editor was initialized', editor);
      myEditor = editor;
    })
    .catch((error) => {
      console.log(error);
    });

  $('.submitJob').on('click', function(e) {
    e.preventDefault();
    var jobtitle = $('.jobtitle').val();
    var qualificationInput = $('.qualificationInput').val();
    var experienceInput = $('.experienceInput ').val();
    var skillsInput = $('.skillsInput').val();
    var jobLocationInput = $('.jobLocationInput').val();
    var jobfunctionalareaInput = $('.jobfunctionalareaInput ').val();
    var jobIndustryInput = $('.jobIndustryInput ').val();
    var numberofopening = $('#numberofopening ').val();
    var jobStartDateInput = $('.jobStartDateInput ').val();
    var jobSalaryInput = $('.jobSalaryInput ').val();
     var value = myEditor.getData();
    // var jobDescription = $('.descriptionjob').val();
    var jobtype = [];
    $.each($("input[name='companyjobtype']:checked"), function() {
      jobtype.push($(this).val());
    });
  $('.loader').show();
    $.ajax({
      url: 'index.php?job_portal_dashboard=true',
      type: 'post',
      dataType: 'json',
      data: {
        jobtitle: jobtitle,
        jobtype: jobtype[0],
        qualificationInput: qualificationInput,
        experienceInput: experienceInput,
        skillsInput: skillsInput,
        jobLocationInput: jobLocationInput,
        jobfunctionalareaInput: jobfunctionalareaInput,
        jobfunctionalareaInput: jobfunctionalareaInput,
        jobIndustryInput: jobIndustryInput,
        numberofopening: numberofopening,
        jobStartDateInput: jobStartDateInput,
        jobSalaryInput: jobSalaryInput,
        jobDescription: value,
        postJob: true
      },
      success: function(response) {
        if (response.success == 'true') {
          setTimeout(function() {
            Swal.fire({
              title: response.message,
              confirmButtonColor: '#1E3262',
              type: 'success',
              confirmButtonText: 'Click to Continue',
              background: '#ebf0f9'
            }).then(function() {
              window.location.href =
                'http://womenintech.co.in/job_portal_dashboard';
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
      }
    });
  });

  $('.companylogin').on('click', function(e) {
    e.preventDefault();
    var email = $('#email').val();
    var password = $('#pwd').val();
    $('.loader').show();
    $.ajax({
      url: 'index.php?employer=true',
      type: 'post',
      dataType: 'json',
      data: {
        email: email,
        password: password,
        companylogin: true
      },
      success: function(response) {
          if (response.success == 'true') {
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
   
   
   $('.removejob').on('click', function(){
    var job_id = $(this).attr('id');
     $('.loader').show();
    $.ajax({
      url:'index.php?job_portal_dashboard=true',
      type:'post',
      dataType:'json',
      data:{
        'job_id':job_id,
        'removejob':true
      },
       success: function(response) {
           if (response.success === 'true') {
            setTimeout(function() {
            $('.loader').hide();
            Swal.fire({
              title: response.message,
              type: 'success'
            }).then(function() {
              location.reload();
            });
          }, 1000); 
           }
           else {
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
      url: 'index.php?job_portal_dashboard=true',
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
});
