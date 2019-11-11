$(document).ready(function() {
  $('.masterclassdata').on('click', function() {
    var email = $('.email').val();
    if (email === '') {
      Swal.fire({
        text: 'Email Required',
        type: 'error'
      });
      return false;
    }
    var selectedClass = [];

    var tempName = [];

    $.each($("input[name='masterclasses']:checked"), function() {
      selectedClass.push($(this).val());
      tempName.push($(this).attr('id'));
    });
    // if (selectedClass.length < 1) {
    //   Swal.fire({
    //     text: 'Please Select Some Classes',
    //     type: 'error'
    //   });
    //   return false;
    // }
    $('.loader').show();
    $.ajax({
      url: 'index.php?witmasterclass=true',
      type: 'post',
      dataType: 'json',
      data: {
        email: email,
        selectedClass: selectedClass,
        tempName: tempName,
        masterClassRegister: true
      },
      success: function(response) {
        if (response.success === 'true') {
          setTimeout(function() {
            $('.loader').hide();
            Swal.fire({
              title: response.message,
              text: 'Registration Completed',
              type: 'success'
            }).then(function() {
              window.location.href="http://womenintech.co.in/wit_growth_summit_2019"
            });
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
  
  
//   $('.skiptoclass').on('click',function(){
//       Swal.fire({
//               text: 'Registration Completed',
//               type: 'success'
//             }).then(function(){
//                  window.location.href="http://womenintech.co.in/wit_growth_summit_2019";
//         });
//   });
});
