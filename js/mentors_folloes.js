$(document).ready(function(){
  $('.followbyMentee').on('click',function(){
    var user_id = $(this).attr('id');
    var mentor_id = $(this).attr('mentorid');
    $('.loader').show();
    alert("userId="+user_id + " " + "Mentor_ID ="+ mentor_id);
  })
})