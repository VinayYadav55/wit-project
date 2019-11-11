$(document).ready(function(){
  $('.followbyMentee').on('click',function(){
    var user_id = $(this).attr('id');
    var mentor_id = $(this).attr('mentorid');
    alert(user_id + " " + mentor_id);
  })
})