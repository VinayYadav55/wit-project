$(document).ready(function(){
  $(document).on('click','.penmen',function(){
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
      var id = $(e.target).attr("href").substr(1);
      window.location.hash = id;   
      window.location.reload();
    });
  });
  $(document).on('click','.newmen',function(){
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
      var id = $(e.target).attr("href").substr(1);
      window.location.hash = id;   
      window.location.reload();
    });
  });
  $(document).on('click','.folloemen',function(){
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
      var id = $(e.target).attr("href").substr(1);
      window.location.hash = id;   
      window.location.reload();
    });
  });
  $('.folloemen').on('click',function(){
    
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
      var id = $(e.target).attr("href").substr(1);
      window.location.hash = id;   
    });
  });
  $('.newmen').on('click',function(){
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
      var id = $(e.target).attr("href").substr(1);
      window.location.hash = id;   
    });
  });
  var hash = window.location.hash;
  $('#pills-tab a[href="' + hash + '"]').tab('show');
  $('.followbyMentee').on('click',function(){
    // var parent = $(this)
    var thisDiv = $(this);
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
      if(response.success === 'true'){
      thisDiv.html('').append('<i class="fas fa-spinner fa-spin checkIt" style="font-size:18px;"></i>');
      setTimeout(function(){
          $('.checkIt').hide();
          thisDiv.html('').append('<i class="far fa-check-circle text-white" style="font-size:18px;"></i>');
          thisDiv.addClass('bg-success');
      },2000);
    setTimeout(function(){
      var parent = thisDiv.parent();
      var firstparent = parent.parent();
      var secondparent = firstparent.parent();
      var thirdParent = secondparent.parent();
      thirdParent.fadeOut();
    },3000)

      }  else{
        alert(response.message);
      }
      }
    });
  });
  $('.cancelRequest').on('click',function(){
    var thisDiv = $(this);
    var user_id = $(this).attr('id');
    var mentor_id = $(this).attr('mentorid');
    
    $.ajax({
      url: 'index.php?mentors_profile=true',
      type: 'post',
      dataType: 'json',
      data: {
        user_id: user_id,
        mentor_id: mentor_id,
        cancelFollowRequest: true
      },
      success: function(response) {
        if(response.success === 'true'){
      //  parent.html(response.message);
      thisDiv.html('').append('<i class="fas fa-spinner fa-spin checkIt" style="font-size:18px;"></i>');
      setTimeout(function(){
          $('.checkIt').hide();
          thisDiv.html('').append('<i class="far fa-check-circle text-white" style="font-size:18px;"></i>');
          thisDiv.addClass('bg-success');
      },2000);
    setTimeout(function(){
      var parent = thisDiv.parent();
      var firstparent = parent.parent();
      var secondparent = firstparent.parent();
      var thirdParent = secondparent.parent();
      thirdParent.fadeOut();
    },3000)
      }else{
        alert(response.message);
      }
    }
    });
  });
  $('.followUnfollowBtn').on('click',function(){
    var user_id = $(this).attr('id');
    var mentor_id = $(this).attr('mentorid');
    
    $.ajax({
      url: 'index.php?mentors_profile=true',
      type: 'post',
      dataType: 'json',
      data: {
        user_id: user_id,
        mentor_id: mentor_id,
        unfollowMentor: true
      },
      success: function(response) {
       
      }
    });
  });
  
});