$(document).ready(function() {
  $('.vipananaddcompanyDetails').on('click', function() {
    var fname = $('.fname').val();
    var lname = $('.lname').val();
    var contactPersonName = fname +' '+lname;
    var email = $('.email').val();
    if(email === ''){
        Swal.fire({
            text:'Email Required',
            type:'info'
        })
        return false;
    }
    var password = $('.password').val();
        if(password === ''){
        Swal.fire({
            text:'Password Required',
            type:'info'
        })
        return false;
    }
    var designation = $('.designation').val();
    var alternateemail = $('.alternateemail').val();
    var contact = $('.contact').val();
    var orgname = $('.orgname').val();
        if(orgname === ''){
        Swal.fire({
            text:'Organization Name Required',
            type:'info'
        })
        return false;
    }
    var orgdes = $('.orgdes').val();
    var orggstnum = $('.orggstnum').val();
    var orglogo = $('.orglogo').val();
    var orgnum = $('.orgnum').val();
    var orgaddress = $('.orgaddress').val();
    var orgstate = $('.orgstate').val();
    var orgcity = $('.orgcity').val();
    var orgpin = $('.orgpin').val();
    $('.loader').show();
    $.ajax({
      url: 'index.php?vipanan=true',
      type: 'post',
      dataType: 'json',

      data: {
        
        'contactPersonName': contactPersonName,
        'email': email,
        'password': password,
        'designation': designation,
        'alternateemail': alternateemail,
        'contact': contact,
        'orgname': orgname,
        'orgdes': orgdes,
        'orggstnum': orggstnum,
        'orgnum': orgnum,
        'orglogo': orglogo,
        'orgaddress': orgaddress,
        'orgstate': orgstate,
        'orgcity': orgcity,
        'orgpin': orgpin,
        'vipananAddCompanies': true
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
              window.location.href =response.redirect_url;
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

  $('.updateCompanyDetails').on('click', function(e) {
    e.preventDefault();
     var company_id = $('.companyId').attr('company_id');
    
    var fname = $('#fname').val();
    var lname = $('#lname').val();
    var contactPersonName = fname +' '+lname;
    var email = $('#inputEmail4').val();
    var password = $('#password').val();
    var designation = $('#designation').val();
    var alternateemail = $('#alternateEmail').val();
    var contact = $('#contactNo').val();
    var orgname = $('#organizationnname').val();
    var orgdes = $('#orgDesc').val();
    var orggstnum = $('#organizationnumber').val();
    var orglogo = $('#customFile').val();
    var orgnum = $('#organizationnumber').val();
    var orgaddress = $('#organizationaddress').val();
    var orgstate = $('#stateSel').val();
    var orgcity = $('#citySel').val();
    var orgpin = $('#zipSel').val();
    $('.loader').show();

    $.ajax({
      url: 'index.php?vipanan=true',
      type: 'post',
      dataType: 'json',

      data: {
        'company_id':company_id,
        'contactPersonName': contactPersonName,
        'email': email,
        'password': password,
        'designation': designation,
        'alternateemail': alternateemail,
        'contact': contact,
        'orgname': orgname,
        'orgdes': orgdes,
        'orggstnum': orggstnum,
        'orgnum': orgnum,
        'orglogo': orglogo,
        'orgaddress': orgaddress,
        'orgstate': orgstate,
        'orgcity': orgcity,
        'orgpin': orgpin,
        'vipananUpdateCompanies': true
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
              window.location.href =response.redirect_url;
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


});
