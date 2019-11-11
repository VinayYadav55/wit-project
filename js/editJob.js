$(document).ready(function () {
    var myEditor;
  ClassicEditor.create(document.querySelector('#editor'))
    .then((editor) => {
      console.log('Editor was initialized', editor);
      myEditor = editor;
    })
    .catch((error) => {
      console.log(error);
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
	$('.updateJob').on('click', function (e) {
		e.preventDefault();
		var jobId = $('.job_id').val();
		 var value = myEditor.getData();
// 		var jobdesc= $('.jobdesc').val();
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
		var jobtype = [];
		$.each($("input[name='companyjobtype']:checked"), function () {
			jobtype.push($(this).val());
		});
        $('.loader').show();
		$.ajax({
			url: "index.php?editJob=true",
			type: "post",
			dataType: "json",
			data: {
				"jobId": jobId,
				"jobtype": jobtype[0],
				"jobtitle": jobtitle,
				"jobdesc":value,
				"qualificationInput": qualificationInput,
				"experienceInput": experienceInput,
				"skillsInput": skillsInput,
				"jobLocationInput": jobLocationInput,
				"jobfunctionalareaInput": jobfunctionalareaInput,
				"jobfunctionalareaInput": jobfunctionalareaInput,
				"jobIndustryInput": jobIndustryInput,
				"numberofopening": numberofopening,
				"jobStartDateInput": jobStartDateInput,
				"jobSalaryInput": jobSalaryInput,
				"updateJob": true
			},
			success: function (response) {
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
})