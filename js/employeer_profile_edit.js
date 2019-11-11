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
  $('.updateCompanyDetails').on('click', function(e) {
    e.preventDefault();
    var company_id = $('.companyId').attr('company_id');
    var fname = $('#fname').val();
    var lname = $('#lname').val();
    var contactPersonName = fname + ' ' + lname;
    var email = $('#inputEmail4').val();
    var password = $('#password').val();
    var designation = $('#designation').val();
    var alternateemail = $('#alternateEmail').val();
    var contact = $('#contactNo').val();
    var orgname = $('#organizationnname').val();
    var orgdes = $('#orgDesc').val();
    var orggstnum = $('#organizationgstnumber').val();
    var orglogo = $('#customFile').val();
    var orgnum = $('#organizationnumber').val();
    var orgaddress = $('#organizationaddress').val();
    var orgstate = $('.orgstate').val();
    var orgcity = $('.orgcity').val();
    var orgpin = $('.orgpin').val();
    $('.loader').show();

    $.ajax({
      url: 'index.php?vipanan=true',
      type: 'post',
      dataType: 'json',
      data: {
        company_id: company_id,
        contactPersonName: contactPersonName,
        email: email,
        password: password,
        designation: designation,
        alternateemail: alternateemail,
        contact: contact,
        orgname: orgname,
        orgdes: orgdes,
        orggstnum: orggstnum,
        orgnum: orgnum,
        orglogo: orglogo,
        orgaddress: orgaddress,
        orgstate: orgstate,
        orgcity: orgcity,
        orgpin: orgpin,
        vipananUpdateCompanies: true
      },
      success: function(response) {
        if (response.success === 'true') {
          setTimeout(function() {
            $('.loader').hide();
            Swal.fire({
              title: response.message,
              type: 'success'
            }).then(function() {
              window.location.href =
                'http://womenintech.co.in/job_portal_dashboard';
            });
          }, 1000);
        } else {
          setTimeout(function() {
            $('.loader').hide();
            Swal.fire({
              title: response.message,
              type: 'error'
            });
          }, 1000);
        }
      }
    });
  });
});
