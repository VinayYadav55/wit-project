$(document).ready(function(){
  $('.followbyMentee').on('click',function(){
    var user_id = $(this).attr('id');
    var mentor_id = $(this).attr('mentorid');
    $('.loader').show();
    alert("userId="+user_id + " " + "Mentor_ID ="+ mentor_id);
    
    $.ajax({
      url: 'index.php?mentors_detailed_profile=true',
      type: 'post',
      dataType: 'json',
      data: {
        user_id: user_id,
        mentor_id: mentor_id,
        followmentorsProfile: true
      },
      success: function(response) {
        if (response.success === 'true') {
          setTimeout(function() {
            $('.loader').hide();
            Swal.fire({
              title: response.message,
              text: 'Successfully Followed',
              type: 'success'
            }).then(function(){
              location.reload();
            })
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
  })
})