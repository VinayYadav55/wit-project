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
  $('.job-location-cities').select2({
    placeholder: 'Enter preferred city',
    allowClear: true
  });
  $('.employee-job-type').select2({
    placeholder: 'Enter Job Type',
    allowClear: true
  });
  $('.employee-industry-type').select2({
    tags: true,
    placeholder: 'Enter Industry Type',
    allowClear: true
  });
  $('.employee-functional-area').select2({
    tags: true,
    placeholder: 'Enter Functional Area',
    allowClear: true
  });
  $('.employee-skills').select2({
    tags: true,
    placeholder: 'Enter skills',
    allowClear: true
  });

  $('.select-experience').select2();

  $('#customFile').on('change', function() {
    //get the file name
    // var fileName = $(this).val();
    // var fileName = $(this).val();
    var fileName = $(this)
      .val()
      .replace('C:\\fakepath\\', ' ');
    //replace the "Choose a file" label
    $(this)
      .next('.custom-file-label')
      .html(fileName);
  });

  $('.currentJobDiv').click(function() {
    $('#show-me').show();
  });
  $('.currentJobDivNo').click(function() {
    $('#show-me').hide();
  });

  $('.previousJobDiv').click(function() {
    $('#show-me-previous-job').show();
  });
  $('.previousJobDivNo').click(function() {
    $('#show-me-previous-job').hide();
  });

  $('.userProfileUpdate ').on('click', function() {
    var preferCity = $('.preferCity').val();
    var preferJobType = $('.preferJobType').val();
    var employeefunctionalArea = $('.employeefunctionalArea').val();
    var employeeIndustryType = $('.employeeIndustryType').val();
    var employeeExperience = $('.employeeExperience').val();
    var employeehighschoolboardname = $('.employeehighschoolboardname').val();
    var employeehighschoolschoolname = $('.employeehighschoolschoolname').val();
    var employeehighschoolpassingyear = $(
      '.employeehighschoolpassingyear'
    ).val();
    var employeehighschoolpercentage = $('.employeehighschoolpercentage').val();
    var highschoolemployeerecord = [];
    highschoolemployeerecord.push(
      employeehighschoolboardname,
       employeehighschoolschoolname,
      employeehighschoolpassingyear,
      employeehighschoolpercentage
     
    );
    var employeehighersecondaryboardname = $(
      '.employeehighersecondaryboardname'
    ).val();
    var employeehighersecondaryschoolname = $(
      '.employeehighersecondaryschoolname'
    ).val();
    var employeehighersecondarypassingyear = $(
      '.employeehighersecondarypassingyear'
    ).val();
    var employeehighersecondarypercentage = $(
      '.employeehighersecondarypercentage'
    ).val();
    var employeehighersecondaryrecord = [];
    employeehighersecondaryrecord.push(
      employeehighersecondaryboardname,
      employeehighersecondaryschoolname,
      employeehighersecondarypassingyear,
      employeehighersecondarypercentage
    );
    // ******************************************
    var employeegraduationinstitute = $('.employeegraduationinstitute').val();
    var employeegraduationcourse = $('.employeegraduationcourse').val();
    var employeegraduationspecilization = $(
      '.employeegraduationspecilization'
    ).val();
    var employeegraduationpassingyear = $(
      '.employeegraduationpassingyear'
    ).val();
    var employeegraduationpercentage = $('.employeegraduationpercentage').val();
    var employeegraduationrecord = [];
    employeegraduationrecord.push(
      employeegraduationinstitute,
      employeegraduationcourse,
      employeegraduationspecilization,
      employeegraduationpassingyear,
      employeegraduationpercentage
    );
    // **************************************************************
    var employeepostgraduationinstitute = $(
      '.employeepostgraduationinstitute'
    ).val();
    var employeepostgraduationcourse = $('.employeepostgraduationcourse').val();
    var employeepostgraduationspecilization = $(
      '.employeepostgraduationspecilization'
    ).val();
    var employeepostgraduationpassingyear = $(
      '.employeepostgraduationpassingyear'
    ).val();
    var employeepostgraduationpercentage = $(
      '.employeepostgraduationpercentage'
    ).val();
    var employeepostgraduationrecord = [];
    employeepostgraduationrecord.push(
      employeepostgraduationinstitute,
      employeepostgraduationcourse,
      employeepostgraduationspecilization,
      employeepostgraduationpassingyear,
      employeepostgraduationpercentage
    );
    // ******************************************************************
    var employeeotherinstitute = $('.employeeotherinstitute').val();
    var employeeothercourse = $('.employeeothercourse').val();
    var employeeotherspecilization = $('.employeeotherspecilization').val();
    var employeeotherpassingyear = $('.employeeotherpassingyear').val();
    var employeeotherpercentage = $('.employeeotherpercentage').val();
    var employeeotherrecord = [];
    employeeotherrecord.push(
      employeeotherinstitute,
      employeeothercourse,
      employeeotherspecilization,
      employeeotherpassingyear,
      employeeotherpercentage
    );
    // ****************************************************************
    var employeeskills = $('.employeeskills').val();
    // *******************************************************************
    var employeeprojectonetitle = $('.employeeprojectonetitle').val();
    var employeeprojectonedescription = $(
      '.employeeprojectonedescription'
    ).val();
    var employeeprojectoneyearcomplition = $(
      '.employeeprojectoneyearcomplition'
    ).val();
    var employeeprojectonerecord = [];
    employeeprojectonerecord.push(
      employeeprojectonetitle,
      employeeprojectonedescription,
      employeeprojectoneyearcomplition
    );
    // ***************************************************************
    var employeeprojecttwotitle = $('.employeeprojecttwotitle').val();
    var employeeprojecttwodescription = $(
      '.employeeprojecttwodescription'
    ).val();
    var employeeprojecttwoyearcomplition = $(
      '.employeeprojecttwoyearcomplition'
    ).val();
    var employeeprojecttworecord = [];
    employeeprojecttworecord.push(
      employeeprojecttwotitle,
      employeeprojecttwodescription,
      employeeprojecttwoyearcomplition
    );
    // ****************************************************************

    var employeeprojectthreetitle = $('.employeeprojectthreetitle').val();
    var employeeprojectthreedescription = $(
      '.employeeprojectthreedescription'
    ).val();
    var employeeprojectthreeyearcomplition = $(
      '.employeeprojectthreeyearcomplition'
    ).val();
    var employeeprojectthreerecord = [];
    employeeprojectthreerecord.push(
      employeeprojectthreetitle,
      employeeprojectthreedescription,
      employeeprojectthreeyearcomplition
    );
    // ************************************************************
    var employeedob = $('.employeedob').val();
    // ***************************************************
    var employeemaritalstatus = $('.employeemaritalstatus').val();
    // *****************************************************
    var employeepermanentaddress = $('.employeepermanentaddress').val();
    // *********************************************************
    var employeehometown = $('.employeehometown').val();
    // ************************************************************
    var employeeaddresszip = $('.employeeaddresszip').val();
    // *******************************************************
    var employeecurrentdesignation = $('.employeecurrentdesignation').val();
    var employeecurrentorganization = $('.employeecurrentorganization').val();
    var employeecurrentstartingyear = $('.employeecurrentstartingyear').val();
    var employeecurrentstartingmonth = $('.employeecurrentstartingmonth').val();
    var employeecurrentsalary = $('.employeecurrentsalary').val();
    var employeecurrentjobdescription = $(
      '.employeecurrentjobdescription'
    ).val();

    var employeecurrentjobrecord = [];
    employeecurrentjobrecord.push(
      employeecurrentdesignation,
      employeecurrentorganization,
      employeecurrentstartingyear,
      employeecurrentstartingmonth,
      employeecurrentsalary,
      employeecurrentjobdescription
    );
    // ********************************************
    var employeepreviousjobonedesignation = $(
      '.employeepreviousjobonedesignation'
    ).val();
    var employeepreviousjoboneorganization = $(
      '.employeepreviousjoboneorganization'
    ).val();
    var employeepreviousjobonestartingyear = $(
      '.employeepreviousjobonestartingyear'
    ).val();
    var employeepreviousjoboneendingyear = $(
      '.employeepreviousjoboneendingyear'
    ).val();
    var employeepreviousjobonedescription = $(
      '.employeepreviousjobonedescription'
    ).val();
    var employeepreviousjobonerecord = [];
    employeepreviousjobonerecord.push(
      employeepreviousjobonedesignation,
      employeepreviousjoboneorganization,
      employeepreviousjobonestartingyear,
      employeepreviousjoboneendingyear,
      employeepreviousjobonedescription
    );
    // *********************************************
    var employeepreviousjobtwodesignation = $(
      '.employeepreviousjobtwodesignation'
    ).val();
    var employeepreviousjobtwoorganization = $(
      '.employeepreviousjobtwoorganization'
    ).val();
    var employeepreviousjobtwostartingyear = $(
      '.employeepreviousjobtwostartingyear'
    ).val();
    var employeepreviousjobtwoendingyear = $(
      '.employeepreviousjobtwoendingyear'
    ).val();
    var employeepreviousjobtwodescription = $(
      '.employeepreviousjobtwodescription'
    ).val();
    var employeepreviousjobtworecord = [];
    employeepreviousjobtworecord.push(
      employeepreviousjobtwodesignation,
      employeepreviousjobtwoorganization,
      employeepreviousjobtwostartingyear,
      employeepreviousjobtwoendingyear,
      employeepreviousjobtwodescription
    );
    // **************************************************
    var employeepreviousjobthreedesignation = $(
      '.employeepreviousjobthreedesignation'
    ).val();
    var employeepreviousjobthreeorganization = $(
      '.employeepreviousjobthreeorganization'
    ).val();
    var employeepreviousjobthreestartingyear = $(
      '.employeepreviousjobthreestartingyear'
    ).val();
    var employeepreviousjobthreeendingyear = $(
      '.employeepreviousjobthreeendingyear'
    ).val();
    var employeepreviousjobthreedescription = $(
      '.employeepreviousjobthreedescription'
    ).val();
    var employeepreviousjobthreerecord = [];
    employeepreviousjobthreerecord.push(
      employeepreviousjobthreedesignation,
      employeepreviousjobthreeorganization,
      employeepreviousjobthreestartingyear,
      employeepreviousjobthreeendingyear,
      employeepreviousjobthreedescription
    );
    var email = $('.contactEmail').val();
    var phone = $('.contactPhone').val();
     $('.loader').show();
    $.ajax({
      url: 'index.php?user_dashboard=true',
      type: 'post',
      dataType: 'json',

      data: {
        preferCity: preferCity,
        preferJobType: preferJobType,
        functionalArea: employeefunctionalArea,
        IndustryType: employeeIndustryType,
        Experience: employeeExperience,
        highschoolrecord: highschoolemployeerecord,
        highersecondaryrecord: employeehighersecondaryrecord,
        graduationrecord: employeegraduationrecord,
        postgraduationrecord: employeepostgraduationrecord,
        otherEducation: employeeotherrecord,
        skills: employeeskills,
        project1: employeeprojectonerecord,
        project2: employeeprojecttworecord,
        project3: employeeprojectthreerecord,
        dob: employeedob,
        maritalstatus: employeemaritalstatus,
        permanentAddress: employeepermanentaddress,
        hometown: employeehometown,
        addressPINCode: employeeaddresszip,
        currentjobRecord: employeecurrentjobrecord,
        previousjob1record: employeepreviousjobonerecord,
        previousjob2record: employeepreviousjobtworecord,
        previousjob3record: employeepreviousjobthreerecord,
        email: email,
        phone: phone,
        updateProfile: true
      },
      success: function(response) {
          if (response.success === 'true') {
        setTimeout(function() {
          Swal.fire({
            title: response.message,
            type: 'success',
            confirmButtonText: 'Click to Continue'
          }).then(function() {
            window.location.href = response.redirect_url;
          });
          $('.loader').hide();
        }, 1000);
      } else {
        setTimeout(function() {
          Swal.fire({
            title: response.message,
            type: 'error',
            confirmButtonText: 'Click to Continue'
          });

          $('.loader').hide();
        }, 1000);
      }
        // window.location.href = 'http://localhost/djdfbf/sanjeev/uploadResume';
      }
    });
  });
});
