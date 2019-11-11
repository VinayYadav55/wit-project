$(document).ready(function() {
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
     tags:true,
    placeholder: 'Enter skills',
    allowClear: true
  });

  $('.select-experience').select2();
});
var name;
$('#customFile').on('change', function() {
  //get the file name
  // var fileName = $(this).val();
  // var fileName = $(this).val();
  var fileName = $(this)
    .val()
    .replace('C:\\fakepath\\', ' ');
  name = fileName;
  //replace the "Choose a file" label
  $(this)
    .next('.custom-file-label')
    .html(fileName);
});
 var yearByOrders = {
      1990: ["1990", "1991", "1992", "1994", "1995", "1996", "1997", "1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      1991: ["1991", "1992", "1994", "1995", "1996", "1997", "1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      1992: ["1992", "1994", "1995", "1996", "1997", "1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      1993: ["1993", "1994", "1995", "1996", "1997", "1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      1994: ["1994", "1995", "1996", "1997", "1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      1995: ["1995", "1996", "1997", "1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      1996: ["1996", "1997", "1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      1997: ["1997", "1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      1998: ["1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      1999: ["1999", "2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2000: ["2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2001: ["2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2002: ["2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2003: ["2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2004: ["2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2005: ["2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2006: ["2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2007: ["2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2008: ["2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2009: ["2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2010: ["2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2011: ["2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2012: ["2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2013: ["2013", "2014", "2015", "2016", "2017", "2018", "2019"],
      2014: ["2014", "2015", "2016", "2017", "2018", "2019"],
      2015: ["2015", "2016", "2017", "2018", "2019"],
      2016: ["2016", "2017", "2018", "2019"],
      2017: ["2017", "2018", "2019"],
      2018: ["2018", "2019"],
      2019: ["2019"]
    }


    function firstjob(value) {
      if (value.length == 0) {
        document.getElementById("endingyearfirstjobfill").innerHTML = "<option></option>";
      }
      else {
        var yearOptions = "";
        for (yearId in yearByOrders[value]) {
          yearOptions += "<option>" + yearByOrders[value][yearId] + "</option>";
        }
        document.getElementById("endingyearfirstjobfill").innerHTML = yearOptions;
      }
    }
    function secondjob(value) {
      if (value.length == 0) {
        document.getElementById("endingyearsecondjobfill").innerHTML = "<option></option>";
      }
      else {
        var yearOptions = "";
        for (yearId in yearByOrders[value]) {
          yearOptions += "<option>" + yearByOrders[value][yearId] + "</option>";
        }
        document.getElementById("endingyearsecondjobfill").innerHTML = yearOptions;
      }
    }
    function thirdjob(value) {
      if (value.length == 0) {
        document.getElementById("endingyearthirdjobfill").innerHTML = "<option></option>";
      }
      else {
        var yearOptions = "";
        for (yearId in yearByOrders[value]) {
          yearOptions += "<option>" + yearByOrders[value][yearId] + "</option>";
        }
        document.getElementById("endingyearthirdjobfill").innerHTML = yearOptions;
      }
    }

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

$(document).on('click', '.addMore', function() {
  var txt1 =
    "<div class='p-1 bg-light style='border: 1px solid #dcdcdc;'><div class='form-group'><label for=''>Add Disignation</label><input type='text' class='form-control'/></div><div class='form-group'><label for='sel1'>Add Organization</label><input type='text' class='form-control'/></div><div class='form-row'><div class='col-sm-6 form-group'><label for='sel1'>Starting Working From</label><select class='form-control' id='sel1'><option>1990</option><option>1991</option><option>1992</option><option>1993</option><option>1994</option><option>1995</option><option>1996</option><option>1997</option><option>1998</option><option>1999</option><option>2000</option><option>2001</option><option>2002</option><option>2003</option></select></div><div class='col-sm-6 form-group'><label for='sel1'>Month</label><select class='form-control' id='sel1'><option>Jan</option><option>Feb</option><option>Mar</option><option>Apr</option><option>May</option><option>June</option><option>July</option><option>Aug</option><option>Sep</option><option>Oct</option><option>Nov</option><option>Dec</option></select></div></div><div class='form-row'><div class='col-sm-6 form-group'><label for='sel1'>Wokred Till</label><select class='form-control' id='sel1'><option>1993</option><option>1994</option><option>1995</option><option>1996</option><option>1997</option><option>1998</option><option>1999</option><option>2000</option><option>2001</option><option>2002</option><option>2003</option></select></div><div class='col-sm-6 form-group'><label for='sel1'>Month</label><select class='form-control' id='sel1'><option>Jan</option><option>Feb</option><option>Mar</option><option>Apr</option><option>May</option><option>June</option><option>July</option><option>Aug</option><option>Sep</option><option>Oct</option><option>Nov</option><option>Dec</option></select></div></div><div class='form-group'><label for='comment'>Description of job</label><textarea class='form-control' rows='2' id='comment'></textarea><div class='my-4' id='removePreviousJobWindow'>Remove</div></div></div><div class='my-3 addMore' >Add More</div>";
  $('.employmentDetailsDiv').append(txt1); // Append new elements
  $(this).remove();
});
$(document).on('click', '#removePreviousJobWindow', function() {
  var p = $(this).parent();
  p.parent().remove();
  //parent.remove();
});

$('.employeeJobRegistration').on('click', function() {
  var preferCity = $('.preferCity').val();
    if (preferCity.length < 1) {
      Swal.fire({
        text: 'Please select prefer city',
        type: 'info'
      });
      return false;
    }
  var preferJobType = $('.preferJobType').val();
    if (preferJobType.length < 1) {
      Swal.fire({
        text: 'Please select prefer job type',
        type: 'info'
      });
      return false;
    }
  var employeefunctionalArea = $('.employeefunctionalArea').val();
   if (employeefunctionalArea.length < 1) {
      Swal.fire({
        text: 'Please select functional area',
        type: 'info'
      });
      return false;
    }
  var employeeIndustryType = $('.employeeIndustryType').val();
   if (employeeIndustryType.length < 1) {
      Swal.fire({
        text: 'Please select industry type',
        type: 'info'
      });
      return false;
    }
  var employeeExperience = $('.employeeExperience').val();
   if (employeeExperience === null) {
      Swal.fire({
        text: 'Please select experience',
        type: 'info'
      });
      return false;
    }
  var employeehighschoolboardname = $('.employeehighschoolboardname').val();
    if (employeehighschoolboardname === '') {
      Swal.fire({
        text: 'Board Name required',
        type: 'info'
      });
      return false;
    }
  var employeehighschoolschoolname = $('.employeehighschoolschoolname').val();
   if (employeehighschoolschoolname === '') {
      Swal.fire({
        text: 'School Name required',
        type: 'info'
      });
      return false;
    }
  var employeehighschoolpassingyear = $('.employeehighschoolpassingyear').val();
     if (employeehighschoolpassingyear === '') {
      Swal.fire({
        text: 'Passing year required',
        type: 'info'
      });
      return false;
    }
  var employeehighschoolpercentage = $('.employeehighschoolpercentage').val();
      if (employeehighschoolpercentage === '') {
      Swal.fire({
        text: 'Marks/percentage required',
        type: 'info'
      });
      return false;
    }
  var resumeLink = name;
  var highschoolemployeerecord = [];
  highschoolemployeerecord.push(
    employeehighschoolboardname,
    employeehighschoolschoolname,
    employeehighschoolpassingyear,
    employeehighschoolpercentage
  );
//   var highschoolemployeerecordSize = highschoolemployeerecord;
//   if (highschoolemployeerecord=='') {
//       Swal.fire({
//         text: 'Please fill your 10th school record',
//         type: 'info'
//       });
//       return false;
//     }
  var employeehighersecondaryboardname = $(
    '.employeehighersecondaryboardname'
  ).val();
     if (employeehighersecondaryboardname === '') {
      Swal.fire({
        text: 'Board name required',
        type: 'info'
      });
      return false;
    }
  var employeehighersecondaryschoolname = $(
    '.employeehighersecondaryschoolname'
  ).val();
  if (employeehighersecondaryschoolname === '') {
      Swal.fire({
        text: 'School name required',
        type: 'info'
      });
      return false;
    }
  var employeehighersecondarypassingyear = $(
    '.employeehighersecondarypassingyear'
  ).val();
   if (employeehighersecondarypassingyear === '') {
      Swal.fire({
        text: 'Passing year required',
        type: 'info'
      });
      return false;
    }
  
  var employeehighersecondarypercentage = $(
    '.employeehighersecondarypercentage'
  ).val();
     if (employeehighersecondarypercentage === '') {
      Swal.fire({
        text: 'Marks/percentage required',
        type: 'info'
      });
      return false;
    }
  var employeehighersecondaryrecord = [];

  employeehighersecondaryrecord.push(
    employeehighersecondaryboardname,
    employeehighersecondaryschoolname,
    employeehighersecondarypassingyear,
    employeehighersecondarypercentage
  );
  
  // ******************************************
  var employeegraduationinstitute = $('.employeegraduationinstitute').val();
   if (employeegraduationinstitute === '') {
      Swal.fire({
        text: 'Institute name required',
        type: 'info'
      });
      return false;
    }
  var employeegraduationcourse = $('.employeegraduationcourse').val();
     if (employeegraduationcourse === '') {
      Swal.fire({
        text: 'Graduation course name required',
        type: 'info'
      });
      return false;
    }
  var employeegraduationspecilization = $(
    '.employeegraduationspecilization'
  ).val();
    if (employeegraduationspecilization === '') {
      Swal.fire({
        text: 'Specilization required',
        type: 'info'
      });
      return false;
    }
  var employeegraduationpassingyear = $('.employeegraduationpassingyear').val();
    if (employeegraduationpassingyear === '') {
      Swal.fire({
        text: 'Graduation passing year required',
        type: 'info'
      });
      return false;
    }
  var employeegraduationpercentage = $('.employeegraduationpercentage').val();
    if (employeegraduationpercentage === '') {
      Swal.fire({
        text: 'Graduation marks required',
        type: 'info'
      });
      return false;
    }
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
  var employeeprojectonedescription = $('.employeeprojectonedescription').val();
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
  var employeeprojecttwodescription = $('.employeeprojecttwodescription').val();
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
  var employeecurrentjobdescription = $('.employeecurrentjobdescription').val();

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
   if (email == '') {
      Swal.fire({
        text: 'Email Required',
        type: 'info'
      });
      return false;
    }
  var phone = $('.contactPhone').val();
   if (phone == '') {
      Swal.fire({
        text: 'Phone Required',
        type: 'info'
      });
      return false;
    }
  $('.loader').show();
  // *************************************************************
  $.ajax({
    url: 'index.php?candidate_registration=true',
    type: 'post',
    dataType: 'json',

    data: {
      preferCity: preferCity,
      preferJobType: preferJobType,
      functionalArea: employeefunctionalArea,
      IndustryType: employeeIndustryType,
      Experience: employeeExperience,
      resumeLink: resumeLink,
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
      candidateRegistrationData: true
    },
    success: function(response) {
      if (response.success === 'true') {
        setTimeout(function() {
          Swal.fire({
            title: response.message,
            html:'You are redirected to upload resume',
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
    }
  });
});
