$(document).ready(function(){
  $('.followbyMentee').on('click',function(){
    // var parent = $(this)
    var user_id = $(this).attr('id');
    var mentor_id = $(this).attr('mentorid');
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
      //  parent.html(response.message);
      }
    });
  });
  $('.cancelRequest').on('click',function(){
    var user_id = $(this).attr('id');
    var mentor_id = $(this).attr('mentorid');
    alert( user_id + " " + mentor_id);
    $.ajax({
      url: 'index.php?mentors_detailed_profile=true',
      type: 'post',
      dataType: 'json',
      data: {
        user_id: user_id,
        mentor_id: mentor_id,
        cancelFollowRequest: true
      },
      success: function(response) {
      //  parent.html(response.message);
      }
    });
  });
  $('.followUnfollowBtn').on('click',function(){
    var user_id = $(this).attr('id');
    var mentor_id = $(this).attr('mentorid');
    alert( user_id + " " + mentor_id);
    $.ajax({
      url: 'index.php?mentors_detailed_profile=true',
      type: 'post',
      dataType: 'json',
      data: {
        user_id: user_id,
        mentor_id: mentor_id,
        cancelFollowRequest: true
      },
      success: function(response) {
       parent.html(response.message);
      }
    });
  });
  
})