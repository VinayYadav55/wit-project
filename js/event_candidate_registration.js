$(document).ready(function() {
  $('.eventRegistrationCandidate').on('click', function(e) {
    e.preventDefault();
    var firstName = $('.firstName').val();
    if (firstName === '') {
      Swal.fire({
        text: 'Please fill all required fields',
        type: 'warning'
      });

      return false;
    }
    var lastName = $('.lastName').val();
    if (lastName === '') {
      Swal.fire({
        text: 'Please fill all required fields',
        type: 'warning'
      });

      return false;
    }
    var organisationName = $('.organisationName').val();
    if (organisationName === '') {
      Swal.fire({
        text: 'Please fill all required fields',
        type: 'warning'
      });

      return false;
    }
    var designation = $('.designation ').val();
    if (designation === '') {
      Swal.fire({
        text: 'Please fill all required fields',
        type: 'warning'
      });

      return false;
    }
    var email = $('.email').val();
    if (email === '') {
      Swal.fire({
        text: 'Please fill all required fields',
        type: 'warning'
      });

      return false;
    }
    var phoneNo = $('.phoneNo').val();
    if (phoneNo === '') {
      Swal.fire({
        text: 'Please fill all required fields',
        type: 'warning'
      });

      return false;
    }
    // $('.loader').show();
    $.ajax({
      url: 'index.php?delegate_registration=true',
      type: 'post',
      dataType: 'json',
      data: {
        firstName: firstName,
        lastName: lastName,
        organisationName: organisationName,
        designation: designation,
        email: email,
        phoneNo: phoneNo,
        eventRegistrationCandidate: true
      },
      success: function(response) {
        if (response.success === 'true') {
          let timerInterval;
          Swal.fire({
            title: 'Redirecting to payment',
            html: '<br> Please Wait <strong></strong> seconds.<br/><br/>',
            timer: 7000,
            onBeforeOpen: () => {
              const content = Swal.getContent();
              const $ = content.querySelector.bind(content);
              Swal.showLoading();
              timerInterval = setInterval(() => {
                Swal.getContent().querySelector('strong').textContent = (
                  Swal.getTimerLeft() / 1000
                ).toFixed(0);
              }, 100);
            }
          }).then(function() {
            window.location = 'https://rzp.io/l/witgrowthsummit2019';
          });
        } else {
          setTimeout(function() {
            Swal.fire({
              title: response.message,
              confirmButtonText: 'Proceed to payment',
              showCancelButton: true,
              cancelButtonColor: '#d33',
              html:
                'For any further queries about event, please write to us at <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@womenintech.co.in" target="_blank">info@womenintech.co.in</a> <br><br>If payment is pending',
              type: 'warning'
            }).then(function(result) {
              if (result.value) {
                window.location = 'https://rzp.io/l/witgrowthsummit2019';
              } else {
                window.location.href =
                  'http://womenintech.co.in/wit_growth_summit_2019';
              }
            });
            $('.loader').hide();
          }, 1000);
        }
      }
    });
  });
});

// $(document).ready(function () {
// 	$('.eventRegistrationCandidate').on('click', function (e) {
// 		e.preventDefault();
// 		var firstName = $('.firstName').val();
// 		   if(firstName===''){
//          Swal.fire({
//               text:
//                 'Please fill all required fields',
//               type: 'error'
//             });
            
//             return false;
//       }
// 		var lastName = $('.lastName').val();
// 			   if(lastName===''){
//          Swal.fire({
//               text:
//                 'Please fill all required fields',
//               type: 'error'
//             });
            
//             return false;
//       }
// 		var organisationName = $('.organisationName').val();
// 		 if(organisationName===''){
//          Swal.fire({
//               text:
//                 'Please fill all required fields',
//               type: 'error'
//             });
            
//             return false;
//       }
// 		var designation = $('.designation ').val();
// 		 if(designation===''){
//          Swal.fire({
//               text:
//                 'Please fill all required fields',
//               type: 'error'
//             });
            
//             return false;
//       }
// 		var email = $('.email').val();
// 	   if(email===''){
//          Swal.fire({
//               text:
//                 'Please fill all required fields',
//               type: 'error'
//             });
            
//             return false;
//       }
// 		var phoneNo = $('.phoneNo').val();
// 		   if(phoneNo===''){
//          Swal.fire({
//               text:
//                 'Please fill all required fields',
//               type: 'error'
//             });
            
//             return false;
//     }
//       $('.loader').show();
// 		$.ajax({
// 			url: "index.php?delegate_registration=true",
// 			type: "post",
// 			dataType: "json",
// 			data: {
// 				"firstName": firstName,
// 				"lastName": lastName,
// 				"organisationName": organisationName,
// 				"designation": designation,
// 				"email": email,
// 				"phoneNo": phoneNo,
// 				"eventRegistrationCandidate": true
// 			},
// 			success: function (response) {
// 			 if (response.success === 'true') {
//           setTimeout(function() {
            // Swal.fire({
            //   title: response.message,
            //   confirmButtonColor: '#1E3262',
            //   type: 'success',
            //   confirmButtonText: 'Click to Continue',
            //   background: '#ebf0f9'
            // }).then(function() {
            //  	window.location = 'https://rzp.io/l/witgrowthsummit2019';
            // });
                //  Swal.fire({
            //   title: response.message,
            //   confirmButtonColor: '#1E3262',
            //   type: 'success',
            //   confirmButtonText: 'Click to Continue',
            //   background: '#ebf0f9'
            
//              	window.location = 'https://rzp.io/l/witgrowthsummit2019';
//             $('.loader').hide();
//           }, 2000);
//         } else {
//           setTimeout(function() {
//             Swal.fire({
//               title: response.message,
//               confirmButtonText: 'Proceed to payment',
//               showCancelButton: true,
//               cancelButtonColor: '#d33',
//               html:'For any further queries about event, please write to us at <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@womenintech.co.in" target="_blank">info@womenintech.co.in</a> <br><br>If payment is pending',
//               type: 'warning'
//             }).then(function(result) {
//                 if(result.value){
//                 window.location = 'https://rzp.io/l/witgrowthsummit2019';    
//                 }
//                 else{
//                     window.location.href = 'http://womenintech.co.in/wit_growth_summit_2019';    
//                 }
//             });
//             $('.loader').hide();
//           }, 2000);
// 		}
// }
// });
// });

// });
